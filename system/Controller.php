<?php

class Controller extends View {

    public $format = "html";
    public $pathName = "";   
    public $model;
    public function __construct() {

        parent::__construct();
    }

    public function loadModel($name, $modelPath = 'model/') {
        $path = $modelPath . $name . '_model.php';
        $this->pathName = $name;
        if (file_exists($path)) {
            require_once  $path;          
            $modelName = $name.'_model' ;
            $this->model = new $modelName();            
        }
    }

}
