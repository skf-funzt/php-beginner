<p>
<?php
  $int = 42;
  $str = "1337";
  $str2 = "PHP";
  $float = 9.001;

  var_dump($int); print('<br>');
  var_dump($str); print('<br>');
  var_dump($str2); print('<br>');
  var_dump($float); print('<br>');
?>
</p>
<p>
<?php
  $intToStr = (string) $int;
  $strToInt = (int) $str;
  $strToInt2 = (int) $str2;
  $floatToInt = (int) $float;

  var_dump($intToStr); print('<br>');
  var_dump($strToInt); print('<br>');
  var_dump($strToInt2); print('<br>');
  var_dump($floatToInt); print('<br>');
?>
</p>