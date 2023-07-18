<!DOCTYPE>  
<html>  
    <body>  
        <?php  
            echo "<h2>PHP Case Sensitivity</h2>";
            echo "Hello world using echo </br>";  
            ECHO "Hello world using ECHO </br>";  
            EcHo "Hello world using EcHo </br>";  
            echo "<br>";
            $color = "black";  
            echo "My car is ". $color ."</br>";  
            echo "My dog is ". $color ."</br>";  
            echo "My Phone is ". $color ."</br>"; 
            
            echo "<hr style='display: block'>";

            echo "<h2>PHP echo: printing variable value</h2>";
            $msg="Hello PHP World";
            echo "Message is $msg";

            echo "<hr style='display: block'>";

            echo "<h2>PHP print: printing string</h2>";
            print "Hello by PHP print\n";
            print("Hello by PHP print()");
            $fname = "Armin";
            $lname = "Valdez";
            echo "<br>";
            echo "My name is: ".$fname,$lname;

            echo "<hr style='display: block'>";

            echo "<h2>PHP Variables</h2>";
            $str = "hello string";
            $x = 200;
            $y = 44.6;
            echo "string is: $str <br>";
            echo "integer is: $x <br>";
            echo "float is: $y <br>";
            echo "<h2>PHP Sum of two variables</h2>";
            $x=5;
            $y=6;
            $z=$x+$y;
            echo "Sum of $x and $y is $z";

            echo "<hr style='display: block'>";

            echo "<h2>PHP Variable Scope</h2>";
            function local_var()
            {
                $num = 45; //local variable
                echo "Local variable declared inside the function is: ".$num;
                echo "<br>";echo "<br>";
            }
            local_var();

            $name = "Armin Valdez"; //global variable
            function global_var()
            {
                global $name;
                echo "Variable inside the function: ".$name;
                echo "<br>";
            }
            global_var();
            echo "Variable outside the function: ".$name;
            echo "<br>";echo "<br>";

            $num1 = 5; //global variable
            $num2 = 13; //global variable
            function global_variables()
            {
                $sum = $GLOBALS['num1'] + $GLOBALS['num2'];
                echo "Sum of global variables is: ".$sum;
            }
            global_variables();
            echo "<br>";echo "<br>";

            echo "<hr style='display: block'>";

            echo "<h2>PHP Static Variables</h2>";
            function static_var()
            {
                static $num1 = 3; //static var
                $num2 = 6; //non-static var
                $num1++;
                $num2++;
                echo "Static: ".$num1."<br>";
                echo "Non-static: ".$num2."<br>";
            }
            static_var();
            static_var();

            echo "<hr style='display: block'>";

            echo "<h2>PHP $ and $$ Variables</h2>";
            $x = "abc";
            $$x = 200;
            echo $x."<br>";
            echo $$x."<br>";
            echo $abc;
            echo "<br><br>";

            $x = "U.P";
            $$x = "Lucknow";
            echo $x."<br>";
            echo $$x."<br>";
            echo "Capital of $x is ".$$x."<br><br>";

            $name="Cat";  
            ${$name}="Dog";  
            ${${$name}}="Monkey";  
            echo $name. "<br>";  
            echo ${$name}. "<br>";  
            echo $Cat. "<br>";  
            echo ${${$name}}. "<br>";  
            echo $Dog. "<br>";  

            echo "<hr style='display: block'>";

            echo "<h2>PHP Constant: define()</h2>";
            define("MESSAGE", "Hello PHP");
            echo MESSAGE."<br>";

            echo "<hr style='display: block'>";

            echo "<h2>PHP Constant: const keyword</h2>";
            const MESSAGE1="Hello const by PHP";  
            echo MESSAGE1."<br>";  

            define("MSG", "Hello");  
            echo MSG, "</br>";  
            echo constant("MSG")."<br>";
            
            echo "<hr style='display: block'>";

            echo "<h2>Magic Constants</h2>";

            echo "<h3>Example for __LINE__</h3>";    
            // print Your current line number i.e;4     
            echo "You are at line number " . __LINE__ . "<br><br>";  

            echo "<h3>Example for __FILE__</h3>";    
            //print full path of file with .php extension    
            echo __FILE__ . "<br><br>";  

            echo "<h3>Example for __DIR__</h3>";    
            //print full path of directory where script will be placed   
            
            echo __DIR__ . "<br><br>";  
            //below output will equivalent to above one.  
            echo dirname(__FILE__) . "<br><br>";    

            echo "<h3>Example for __FUNCTION__</h3>";    
            //Using magic constant inside function.    
            function test(){    
                //print the function name i.e; test.   
                echo 'The function name is '. __FUNCTION__ . "<br><br>";   
            }    
            test();    
            
            //Magic constant used outside function gives the blank output.    
            function test_function(){    
                echo 'Hi from test_function()';    
            }    
            test_function();    
            //give the blank output.   
            echo  __FUNCTION__ . "<br><br>";  

            echo "<h3>Example for __CLASS__</h3>";
            class JTP
            {
                public function __construct()
                {
                    ;
                }
                function getClassName()
                {
                    //print name of the class JTP.
                    echo __CLASS__. "<br><br>";
                }
            }
            $t = new JTP;
            $t->getClassName();

            //in case of multiple classes
            class base
            {
                function test_first()
                {
                    //will always print parent class which is base here.
                    echo __CLASS__;
                }
            }
            class child extends base
            {
                public function __construct()
                {
                    ;
                }
            }
            $t = new child;
            $t->test_first();

            echo "<h3>Example for __TRAIT__</h3>";
            trait created_trait
            {
                function jtp()
                {
                    //will print name of the trait i.e; created_trait
                    echo __TRAIT__;
                }
            }
            class Company
            {
                use created_trait;
            }
            $a = new Company;
            $a->jtp();

            echo "<h3>Example for __METHOD__</h3>";
            class method
            {
                public function __construct() 
                {
                    //print method::__construct
                    echo __METHOD__. "<br><br>";
                }   
                public function meth_fun()
                {
                    //print method::meth_fun
                    echo __METHOD__;
                }
            }
            $a = new method;
            $a->meth_fun();

            echo "<h3>Example for __NAMESPACE__</h3>";
            class name
            {
                public function __construct()
                {
                    echo 'This line will print on calling namespace.';
                }
            }
            $class_name = __NAMESPACE__ . '\name';
            $a = new $class_name;


            echo "<h3>Example for CLASSNAME::CLASS</h3>";
            class javatpoint
            {
            }
            echo javatpoint::class;

            echo "<hr style='display: block'>";

            echo "<h3>PHP Boolean</h3>";
            if(TRUE)
                echo "This condition is TRUE";
            if(FALSE)
                echo "This condition is FALSE";

            echo "<hr style='display: block'>";

            echo "<h3>PHP Integer</h3>";
            $dec1 = 34;  
            $oct1 = 0243;  
            $hexa1 = 0x45;  
            echo "Decimal number: " .$dec1. "</br>";  
            echo "Octal number: " .$oct1. "</br>";  
            echo "HexaDecimal number: " .$hexa1. "</br>";  

            echo "<hr style='display: block'>";

            echo "<h3>PHP Float</h3>";
            $n1 = 19.34;  
            $n2 = 54.472;  
            $sum = $n1 + $n2;  
            echo "Addition of floating numbers: " .$sum; 
            
            echo "<hr style='display: block'>";

            echo "<h3>PHP String</h3>";
            $company = "Javatpoint";  
            //both single and double quote statements will treat different  
            echo "Hello $company";  
            echo "</br>";  
            echo 'Hello $company';  

            echo "<hr style='display: block'>";

            echo "<h3>PHP Array</h3>";
            $bikes = array("Royal Enfield", "Yamaha", "KTM");
            var_dump($bikes); //the var_dump() function returns the datatype and values
            echo "</br>";
            echo "Array Element1: $bikes[0]</br>";
            echo "Array Element2: $bikes[1]</br>";
            echo "Array Element3: $bikes[2]</br>";

            echo "<hr style='display: block'>";

            echo "<h3>PHP Object</h3>";
            class bike
            {
                function model()
                {
                    $model_name = "Royal Enfield";
                    echo "Bike Model: ".$model_name;
                }
            }
            $obj = new bike();
            $obj->model();

            echo "<hr style='display: block'>";

            echo "<h3>PHP Null</h3>";
            $nl = NULL;
            echo $nl;

            echo "<hr style='display: block'>";

            echo "<h2>PHP Operators</h2>";
            $a = 10;
            $b = 2;

            echo "a is 10, b is 2<br>";
            echo "concat a and b is ".$a . $b."<br>";
            echo "a+b is ".$a + $b."<br>";
            echo "a-b is ".$a - $b."<br>";
            echo "a*b is ".$a * $b."<br>";
            echo "a/b is ".$a / $b."<br>";
            echo "a%b is ".$a % $b."<br>";
            echo "a**b is ".$a ** $b."<br><br>";

            echo "<hr style='display: block'>";

            echo "<h2>PHP Type Operators</h2>";
            //class declaration  
            class Developer  
            {}  
            class Programmer  
            {}  
            //creating an object of type Developer  
            $charu = new Developer();  
            
            //testing the type of object  
            if( $charu instanceof Developer)  
            {  
                echo "Charu is a developer.";  
            }  
            else  
            {     
                echo "Charu is a programmer.";  
            }  
            echo "</br>";  
            var_dump($charu instanceof Developer);           //It will return true.  
            var_dump($charu instanceof Programmer);       //It will return 

            echo "<hr style='display: block'>";

            echo "<h2>PHP If Statement</h2>";
            $num=12;  
            if($num<100)
            {  
                echo "$num is less than 100";  
            }  

            echo "<hr style='display: block'>";

            echo "<h2>PHP If Else Statement</h2>";
            if($num%2==0)
            {  
                echo "$num is even number";  
            }else
            {  
                echo "$num is odd number";  
            }  

            echo "<hr style='display: block'>";

            echo "<h2>PHP If-else-if Statement</h2>";
            $marks = 69;
            if($marks<33)
            {
                echo "fail";
            }
            else if($marks>=34 && $marks<50)
            {
                echo "D grade";
            }
            else if($marks>=50 && $marks<65)
            {
                echo "C grade";
            }
            else if($marks>=65 && $marks<80)
            {
                echo "B grade";
            }
            else if($marks>=80 && $marks<90)
            {
                echo "A grade";
            }
            else if($marks>=90 && $marks<100)
            {
                echo "A+ grade";
            }
            else{
                echo "Invalid input";
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP Nested If Statement</h3>";
            $age = 23;
            $nationality = "Japanese";
            //applying condiitons on nationality and age
            if($nationality == "Japanese")
            {
                if($age >= 18)
                {
                    echo "Eligible to give vote";
                }else{
                    echo "Not eligible to give vote";
                }
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP Switch Statement</h2>";
            $a = 34; $b = 56; $c = 45;
            if($a < $b)
            {
                if ($a < $c)
                {
                    echo "$a is smaller than $b and $c";
                }
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP Switch</h2>";
            $num = 20;
            switch($num)
            {
                case 10:
                    echo("number is equals to 10");
                    break;
                case 20:
                    echo("number is equal to 20");
                    break;
                case 30:
                    echo("number is equal to 30");
                    break;
                default:
                    echo("number is not equal to 10, 20, or 30");
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP Switch Statement with Character</h2>";
            $ch = 'e';
            switch(strtolower($ch))
            {
                case 'a':
                    echo "Given character is vowel";
                    break;
                case 'e':
                    echo "Given character is vowel";
                    break;
                case 'i':
                    echo "Given character is vowel";
                    break;
                case 'o':
                    echo "Given character is vowel";
                    break;
                case 'u':
                    echo "Given character is vowel";
                    break;
                default:
                    echo "Given character is a constant";
            }

            echo "<h2>PHP For Loop</h2>";
            for($i=0; $i<10; $i++)
            {
                echo "$i<br>";
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP Nested Loop</h2>";
            for($i=1; $i<=3; $i++)
            {
                for($j=1; $j<=3; $j++)
                {
                    echo "row $i  col $j<br>";
                }
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP For Each Loop</h2>";
            $seasson = array("summer", "winter", "spring", "autumn");
            foreach($seasson as $arr)
            {
                echo "Season is: $arr<br>";
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP For Each Associative</h2>";
            //declare array
            $employee = array(
                "Name" => "Alex",
                "Email" => "alex.jtp@gmail.com",
                "Age" => 21,
                "Gender" => "Male"
            );

            //display associative array element through foreach loop
            foreach($employee as $key => $element)
            {
                echo $key . ": " . $element;
                echo "<br>";
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP While Loop</h2>";
            $n = 1;
            while($n <= 10)
            {
                echo "$n<br>";
                $n++;
            }
            echo "<br>";

            $i = 'A';
            while($i < 'H')
            {
                echo $i;
                $i++;
                echo "<br>";
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP Do While</h2>";
            $n = 1;
            do{
                echo "$n<br>";
                $n++;
            }while($n <= 10);

            echo "<hr style='display: block'>";

            echo "<h2>PHP Break with Arrya of String</h2>";
            //declare an array of string
            $number = array("One", "Two", "Three", "Stop", "Four");
            foreach($number as $element)
            {
                if($element == "Stop")
                {
                    break;
                }
                echo "$element<br>";
            }

            echo "<hr style='display: block'>";

            echo "<h2>PHP Continue</h2>";
            echo "Even numbers between 1 to 20: <br>";
            $i = 1;
            while($i <= 20)
            {
                if($i % 2 == 1)
                {
                    $i++;
                    continue;
                }
                echo "$i <br>";
                $i++;
            }

            echo "<hr style='display: block'>";

        ?>  

        <br>
        <button type="button" id="redirect">Next Page</button>
        <script>
            document.querySelector('#redirect')
                .addEventListener('click', () => {
                    window.location.href = 'PHP_FUNCTIONS.php';
                });
        </script>
    </body>  
</html>  