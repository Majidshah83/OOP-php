<?php
   /* Online PHP Compiler (Interpreter) and Editor */
  interface A{
      function hello($a);
  }
  interface C{
      function hi($a,$b);
      function bye($c,$d);
  }
  class B implements A,C{
      public function hello($a)
      {
         echo $a;
      }
      public function hi($c,$d)
      {
          echo $c-$d;
      }
      public function bye($e,$f)
      {
          echo $e/$f;
      }
  }
  $b=new B;
  $b->hello(10);
  $b->hi(20,5);
  $b->bye(10,2)
?>