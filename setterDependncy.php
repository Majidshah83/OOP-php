<?php
   /* Online PHP Compiler (Interpreter) and Editor */
class RegisterUserService{
    protected $loger;
    public function setLoger($loger)
    {
        $this->loger=$loger;
    }
    public function registerUser()
    {
        if($this->loger)
        {
      echo "Your register";
        }
    }
    
}
    $service= new RegisterUserService;
   
$service->setLoger('new ConcreteLogger');
    $service->registerUser();
?>