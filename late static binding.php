<?php
  class Personal{
      static $name='majid';
      public function show()
      {
          
          echo self::$name;
          echo static::$name;
         
      }
  }
  class Acount extends Personal{
      static $name='shah';
      
  }
  $acount=new Acount();
  $acount->show();
?>