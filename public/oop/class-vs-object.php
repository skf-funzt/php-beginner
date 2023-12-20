<pre>
<?php
class MyClass {
    public static $staticVar = "I'm static!";

    public function staticValue() {
        return self::$staticVar;
    }

    public static function staticMethod() {
        return "I'm a static method!";
    }
}

echo "Calling MyClass::\$staticVar: " . MyClass::$staticVar . "\n";

MyClass::$staticVar = "I've been changed!";
echo "Calling MyClass::\$staticVar: " . MyClass::$staticVar . "\n";
echo "<br>";

$myClass = new MyClass();
echo "Calling \$myClass->staticValue(): " . $myClass->staticValue() . "\n";

echo "Calling MyClass::staticMethod(): " . MyClass::staticMethod() . "\n";
?>
</pre>
