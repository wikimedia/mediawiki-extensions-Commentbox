<?php
/**#@+
 * Adds a comment box to the bottom of wiki pages in predefined namespaces
 *
 * @file
 * @ingroup Extensions
 *
 * @link http://www.mediawiki.org/wiki/Extension:Commentbox Documentation
 *
 *
 * @author Thomas Bleher <ThomasBleher@gmx.de>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
if ( !defined( 'MEDIAWIKI' ) ) die();

$wgExtensionCredits['other'][] = array(
	'name'           => 'Commentbox',
	'path'           => __FILE__,
	'author'         => '[http://spiele.j-crew.de Thomas Bleher]',
	'version'        => '0.3.0',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:Commentbox',
	'descriptionmsg' => 'commentbox-desc',
);

# Configuration parameters
$wgCommentboxNamespaces = array (
	NS_MAIN => true
);
$wgCommentboxRows = 5;
$wgCommentboxColumns = 80;

$wgMessagesDirs['Commentbox'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['Commentbox'] = dirname( __FILE__ ) . '/Commentbox.i18n.php';
$wgExtensionMessagesFiles['CommentboxAlias'] = dirname( __FILE__ ) . '/Commentbox.alias.php';
$wgSpecialPages['AddComment'] = 'SpecialAddComment';
$wgAutoloadClasses['SpecialAddComment'] = dirname( __FILE__ ) . '/SpecialAddComment_body.php';
$wgHooks['OutputPageBeforeHTML'][] = 'wfExtensionCommentbox_Add';

function wfExtensionCommentbox_Add( &$op, &$text ) {
	global $wgUser, $wgRequest,
	       $wgCommentboxNamespaces, $wgCommentboxRows,
	       $wgCommentboxColumns;

	$title = $op->getTitle();
	if ( !$title->exists() )
		return true;

	if ( !$title->userCan( 'edit', true ) )
		return true;
	if ( !array_key_exists( $title->getNamespace(), $wgCommentboxNamespaces )
	|| !$wgCommentboxNamespaces[ $title->getNamespace() ] )
		return true;

	$action = $wgRequest->getVal( 'action', 'view' );
	if ( !( $action == 'view' || $action == 'purge' || $action == 'submit' ) )
		return true;
	if (  $wgRequest->getCheck( 'wpPreview' )
	  || $wgRequest->getCheck( 'wpLivePreview' )
	  || $wgRequest->getCheck( 'wpDiff' ) )
		return true;
	if ( !is_null( $wgRequest->getVal( 'preview' ) ) )
		return true;
	if ( !is_null( $wgRequest->getVal( 'diff' ) ) )
		return true;

	$newaction = htmlspecialchars( Title::newFromText( 'AddComment', NS_SPECIAL )->getFullURL() );
	$name = '';
	if ( !$wgUser->isLoggedIn() ) {
		$namecomment = $op->msg( 'commentbox-name-explanation' )->parse();
		$namelabel = $op->msg( 'commentbox-name')->parse();
		$name = '<br />' . $namelabel;
		$name .= ' <input name="wpAuthor" tabindex="2" type="text" size="30" maxlength="50" /> ';
		$name .= $namecomment;
	}
	$inhalt = $op->msg( 'commentbox-prefill' )->plain();
	$save = $op->msg( 'commentbox-savebutton' )->parse();
	$texttitle = htmlspecialchars( Title::makeName( $title->getNamespace(), $title->getText() ) );

	$intro = $op->msg( 'commentbox-intro' )->parse();

	$text .= <<<END
	<form id="commentform" name="commentform" method="post"
              action="$newaction" enctype="multipart/form-data">
	$intro
	<textarea tabindex='1' accesskey="," name="wpComment" id="wpComment"
	          rows='$wgCommentboxRows' cols='$wgCommentboxColumns'
		  >$inhalt</textarea>
	$name
	<br />
	<input type="hidden" name="wpPageName" value="$texttitle" />
	<input id="wpSave" name="wpSave" type="submit" tabindex="3" value="$save"
	       accesskey="s" title="$save [alt-s]" />
	</form>
END;
	return true;
}

