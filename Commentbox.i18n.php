<?php
/**
 * Internationalisation file for extension Commentbox.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'commentbox-desc' => 'Adds a commentbox to certain pages',
	'commentbox-prefill' => '',
	'commentbox-intro' => '== Add a comment... ==
You have a comment on this page? Add it here or <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} edit the page directly]</span>.',
	'commentbox-savebutton' => 'Save comment',
	'commentbox-name' => 'Name:',
	'commentbox-name-explanation' => '<small>(Tip: If you [[Special:UserLogin|log in]], you will not have to fill in your name here manually)</small>',
	'commentbox-log' => 'New comments',
	'commentbox-first-comment-heading' => '== Comments ==',
	'commentbox-regex' => '/\n==\s*Comments\s*==\s*\n/i', # should match the above heading
	'commentbox-errorpage-title' => 'Error while creating comment',
	'commentbox-error-page-nonexistent' => 'This page does not exist!',
	'commentbox-error-namespace' => 'Comments are not allowed in this namespace!',
	'commentbox-error-empty-comment' => 'Empty comments are not allowed!',
);

/** Message documentation (Message documentation)
 * @author Darth Kule
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Shirayuki
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'commentbox-desc' => '{{desc|name=Commentbox|url=http://www.mediawiki.org/wiki/Extension:Commentbox}}',
	'commentbox-prefill' => '{{notranslate}}',
	'commentbox-intro' => 'Used as intro text for the Comment form.',
	'commentbox-savebutton' => 'Used as Submit button text in the Comment form.',
	'commentbox-name' => 'Used as label for input box.
{{Identical|Name}}',
	'commentbox-name-explanation' => 'Used as explanation for the input box {{msg-mw|commentbox-name}}.',
	'commentbox-log' => 'This message is used as Edit Summary when the user added a new comment.',
	'commentbox-first-comment-heading' => '{{Identical|Comment}}',
	'commentbox-regex' => 'Regular expression that should match {{msg-mw|commentbox-first-comment-heading}}
{{Identical|Comment}}',
	'commentbox-errorpage-title' => 'This message is used as page title when failed to create comment.',
	'commentbox-error-page-nonexistent' => 'Error message',
	'commentbox-error-namespace' => 'Error message',
	'commentbox-error-empty-comment' => 'Error message',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'commentbox-name' => 'Naam:',
	'commentbox-first-comment-heading' => '== Opmerkings ==',
	'commentbox-regex' => '/\\n==\\s*Opmerkings\\s*==\\s*\\n/i',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 */
$messages['ar'] = array(
	'commentbox-desc' => 'يضيف صندوق تعليق لصفحات معينة',
	'commentbox-intro' => '== أضف تعليقا... ==
لديك تعليق على هذه الصفحة؟ أضفه هنا أو <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} عدل الصفحة مباشرة]</span>.',
	'commentbox-savebutton' => 'احفظ التعليق',
	'commentbox-name' => 'الاسم:',
	'commentbox-name-explanation' => '<small>(نصيحة: لو أنك [[Special:UserLogin|ستسجل الدخول]]، فلن تحتاج إلى ملأ اسمك هنا يدويا)</small>',
	'commentbox-log' => 'تعليقات جديدة',
	'commentbox-first-comment-heading' => '== تعليقات ==',
	'commentbox-regex' => '/\\n==\\s*نعليقات\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'خطأ أثناء إنشاء تعليق',
	'commentbox-error-page-nonexistent' => 'هذه الصفحة غير موجودة!',
	'commentbox-error-namespace' => 'لا يسمح بالتعليقات في هذه الصفحة!',
	'commentbox-error-empty-comment' => 'التعليقات الفارغة غير مسموح بها!',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'commentbox-name' => 'ܫܡܐ:',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'commentbox-desc' => 'Amiesta un cuadru de comentarios a ciertes páxines',
	'commentbox-intro' => '== Amestar un comentariu... ==
Tienes un comentariu sobro esta páxina? Amiestalu equí o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} edita la páxina direutamente]</span>.',
	'commentbox-savebutton' => 'Guardar el comentariu',
	'commentbox-name' => 'Nome:',
	'commentbox-name-explanation' => '<small>(Conseyu: Si [[Special:UserLogin|anicies sesión]], nun tendrás que poner equí el to nome a mano)</small>',
	'commentbox-log' => 'Comentarios nuevos',
	'commentbox-first-comment-heading' => '== Comentarios ==',
	'commentbox-regex' => '/\\n==\\s*Comentarios\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Error al crear el comentariu',
	'commentbox-error-page-nonexistent' => '¡Esta páxina nun esiste!',
	'commentbox-error-namespace' => '¡Nun se permiten comentarios nesti espaciu de nomes!',
	'commentbox-error-empty-comment' => '¡Nun se permiten los comentarios baleros!',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author Vago
 */
$messages['az'] = array(
	'commentbox-savebutton' => 'Şərhi yadda saxla',
	'commentbox-name' => 'Ad:',
	'commentbox-log' => 'Yeni şərhlər',
	'commentbox-first-comment-heading' => '== Şərhlər ==',
);

/** South Azerbaijani (تورکجه)
 * @author පසිඳු කාවින්ද
 */
$messages['azb'] = array(
	'commentbox-name' => 'آد:',
);

/** Bashkir (башҡортса)
 * @author Roustammr
 * @author Ләйсән
 */
$messages['ba'] = array(
	'commentbox-name' => 'Исем:',
	'commentbox-log' => 'Яңы аңлатмалар',
	'commentbox-errorpage-title' => 'Аңлатма төҙөгәндә хата китте',
	'commentbox-error-page-nonexistent' => 'Был бит юҡ!',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'commentbox-desc' => 'Minadugang nin sarong kahon nin komento sa mga sambit nin mga pahina',
	'commentbox-intro' => '== Magdugang nin komento... == Ika igwang komento sa pahinang ini? Idugang ini digde o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} direktang liwaton an pahina]</span>.',
	'commentbox-savebutton' => 'Itagama an komento',
	'commentbox-name' => 'Pangaran:',
	'commentbox-name-explanation' => '<small>(Pangunday: Kun ika [[Special:UserLogin|nakalaog na]], ika dae na manwal na magkakaag kan saimong pangaran digde)</small>',
	'commentbox-log' => 'Baguhong mga komento',
	'commentbox-first-comment-heading' => '== Mga Komento ==',
	'commentbox-regex' => '/\\n==\\s*Mga Komento\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Kasalaan mantang minumukna an komento',
	'commentbox-error-page-nonexistent' => 'Ining pahina bako tabing eksistido!',
	'commentbox-error-namespace' => 'An mga komento bakong tinutugot digde sa espasyong-pangaran!',
	'commentbox-error-empty-comment' => 'Blangkong mga komento dae tabi pinagtutugutan!',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'commentbox-desc' => 'Дадае поле камэнтару для вызначаных старонак',
	'commentbox-intro' => '== Даданьне камэнтару... ==
Вы маеце камэнтар да гэтай старонкі? Дадайце яго тут альбо <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} непасрэдна адрэдагуйце старонку]</span>.',
	'commentbox-savebutton' => 'Захаваць камэнтар',
	'commentbox-name' => 'Імя:',
	'commentbox-name-explanation' => '<small>(Падказка: Калі Вы [[Special:UserLogin|ўвойдзеце ў сыстэму]], Вам не патрэбна будзе ўводзіць Ваша тут імя ўручную)</small>',
	'commentbox-log' => 'Новыя камэнтары',
	'commentbox-first-comment-heading' => '== Камэнтары ==',
	'commentbox-regex' => '/\\n==\\s*Камэнтары\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Памылка пад час стварэньня камэнтара',
	'commentbox-error-page-nonexistent' => 'Гэта старонка не існуе!',
	'commentbox-error-namespace' => 'У гэтай прасторы назваў камэнтары забароненыя!',
	'commentbox-error-empty-comment' => 'Пустыя камэнтары не дазволеныя!',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'commentbox-savebutton' => 'Съхраняване на коментара',
	'commentbox-name' => 'Име:',
	'commentbox-log' => 'Нови коментари',
	'commentbox-first-comment-heading' => '== Коментари ==',
	'commentbox-regex' => '/\\n==\\s*Коментари\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Грешка при създаване на коментар',
	'commentbox-error-page-nonexistent' => 'Тази страница не съществува!',
	'commentbox-error-namespace' => 'В това именно пространство не са позволени коментари!',
	'commentbox-error-empty-comment' => 'Не са позволени празни коментари!',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'commentbox-desc' => 'নির্দিষ্ট পাতায় একটি মন্তব্য বাক্স যোগ করুন',
	'commentbox-savebutton' => 'মন্তব্য সংরক্ষণ',
	'commentbox-name' => 'নাম:',
	'commentbox-log' => 'নতুন মন্তব্যসমূহ',
	'commentbox-first-comment-heading' => '== মন্তব্যসমূহ ==',
	'commentbox-errorpage-title' => 'মন্তব্য তৈরির সময় ত্রুটি দেখা দিয়েছে',
	'commentbox-error-page-nonexistent' => 'এই পাতাটি নেই!',
	'commentbox-error-namespace' => 'এই নামস্থানে কোনো মন্তব্য গ্রহণযোগ্য নয়!',
	'commentbox-error-empty-comment' => 'খালি মন্তব্য গ্রহণযোগ্য নয়!',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'commentbox-desc' => 'Ouzhpennañ a ra ur voest evezhiadennoù da bajennoù zo',
	'commentbox-intro' => '== Ouzhpennañ un evezhiadenn... ==
Un evezhiadenn bennak hoc\'h eus d\'ober diwar-benn ar bajenn-mañ ? Ouzhpennit anezhi amañ pe <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} kemmit ar bajenn war-eeun]</span>.',
	'commentbox-savebutton' => 'Enrollañ an evezhiadenn',
	'commentbox-name' => 'Anv :',
	'commentbox-name-explanation' => "<small>(Tun : Ma [[Special:UserLogin|kevreit]], n'ho po ket da leuniañ hoc'h anv gant an dorn amañ)</small>",
	'commentbox-log' => 'Evezhiadennoù nevez',
	'commentbox-first-comment-heading' => '== Evezhiadennoù ==',
	'commentbox-regex' => '/\\n==\\s*Evezhiadennoù\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Ur fazi zo bet en ur grouiñ an evezhiadenn',
	'commentbox-error-page-nonexistent' => "N'eus ket eus ar bajenn-se!",
	'commentbox-error-namespace' => "N'eo ket aotreet lakaat evezhiadennoù en esaouenn anv-mañ !",
	'commentbox-error-empty-comment' => "N'eo ket aotreet an evezhiadennoù goullo !",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'commentbox-desc' => 'Dodaje kutiju za komentare na određene stranice',
	'commentbox-intro' => '== Dodajte komentar... ==
