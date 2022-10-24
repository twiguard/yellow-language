<?php
// Czech extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/czech

class YellowCzech {
    const VERSION = "0.8.36";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefault($this->getDefault());
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "cs"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="cs") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: cs
        LanguageLocale: cs_CZ
        LanguageDescription: Čeština
        LanguageTranslator: Ufo Vyhuleny
        BerlinDescription: Berlin is a theme inspired by Dieter Rams.
        BlogDescription: Blog for your website.
        BlogBy: Vytvořil
        BlogTag: Tags:
        BlogMore: Čti dále…
        BreadcrumbDescription: Breadcrumb navigation.
        BreadcrumbNavigation: Breadcrumb
        BundleDescription: Bundle website files.
        ChineseDescription: Chinese/简体中文 with language 'zh'.
        CommandDescription: Command line of the website.
        ContactDescription: Email contact page.
        ContactName: Jméno:
        ContactEmail: Email:
        ContactMessage: Zpráva:
        ContactConsent: Souhlasím s tím, aby tato webová stránka uchovala mou zprávu.
        ContactButton: Odeslat mou zprávu
        ContactMailSpam: [Spam]
        ContactMailHeader: You have received a message from @sender:
        ContactMailFooter: This email was sent via @sitename - @title
        ContactStatusNone: Zde můžete napsat svoje postřehy.
        ContactStatusIncomplete: Prosím, vyplňte všechna pole.
        ContactStatusInvalid: Zadejte platný email.
        ContactStatusReview: Please remove links from the message.
        ContactStatusDone: Email úspěšně odeslán. Děkuji!
        ContactStatusError: Email nemůže být odeslán, zkuste to prosím později!
        CopenhagenDescription: Copenhagen is a beautiful theme.
        CoreDescription: Základní funkce webu.
        CoreNavigation: Main
        CorePagination: Page
        CorePaginationPrevious: ← Předchozí
        CorePaginationNext: Následující →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: F Y
        CoreDateFormatMedium: Y-m-d
        CoreDateFormatLong: Y-m-d H:i
        CoreDatePast: today, yesterday, @x days ago, 1 month ago, @x months ago, 1 year ago, @x years ago, on @x
        CoreDateFuture: soon, tomorrow, in @x days, in 1 month, in @x months, in 1 year, in @x years, on @x
        CoreDateMonthsNominative: leden, únor, březen, duben, květen, červen, červenec, srpen, září, říjen, listopad, prosinec
        CoreDateMonthsGenitive: leden, únor, březen, duben, květen, červen, červenec, srpen, září, říjen, listopad, prosinec
        CoreDateWeekdays: pondělí, úterý, středa, čtvrtek, pátek, sobota, neděle
        CoreDateWeekstart: pondělí
        CoreDecimalSeparator: ,
        CoreError404Title: Soubor nenalezen
        CoreError404Text: Požadovaný soubor nebyl nalezen. Ach ne...
        CoreError420Title: Page not public
        CoreError420Text: The requested page is not public. [yellow error]
        CoreError430Title: Login failed
        CoreError430Text: The email or password is incorrect. [Please try again](#data-action-login).
        CoreError434Title: Page not found
        CoreError434Text: The requested page was not found. [You can create this page](#data-action-edit).
        CoreError435Title: Page not found
        CoreError435Text: The requested page has been deleted. [You can restore this page](#data-action-restore).
        CoreError450Title: Update error
        CoreError450Text: Can't connect to the update server. An Internet connection is required.
        CoreError500Title: Server error
        CoreError500Text: Something went wrong. [yellow error]
        CzechDescription: Czech/Čeština with language 'cs'.
        DanishDescription: Danish/Dansk with language 'da'.
        DisqusDescription: Show Disqus comments on blog.
        DraftDescription: Support for draft pages.
        DraftPageError: Please log in.
        DutchDescription: Dutch/Nederlands with language 'nl'.
        EditDescription: Upravte svůj web ve webovém prohlížeči.
        EditLoginTitle: Vítejte
        EditLoginEmail: Email:
        EditLoginPassword: Heslo:
        EditLoginForgot: Zapomenuté heslo?
        EditLoginSignup: Chcete vytvořit účet?
        EditLoginButton: Přihlásit se
        EditSignupTitle: Vytvořit účet
        EditSignupName: Jméno:
        EditSignupEmail: Email:
        EditSignupPassword: Heslo:
        EditSignupConsent: Souhlasím s tím, aby tyto webové stránky uchovávaly mé osobní údaje.
        EditSignupButton: Vytvořit
        EditSignupStatusNone: Zde můžete založit nový uživatelský účet.
        EditSignupStatusIncomplete: Prosím, vyplňte všechny položky.
        EditSignupStatusInvalid: Vložte email ve správném formátu.
        EditSignupStatusWeak: Vložte jiné heslo.
        EditSignupStatusShort: Zadejte delší heslo.
        EditSignupStatusNext: Účet byl vytvořen, podívejte se do emailové schránky.
        EditForgotTitle: Zapomenuté heslo
        EditForgotEmail: Email:
        EditForgotStatusNone: Vytvořit nové heslo.
        EditForgotStatusInvalid: Vložte email ve správném formátu.
        EditForgotStatusNext: Uživatelský účet byl obnoven, podívejte se do emailové schránky.
        EditRecoverTitle: Zapomenuté heslo
        EditRecoverPassword: Heslo:
        EditRecoverStatusPassword: Vložte nové heslo.
        EditRecoverStatusWeak: Vložte jiné heslo.
        EditRecoverStatusShort: Zadejte delší heslo.
        EditRecoverStatusDone: Heslo obnoveno. Díky!
        EditConfirmSubject: Potvrzení uživatelského účtu
        EditConfirmMessage: Ahoj @usershort,\n\nnyní nastal čas potvrdit nový účet. Klikněte na následující odkaz.
        EditConfirmTitle: Uživatelský účet
        EditConfirmStatusDone: Účet potvrzen a čeká na schválení. Díky!
        EditApproveSubject: Potvrzení nového uživatelského účtu
        EditApproveMessage: Ahoj @usershort,\n\nje potřeba schválit nový účet pro @useraccount. Klikněte na následující odkaz.
        EditApproveTitle: Uživatelský účet
        EditApproveStatusDone: Uživatelský účet schválen. Díky!
        EditReactivateSubject: Reactivate user account
        EditReactivateMessage: Hi @usershort,\n\nplease reactivate your user account. There were too many failed login attempts. Click the following link.
        EditReactivateTitle: Uživatelský účet
        EditReactivateStatusDone: User account reactivated. Thank you!
        EditVerifySubject: Změna uživatelského účtu
        EditVerifyMessage: Ahoj @usershort,\n\nje potřeba potvrdit změnu e-mailové adresy. Klikněte na následující odkaz.
        EditVerifyTitle: Uživatelský účet
        EditVerifyStatusDone: Elektronická adresa změněna. Díky!
        EditChangeSubject: Změna uživatelského účtu
        EditChangeMessage: Ahoj @usershort,\n\nje potřeba potvrdit změny uživatelského účtu. Klikněte na následující odkaz.
        EditChangeTitle: Uživatelský účet
        EditChangeStatusDone: Uživatelský účet změněn. Díky!
        EditRemoveSubject: Delete user account
        EditRemoveMessage: Hi @usershort,\n\nplease confirm that you want to delete your user account. Click the following link.
        EditRemoveTitle: Uživatelský účet
        EditRemoveStatusDone: User account deleted. Thank you!
        EditRecoverSubject: Obnovení uživatelského hesla
        EditRecoverMessage: Ahoj @usershort,\n\nje potřeba schválit obnovení hesla. Klikněte na následující odkaz.
        EditWelcomeSubject: Vítej uživateli
        EditWelcomeMessage: Ahoj @usershort,\n\nváš uživatelský účet byl vytvořen. Bavte se dobře.
        EditGoodbyeSubject: Goodbye
        EditGoodbyeMessage: Hi @usershort,\n\nyour user account has been deleted. Take care.
        EditAccountTitle: User
        EditAccountInformation: You can delete your user account anytime.
        EditAccountMore: Read more…
        EditAccountStatusNone: Here you can change your user account.
        EditAccountStatusInvalid: Vložte email ve správném formátu.
        EditAccountStatusTaken: Vložte jiný email.
        EditAccountStatusWeak: Vložte jiné heslo.
        EditAccountStatusShort: Zadejte delší heslo.
        EditAccountStatusNext: Nastavení uživatelského účtu změněno, podívejte se do emailové schránky.
        EditQuitTitle: Delete user account
        EditQuitStatusNone: Please enter your name to confirm.
        EditQuitStatusMismatch: Please enter a different name.
        EditQuitStatusNext: User account will be deleted, please check your emails.
        EditConfigureTitle: Website
        EditConfigureSitename: Name of the website:
        EditConfigureAuthor: Name of the webmaster:
        EditConfigureEmail: Email of the webmaster:
        EditConfigureInformation: The webmaster can approve new user accounts.
        EditConfigureStatusNone: Here you can configure your website.
        EditConfigureStatusInvalid: Please enter a valid email.
        EditUpdateTitle: O těchto stránkách
        EditUpdateStatusNone: Datenstrom Yellow je pro lidi, kteří vytváří malé webové stránky.
        EditUpdateStatusCheck: Zjišťuji nové aktualizace…
        EditUpdateStatusUpdates: K dispozici jsou následující aktualizace:
        EditUpdateStatusOk: Tento web je aktuální.
        EditOkButton: Ok
        EditCancelButton: Zrušit
        EditChangeButton: Změnit
        EditCreateButton: Vytvořit
        EditEditButton: Uložit
        EditDeleteButton: Smazat
        EditUpdateButton: Update
        EditEdit: Editovat stránku
        EditCreate: +
        EditDelete: -
        EditKeyboardLabels: Ctrl+, Alt+, Shift+, ⌘, ⌥, ⇧
        EditToolbarFormat: Format
        EditToolbarHeading: Heading
        EditToolbarH1: Heading 1
        EditToolbarH2: Heading 2
        EditToolbarH3: Heading 3
        EditToolbarParagraph: Normal text
        EditToolbarPre: Source code
        EditToolbarNotice: Notice
        EditToolbarQuote: Quote
        EditToolbarBold: Bold
        EditToolbarItalic: Italic
        EditToolbarStrikethrough: Strikethrough
        EditToolbarCode: Code
        EditToolbarList: List
        EditToolbarUl: • Unordered list
        EditToolbarOl: 1. Ordered list
        EditToolbarTl: ✓ Task list
        EditToolbarLink: Link
        EditToolbarFile: File
        EditToolbarEmojiawesome: Emoji
        EditToolbarFontawesome: Icon
        EditToolbarStatus: Status
        EditToolbarUndo: Undo
        EditToolbarRedo: Redo
        EditToolbarPreview: Preview
        EditToolbarHelp: Nápověda
        EditMailFooter: @sitename
        EditDataGenerated: This page is generated automatically.
        EditUploadProgress: Uploading file…
        EditUserDescription: Editor
        EditMenuSettings: Nastavení
        EditMenuHelp: Nápověda
        EditMenuLogout: Odhlásit
        EditYellowUrl: https://datenstrom.se/yellow/
        EditYellowHelpUrl: https://datenstrom.se/yellow/help/
        EmojiawesomeDescription: Lots and lots of emoji.
        EnglishDescription: English/English with language 'en'.
        FeedDescription: Feed with recent changes.
        FontawesomeDescription: Icons and symbols.
        FrenchDescription: French/Français with language 'fr'.
        GalleryDescription: Image gallery with popup.
        GermanDescription: German/Deutsch with language 'de'.
        GooglecalendarDescription: Embed Google calendar.
        GooglemapDescription: Embed Google map.
        HelloworldDescription: Example feature for Datenstrom Yellow.
        HelpDescription: Help for your website.
        HighlightDescription: Highlight source code.
        HungarianDescription: Hungarian/Magyar with language 'hu'.
        ImageDescription: Images and thumbnails.
        ImageDefaultAlt: Image without description
        InstagramDescription: Embed Instagram photos.
        InstallTitle: Ahoj
        InstallLanguage: Jaký je tvůj jazyk?
        InstallExtension: Co chcete udělat?
        InstallExtensionWebsite: Malý web
        InstallExtensionBlog: Malý blog
        InstallExtensionWiki: Malá wiki
        InstallButton: Instalovat
        InstallHomeTitle: Home
        InstallHomeText: [image photo.jpg Example rounded]\n\n[edit - You can edit this page in a web browser] or use a text editor. [Get help](https://datenstrom.se/yellow/help/).
        InstallAboutTitle: About
        InstallAboutText: [Made with Datenstrom Yellow](https://datenstrom.se/yellow/).
        InstallDefaultTitle: Page
        InstallDefaultText: This is a new page.
        InstallBlogTitle: Blog page
        InstallBlogText: This is a new blog page.
        InstallWikiTitle: Wiki page
        InstallWikiText: This is a new wiki page.
        InstallExampleImage: This is an example image
        ItalianDescription: Italian/Italiano with language 'it'.
        JapaneseDescription: Japanese/日本語 with language 'ja'.
        MarkdownDescription: Text formatting for humans.
        MetaDescription: Meta data for humans and machines.
        NorwegianDescription: Norwegian/Norsk with language 'nb'.
        ParsedownDescription: Text formatting for humans.
        ParisDescription: Paris is an elegant theme.
        PolishDescription: Polish/Polski with language 'pl'.
        PortugueseDescription: Portuguese/Português with language 'pt'.
        PreviousnextDescription: Show links to previous/next page.
        PreviousnextNavigation: Page
        PreviousnextPagePrevious: ← Předchozí: @title
        PreviousnextPageNext: Následující: @title →
        PrivateDescription: Support for password-protected pages.
        PrivatePageError: Please enter the password.
        PublishDescription: Make and publish extensions.
        RussianDescription: Russian/Русский with language 'ru'.
        SearchDescription: Full-text search.
        SearchResultsNone: Vlož hledaný text.
        SearchResultsEmpty: Požadovaný text nenalezen.
        SearchSpecialChanges: Poslední změny
        SearchButton: Hledej
        ServeDescription: Built-in web server.
        SitemapDescription: Sitemap with all pages.
        SliderDescription: Image gallery with slider.
        SlovakDescription: Slovak/Slovenčina with language 'sk'.
        SoundcloudDescription: Embed Soundcloud audio tracks.
        SpanishDescription: Spanish/Español with language 'es'.
        StockholmDescription: Stockholm is a clean theme.
        SwedishDescription: Swedish/Svenska with language 'sv'.
        TocDescription: Table of contents.
        TrafficDescription: Create traffic analytics from log files.
        TurkishDescription: Turkish/Türkçe with language 'tr'.
        TwitterDescription: Embed Twitter messages.
        UpdateDescription: Udržujte svůj web aktuální.
        UpdateExtensionDefaultDescription: No description available.
        UpdateExtensionDeveloper: Developed by @x.
        UpdateExtensionDesigner: Designed by @x.
        UpdateExtensionTranslator: Translated by @x.
        WikiDescription: Wiki for your website.
        WikiModified: Poslední aktualizace
        WikiTag: Tags:
        WikiSpecialPages: Všechny stránky
        WikiSpecialChanges: Poslední změny
        YoutubeDescription: Embed Youtube videos.
END;
    }
}
