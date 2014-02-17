<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('admin/index');
    }

    public function getParentQuest() {
        $arrParentQuest = array();
        $arrParentQuest['id'] = -1;
        $arrParentQuest['name'] = '';

        $this->model->getParentQuestData();
    }
    
    

}