Želite komentirati na ovoj stranici? Dodajte ovdje ili <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} direktno uredite stranicu]</span>.',
	'commentbox-savebutton' => 'Sačuvaj komentar',
	'commentbox-name' => 'Ime:',
	'commentbox-name-explanation' => '<small>(Savjet: Ako se [[Special:UserLogin|prijavite]], nećete morati ovdje ručno popunjavati Vaše ime)</small>',
	'commentbox-log' => 'Novi komentari',
	'commentbox-first-comment-heading' => '== Komentari ==',
	'commentbox-regex' => '/\\n==\\s*Komentari\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Greška pri pravljenju komentara',
	'commentbox-error-page-nonexistent' => 'Ova stranica ne postoji!',
	'commentbox-error-namespace' => 'Komentari nisu dozvoljeni u ovom imenskom prostoru!',
	'commentbox-error-empty-comment' => 'Prazni komentari nisu dozvoljeni!',
);

/** Catalan (català)
 * @author Paucabot
 */
$messages['ca'] = array(
	'commentbox-desc' => 'Afegeix una capsa de comentaris a certes pàgines',
	'commentbox-intro' => '== Afegiu un comentari ... == Voleu comentar res en aquesta pàgina? Afegiu-lo aquí o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} editeu la pàgina directament]</span>.',
	'commentbox-savebutton' => 'Desa el comentari',
	'commentbox-name' => 'Nom:',
	'commentbox-name-explanation' => "<small>(Consell: Si [[Special:UserLogin|us registreu]], no haureu d'omplir manualment el nom aquí)</small>",
	'commentbox-log' => 'Nous comentaris',
	'commentbox-first-comment-heading' => '== Comentaris ==',
	'commentbox-regex' => '/\\n==\\s*Comentaris\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Error en crear el comentari',
	'commentbox-error-page-nonexistent' => 'Aquesta pàgina no existeix!',
	'commentbox-error-namespace' => 'Els comentaris no estan permesos en aquest espai de noms!',
	'commentbox-error-empty-comment' => 'No estan permesos els comentaris buits!',
);

/** Corsican (corsu)
 */
$messages['co'] = array(
	'commentbox-name' => 'Nome:',
);

/** Czech (čeština)
 * @author Chmee2
 */
$messages['cs'] = array(
	'commentbox-savebutton' => 'Uložit komentář',
	'commentbox-name' => 'Jméno:',
	'commentbox-log' => 'Nové komentáře',
	'commentbox-first-comment-heading' => '== Komentáře ==',
	'commentbox-errorpage-title' => 'Chyba při vytváření komentáře',
	'commentbox-error-page-nonexistent' => 'Tato stránka neexistuje!',
	'commentbox-error-namespace' => 'Komentáře nejsou povoleny v tomto jmenném prostoru!',
	'commentbox-error-empty-comment' => 'Prázdné komentáře nejsou povoleny.',
);

/** Church Slavic (словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'commentbox-name' => 'имѧ :',
);

/** Danish (dansk)
 * @author Tjernobyl
 */
$messages['da'] = array(
	'commentbox-name' => 'Navn:',
	'commentbox-error-page-nonexistent' => 'Denne side findes ikke!',
);

/** German (Deutsch)
 * @author Imre
 */
$messages['de'] = array(
	'commentbox-desc' => 'Fügt in bestimmte Seiten ein Kommentarfeld ein',
	'commentbox-intro' => '== Kommentar hinzufügen … ==
Du hast einen Kommentar zu dieser Seite? Trage ihn hier ein oder <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} bearbeite die Seite direkt]</span>.',
	'commentbox-savebutton' => 'Kommentar speichern',
	'commentbox-name' => 'Name:',
	'commentbox-name-explanation' => '<small>(Tipp: Wenn du dich [[Special:UserLogin|anmeldest]], musst du hier nicht mehr deinen Namen angeben)</small>',
	'commentbox-log' => 'Neuer Kommentar',
	'commentbox-first-comment-heading' => '== Kommentare ==',
	'commentbox-regex' => '/\\n==\\s*Kommentare\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Fehler bei der Erzeugung des Kommentars',
	'commentbox-error-page-nonexistent' => 'Die Seite existiert nicht!',
	'commentbox-error-namespace' => 'Kommentare sind in diesem Namensraum nicht erlaubt!',
	'commentbox-error-empty-comment' => 'Leere Kommentare sind nicht erlaubt!',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Imre
 */
$messages['de-formal'] = array(
	'commentbox-intro' => '== Kommentar hinzufügen … ==
Sie haben einen Kommentar zu dieser Seite? Tragen Sie ihn hier ein oder <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} bearbeiten Sie die Seite direkt]</span>.',
	'commentbox-name-explanation' => '<small>(Tipp: Wenn Sie sich [[Special:UserLogin|anmelden]], müssen Sie hier nicht mehr Ihren Namen angeben)</small>',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'commentbox-savebutton' => 'Vatışi qeyd ke',
	'commentbox-name' => 'Name:',
	'commentbox-log' => 'Vatışê newey',
	'commentbox-first-comment-heading' => '== Vatışi ==',
	'commentbox-regex' => '/\\n==\\s*Vatışi\\s*==\\s*\\n/i',
	'commentbox-error-page-nonexistent' => 'Ena per çıniya.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'commentbox-desc' => 'Pśidawa komentarowy kašćik do wěstych bokow',
	'commentbox-intro' => '== Komentar pśidaś... ==
Maš komentar na toś tom boku? Pśidaj jen sem abo <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} wobźěłaj bok direktnje]</span>.',
	'commentbox-savebutton' => 'Komentar składowaś',
	'commentbox-name' => 'Mě:',
	'commentbox-name-explanation' => '<small>(Tip: Jolic [[Special:UserLogin|se pśizjawjaš]], njetrjebaš swójo mě how manuelnje zapisaś)</small>',
	'commentbox-log' => 'Nowe komentary',
	'commentbox-first-comment-heading' => '== Komentary ==',
	'commentbox-regex' => '/\\n==\\s*Komentary\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Zmólka pśi napóranju komentara',
	'commentbox-error-page-nonexistent' => 'Toś ten bok njeeksistěrujo!',
	'commentbox-error-namespace' => 'Komentary njejsu dowólone w toś tom mjenjowem rumje!',
	'commentbox-error-empty-comment' => 'Prozne komentary njejsu dowólone!',
);

/** Greek (Ελληνικά)
 * @author Crazymadlover
 * @author Dada
 * @author Glavkos
 * @author Omnipaedista
 * @author Περίεργος
 */
$messages['el'] = array(
	'commentbox-desc' => 'Προσθέτει ένα κουτί σχολίων σε συγκεκριμένες σελίδες',
	'commentbox-intro' => '== Προσθέστε ένα σχόλιο ... == Έχετε ένα σχόλιο για τη σελίδα? Προσθέστε το εδώ ή στο <span class="plainlinks">[((fullurl: ((FULLPAGENAME)) | action = edit)) επεξεργαστείτε τη σελίδα άμεσα].</span>',
	'commentbox-savebutton' => 'Αποθήκευση σχολίου',
	'commentbox-name' => 'Όνομα:',
	'commentbox-name-explanation' => '<small>(Συμβουλή: Εάν [[Special:UserLogin|συνδεθείτε]], δε χρειάζεται να συμπληρώσετε το όνομά σας εδώ πληκτρολογώντας)</small>',
	'commentbox-log' => 'Νέα σχόλια',
	'commentbox-first-comment-heading' => '== Σχόλια ==',
	'commentbox-regex' => '/\\n==\\s*Σχόλια\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Σφάλμα κατά τη δημιουργία σχολίου',
	'commentbox-error-page-nonexistent' => 'Αυτή η σελίδα δεν υπάρχει!',
	'commentbox-error-namespace' => 'Σχόλια δεν επιτρέπονται σε αυτόν τον ονοματοχώρο!',
	'commentbox-error-empty-comment' => 'Κενά σχόλια δεν επιτρέπονται!',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'commentbox-intro' => '== Aldoni komenton... ==
Ĉu vi havas komenton por ĉi tiu paĝo? Aldonu ĝin aŭ <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} redakti la paĝon rekte]</span>',
	'commentbox-savebutton' => 'Konservi komenton',
	'commentbox-name' => 'Nomo:',
	'commentbox-log' => 'Novaj komentoj',
	'commentbox-first-comment-heading' => '== Komentoj ==',
	'commentbox-regex' => '/\\n==\\s*Komentoj\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Eraro kiam kreante komenton',
	'commentbox-error-page-nonexistent' => 'Ĉi tiu paĝo ne ekzistas!',
	'commentbox-error-namespace' => 'Komentoj ne estas permesita en ĉi tiu nomspaco!',
	'commentbox-error-empty-comment' => 'Nulaj komentoj ne estas permesita.',
);

/** Spanish (español)
 * @author Crazymadlover
 * @author Fitoschido
 */
$messages['es'] = array(
	'commentbox-desc' => 'Agrega un cuadro de comentarios a ciertas páginas',
	'commentbox-intro' => '== Agregar un comentario... ==
Tienes un comentario a esta página? Agrégalo aquí o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} edita la página directamente]</span>.',
	'commentbox-savebutton' => 'Guardar comentario',
	'commentbox-name' => 'Nombre:',
	'commentbox-name-explanation' => '<small>(Tip: Si [[Special:UserLogin|inicias sesión]], no tendrás que llenar tu nombre manualmente)</small>',
	'commentbox-log' => 'Nuevos comentarios',
	'commentbox-first-comment-heading' => '== Comentarios==',
	'commentbox-regex' => '/\\n==\\s*Comentarios\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Error al crear el comentario',
	'commentbox-error-page-nonexistent' => '¡Esta página no existe!',
	'commentbox-error-namespace' => '¡No se permiten comentarios en este espacio de nombres!',
	'commentbox-error-empty-comment' => 'No se permiten comentarios vacíos.',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'commentbox-savebutton' => 'Salvesta kommentaar',
	'commentbox-name' => 'Nimi:',
	'commentbox-log' => 'Uued kommentaarid',
	'commentbox-first-comment-heading' => '== Kommentaarid ==',
	'commentbox-error-page-nonexistent' => 'Seda lehekülge ei ole!',
	'commentbox-error-namespace' => 'Siin nimeruumis ei ole kommentaarid lubatud.',
	'commentbox-error-empty-comment' => 'Tühikommentaarid pole lubatud!',
);

