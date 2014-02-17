<?php
class Index extends Controller {
    function __construct() {
        parent::__construct();
    }

    function index() {
	/*
        //will check browserLanguage
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        // if browserLanguage = jp => page jp
        if($lang == 'ja') {
            header('location: '.URL.'ja');
        }
        else {
            //if browserLanguage <> jp => page english
            header('location: '.URL.'en');
        }
		*/
        $this->view->render('index/index');
    }

}