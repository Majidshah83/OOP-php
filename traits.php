<?php
  trait hello{
      public function sayHello()
      {
          echo "say hello\n";
      }
       public function sayHi()
      {
          echo "say Hi\n";
      }
  }
  trait bye{
      public function sayBye()
      {
          echo "say bye bye\n";
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