<?php
   /* Online PHP Compiler (Interpreter) and Editor */
  Abstract class ParentClass{
      abstract protected function show($a,$b);
  }
  class Base extends ParentClass{
      public function show($c,$d)
      {
          $result=$c+$d;
          echo $result;
      }
  }
  $base=new Base;
  
  $base->show('12','10');
  
?>