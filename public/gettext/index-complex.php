<?php
// Get the browser's language
$browserLocale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Map the browser's language to a locale
$locale = match ($browserLocale) {
  'de' => 'de_DE.utf8',
  'fr' => 'fr_FR.utf8',
  'es' => 'es_ES.utf8',
  default => 'en_EN.utf8',
};

// Set the locale
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);

// Specify the path of the translation tables
$domain = 'myapp';
bindtextdomain($domain, "./../../locale");
bind_textdomain_codeset($domain, 'UTF-8');

// Select the domain
textdomain($domain);

// Output the test text
echo gettext("Welcome to my PHP website");

echo '<br>';

// Or use the alias _() for gettext()
echo _("Have a nice day");
?>