<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

use function PHPSTORM_META\override;

        function sayHello()
        {
            echo "<h2>Hello PHP Function</h2>";
        }
        sayHello();


        function sayHelloAgain($name)
        {
            echo "Hello $name<br>";
        }

        sayHelloAgain("Sonoo");
        sayHelloAgain("Vimal");
        sayHelloAgain("John");
        echo "<br>";


        function adder(&$str2)
        {
            $str2 .= "Call By Reference";
        }
        $str = 'Hello ';
        adder($str);
        echo $str;
        echo "<br><br>";


        $num = 3;
        function cube($n)
        {
            return $n * $n * $n;
        }
        echo "Cube of $num is: ".cube($num);

        echo "<hr style='display: block'>";

        echo "<h2>PHP Parameterized Function</h2>";
        //Adding two numbers
        function add($x, $y)
        {
            $sum = $x + $y;
            echo "Sum of two numbers is = $sum <br><br>";
        }
        add(467, 943);

        //Subtractic two numbers
        function sub($x, $y)
        {
            $diff = $x - $y;
            echo "Difference of two numbers is = $diff <br><br>";
        }
        sub(943, 467);

        echo "<hr style='display: block'>";

        //call function, get two argument through input box and click on add or sub button
        if(isset($_POST['add']))
        {
            //call add() function
            add($_POST['first_num'], $_POST['second_num']);
        }

        if(isset($_POST['sub']))
        {
            //call sub() function
            sub($_POST['first_num'], $_POST['second_num']);
        }

    ?>

        <br>

        <form method="POST">
            Enter first number: <input type="number" name="first_num"/>
            <br><br>
            Enter second number: <input type="number" name="second_num"/>
            <br><br>
            <input type="submit" name="add" value="ADDITION"/>
            <input type="submit" name="sub" value="SUBTRACTION"/>
        </form>

    <?php

        echo "<hr style='display: block'>";

        echo "<h2>PHP Call By Reference</h2>";
        function adderRef(&$str2)
        {
            $str2 .= 'Call By Reference';
        }
        $str = 'This is ';
        adderRef($str);
        echo $str;

        echo "<hr style='display: block'>";

        echo "<h2>PHP Variable Length Argument Function</h2>";
        function addVarLen(...$numbers)
        {
            $sum = 0;
            foreach($numbers as $n)
            {
                $sum += $n;
            }
            return $sum;
        }
        echo addVarLen(1,2,3,4,5);

        echo "<hr style='display: block'>";
        echo "<h2>PHP Recursive Function</h2>";
        function display($number)
        {
            if($number <= 5)
            {
                echo "$number <br>";
                display($number+1);//increment by recalling the function
            }
        }
        display(1);//pass number 1 to function

        echo "<hr style='display: block'>";
        echo "<h2>PHP Factorial Function</h2>";
        function factorial($n)
        {
            if($n < 0)
            {
                return -1;//wrong value
            }
            if($n == 0)
            {
                return 1;//terminate condiiton
            }
            return ($n * factorial($n-1));
        }
        echo factorial(5);

        echo "<hr style='display: block'>";
        echo "<h2>PHP Arrays</h2>";
        $size = array("Big", "Medium", "Short");
        foreach($size as $s)
        {
            echo "Size is $s<br>";
        }
        echo "Count is ".count($size);

        echo "<hr style='display: block'>";
        echo "<h2>PHP Associative Array</h2>";
        $salary = array(
            "Sonoo" => "550000", 
            "Vimal" => "250000", 
            "Ratan" => "200000");
        foreach($salary as $k => $v)
        {
            echo "Key: $k Value: $v <br>";
        }

        echo "<hr style='display: block'>";
        echo "<h2>PHP Multidimensional Array</h2>";

        $emp = array(
            array(1, "sonoo", 400000),
            array(2, 'john', 500000),
            array(3, 'rahul', 300000)
        );

        for($r=0; $r<3; $r++)
        {
            for($c=0; $c<3; $c++)
            {
                echo $emp[$r][$c]. " ";
            }
            echo "<br>";
        }

        echo "<hr style='display: block'>";
        echo "<h2>PHP array() function</h2>";

        $season=array("summer","winter","spring","autumn");    
        echo "Season are: $season[0], $season[1], $season[2] and $season[3]";

        echo "<hr style='display: block'>";
        echo "<h2>PHP array_change_key_case() function</h2>";
        $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
        print_r(array_change_key_case($salary,CASE_UPPER));   

        echo "<hr style='display: block'>";
        echo "<h2>PHP array_chunk() function</h2>";
        $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
        print_r(array_chunk($salary,2));   

        echo "<hr style='display: block'>";
        echo "<h2>PHP count() function</h2>";
        $season=array("summer","winter","spring","autumn");    
        echo count($season);    

        echo "<hr style='display: block'>";
        echo "<h2>PHP sort() function</h2>";
        $season=array("summer","winter","spring","autumn");    
        sort($season);  
        print_r($season);
        echo "<br>";
        foreach( $season as $s )    
        {    
        echo "$s<br />";    
        }    

        echo "<hr style='display: block'>";
        echo "<h2>PHP array_reverse() function</h2>";
        $season=array("summer","winter","spring","autumn");
        print_r($season);
        echo "<br>";    
        $reverseseason=array_reverse($season);  
        foreach( $reverseseason as $s )    
        {    
        echo "$s<br />";    
        }    

        echo "<hr style='display: block'>";
        echo "<h2>PHP array_search() function</h2>";
        $season=array("summer","winter","spring","autumn"); 
        print_r($season);
        echo "<br>";    
        echo "search for 'spring'";
        echo "<br>";
        $key=array_search("spring",$season);  
        echo $key;    

        echo "<hr style='display: block'>";
        echo "<h2>PHP array_intersect() function</h2>";
        $name1=array("sonoo", "john", "vivek", "smith");
        $name2=array("umesh", "sonoo", "kartik", "smith");
        print_r($name1);
        echo "<br>";    
        print_r($name2);
        echo "<br>";    
        $name3=array_intersect($name1, $name2);
        foreach($name3 as $n)
        {
            echo "$n<br>";
        }

    ?>

    <hr style="display: block">

    <br><br>
    <button type="button" id="redirect">Previous Page</button>
        <script>
            document.querySelector('#redirect')
                .addEventListener('click', () => {
                    window.location.href = 'index.php';
                });
        </script>
</body>
</html>