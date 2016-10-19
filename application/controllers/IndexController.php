<?php

class IndexController extends Zend_Controller_Action
{
    
    public $_page = array(); 
    

    public function init()
    {
        /* Initialize action controller here */
        $page = Template::CreatePage();
        $this->setPage($page);
    }

    public function indexAction()
    {
        // action body.
//        $object = Template::CreateObject("MOTH",$this->getPage(), 0, 0, 2, 2);
//        $this->setPage($object);
//        
//        echo Template::DrawPage($this->getPage());
    }
    
    
    public function setPage($page){
        $this->_page = $page;
    }
    
    public function getPage(){
        return $this->_page;
    }
  
}

