<?php

class user extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($id = NULL) {
        $this->getView('user/inxdex');
        
    }

}
