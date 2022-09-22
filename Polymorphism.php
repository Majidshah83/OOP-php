<?php
   /* Online PHP Compiler (Interpreter) and Editor */
abstract class Person{
    abstract public function greet();
      
  }
  class English extends Person{
      public function greet()
      {
          return "Helo!";
      }
}
class German extends Person{
    public function greet()
    {
        return "Hallo!";
    }
}
class Urdu extends Person{
    public function greet(){
        return "sono!";
    }
}
 function greeting($people)
{
    foreach($people as $person)
    {
        echo $person->greet() . '<br>';
    }
}
$people=[
       new English(),
       new German(),
       new Urdu(),
    
    ];
    greeting($people);
?>