/** Basque (euskara)
 * @author Subi
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'commentbox-name' => 'Izena:',
	'commentbox-log' => 'Iruzkin berriak',
	'commentbox-first-comment-heading' => '== Iruzkinak ==',
	'commentbox-regex' => '/\\n==\\s*Iruzkinak\\s*==\\s*\\n/i',
);

/** Persian (فارسی)
 * @author Alireza
 * @author Armin1392
 * @author Mjbmr
 * @author Reza1615
 * @author Taha
 * @author پاناروما
 */
$messages['fa'] = array(
	'commentbox-desc' => 'افزودن جعبهٔ نظر برای تعدادی صفحه',
	'commentbox-intro' => '= نظر دادن ==
می‌خواهید در این صفحه نظر بدهید؟ نظرتان را در اینجا مطرح کنید یا <span class="plainlinks">[{{fullurl: {{FULLPAGENAME}} |action = edit}} صفحه را به صورت مستقیم ویرایش کنید]</span>.',
	'commentbox-savebutton' => 'ذخیرهٔ نظر',
	'commentbox-name' => 'نام:',
	'commentbox-name-explanation' => '<small>(نکته: اگر شما [[Special:UserLogin|log in]], نباید نام خود را دستی اینجا پر کنید)</small>',
	'commentbox-log' => 'نظرات جدید',
	'commentbox-first-comment-heading' => '== نظرها ==',
	'commentbox-regex' => '/\\n==\\s*(نظرها|نظرات|نظر)\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'خطا در حین ایجاد نظر',
	'commentbox-error-page-nonexistent' => 'این صفحه وجود ندارد!',
	'commentbox-error-namespace' => 'نظرات در این فضای نام مجاز نیست!',
	'commentbox-error-empty-comment' => 'نظرات بدون متن مجاز نیست!',
);

/** Finnish (suomi)
 * @author Crt
 */
$messages['fi'] = array(
	'commentbox-desc' => 'Lisää tietyille sivuille kommenttilaatikon.',
	'commentbox-intro' => '== Lisää kommentti... ==
Onko sinulla kommentti tästä sivusta? Lisää se tänne tai <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} muokkaa sivua suoraan]</span>.',
	'commentbox-savebutton' => 'Tallenna kommentti',
	'commentbox-name' => 'Nimi',
	'commentbox-name-explanation' => '<small>(Vinkki: Sinun ei tarvitse itse kirjoittaa nimeä, jos [[Special:UserLogin|kirjaudut sisään]].)</small>',
	'commentbox-log' => 'Uudet kommentit',
	'commentbox-first-comment-heading' => '== Kommentit ==',
	'commentbox-regex' => '/\\n==\\s*Kommentit\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Virhe kommentin luomisessa',
	'commentbox-error-page-nonexistent' => 'Tätä sivua ei ole.',
	'commentbox-error-namespace' => 'Kommentit eivät ole sallittuja tässä nimiavaruudessa.',
	'commentbox-error-empty-comment' => 'Tyhjät kommentit eivät ole sallittuja.',
);

/** French (français)
 * @author PieRRoMaN
 */
$messages['fr'] = array(
	'commentbox-desc' => 'Ajoute une boîte de commentaire dans certaines pages',
	'commentbox-intro' => '== Ajouter un commentaire... ==

Vous avez un commentaire sur cette page ? Ajoutez-le ici ou <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} modifiez la page directement]</span>.',
	'commentbox-savebutton' => 'Enregistrer le commentaire',
	'commentbox-name' => 'Nom :',
	'commentbox-name-explanation' => "<small>(Astuce : si vous [[Special:UserLogin|vous connectez]], vous n'aurez pas à compléter votre nom ici manuellement)</small>",
	'commentbox-log' => 'Nouveaux commentaires',
	'commentbox-first-comment-heading' => '== Commentaires ==',
	'commentbox-regex' => '/\\n==\\s*Commentaires\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Erreur lors de la création du commentaire',
	'commentbox-error-page-nonexistent' => "Cette page n'existe pas !",
	'commentbox-error-namespace' => 'Les commentaires ne sont pas autorisés dans cet espace de noms !',
	'commentbox-error-empty-comment' => 'Les commentaires vides ne sont pas autorisés !',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'commentbox-desc' => 'Apond una bouèta de comentèro dens quârques pâges.',
	'commentbox-savebutton' => 'Encartar lo comentèro',
	'commentbox-name' => 'Nom :',
	'commentbox-log' => 'Novéls comentèros',
	'commentbox-first-comment-heading' => '== Comentèros ==',
	'commentbox-regex' => '/\\n==\\s*Comentèros\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Èrror pendent la crèacion du comentèro',
	'commentbox-error-page-nonexistent' => 'Ceta pâge ègziste pas !',
	'commentbox-error-namespace' => 'Los comentèros sont pas ôtorisâs dens ceti èspâço de noms !',
	'commentbox-error-empty-comment' => 'Los comentèros vouedos sont pas ôtorisâs !',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'commentbox-name' => 'Ainm:',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'commentbox-desc' => 'Engade unha caixa de comentarios a determinadas páxinas',
	'commentbox-intro' => '== Engadir un comentario... ==
Quere facer un comentario sobre esta páxina? Engádao aquí ou <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} edite a páxina directamente]</span>.',
	'commentbox-savebutton' => 'Gardar o comentario',
	'commentbox-name' => 'Nome:',
	'commentbox-name-explanation' => '<small>(Consello: se [[Special:UserLogin|accede ao sistema]], non terá que encher manualmente o seu nome)</small>',
	'commentbox-log' => 'Novos comentarios',
	'commentbox-first-comment-heading' => '== Comentarios ==',
	'commentbox-regex' => '/\\n==\\s*Comentarios\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Erro ao crear o comentario',
	'commentbox-error-page-nonexistent' => 'Esta páxina non existe!',
	'commentbox-error-namespace' => 'Os comentarios non están permitidos neste espazo de nomes!',
	'commentbox-error-empty-comment' => 'Non se permiten comentarios baleiros!',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'commentbox-name' => 'Ὄνομα:',
	'commentbox-first-comment-heading' => '== Σχόλια ==',
	'commentbox-regex' => '/\\n==\\s*Σχόλια\\s*==\\s*\\n/i',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'commentbox-desc' => 'Fiegt in bstimmti Syte ne Aamerkigsfäld yy',
	'commentbox-intro' => '== Aamerkig zuefiege ... ==
Du hesch e Aamerkig zue däre Syte? Trag e do yy oder <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} bearbeit d Syte diräkt]</span>.',
	'commentbox-savebutton' => 'Aamerkig spychere',
	'commentbox-name' => 'Name:',
	'commentbox-name-explanation' => '<small>(Tipp: Wänn Du Di [[Special:UserLogin|aamäldsch]], muesch do nimmi Dyy Name yygee)</small>',
	'commentbox-log' => 'Neji Aamerkig',
	'commentbox-first-comment-heading' => '== Aamerkige ==',
	'commentbox-regex' => '/\\n==\\s*Aamerkige\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Fähler bim Aalege vu dr Aamerkig',
	'commentbox-error-page-nonexistent' => 'Die Syte git s nit!',
	'commentbox-error-namespace' => 'Aamerkige sin in däm Namensruum nit erlaubt!',
	'commentbox-error-empty-comment' => 'Lääri Aamerkige sin nit erlaubt!',
);

