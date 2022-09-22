<?php
   /* Online PHP Compiler (Interpreter) and Editor */
   class Fruit {
       //Properties
       public $name;
       public $color;
       function set_name($name)
       {
           $this->name=$name;
       }
       function get_name()
       {
           return $this->name;
       }
       function set_color($color)
       {
           $this->color=$color;
       }
       function get_color()
       {
           return $this->color;
       }
      
   }
   $apple=new Fruit();
   $banana=new Fruit();
   $apple->set_name('Apple');
   $apple->set_color('Red');
   $banana->set_color('Green');   
   $banana->set_name('Banana');
   
   echo $apple->get_name()." ";
   echo $banana->get_name();
   echo "<br>";
   echo $apple->get_color()." ";
   echo $banana->get_color();
   
?>