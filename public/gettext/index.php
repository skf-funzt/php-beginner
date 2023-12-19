<?php
// Sprache auf Deutsch setzen
// Wichtig putenv() verwenden, da setlocale() manchmal nicht aussreicht
$locale = 'de_DE.utf8';
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);

// Angeben des Pfads der Übersetzungstabellen
$domain = 'myapp';
bindtextdomain($domain, "./../../locale");
bind_textdomain_codeset($domain, 'UTF-8');

// Domain auswählen
textdomain($domain);

// Ausgeben des Test-Textes
echo gettext("Welcome to my PHP website");

echo '<br>';

// Oder verwenden Sie den Alias _() für gettext()
echo _("Have a nice day");
?>