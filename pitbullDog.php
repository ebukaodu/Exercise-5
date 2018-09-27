<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice #5</title>
</head>
<body>

<?php
// Practice 1
// Step 1: Create a class called Dog
// Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
// Step 3: Make a method named ShowAll that echos all the properties
// Step 4: Instantiate the class / create object and call it pitbull
// Step 5: Call the method ShowAll

class Dog {
    public $eye_colors = "brown";
    public $nose = "long" ;
    public $fur_color = "white";

    public function showAll(){
        echo "Eye colour = " . $this->eye_colors . "<br>";
        echo "nose = " . $this->nose . "<br>";
        echo "Fur colour = " . $this->fur_color . "<br>";

    }
}

$pitbull = new Dog();
echo $pitbull->showAll() ;
?>

</body>
</html>