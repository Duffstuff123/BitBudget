<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        $loader = new Zend_Loader_Autoloader_Resource(array(
            'basePath'  => 'path/to/some/resources/',
            'namespace' => 'Foo',
        ));
        
        $loader->addResourceType('form', 'forms', 'Form')
       ->addResourceType('model', 'models', 'Model')
       ->addResourceType('dbtable', 'models/DbTable', 'Model_DbTable');
    }
    
    
    protected function _initDb()
    {
      $configData=array(
            'database' => array(            
            'adapter' => 'Pdo_Mysql',           
            'params' => array(          
                            'host' => 'localhost',                          
                            'username' => 'root',                           
                            'password' => '',                           
                            'dbname' => 'bitbudget')
            )
        );

        $config = new Zend_Config($configData);

        $db = Zend_Db::factory($config->database);

        //$db = Zend_Db_Table_Abstract::getDefaultAdapter();

        Zend_Db_Table::setDefaultAdapter($db);
    }

}