/** Hebrew (עברית)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'commentbox-desc' => 'הוספת תיבת תגובות לדפים מסויימים',
	'commentbox-intro' => '== הוספת תגובה... ==
יש לכם תגובה על דף זה? הוסיפו אותה כאן או <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} ערכו את הדף ישירות]</span>.',
	'commentbox-savebutton' => 'שמירת התגובה',
	'commentbox-name' => 'שם:',
	'commentbox-name-explanation' => '<small>(עצה: אם [[Special:UserLogin|תיכנסו לחשבון]], לא תצטרכו למלא כאן את שמכם ידנית)</small>',
	'commentbox-log' => 'תגובות חדשות',
	'commentbox-first-comment-heading' => '== תגובות ==',
	'commentbox-regex' => '/\\n==\\s*תגובות\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'ארעה שגיאה בעת יצירת התגובה',
	'commentbox-error-page-nonexistent' => 'דף זה אינו קיים!',
	'commentbox-error-namespace' => 'תגובות אינן מורשות במרחב שם זה!',
	'commentbox-error-empty-comment' => 'תגובות ריקות אינן מורשות!',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'commentbox-savebutton' => 'टीप्पणी सहेजें',
	'commentbox-name' => 'नाम:',
	'commentbox-log' => 'नई टिप्पणियाँ',
	'commentbox-first-comment-heading' => '== टिप्पणियाँ ==',
	'commentbox-regex' => '/\\n==\\s*टिप्पणियाँ\\s*==\\s*\\n/i',
	'commentbox-error-page-nonexistent' => 'यह पृष्ठ मौजूद नहीं है!',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'commentbox-desc' => 'Přidawa komentarowy kašćik do wěstych stronow',
	'commentbox-intro' => '== Komentar přidać... ==
Maš komentar na tutej stronje? Přidaj jón tu abo <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} wobdźěłaj stronu direktnje]</span>.',
	'commentbox-savebutton' => 'Komentar składować',
	'commentbox-name' => 'Mjeno:',
	'commentbox-name-explanation' => '<small>(Tip: Jeli [[Special:UserLogin|so přizjewješ]], njetrjebaš swoje mjeno tu manuelnje zapisać)</small>',
	'commentbox-log' => 'Nowe komentary',
	'commentbox-first-comment-heading' => '== Komentary ==',
	'commentbox-regex' => '/\\n==\\s*Komentary\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Zmylk při wutworjenju komentara',
	'commentbox-error-page-nonexistent' => 'Tuta strona njeeksistuje!',
	'commentbox-error-namespace' => 'Komentary njejsu w tutym mjenowym rumje dowolene!',
	'commentbox-error-empty-comment' => 'Prózdne komentary njejsu dowolene!',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'commentbox-desc' => 'Hozzászólás beviteli mezőt ad egyes lapokhoz',
	'commentbox-intro' => '== Hozzászólás írása… ==

Hozzáfűznivalód van ehhez az oldalhoz? Írd le itt, vagy <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} szerkeszd a lapot közvetlenül.]</span>.',
	'commentbox-savebutton' => 'Hozzászólás mentése',
	'commentbox-name' => 'Név:',
	'commentbox-name-explanation' => '<small>(Tipp: ha [[Special:UserLogin|bejelentkezel]], nem kell kézzel beírnod a nevedet)</small>',
	'commentbox-log' => 'Új hozzászólások',
	'commentbox-first-comment-heading' => '== Hozzászólások ==',
	'commentbox-regex' => '/\\n==\\s*Hozzászólások\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Hiba a hozzászólás készítésekor',
	'commentbox-error-page-nonexistent' => 'Ez a lap nem létezik!',
	'commentbox-error-namespace' => 'A hozzászólások nincsenek engedélyezve ebben a névtérben!',
	'commentbox-error-empty-comment' => 'Az üres hozzászólás nem engedélyezett!',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'commentbox-desc' => 'Adde un quadro pro commentos a certe paginas',
	'commentbox-intro' => '== Adde un commento... ==
Ha tu un commento super iste pagina? Adde lo hic o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} modifica le pagina directemente]</span>.',
	'commentbox-savebutton' => 'Publicar commento',
	'commentbox-name' => 'Nomine:',
	'commentbox-name-explanation' => '<small>(Aviso: Si tu [[Special:UserLogin|aperi un session]], il non essera necessari completar tu nomine hic manualmente)</small>',
	'commentbox-log' => 'Nove commentos',
	'commentbox-first-comment-heading' => '== Commentos ==',
	'commentbox-regex' => '/\\n==\\s*Commentos\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Error durante le creation del commento',
	'commentbox-error-page-nonexistent' => 'Iste pagina non existe!',
	'commentbox-error-namespace' => 'Commentos non es permittite in iste spatio de nomines!',
	'commentbox-error-empty-comment' => 'Commentos vacue non es permittite!',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Irwangatot
 */
$messages['id'] = array(
	'commentbox-desc' => 'Menambahkan box komentar pada halaman tertentu',
	'commentbox-intro' => '== Tambah komentar ... ==
Anda memiliki komentar di halaman ini? Tambahkan di sini atau <span class="plainlinks"> [((fullurl:((FULLPAGENAME))|action=edit)) sunting halaman langsung] </span>.',
	'commentbox-savebutton' => 'Simpan komentar',
	'commentbox-name' => 'Nama:',
	'commentbox-name-explanation' => '<small> (Tip: Jika Anda [[Special:UserLogin|log in]], Anda tidak perlu mengisi nama Anda di sini secara manual) </small>',
	'commentbox-log' => 'Komentar baru',
	'commentbox-first-comment-heading' => '== Komentar ==',
	'commentbox-regex' => '/\\n==\\s*Komentar\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Kesalahan selagi membuat komentar',
	'commentbox-error-page-nonexistent' => 'Halaman ini tidak ada!',
	'commentbox-error-namespace' => 'Komentar tidak diperbolehkan pada ruang nama ini!',
	'commentbox-error-empty-comment' => 'Komentar kosong tidak diperbolehkan!',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'commentbox-name' => 'Áhà:',
	'commentbox-log' => 'Ókwúnókwú ohüru',
	'commentbox-first-comment-heading' => '== Ókwúnókwú ==',
);

/** Ingush (ГӀалгӀай)
 * @author Amire80
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'commentbox-name' => 'ЦӀи:',
);

/** Icelandic (íslenska)
 * @author පසිඳු කාවින්ද
 */
$messages['is'] = array(
	'commentbox-name' => 'Nafn:',
);

/** Italian (italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'commentbox-desc' => 'Aggiunge una casella di commenti a determinate pagine',
	'commentbox-intro' => '== Aggiungere un commento ... ==
Si hanno commenti su questa pagina? Aggiungere qui o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} modificare direttamente la pagina]</span>.',
	'commentbox-savebutton' => 'Salva commento',
	'commentbox-name' => 'Nome:',
	'commentbox-name-explanation' => "<small>(Suggerimento: Se si [[Special:UserLogin|effettua l'accesso]], non si deve inserire manualmente qui il proprio nome )</small>",
	'commentbox-log' => 'Nuovi commenti',
	'commentbox-first-comment-heading' => '== Commenti ==',
	'commentbox-regex' => '/\\n==\\s*Commenti\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Errore durante la creazione del commento',
	'commentbox-error-page-nonexistent' => 'Questa pagina non esiste',
	'commentbox-error-namespace' => 'Commenti non sono ammessi in questo namespace',
	'commentbox-error-empty-comment' => 'Commenti vuoti non sono ammessi!',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Shirayuki
 */
$messages['ja'] = array(
	'commentbox-desc' => '指定したページにコメントボックスを追加する',
	'commentbox-intro' => '== コメントの追加... ==
このページにコメントしますか? ここに入力するか、<span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} ページを直接編集]</span>してください。',
	'commentbox-savebutton' => 'コメントを保存',
	'commentbox-name' => '名前:',
	'commentbox-name-explanation' => '<small>(ヒント: [[Special:UserLogin|ログイン]]すると、名前を手動で入力する必要がなくなります)</small>',
	'commentbox-log' => '新規コメント',
	'commentbox-first-comment-heading' => '== コメント ==',
	'commentbox-regex' => '/\\n==\\s*コメント\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'コメントの作成エラー',
	'commentbox-error-page-nonexistent' => 'このページは存在しません!',
	'commentbox-error-namespace' => 'この名前空間ではコメントは許可されていません!',
	'commentbox-error-empty-comment' => '空のコメントは許可されていません!',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'commentbox-savebutton' => 'კომენტარის შენახვა',
	'commentbox-name' => 'სახელი:',
	'commentbox-log' => 'ახალი კომენტარები',
	'commentbox-first-comment-heading' => '== კომენტარები ==',
	'commentbox-regex' => '/\\n==\\s*კომენტარები\\s*==\\s*\\n/i',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'commentbox-desc' => 'បន្ថែមប្រអប់យោបល់ទៅលើទំព័រមួយចំនួន',
	'commentbox-intro' => '== បន្ថែមយោបល់... ==
តើអ្នកមានយោបង់នៅលើទំព័រនេះទេ? សូមបញ្ចេញយោបល់នៅទីនេះ ឬក៏<span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} កែប្រែទំព័រនេះដោយផ្ទាល់]</span>។',
	'commentbox-savebutton' => 'រក្សាទុកយោបល់',
	'commentbox-name' => 'ឈ្មោះ៖',
	'commentbox-name-explanation' => '<small>(ដំបូន្មាន៖ ប្រសិនបើអ្នក[[Special:UserLogin|កត់ឈ្មោះចូល]] នោះអ្នកនឹងមិនចាំបាច់បញ្ចូលឈ្មោះរបស់អ្នកដោយខ្លួនឯងនៅទីនេះទេ)</small>',
	'commentbox-log' => 'យោបល់ថ្មី',
	'commentbox-first-comment-heading' => '== យោបល់ ==',
	'commentbox-errorpage-title' => 'មានបញ្ហាពេលកំពុងបង្កើតយោបល់',
	'commentbox-error-page-nonexistent' => 'ទំព័រនេះមិនមានទេ!',
	'commentbox-error-empty-comment' => 'មិនអនុញ្ញាតអោយមានយោបល់ទទេទេ!',
);

/** Kannada (ಕನ್ನಡ)
 * @author Dimension10
 * @author Nayvik
 */
$messages['kn'] = array(
	'commentbox-name' => 'ಹೆಸರು:',
	'commentbox-first-comment-heading' => '== ಟಿಪ್ಪಣಿಗಳು ==',
	'commentbox-regex' => '/\\n==\\s*ಟಿಪ್ಪಣಿಗಳು\\s*==\\s*\\n/i',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'commentbox-desc' => '특정 문서에 의견 상자를 추가합니다',
	'commentbox-intro' => '== 의견 남기기... ==
이 문서에 의견이 있나요? 여기에 의견을 추가하거나 <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} 문서를 직접 편집]</span>하세요.',
	'commentbox-savebutton' => '의견 저장',
	'commentbox-name' => '이름:',
	'commentbox-name-explanation' => '<small>(팁: [[Special:UserLogin|로그인]]하면 이름을 직접 적지 않아도 됩니다.)</small>',
	'commentbox-log' => '새 의견',
	'commentbox-first-comment-heading' => '== 의견 ==',
	'commentbox-regex' => '/\\n==\\s*의견\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => '의견을 만드는 동안 오류',
	'commentbox-error-page-nonexistent' => '이 문서가 존재하지 않습니다!',
	'commentbox-error-namespace' => '이 이름공간에는 의견을 남길 수 없습니다!',
	'commentbox-error-empty-comment' => '내용 없이 의견을 남길 수 없습니다!',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'commentbox-desc' => 'Deiht ene Kaßte för Aanmerkunge op beschtemmpte Sigge derbei.',
	'commentbox-intro' => '== en Aanmärkong derbei donn ==
