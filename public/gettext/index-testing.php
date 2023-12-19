<?php
// Sprache auf Deutsch setzen
// Wichtig putenv() verwenden, da setlocale() manchmal nicht aussreicht
$locale = 'de_DE.utf8';
$results = putenv("LC_ALL=$locale");
if (!$results) {
    echo ('putenv failed <br>');
}
$results = setlocale(LC_ALL, $locale);
if (!$results) {
  echo ("setlocale failed: locale function is not available on this platform, or the given local $locale does not exist in this environment<br>");
}

// Angeben des Pfads der Übersetzungstabellen
$domain = 'myapp';
$results = bindtextdomain($domain, "./../../locale");
echo 'new text domain is set: ' . $results. "<br>";
bind_textdomain_codeset($domain, 'UTF-8');

// Domain auswählen
$results = textdomain($domain);
echo 'current message domain is set: ' . $results. "<br>";

// Die Übersetzung wird nun in ./locale/de_DE/LC_MESSAGES/meinePHPApp.mo gesucht

// Ausgeben des Test-Textes
echo gettext("Welcome to my PHP website");

echo '<br>';

// Oder verwenden Sie den Alias _() für gettext()
echo _("Have a nice day");
?>