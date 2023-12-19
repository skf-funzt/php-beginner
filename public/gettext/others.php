<?php
// Get the browser's language
$browserLocale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Map the browser's language to a locale
$locale = match ($browserLocale) {
  'de' => 'de_DE',
  'fr' => 'fr_FR',
  'es' => 'es_ES',
  default => 'en_EN',
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

// Format a date
$dateFormatter = new IntlDateFormatter($locale, IntlDateFormatter::LONG, IntlDateFormatter::NONE);
echo $dateFormatter->format(new DateTime());

echo '<br>';

// Format a currency
$numberFormatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
echo $numberFormatter->formatCurrency(1234.56, 'EUR');

echo '<br>';

// Format a number
$numberFormatter = new NumberFormatter($locale, NumberFormatter::DECIMAL);
echo $numberFormatter->format(1234.56);
?>