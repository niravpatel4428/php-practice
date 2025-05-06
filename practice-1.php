<!DOCTYPE html>
<html>
<body>
<pre>

/* array splice means remove */
<?php
    $cars = array("volvo","BMW","Toyota");
    array_splice($cars, 1, 2);
    var_dump($cars);
?>

/* remove array from associative array */
<?php
    $car1 = array("volvo","BMW","Toyota");
    unset($car1[1]);
    var_dump($car1);
?>

/* Remove Multiple Array Items */
<?php
    $car2 = array("volvo","BMW","Toyota");
    unset($car2[0],$car2[1]);
    var_dump($car2);
?>

/* Remove the Last Item */
<?php
    $cars3 = array("volvo","BMW","toyota");
    array_pop($cars3); //Last item remove
    array_shift($cars3); //first Item remove
    var_dump($cars3);
?>

/* array in ascending alphabetical order start */
<?php
    $cars4 = array(10,2,4,12,-4);
    // $cars4 = array("volvo","BMW","toyota");
    sort($cars4);
    // rsort($cars4); descending order

    $clength = count($cars4);
    for ($x = 0; $x<$clength; $x++)
    {
        echo $cars4[$x];
        echo "<br>";
    }
?>

/* array in ascending alphabetical order end */

/* Array in associative */
<?php
    echo "<br/>";
    $cars5 = array("brand"=>"ford", "model"=>"Mustang", "year"=>1964);
    var_dump($cars5);
