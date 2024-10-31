<?php 

echo "Hello World!"; // echo is a language construct that outputs text

echo "<br>";

function foo() { // function is a language construct that defines a function
  echo "foo";
}

class Test { // class is a language construct that defines a class
  public string $nome = 'Jessica'; // public is a language construct that defines a visibility and string is a data type where $no (variable) is a name and 'Jessica' is a value
  
  public string $email = 'jessica@email.com';
  
  public function bar() { // public is a language construct that defines a visibility
    echo __METHOD__; // __METHOD__ is a magic constant that returns the class method name
  }
}

(new Test)->bar(); // new is a language construct that creates an object and -> is an object operator that accesses a property or method of an object

echo "<br>";

$test = new Test; // new is a language construct that creates an object
$test->bar(); // -> is an object operator that accesses a property or method of an object

echo "<br>";


var_dump($test); // var_dump is a language construct that displays structured information about one or more expressions 