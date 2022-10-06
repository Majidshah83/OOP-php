php
    Online PHP Compiler (Interpreter) and Editor 
   class BankAcount{
       private $acountNo;
       public $acountName;
       public $balance;
       
       public function BankAcount($accn,$acname)
       {
           $this-acountNo=$accn;
           $this-acountName=$acname;
           $this-balance=0;
       }
      
       public function deposit($amount)
       {
           if($amount5000)
           {
               echodeposit amount is less than Amountn;
           }
           else{
              $this-balance=$amount;
              
           }
       }
        public function withdraw()
       {
           echo withdraw raw blance n;
          
       }
        public function getBlance()
       {
          echo 'Avaliable Blance'.$this-balance;

          
       }
   }
   $obj=new BankAcount(200,'20k');
   
   $obj-deposit(50000);
  $obj-withdraw();
$obj-getBlance();
   $obj-deposit();
