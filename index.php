<?php
class Animal
{
    public static $dog = "bow bow";
    public function dog()
    {
        return SELF::$dog;
    }
}
$animal = new Animal();
echo $animal->dog();
?>
