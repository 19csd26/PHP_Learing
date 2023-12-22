<?php
/*
Magic constants are the predefined constants in PHP which get changed on the basis of their use. 
They start with double underscore (__) and ends with double underscore.
They are similar to other predefined constants but as they change their values with the context, they are called magic constants.
There are nine magic constants in PHP. In which eight magic constants start and end with double underscores (__).
1.)__LINE__
2.)__FILE__
3.)__DIR__
4.)__FUNCTION__
5.)__CLASS__
6.)__TRAIT__
7.)__METHOD__
8.)__NAMESPACE__
9.)ClassName::class
All of the constants are resolved at compile-time instead of run time, unlike the regular constant. Magic constants are case-insensitive.
*/

    //ClassName::class
    namespace Technical_Portal;  
    echo "<h3>Example for CLASSNAME::CLASS </h3>";  
    // Define a class named 'javatpoint' within the 'Technical_Portal' namespace
    class javatpoint {}  
    // Output the fully-qualified class name as a string using the ::class syntax
    echo javatpoint::class;    // ClassName::class 
    echo "<hr>";

    //__LINE__
    echo"<h3>Example of __LINE__</h3>";
    //print Your current line number
    echo"You are at Line Number:".__LINE__."<br><br>";
    echo"<hr>";

    //__FILE__
    echo"<h3>Example of __FILE__</h3>";
    //print full path of file with .php extension
    echo __FILE__."<br><br>";
    echo"<hr>";

    //__DIR__
    echo"<h3>Example of __DIR__</h3>";
    //print full path of directory where script will be placed
    echo __DIR__."<br><br>";
    //equivalent to above
    echo dirname(__FILE__)."<br><br>";
    echo"<hr>"; 
    
    //__FUNCTION__
    echo "<h3>Example for __FUNCTION__</h3>";    
    //Using magic constant inside function.    
    function test(){    
        //print the function name i.e; test.   
        echo 'The function name is '. __FUNCTION__ . "<br><br>";   
    }    
    test();    
    //Magic constant used outside function gives the blank output.    
    function test_function(){    
        echo 'Hie';    
    }    
    test_function();    
    //give the blank output.   
    echo  __FUNCTION__ . "<br><br>";  
    echo"<hr>";

    //__CLASS__
    echo "<h3>Example for __CLASS__</h3>";    
    class JTP    
    {    
        public function __construct() {    
            ;    
    }    
    function getClassName(){    
        //print name of the class JTP.   
        echo __CLASS__ . "<br><br>";   
        }    
    }    
    $t = new JTP;    
    $t->getClassName();    
      
    //in case of multiple classes   
    class base  
    {    
    function test_first(){    
            //will always print parent class which is base here.    
            echo __CLASS__;   
        }    
    }    
    class child extends base    
    {    
        public function __construct() {    
            ;    
        }    
    }    
    $t = new child;    
    $t->test_first();    
    echo"<hr>";

    //__TRAIT__
    echo "<h3>Example for __TRAIT__</h3>";    
    trait created_trait {    
        function jtp(){    
            //will print name of the trait i.e; created_trait    
            echo __TRAIT__;  
        }    
    }    
    class Company {    
        use created_trait;    
        }    
    $a = new Company;    
    $a->jtp();    
    echo"<hr>";

    //__METHOD__
    echo "<h3>Example for __METHOD__</h3>";  
    class method {    
        public function __construct() {    
            //print method::__construct    
                echo __METHOD__ . "<br><br>";   
            }    
        public function meth_fun(){    
            //print method::meth_fun    
                echo __METHOD__;   
        }    
    }    
    $a = new method;    
    $a->meth_fun();  
    echo"<hr>";

    //__NAMESPACE__ 
    echo "<h3>Example for __NAMESPACE__</h3>";  

    // Define a class named 'name' within the current namespace
    class name {    
        public function __construct() {    
            echo 'This line will print on calling namespace.';     
        }     
    }    

    // Create a fully-qualified class name by appending the current namespace to 'name'
    $class_name = __NAMESPACE__ . '\name';    

    // Instantiate an object of the class using the fully-qualified name
    $a = new $class_name;   
    echo "<hr>";
?>
