<?php
   /* Online PHP Compiler (Interpreter) and Editor */
   //Constant 
  class Example {
      const name="Majid shah";
      function set_name()
      {
          echo self::name;
      }
  }
 
 $obj=new Example();
 $obj->set_name();
?>