Häß De en Aanmärkong zoh heh dä Sigg? Donn se heh enjävve, udder <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} donn heh di Sigg ändere]</span>.',
	'commentbox-savebutton' => 'Aanmerkong avshpeishere',
	'commentbox-name' => 'Name:',
	'commentbox-name-explanation' => '<small>(Opjepaß: Wann De [[Special:UserLogin|enjelog beß]], moß De nit immer heh Dinge Name entippe)</small>',
	'commentbox-log' => 'Neu Aanmerkonge',
	'commentbox-first-comment-heading' => '== Aanmerkunge ==',
	'commentbox-regex' => '/\\n==\\s*Aanmerkunge\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Ene Fähler es opjetrodde wi mer en Aanmerkunge aanlääje wullte',
	'commentbox-error-page-nonexistent' => 'Di Sigg jidd_et nit!',
	'commentbox-error-namespace' => 'Aanmerkunge nit zohjelohße en heh dämm Appachtemang!',
	'commentbox-error-empty-comment' => 'Aanmerkunge met nix dren nit zohjelohße!',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'commentbox-savebutton' => 'Şîroveyê tomar bike',
	'commentbox-name' => 'Nav:',
	'commentbox-log' => 'Şîroveyên nû',
	'commentbox-first-comment-heading' => '== Şîrove ==',
	'commentbox-error-page-nonexistent' => 'Ev rûpel tune ye!',
);

/** Kyrgyz (Кыргызча)
 * @author Growingup
 */
$messages['ky'] = array(
	'commentbox-log' => 'Жаңы комментарийлер',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'commentbox-desc' => 'Setzt op bestëmmte Säiten eng Këscht fir Bemierkungen derbäi',
	'commentbox-intro' => '== Eng Bemierkung derbäisetzen... ==
Dir hutt eng Bemierkung zu dëser Säit? Setzt ze hei derbäi oder <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} ännert d\'Säit direkt]</span>.',
	'commentbox-savebutton' => 'Bemierkung späicheren',
	'commentbox-name' => 'Numm:',
	'commentbox-name-explanation' => '<small>(Tip: Wann Dir [[Special:UserLogin|Iech umellt]], braucht Dir Ären Numm hei net manuell anzeginn)</small>',
	'commentbox-log' => 'Nei Bemierkungen',
	'commentbox-first-comment-heading' => '== Bemierkungen ==',
	'commentbox-regex' => '/\\n==\\s*Bemierkungen\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Feeler beim Uleeë vun der Bemierkung',
	'commentbox-error-page-nonexistent' => 'Dës Säit gëtt et net!',
	'commentbox-error-namespace' => 'Bemierkunge sinn an dësem Nummraum net erlaabt!',
	'commentbox-error-empty-comment' => 'Eidel Bemierkunge sinn net erlaabt!',
);

/** Limburgish (Limburgs)
 * @author Pahles
 */
$messages['li'] = array(
	'commentbox-desc' => "Deit 'n opmirkingevinster bie aan bepaolde pagina's",
	'commentbox-intro' => '== De kans \'n opmirking toeveuge... ==
Höbs de \'n opmirking euver dees pagina?
Veug die hie toe of <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} bewirk dees pagina direk]</span>.',
	'commentbox-savebutton' => 'Opmirking opsjlaon',
	'commentbox-name' => 'Naam:',
	'commentbox-name-explanation' => '<small>Tip: Es te dich [[Special:UserLogin|aanmels]], hoofs te diene naam hie neet in te veure.</small>',
	'commentbox-log' => 'Nuuj opmirkinge',
	'commentbox-first-comment-heading' => '== Opmirkinge ==',
	'commentbox-regex' => '/\\n==\\s*Opmirkinge\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => "Dao is get fout gegange bij 't opsjlaon van de opmirking",
	'commentbox-error-page-nonexistent' => 'Dees pagina besjteit neet',
	'commentbox-error-namespace' => 'Opmirkinge zeen neet gepermitteerd in dees naamruumde!',
	'commentbox-error-empty-comment' => 'Laeg opmirkinge zeen neet gepermitteerd!',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'commentbox-savebutton' => 'Išsaugoti komentarą',
	'commentbox-name' => 'Pavadinimas:',
	'commentbox-log' => 'Nauji komentarai',
	'commentbox-first-comment-heading' => '== Komentarai ==',
	'commentbox-errorpage-title' => 'Klaida kuriant komentarą',
	'commentbox-error-page-nonexistent' => 'Puslapis neegzistuoja',
	'commentbox-error-empty-comment' => 'Tušti komentarai neleidžiami!',
);

/** Latgalian (latgaļu)
 * @author Dark Eagle
 */
$messages['ltg'] = array(
	'commentbox-first-comment-heading' => '== Komentari ==',
	'commentbox-regex' => '/\\n==\\s*Komentari\\s*==\\s*\\n/i',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'commentbox-desc' => 'Додава поле за коментар на извесни страници',
	'commentbox-intro' => '== Додајте коментар... ==
Имате коментар за оваа страница? Пишете го тука или пак <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} директно уредете ја страницата]</span>.',
	'commentbox-savebutton' => 'Зачувај коментар',
	'commentbox-name' => 'Име:',
	'commentbox-name-explanation' => '<small>(Помош: Ако [[Special:UserLogin|се најавите]], нема да треба тука да си го внесувате името рачно)</small>',
	'commentbox-log' => 'Нови коментари',
	'commentbox-first-comment-heading' => '== Коментари ==',
	'commentbox-regex' => '/\\n==\\s*Коментари\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Грешка при создавањето на коментарот',
	'commentbox-error-page-nonexistent' => 'Оваа страница не постои!',
	'commentbox-error-namespace' => 'Во овој именски простор не се дозволени коментари!',
	'commentbox-error-empty-comment' => 'Не се дозволени празни коментари!',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'commentbox-desc' => 'ചില താളുകളിൽ ഒരു അഭിപ്രായപെട്ടി ചേർക്കുന്നു',
	'commentbox-intro' => '== അഭിപ്രായം ചേർക്കുക... ==
ഈ താളിനെക്കുറിച്ച് താങ്കൾക്ക് ഒരഭിപ്രായമുണ്ടോ? ഇവിടെ ചേർക്കുക അല്ലെങ്കിൽ <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} താൾ നേരിട്ട് തിരുത്തുക]</span>.',
	'commentbox-savebutton' => 'അഭിപ്രായം സേവ് ചെയ്യുക',
	'commentbox-name' => 'പേര്:',
	'commentbox-name-explanation' => '<small>(സഹായം: താങ്കൾ [[Special:UserLogin|ലോഗിൻ]] ചെയ്തിട്ടുണ്ടെങ്കിൽ, ഫോമിൽ താങ്കളുടെ പേര് നൽകേണ്ടി വരില്ല)</small>',
	'commentbox-log' => 'പുതിയ അഭിപ്രായങ്ങൾ',
	'commentbox-first-comment-heading' => '== അഭിപ്രായങ്ങൾ ==',
	'commentbox-regex' => '/\\n==\\s*അഭിപ്രായങ്ങൾ\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'അഭിപ്രായം സൃഷ്ടിക്കുന്നതിനിടയിൽ പിഴവുണ്ടായി',
	'commentbox-error-page-nonexistent' => 'ഈ താൾ നിലവിലില്ല',
	'commentbox-error-namespace' => 'ഈ നാമമേഖലയിൽ അഭിപ്രായങ്ങൾ അനുവദിച്ചിട്ടില്ല!',
	'commentbox-error-empty-comment' => 'ശൂന്യമായ അഭിപ്രായങ്ങൾ അനുവദിച്ചിട്ടില്ല!',
);

/** Mongolian (монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'commentbox-first-comment-heading' => '== Сэтгэгдлүүд ==',
	'commentbox-regex' => '/\\n==\\s*Сэтгэгдлүүдs*==\\s*\\n/i',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'commentbox-desc' => 'काही पानांवर टिप्पणीपेटी जोडते',
	'commentbox-intro' => '== टिप्पणी जोडा... ==
आपल्यापाशी काय या पानासाठी टिप्प्णण्या आहेत?त्या येथे जोडा किंवा<span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} या पानाचे थेट संपादन करा]</span>',
	'commentbox-savebutton' => 'टिप्पणी जतन करा',
	'commentbox-name' => 'नाव:',
	'commentbox-name-explanation' => '<small>(सूचना: जर आपण [[Special:UserLogin|सनोंद प्रवेश केला]] तर, आपणास आपले नांव स्वतः येथे टाकावे लागणार नाही)</small>',
	'commentbox-log' => 'नविन टिप्पण्या',
	'commentbox-first-comment-heading' => '== टिप्पण्या ==',
	'commentbox-regex' => '/\\n==\\s*टिप्पण्या\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'टिप्पण्या तयार करतांना घडणाऱ्या त्रूटी',
	'commentbox-error-page-nonexistent' => 'हे पान अस्तीत्वात नाही!',
	'commentbox-error-namespace' => 'या नामविश्वात टिप्पण्या करण्यास परवानगी नाही!',
	'commentbox-error-empty-comment' => 'रिकाम्या टिप्पण्यास परवानगी नाही!',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'commentbox-desc' => 'Meletakkan ruangan komen di laman-laman tertentu',
	'commentbox-intro' => '== Komenlah... ==
Nak komen pasal laman ini? Tuliskannya di sini atau <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} terus sunting laman ini]</span>.',
	'commentbox-savebutton' => 'Simpan komen',
	'commentbox-name' => 'Nama:',
	'commentbox-name-explanation' => '<small>(Petua: Jika anda [[Special:UserLogin|log masuk]], anda tidak perlu mengisikan nama anda di sin secara manual)</small>',
	'commentbox-log' => 'Komen baru',
	'commentbox-first-comment-heading' => '== Komen ==',
	'commentbox-regex' => '/\\n==\\s*Komen\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Ralat ketika membuat komen',
	'commentbox-error-page-nonexistent' => 'Laman ini tidak wujud!',
	'commentbox-error-namespace' => 'Komen tidak dibenarkan di ruang nama ini!',
	'commentbox-error-empty-comment' => 'Komen kosong tidak dibenarkan!',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'commentbox-desc' => 'Iżżid kaxxa għall-kumenti fuq ċerti paġni',
	'commentbox-intro' => '== Żid kumment... ==
Għandek kumment fuq din il-paġna? Żidu hawnhekk jew <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} immodifika direttament il-paġna]</span>.',
	'commentbox-savebutton' => 'Salva l-kumment',
	'commentbox-name' => 'Isem:',
	'commentbox-name-explanation' => '<small>(Suġġeriment: Jekk [[Special:UserLogin|tidħol fil-kont]] ma jkollokx għalfejn iddaħħal l-isem proprju tiegħek manwalment)</small>',
	'commentbox-log' => 'Kummenti ġodda',
	'commentbox-first-comment-heading' => '== Kummenti ==',
	'commentbox-regex' => '/\\n==\\s*Kummenti\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => "Inqala' żball waqt il-ħolqien tal-kumment",
	'commentbox-error-page-nonexistent' => 'Din il-paġna ma teżistix!',
	'commentbox-error-namespace' => "Kummenti mhumiex permessi f'dan l-ispazju tal-isem!",
	'commentbox-error-empty-comment' => 'Kummenti vojta mhumiex permessi!',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'commentbox-first-comment-heading' => '== Арсемат-мельть ==',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 * @author Simny
 */
