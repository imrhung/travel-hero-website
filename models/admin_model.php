<?php

class QuestClaz {

    public $id = -1;
    public $name = '';

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

}

class Admin_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getParentQuestData() {
        //http://www.lianja.com/documentation/documentation-index/274-working-with-data-in-php
        //http://www.php.net/pdo.query
        //http://datamapper.wordpress.com/page/2/ AJAX


        $sql = 'SELECT `id`, `name`, points FROM quest';
        foreach ($this->db->query($sql) as $row) {
            $row['id'];
            $row['name'];
        }
    }

}