?>


    <?php
        echo "<br/>";
        //storing data in variable
        $name = "Nik";
        $age = 35;
        $city = "Rajkot";

        //contant define
        define("COUNTRY", "India");

        //Output the information
        echo "My name is $name. I am $age years old and I live in $city, " . COUNTRY . ".";

    ?>

    //Data Types in PHP
    <?php
        echo "<br/>";

        //String
        $name="Nik";
        
        //Integer 
        $age=35;

        //Float
        $height=5.9;

        //Boolean
        $isStudent=true;

        //Array
        $color=array("Red","Green","Blue");

        //Null
        $nothing=  NULL;

        //Display  the type and value
        var_dump($name);
        var_dump($age);
        var_dump($height);  
        var_dump($isStudent);
        var_dump($color);
        var_dump($nothing);  
    ?>

    //Data type  in PHP
    <?php
        echo "<br/>";

        //string
        $productName="Laptop";
        $productPrice = 499.99;
        $productStock = 25;
        $isAvailable = true;
        $productTags = array("electronics","computer","new");
        $discount = NULL;

        //Display  the type and value
        echo "<br/>";
        var_dump($productName);
        var_dump($productPrice);
        var_dump($productStock);
        var_dump($isAvailable);
        var_dump($productTags);
        var_dump($discount);
    ?>



    <?php
        echo "<br/>";

        $a = 10;
        $b = 3;

        echo "Addition: " . ($a + $b) . "<br>";
        echo "Is a greater than b? ";
        if ($a > $b && $b != 0) {
            echo "Yes";
        } else {
            echo "No";
        }
    ?>

    //Mini-Challenge: PHP Operators Edition

    <?php
        echo "<br/>";

        $marks = 75;
        $total = 100;

        $percentage1 = ($marks / $total) * 100;
        echo "percentage: " . $percentage1 . "<br/>";

        // Pass or fail
        if ($percentage1 >= 35) {
            echo "Status: Passed<br/>";
        } else {
            echo "Status: Failed<br/>";
        }


        if ($percentage1 > 90)
        {
            echo "Grade: A+";
        }
        elseif( ($percentage1 >= 75) && ($percentage1 <= 90))
        {
            echo "Grade: A";
        }
        elseif( ($percentage1 >= 50) && ($percentage1 <= 74))
        {
            echo "Grade: B";
        }
        else{
            echo "Grade: C";
        }
    ?>

    <?php
        echo "<br/>";

        function generateResult($marks, $total){
            if ($total == 0 || $marks > $total) {
                echo "Invalid input.<br/>";
                return;
            }

            $percentage1 = ($marks/$total) * 100;
            echo "Marks: $marks / $total<br/>";
            echo "percentage: " . $percentage1 . "<br/>";

            // Pass or fail
            if ($percentage1 >= 35) {
                echo "Status: Passed<br/>";
            } else {
                echo "Status: Failed<br/>";
            }

            if ($percentage1 > 90)
            {
                echo "Grade: A+";
            }
            elseif( ($percentage1 >= 75) && ($percentage1 <= 90))
            {
                echo "Grade: A";
            }
            elseif( ($percentage1 >= 50) && ($percentage1 <= 74))
            {
                echo "Grade: B";
            }
            else{
                echo "Grade: C";
            }
        }

        generateResult(75,100);
    ?>



    <?php 
        $students = array("Nirav", "Sanjay","Mayur","Harsh","Ketan");
        foreach ($students as $name)
        {
            echo "Hello, $name<br/>";
        }   
    ?>

    <?php 
        $students = array("Nirav", "Sanjay","Mayur","Harsh","Ketan");
        foreach ($students as $name)
        {
            $nameLength = strlen($name);
            if($nameLength > 5)
            {
                echo "<br/> Hello, $name! You have a long name.";
            }
            else{
                echo "<br/> Hello, $name! Your name is short.";
            }
        }   
    ?>

    <?php 
        for($num = 1; $num <= 20; $num++)
        {
            if($num%2 == 0){
                echo "<br/> $num is even";
            }
            else{
                echo "<br/> $num is odd";
            }
        }
    ?>

    <?php 
        $results = ["Nirav" => 91,"Sanjay" => 76,"Mayur" => 62,"Harsh" => 48,"Ketan" => 33];
        foreach ($results as $name=>$marks)
        {
            if($marks >= 90){
               echo "<br/> Name:$name , Marks: $marks, Grade: A+";
            }
            elseif($marks >= 75){
                echo "<br/> Name:$name , Marks: $marks, Grade: A";
            }
            elseif($marks >= 50){
                echo "<br/> Name:$name , Marks: $marks, Grade: B";
            }
            else{
                echo "<br/> Name:$name , Marks: $marks, Grade: C";
            }
        }
    ?>

    <?php 
        function getGrade($marks){
            if($marks >= 90){
                return "A+";
             }
             elseif($marks >= 75){
                return "A";
             }
             elseif($marks >= 50){
                return "B";
             }
             else{
                return "C";
             }
        }
        
        $results = ["Nirav" => 91,"Sanjay" => 76,"Mayur" => 62,"Harsh" => 48,"Ketan" => 33];

        foreach ($results as $name=>$marks)
        {
            $grade = getGrade($marks);
            echo "<br/>Name: $name, Marks: $marks, Grade: $grade";
        }
    ?>

    <?php

        function generateReport($marks,$total){
            
            $Percentage = ($marks / $total) * 100;

            if($Percentage >= 90){
                return ["grade" => "A+", "percentage" => $Percentage ];
             }
             elseif($Percentage >= 75){
                return ["grade" => "A", "percentage" => $Percentage ];
             }
             elseif($Percentage >= 50){
                return ["grade" => "B", "percentage" => $Percentage ];
             }
             else{
                return ["grade" => "C", "percentage" => $Percentage ];
             }
        }
        
        // Assume total marks for all is 100
        $total = 100;

        $results = ["Nirav" => 91,"Sanjay" => 76,"Mayur" => 62,"Harsh" => 48,"Ketan" => 33];

        foreach ($results as $name1=>$marks)
        {
            $result = generateReport($marks, $total);
            $percentage = number_format($result['percentage'], 2); // nice formatting
            $grade = $result['grade'];
            echo "Name: $name1, Marks: $marks/$total, Percentage: $percentage%, Grade: $grade<br/>";
        }
       
    ?>

    <?php 
        function calculate($num1, $num2, $operation){
            if($operation == "add")
            {
                return $num1 + $num2;
            }
            elseif($operation == "multiply")
            {
                return $num1 * $num2;
            }
            elseif($operation == "divide"){
                if($num2 == 0){
                    return "Cannot divide by zero";
                }
                else{
                    return $num1/$num2;
                }
            }
            else{
                return "Invalid operation";
            }
        }

        echo "<br/>" . calculate(10, 5, 'add');      // Output: 15  
        echo "<br/>" . calculate(10, 0, 'divide');   // Output: Cannot divide by zero  
        echo "<br/>" . calculate(6, 3, 'multiply');  // Output: 18

      
    ?>




</pre>
</body>
</html>
