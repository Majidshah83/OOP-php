<?php
   /* Online PHP Compiler (Interpreter) and Editor */
  class Base 
  {
      public function calc($a, $b)
      {
         return "Multiple:". $result=$a*$b;
         
      }
      
  }
  class childe extends Base{
          public function calc($a, $b)
          {
             return "add:".$result=$a+$b;
              
          }
      }
      
      $c=new childe();
      echo $c->calc(10,5);
?>