$messages['nb'] = array(
	'commentbox-desc' => 'Legger til en kommentarboks til enkelte sider',
	'commentbox-intro' => '== Legg til en kommentar... ==
Har du en kommentar til denne siden? Legg den til her eller <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} endre siden direkte]</span>.',
	'commentbox-savebutton' => 'Lagre kommentar',
	'commentbox-name' => 'Navn:',
	'commentbox-name-explanation' => '<small>(Tips: Du slipper å skrive inn navnet ditt manuelt her dersom du [[Special:UserLogin|logger inn]].)</small>',
	'commentbox-log' => 'Nye kommentarer',
	'commentbox-first-comment-heading' => '== Kommentarer ==',
	'commentbox-regex' => '/\\n==\\s*Kommentarer\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Det oppsto en feil under oppretting av kommentaren',
	'commentbox-error-page-nonexistent' => 'Denne siden finnes ikke!',
	'commentbox-error-namespace' => 'Kommentarer er ikke tillatt i dette navnerommet!',
	'commentbox-error-empty-comment' => 'Tomme kommentarer er ikke tillatt!',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'commentbox-savebutton' => 'Kommentar spiekern',
	'commentbox-name' => 'Naam:',
	'commentbox-log' => 'Nee Kommentaren',
	'commentbox-first-comment-heading' => '== Kommentaren ==',
	'commentbox-error-page-nonexistent' => 'De Sied gifft dat nicht!',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'commentbox-desc' => "Voegt een opmerkingenvenster toe aan bepaalde pagina's",
	'commentbox-intro' => '== U kunt een opmerking toevoegen... ==
Hebt u een opmerking over deze pagina?
Voeg deze hier toe of <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} bewerk deze pagina direct]</span>.',
	'commentbox-savebutton' => 'Reactie opslaan',
	'commentbox-name' => 'Naam:',
	'commentbox-name-explanation' => '<small>Tip: als u zich [[Special:UserLogin|aanmeld]], hoeft u uw naam hier niet in de voeren.</small>',
	'commentbox-log' => 'Nieuwe opmerkingen',
	'commentbox-first-comment-heading' => '== Opmerkingen ==',
	'commentbox-regex' => '/\\n==\\s*Opmerkingen\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Er is een fout opgetreden bij het opslaan van de opmerking',
	'commentbox-error-page-nonexistent' => 'Deze pagina bestaat niet!',
	'commentbox-error-namespace' => 'Opmerkingen zijn niet toegestaan in deze naamruimte!',
	'commentbox-error-empty-comment' => 'Lege opmerkingen zijn niet toegestaan!',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'commentbox-intro' => '== Je kunt een reactie toevoegen... ==
Heb je een opmerking over deze pagina?
Voeg deze hier toe of <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} bewerk deze pagina direct]</span>.',
	'commentbox-name-explanation' => '<small>Tip: als je je [[Special:UserLogin|aanmeld]], hoef je je naam hier niet in de voeren.</small>',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Harald Khan
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'commentbox-desc' => 'Legg til ein kommentarboks til sume sider',
	'commentbox-intro' => '== Legg til ein kommentar... ==

Har du ein kommentar til denne sida? Legg han til her eller <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} endra sida direkte]</span>.',
	'commentbox-savebutton' => 'Lagra kommentar',
	'commentbox-name' => 'Namn:',
	'commentbox-name-explanation' => '<small>(Tips: Du slepp du å fylla ut namnet ditt manuelt her om du [[Special:UserLogin|loggar inn]])</small>',
	'commentbox-log' => 'Nye kommentarar',
	'commentbox-first-comment-heading' => '== Kommentarar ==',
	'commentbox-regex' => '/\\n==\\s*Kommentarar\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Det oppstod ein feil medan kommentaren vart oppretta',
	'commentbox-error-page-nonexistent' => 'Denne sida finst ikkje.',
	'commentbox-error-namespace' => 'Kommentarar er ikkje tillatne i dette namnerommet.',
	'commentbox-error-empty-comment' => 'Tomme kommentarar er ikkje tillatne.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'commentbox-desc' => "Apond una bóstia de comentari dins d'unas paginas",
	'commentbox-intro' => '== Apondre un comentari... ==

Avètz un comentari sus aquesta pagina ? Apondètz-o aicí o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} modificatz la pagina dirèctament]</span>.',
	'commentbox-savebutton' => 'Enregistrar lo comentari',
	'commentbox-name' => 'Nom :',
	'commentbox-name-explanation' => '<small>(Astúcia : se [[Special:UserLogin|vos connectatz]], auretz pas de completar vòstre nom aicí manualament)</small>',
	'commentbox-log' => 'Comentaris novèls',
	'commentbox-first-comment-heading' => '== Comentaris ==',
	'commentbox-regex' => '/\\n==\\s*Comentaris\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Error al moment de la creacion del comentari',
	'commentbox-error-page-nonexistent' => 'Aquesta pagina existís pas !',
	'commentbox-error-namespace' => 'Los comentaris son pas autorizats dins aqueste espaci de noms !',
	'commentbox-error-empty-comment' => 'Los comentaris voids son pas autorizats !',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'commentbox-savebutton' => 'ମନ୍ତବ୍ୟଟିକୁ ସାଇତିବେ',
	'commentbox-name' => 'ନାମ:',
	'commentbox-log' => 'ନୂଆ ମତାମତ',
	'commentbox-first-comment-heading' => '== ମତାମତ ==',
	'commentbox-errorpage-title' => 'ମନ୍ତବ୍ୟ ଦେବାରେ ଅସୁବିଧା',
	'commentbox-error-page-nonexistent' => 'ଏହିପରି କୌଣସି ପୃଷ୍ଠା ନାହିଁ !',
	'commentbox-error-namespace' => 'ଏହି ନେମସ୍ପେସରେ ମନ୍ତବ୍ୟ ଦେଇ ହେବ ନାହିଁ!',
	'commentbox-error-empty-comment' => 'ଖାଲି ମନ୍ତବ୍ୟ ଦେଇ ହେବନାହିଁ!',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'commentbox-first-comment-heading' => '== Aamaerickinge ==',
	'commentbox-regex' => '/\\n==\\s*Aamaerickinge\\s*==\\s*\\n/i',
);

/** Polish (polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'commentbox-desc' => 'Dodaje okienko komentarzy do niektórych stron',
	'commentbox-intro' => '== Dodawanie komentarza... ==
Masz komentarz na tej stronie? Dodaj ten komentarz lub <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} wyedytuj treść strony]</span>.',
	'commentbox-savebutton' => 'Zapisz komentarz',
	'commentbox-name' => 'Imię i nazwisko',
	'commentbox-name-explanation' => '<small>(Podpowiedź – jeśli [[Special:UserLogin|się zalogujesz]] nie będziesz musiał wypełniać podpisu ręcznie)</small>',
	'commentbox-log' => 'Nowe komentarze',
	'commentbox-first-comment-heading' => '== Komentarze ==',
	'commentbox-regex' => '/\\n==\\s*Komentarze\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Wystąpił błąd w trakcie tworzenia komentarza',
	'commentbox-error-page-nonexistent' => 'Strona nie istnieje!',
	'commentbox-error-namespace' => 'W tej przestrzeni nazw nie można umieszczać komentarzy!',
	'commentbox-error-empty-comment' => 'Komentarz nie może być pusty!',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'commentbox-desc' => 'A gionta na pàgina ëd coment a serte pàgine',
	'commentbox-intro' => '== Gionta un coment... ==
It l\'has-to un coment an sta pàgina-sì? Giontlo sì o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} modìfica la pàgina diretament]</span>.',
	'commentbox-savebutton' => 'salva coment',
	'commentbox-name' => 'Nòm:',
	'commentbox-name-explanation' => "<small>(Tip: S'it [[Special:UserLogin|intre]], it l'avras pa da anserì tò nòm manualment)</small>",
	'commentbox-log' => 'Coment neuv',
	'commentbox-first-comment-heading' => '== Coment ==',
	'commentbox-regex' => '/\\n==\\s*Coment\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Eror an creand un coment',
	'commentbox-error-page-nonexistent' => 'Sta pàgina-sì a esist pa!',
	'commentbox-error-namespace' => 'Ij coment a son pa possìbij an sto spassi nominal-sì!',
	'commentbox-error-empty-comment' => 'Coment veuid a son pa possìbij!',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'commentbox-savebutton' => 'تبصره خوندي کول',
	'commentbox-name' => 'نوم:',
	'commentbox-log' => 'نوې انګېرنې',
	'commentbox-first-comment-heading' => '== انګېرنې ==',
	'commentbox-regex' => '/\\n==\\s*تبصرې\\s*==\\s*\\n/i',
	'commentbox-error-page-nonexistent' => 'پدې نوم مخ نشته!',
	'commentbox-error-namespace' => 'په دې نوم-تشيال کې د انګېرنو اجازه نشته!',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Indech
 * @author Luckas
 */
$messages['pt'] = array(
	'commentbox-desc' => 'Inclui uma caixa de comentários em certas páginas',
	'commentbox-intro' => '== Adicione um comentário... ==
Tem um comentário acerca desta página? Adicione-o aqui ou <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} edite a página diretamente]</span>.',
	'commentbox-savebutton' => 'Gravar comentário',
	'commentbox-name' => 'Nome:',
	'commentbox-name-explanation' => '<small>(Dica: Se [[Special:UserLogin|se autenticar]], não terá de preencher o seu nome aqui manualmente)</small>',
	'commentbox-log' => 'Novos comentários',
	'commentbox-first-comment-heading' => '== Comentários ==',
	'commentbox-regex' => '/\\n==\\s*Comentários\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Erro ao criar comentário',
	'commentbox-error-page-nonexistent' => 'Esta página não existe!',
	'commentbox-error-namespace' => 'Não são permitidos comentários neste espaço nominal!',
	'commentbox-error-empty-comment' => 'Comentários vazios não são permitidos!',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'commentbox-desc' => 'Adiciona uma caixa de comentários a certas páginas',
	'commentbox-intro' => '== Adicione um comentário... ==
