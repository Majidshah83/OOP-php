<?php
  trait hello{
      public function sayHello()
      {
          echo "say hello";
      }
       public function sayHi()
      {
          echo "say Hi";
      }
  }
  trait bye{
      public function sayBye()
      {
          echo "say bye bye";
      }
  }
  
 Class A{
     use hello;
 }
 class B{
     use bye;
 }
 $a=new A();
 $b=new B();
 $a->sayHello();
 $a->sayHi();
 $b->sayBye();
?>