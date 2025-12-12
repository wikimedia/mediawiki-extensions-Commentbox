<?php

namespace MediaWiki\Extension\Commentbox;

use MediaWiki\EditPage\EditPage;
use MediaWiki\Html\Html;
use MediaWiki\Output\Hook\OutputPageBeforeHTMLHook;
use MediaWiki\Permissions\PermissionManager;
use MediaWiki\Title\Title;

/**
 * Hook handlers for the Commentbox extension.
 *
 * @package MediaWiki\Extension\Commentbox
 */
class Hooks implements OutputPageBeforeHTMLHook {

	public function __construct(
		private readonly PermissionManager $permissionManager,
	) {
	}

	/**
	 * @inheritDoc
	 */
	public function onOutputPageBeforeHTML( $out, &$text ) {
		$request = $out->getRequest();

		$title = $out->getTitle();
		if ( !$title->exists() ) {
			return true;
		}

		if ( !$this->permissionManager->userCan( 'edit', $out->getUser(), $title ) ) {
			return true;
		}

		$namespaces = $out->getConfig()->get( 'CommentboxNamespaces' );
		if ( !array_key_exists( $title->getNamespace(), $namespaces )
			|| !$namespaces[ $title->getNamespace() ] ) {
			return true;
		}

		$action = $out->getActionName();
		if ( !( $action == 'view' || $action == 'purge' || $action == 'submit' ) ) {
			return true;
		}
		if ( $request->getCheck( 'wpPreview' )
			|| $request->getCheck( 'wpLivePreview' )
			|| $request->getCheck( 'wpDiff' ) ) {
			return true;
		}
		if ( $request->getVal( 'preview' ) !== null ) {
			return true;
		}
		if ( $request->getVal( 'diff' ) !== null ) {
			return true;
		}

		$name = '';
		if ( !$out->getUser()->isRegistered() ) {
			$namecomment = $out->msg( 'commentbox-name-explanation' )->parse();
			$namelabel = $out->msg( 'commentbox-name' )->parse();
			$name = '<br />' . $namelabel;
			$name .= ' <input name="wpAuthor" tabindex="2" type="text" size="30" maxlength="50" /> ';
			$name .= $namecomment;
		}
		$inhalt = $out->msg( 'commentbox-prefill' )->plain();
		$save = $out->msg( 'commentbox-savebutton' )->parse();
		$texttitle = htmlspecialchars( Title::makeName( $title->getNamespace(), $title->getText() ) );

		$textarea = Html::element( 'textarea', [
			'accesskey' => ',',
			'name' => 'wpComment',
			'id' => 'wpComment',
			'rows' => $out->getConfig()->get( 'CommentboxRows' ),
			'cols' => $out->getConfig()->get( 'CommentboxColumns' ),
		], $inhalt );
		$saveButton = Html::submitButton(
			$save,
			[ 'name' => 'wpSave', 'id' => 'wpSave', 'accesskey' => 's', 'title' => "$save [alt-s]" ]
		);
		$formAttrs = [
			'id' => 'commentform',
			'name' => 'commentform',
			'method' => 'post',
			'action' => Title::newFromText( 'AddComment', NS_SPECIAL )->getFullURL(),
		];
		$formFields = $out->msg( 'commentbox-intro' )->parse()
			. $textarea
			. $name
			. Html::element( 'br' )
			. Html::input( 'wpPageName', $texttitle, 'hidden' )
			. Html::hidden( 'wpUnicodeCheck', EditPage::UNICODE_CHECK )
			. $saveButton;
		$text .= Html::rawElement( 'form', $formAttrs, $formFields );
		return true;
	}
}
