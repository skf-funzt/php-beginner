<pre>
<?php

class CounterClasses {
    private static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

$counter1 = new CounterClasses();
$counter2 = new CounterClasses();
$counter3 = new CounterClasses();
echo "Number of instances created: " 
    . CounterClasses::getCount() . "\n";
?>
</pre>
