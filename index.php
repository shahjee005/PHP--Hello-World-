<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example </title>
</head>
<body>
    <h1>PHP Example! </h1>
    <?php 
    echo 'Hello, World!';
    echo (8+11); //19

 // $ sign used for variables 

 $myVar='Hellow, World!'; 
    echo $myVar; //output 
//Single quote '' is considered as no parsing string whereas "" is considerd as parsing string 
    $name='John';
    $name2='Doe';
    $greeting= "My name is:{$name}2"; // variabls name canot start with numbers 
    echo $greeting;

//Concatination operator in PHP is (.) not + as we have in html . 
    $fullgreeting='My name is:'. $name;
    echo $fullgreeting;
//Datatypes 
    $myInteger= 400;
    $myFloat=40.50;
    $myBoolean= TRUE;
    $mySecondBoolean= false;
    $myString= 'Hellow, World!';
    $myObject = new stdClass();
    $myNull= NULL;
    $myArray= array( $myInteger,$myFloat,$myBoolean,$mySecondBoolean,$myString,$myObject,$myNull);
    // <pre> sring</pre>
    echo'<pre>';
    var_dump($myArray);
    echo'<pre>';

    ?>
</body>
</html>