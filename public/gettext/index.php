<?php
// Sprache auf Deutsch setzen
// Wichtig putenv() verwenden, da setlocale() manchmal nicht aussreicht
putenv('LC_ALL=de_DE');
setlocale(LC_ALL, 'de_DE');

// Angeben des Pfads der Übersetzungstabellen
bindtextdomain("gettextApp", "./locale");

// Domain auswählen
textdomain("localhost");

// Die Übersetzung wird nun in ./locale/de_DE/LC_MESSAGES/meinePHPApp.mo gesucht

// Ausgeben des Test-Textes
echo gettext("Willkommen in meiner PHP-Anwendung");

// Oder verwenden Sie den Alias _() für gettext()
echo _("Einen schönen Tag noch");
?>