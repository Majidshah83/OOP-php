php
    Online PHP Compiler (Interpreter) and Editor 
   class   Base {
      public static $name=Majid shah;
       public static function show()
       {
          echo self$name;
           
       }
       public function __construct()
       {
           selfshow();
           
       }
       public function setName($na){
           self$name=$na;
       }
   }
   class childe extends Base{
       public function show()
       {
          echo Base$name;
       }
   }
 echo Base$name;
  Baseshow();
 $base=new Base();
 $base-setName('majid ali');
 $base-show();
$childe=new childe();
$childe-show();3
