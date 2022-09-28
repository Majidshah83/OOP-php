<?php 

interface InjectLoggerInterface 
{
    public function setLogger(FileLogger $logger);
}

class A implements InjectLoggerInterface
{
    private $logger;
 
    public function setLogger(FileLogger $logger)
    {
        $this->logger = $logger;
    }
 
    public function doSomething()
    {
        // do something
        $this->logger->log('did something');
    }
}
$logger = new FileLogger('/var/log/a.log');
$a = new A;
$a->setLogger($logger);
$a->doSomething();