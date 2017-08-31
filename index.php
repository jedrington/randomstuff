<?php
class IndexController extends Yaf_Controller_Abstract {
   /* default action */
   public function indexAction() {
       $this->_view->word = "hello world";
       //or
       // $this->getView()->word = "hello world";
       if(!$hostname) $hostname = trim(`hostname`); 
       if(!$hostname) $hostname = exec('echo $HOSTNAME');
       if(!$hostname) $hostname = preg_replace('#^\w+\s+(\w+).*$#', '$1', exec('uname -a'));       
       echo $hostname
   }
}
?>