Você tem um comentário sobre esta página? Adicione-o aqui ou <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} edite a página diretamente]</span>.',
	'commentbox-savebutton' => 'Salvar comentário',
	'commentbox-name' => 'Nome:',
	'commentbox-name-explanation' => '<small>(Dica: Se você se [[Special:UserLogin|autenticar]], você não terá que preencher seu nome aqui manualmente)</small>',
	'commentbox-log' => 'Novos comentários',
	'commentbox-first-comment-heading' => '== Comentários ==',
	'commentbox-regex' => '/\\n==\\s*Commentários\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Erro ao criar comentário',
	'commentbox-error-page-nonexistent' => 'Esta página não existe!',
	'commentbox-error-namespace' => 'Comentários não são permitidos neste domínio!',
	'commentbox-error-empty-comment' => 'Comentários vazios não são permitidos!',
);

/** Romanian (română)
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'commentbox-savebutton' => 'Salvează comentariul',
	'commentbox-name' => 'Nume:',
	'commentbox-log' => 'Comentarii noi',
	'commentbox-first-comment-heading' => '== Comentarii ==',
	'commentbox-regex' => '/\\n==\\s*Comentarii\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Eroare în timpul creării comentariului',
	'commentbox-error-page-nonexistent' => 'Această pagină nu există',
	'commentbox-error-empty-comment' => 'Comentariile goale nu sunt permise!',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'commentbox-desc' => "Aggiunge 'na sckatole de commende a certe pàggene",
	'commentbox-intro' => "== Aggiunge 'nu commende... ==
Tu è 'nu commende sus a sta pàgene? Aggiungile aqquà o <span class=\"plainlinks\">[{{fullurl:{{FULLPAGENAME}}|action=edit}} cange 'a pàgene direttamende]</span>.",
	'commentbox-savebutton' => "Reggistre 'u commende",
	'commentbox-name' => 'Nome:',
	'commentbox-name-explanation' => "<small>(Conziglie: Ce tu [[Special:UserLogin|tràse]], non g'ha mettere 'u nome tue a màne)</small>",
	'commentbox-log' => 'Commende nuève',
	'commentbox-first-comment-heading' => '== Commende ==',
	'commentbox-regex' => '/\\n==\\s*Commende\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => "Errore mendre stoche a ccreje 'nu commende",
	'commentbox-error-page-nonexistent' => "Sta pàgene non g'esiste!",
	'commentbox-error-namespace' => "Le commende non ge sò permesse jndr'à stu namespace!",
	'commentbox-error-empty-comment' => 'Le commende vacande non ge se ponne mettere!',
);

/** Russian (русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'commentbox-desc' => 'Добавляет к определённым страницам поле комментария',
	'commentbox-intro' => '== Добавление комментария… ==
У вас есть замечание к этой странице?
Запишите его здесь или <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} непосредственно отредактируйте страницу]</span>.',
	'commentbox-savebutton' => 'Сохранить комментарий',
	'commentbox-name' => 'Имя:',
	'commentbox-name-explanation' => '<small>(Подсказка. Если вы [[Special:UserLogin|представитесь системе]], вам не придётся указывать ваше имя вручную)</small>',
	'commentbox-log' => 'Новые комментарии',
	'commentbox-first-comment-heading' => '== Комментарии ==',
	'commentbox-regex' => '/\\n==\\s*Комментарии\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Ошибка при создании комментария',
	'commentbox-error-page-nonexistent' => 'Этой страницы не существует!',
	'commentbox-error-namespace' => 'В данном пространстве имён комментарии не разрешены!',
	'commentbox-error-empty-comment' => 'Пустые комментарии не допускаются!',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'commentbox-name' => 'Імя:',
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'commentbox-savebutton' => 'Быһаарыыны бигэргэтэргэ',
	'commentbox-name' => 'Аата:',
	'commentbox-first-comment-heading' => '== Быһаарыылар ==',
	'commentbox-regex' => '/\\n==\\s*Быһаарыылар\\s*==\\s*\\n/i',
);

/** Sicilian (sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'commentbox-name' => 'Nomu:',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'commentbox-desc' => 'කිසියම් පිටු කිහිපයකට පරිකථනකොටු එක් කරයි',
	'commentbox-savebutton' => 'පරිකථනය සුරකින්න',
	'commentbox-name' => 'නම:',
	'commentbox-log' => 'නව පරිකථන',
	'commentbox-first-comment-heading' => '== පරිකථන ==',
	'commentbox-regex' => '/\\n==\\s*පරිකථන\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'පරිකථනය තනන අතරතුර දෝෂය',
	'commentbox-error-page-nonexistent' => 'මෙම පිටුව නොපවතියි!',
	'commentbox-error-empty-comment' => 'හිස් පරිකථන වලට ඉඩ ලබා නොදේ!',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'commentbox-desc' => 'Pridáva na určité stránky pole na komentár',
	'commentbox-intro' => '== Pridať komentár... ==
Chcete túto stránku okomentovať? Napíšte to sem alebo <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} priamo stránku upravte]</span>.',
	'commentbox-savebutton' => 'Uložiť komentár',
	'commentbox-name' => 'Meno:',
	'commentbox-name-explanation' => '<small>(Tip: Ak sa [[Special:UserLogin|prihlásite]], nebudete sem musieť vypĺňať svoje meno ručne)</small>',
	'commentbox-log' => 'Nové komentáre',
	'commentbox-first-comment-heading' => '== Komentáre ==',
	'commentbox-regex' => '/\\n==\\s*Komentáre\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Chyba pri vytváraní komentára',
	'commentbox-error-page-nonexistent' => 'Táto stránka neexistuje!',
	'commentbox-error-namespace' => 'Komentáre nie sú v tomto mennom priestore povolené!',
	'commentbox-error-empty-comment' => 'Prázdne komentáre nie sú povolené!',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'commentbox-desc' => 'Doda polje za pripombe na nekatere strani',
	'commentbox-intro' => '== Dodajte pripombo ... ==
Imate pripombo na to stran? Dodajte jo tukaj <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} ali neposredno uredite stran]</span>.',
	'commentbox-savebutton' => 'Shrani pripombo',
	'commentbox-name' => 'Ime:',
	'commentbox-name-explanation' => '<small>(Nasvet: Če se [[Special:UserLogin|prijavite]], vam tukaj ne bo potrebno ročno vnesti svojega imena)</small>',
	'commentbox-log' => 'Nove pripombe',
	'commentbox-first-comment-heading' => '== Pripombe ==',
	'commentbox-regex' => '/\\n==\\s*Pripombe\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Napaka med ustvarjanjem pripombe',
	'commentbox-error-page-nonexistent' => 'Ta stran ne obstaja!',
	'commentbox-error-namespace' => 'Pripombe niso dovoljene v tem imenskem prostoru!',
	'commentbox-error-empty-comment' => 'Prazne pripombe niso dovoljene!',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'commentbox-desc' => 'Додаје кутијице за коментаре на извесне стране',
	'commentbox-intro' => '== Додавање коментара... ==
Да ли желите да коментаришете ову страну? Додајте Ваш коментар или <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} измените страну директно]</span>.',
	'commentbox-savebutton' => 'Сними коментар',
	'commentbox-name' => 'Име:',
	'commentbox-log' => 'Нови коментари',
	'commentbox-first-comment-heading' => '== Коментари ==',
	'commentbox-regex' => '/\\n==\\s*Коментари\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Грешка током прављења коментара',
	'commentbox-error-page-nonexistent' => 'Ова страница не постоји.',
	'commentbox-error-namespace' => 'Коментари нису дозвољени у овом именском простору!',
	'commentbox-error-empty-comment' => 'Празни коментари нису могући!',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'commentbox-desc' => 'Dodaje kutijice za komentare na izvesne strane',
	'commentbox-intro' => '== Dodavanje komentara... ==
Da li želite da komentarišete ovu stranu? Dodajte Vaš komentar ili <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} izmenite stranu direktno]</span>.',
	'commentbox-savebutton' => 'Snimi komentar',
	'commentbox-name' => 'Ime:',
	'commentbox-log' => 'Novi komentari',
	'commentbox-first-comment-heading' => '== Komentari ==',
	'commentbox-errorpage-title' => 'Greška tokom pravljenja komentara',
	'commentbox-error-page-nonexistent' => 'Ova stranica ne postoji.',
	'commentbox-error-namespace' => 'Komentari nisu dozvoljeni u ovom imenskom prostoru!',
	'commentbox-error-empty-comment' => 'Prazni komentari nisu mogući!',
);

/** Swedish (svenska)
 * @author Per
 * @author Sertion
 */
$messages['sv'] = array(
	'commentbox-desc' => 'Lägger till en kommentarbox till vissa sidor',
	'commentbox-intro' => '== Lägg till en kommentar... ==
Har du en kommentar till den här sidan? Lägg till den här eller <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} redigera sidan manuellt]</span>.',
	'commentbox-savebutton' => 'Spara kommentar',
	'commentbox-name' => 'Namn:',
	'commentbox-name-explanation' => '<small>(Tips: När du [[Special:UserLogin|loggar in]] så slipper du att fylla i ditt namn manuellt.)</small>',
	'commentbox-log' => 'Nya kommentarer',
	'commentbox-first-comment-heading' => '== Kommentarer ==',
	'commentbox-regex' => '/\\n==\\s*Kommentarer\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Ett fel uppstod när kommentaren skapades',
	'commentbox-error-page-nonexistent' => 'Denna sidan existerar inte!',
	'commentbox-error-namespace' => 'Kommentarer är inte tillåtna i denna namnrymd!',
	'commentbox-error-empty-comment' => 'Tomma kommentarer är inte tillåtna!',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'commentbox-intro' => '==Ongeza maoni==
