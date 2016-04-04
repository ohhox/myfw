<?php

class View extends HTML{

    protected $viewPath = 'view/';

    function __construct() {
        
    }

    public function getView($file) {
        if (file_exists($this->viewPath . $file .'.php')) {
            require_once $this->viewPath . $file .'.php';
        }else{
            $this->_ERRORVIEW($file);
        }
    }
    public function _ERRORVIEW($file) {
        echo  'File Not Found : '. $this->viewPath.$file . '.php';
    }
}