Una maoni kuhusu ukurasa huu? Yaongeze hapa <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} hariri ukurasa huu mara moja kwa moja]</span>.',
	'commentbox-savebutton' => 'Hifadhu ukurasa',
	'commentbox-name' => 'Jina:',
	'commentbox-name-explanation' => '<small>(Kidokezo: Kama [[Special:UserLogin|Utaingia]], hautapaswa kujaza jina lako hapa mwenyewe)</small.',
	'commentbox-log' => 'Maoni mapya',
	'commentbox-first-comment-heading' => '==Maoni==',
	'commentbox-regex' => '/\\n==\\s*Maoni\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Hitilafu wakati wa kuweka maoni',
	'commentbox-error-page-nonexistent' => 'Ukarasa huu haupo!',
	'commentbox-error-namespace' => 'Maoni hayakubaliki katika Chagua eneo la wiki!',
	'commentbox-error-empty-comment' => 'Maoni matupu hawaruhusiwi!',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author TRYPPN
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'commentbox-savebutton' => 'கருத்துரையைச் சேமிக்கவும்',
	'commentbox-name' => 'பெயர்:',
	'commentbox-log' => 'புதிய கருத்துக்கள்',
	'commentbox-first-comment-heading' => '== கருத்துக்கள் ==',
	'commentbox-errorpage-title' => 'கருத்துரை உருவாக்குவதில் பிழை',
	'commentbox-error-page-nonexistent' => 'இந்தப் பக்கம் இல்லை!',
	'commentbox-error-namespace' => 'இப் பெயர்வெளியில் கருத்துரைகளுக்கு அனுமதியில்லை!',
	'commentbox-error-empty-comment' => 'வெற்றுக் கருத்துரைகளுக்கு அனுமதி இல்லை !',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Veeven
 * @author చక్రవర్తి
 */
$messages['te'] = array(
	'commentbox-desc' => 'కొన్ని పేజీలకు వ్యాఖ్యల పెట్టెని చేరుస్తుంది',
	'commentbox-intro' => '== ఒక వ్యాఖ్యని చేర్చండి... ==
ఈ పుటపై మీరు వ్యాఖ్యానించేది ఏమైనా ఉందా? దాన్ని ఇక్కడ ఇవ్వండి లేదా <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} నేరుగా పుటని మార్చండి]</span>.',
	'commentbox-savebutton' => 'వ్యాఖ్యని భద్రపరచు',
	'commentbox-name' => 'పేరు:',
	'commentbox-name-explanation' => '<small>(చిట్కా: మీరు [[Special:UserLogin|ప్రవేశిస్తే]], మీ పేరుని ఇక్కడ మానవీయంగా పూరించనవసరం ఉండదు.)</small>',
	'commentbox-log' => 'కొత్త వ్యాఖ్యలు',
	'commentbox-first-comment-heading' => '== వ్యాఖ్యలు ==',
	'commentbox-regex' => '/\\n==\\s*వ్యాఖ్యలు\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'వ్యాఖ్యని సృష్టించునప్పుడు పొరపాటు జరిగింది',
	'commentbox-error-page-nonexistent' => 'ఈ పేజీ లేనే లేదు!',
	'commentbox-error-namespace' => 'ఈ పేరుబరిలో వ్యాఖ్యలకు అనుమతి లేదు!',
	'commentbox-error-empty-comment' => 'ఖాళీ వ్యాఖ్యలని అనుమతించము!',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'commentbox-name' => 'Naran:',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'commentbox-name' => 'At:',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'commentbox-desc' => 'Nagdaragdag ng isang kahon ng kumento sa partikular na mga pahina',
	'commentbox-intro' => '== Magdagdag ng puna... ==
Mayroon kang kumento sa pahinang ito? Idagdag iyon dito o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} tuwirang baguhin ang pahina]</span>.',
	'commentbox-savebutton' => 'Sagipin ang puna',
	'commentbox-name' => 'Pangalan:',
	'commentbox-name-explanation' => '<small>(Balato: Kapag [[Special:UserLogin|lumagda ka]], hindi mo kailangang kinakamay na ipasok ang pangalan mo rito)</small>',
	'commentbox-log' => 'Bagong mga puna',
	'commentbox-first-comment-heading' => '== Mga puna ==',
	'commentbox-regex' => '\\n==\\s*Mga kumento\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Kamalian habang nililikha ang puna',
	'commentbox-error-page-nonexistent' => 'Hindi umiiral ang pahinang ito!',
	'commentbox-error-namespace' => 'Hindi pinapahintulutan ang mga kumento sa loob ng puwang na pampangalang ito!',
	'commentbox-error-empty-comment' => 'Hindi pinapahintulutan ang mga kumentong walang laman!',
);

/** Turkish (Türkçe)
 * @author Karduelis
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'commentbox-desc' => 'Belirli sayfalara bir yorum kutusu ekler',
	'commentbox-intro' => '== Bir yorum ekle... ==
Bu sayfa ile ilgili bir yorumunuz mu var? Buraya ekleyin ya da <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} direkt olarak sayfayı değiştirin]</span>.',
	'commentbox-savebutton' => 'Yorumu kaydet',
	'commentbox-name' => 'İsim:',
	'commentbox-name-explanation' => '<small>(İpucu: [[Special:UserLogin|Oturum açmanız]] halinde, adınızı buraya manuel olarak girmek zorunda kalmayacaksınız)</small>',
	'commentbox-log' => 'Yeni yorumlar',
	'commentbox-first-comment-heading' => '==Yorumlar ==',
	'commentbox-regex' => '/\\n==\\s*Yorumlar\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Yorumu oluşturmada hata',
	'commentbox-error-page-nonexistent' => 'Bu sayfa mevcut değil!',
	'commentbox-error-namespace' => 'Bu isim alanında yoruma izin verilmiyor!',
	'commentbox-error-empty-comment' => 'Boş yorumlara izin verilmiyor!',
);

/** Ukrainian (українська)
 * @author Prima klasy4na
 * @author Sodmy
 * @author Тест
 */
$messages['uk'] = array(
	'commentbox-desc' => 'Додає поле коментаря до певних сторінок',
	'commentbox-intro' => '== Додавання коментаря... ==
У вас є коментар до цієї сторінки? Додайте його тут або <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} безпосередньо редагуйте сторінку]</span>.',
	'commentbox-savebutton' => 'Зберегти коментар',
	'commentbox-name' => 'Назва:',
	'commentbox-name-explanation' => "<small>(Порада: Якщо ви [[Special:UserLogin|увійдете в систему]], вам не потрібно буде заповнювати своє ім'я вручну)</small>",
	'commentbox-log' => 'Нові коментарі',
	'commentbox-first-comment-heading' => '== Коментарі ==',
	'commentbox-regex' => '/\\n==\\s*Коментарі\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Помилка при створенні коментаря',
	'commentbox-error-page-nonexistent' => 'Цієї сторінки не існує!',
	'commentbox-error-namespace' => 'Коментарі не дозволені в цьому просторі назв!',
	'commentbox-error-empty-comment' => 'Порожні коментарі не дозволені!',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'commentbox-savebutton' => 'تبصرہ محفوظ کریں',
	'commentbox-name' => 'نام:',
);

/** vèneto (vèneto)
 * @author Candalua
 * @author Vajotwo
 */
$messages['vec'] = array(
	'commentbox-intro' => '== Zonta on comento ... ==
Gheto comenti so sta paxena? Zonta qui o <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} modifega diretamente a paxena]</span>.',
	'commentbox-savebutton' => 'Salva comento',
	'commentbox-name' => 'Nome:',
	'commentbox-name-explanation' => "<small>(Sujerimento: Se se [[Special:UserLogin|effetua l'acesso]], non se deve inserire manualmente qui el proprio nome)</small>",
	'commentbox-log' => 'Novi comenti',
	'commentbox-first-comment-heading' => '== Comenti ==',
	'commentbox-regex' => '/\\n==\\s*Comenti\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => 'Erore durante a creasion del comento',
	'commentbox-error-page-nonexistent' => 'Sta paxena non esiste',
	'commentbox-error-namespace' => 'No i xe amessi comenti in sto namespace',
	'commentbox-error-empty-comment' => 'Comenti vodi no i xe amessi!',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'commentbox-name' => 'Nimi:',
	'commentbox-first-comment-heading' => '== Kommentarijad ==',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'commentbox-name' => 'Tên:',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'commentbox-name' => 'נאָמען',
);

/** Simplified Chinese (中文（简体）‎)
 * @author PhiLiP
 * @author Sweeite012f
 * @author Xiaomingyan
 * @author 阿pp
 */
$messages['zh-hans'] = array(
	'commentbox-desc' => '于特定页面添加注释框',
	'commentbox-intro' => '添加评论
是否对此页内容有意见？请将意见添加在此或
直接修改此页',
	'commentbox-savebutton' => '保存注释',
	'commentbox-name' => '名称：',
	'commentbox-name-explanation' => '<small>(提示：[[Special:UserLogin|登入]]后不需要手动填写姓名)</small>',
	'commentbox-log' => '新评论',
	'commentbox-first-comment-heading' => '== 评论 ==',
	'commentbox-regex' => '/\\n==\\s*评论\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => '创建注释时出错',
	'commentbox-error-page-nonexistent' => '此页面不存在 ！',
	'commentbox-error-namespace' => '此名字空间禁止使用评论！',
	'commentbox-error-empty-comment' => '不允许使用空注释 ！',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Mark85296341
 */
$messages['zh-hant'] = array(
	'commentbox-desc' => '於特定頁面添加註釋框',
	'commentbox-intro' => '添加評論
是否對此頁內容有意見？請將意見添加在此或
直接修改此頁',
	'commentbox-savebutton' => '保存注釋',
	'commentbox-name' => '名稱：',
	'commentbox-name-explanation' => '<small>(提示：[[Special:UserLogin|登入]]後不需要手動填寫姓名)</small>',
	'commentbox-log' => '新評論',
	'commentbox-first-comment-heading' => '== 注釋 ==',
	'commentbox-regex' => '/\\n==\\s*注釋\\s*==\\s*\\n/i',
	'commentbox-errorpage-title' => '創建注釋時出錯',
	'commentbox-error-page-nonexistent' => '該頁面不存在！',
	'commentbox-error-namespace' => '此名字空間禁止使用評論！',
	'commentbox-error-empty-comment' => '不允許使用空注釋 ！',
);
