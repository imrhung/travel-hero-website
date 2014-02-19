<?php

class Quest_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    /*
      Last Edit 16-Oct-2013
     */

    public function getSpecialQuestData($questId) {
        $sql = 'SELECT id, `name`, points FROM quest WHERE id = :inQuestId';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':inQuestId', $questId, PDO::PARAM_INT);
        $stmt->execute();

        $this->db = null;
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /*
      Last Edit 17-Oct-2013
     */

    public function getQuestReferData($questId) {
        $sql = 'CALL sp_getquestrefer(:questId)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':questId', $questId, PDO::PARAM_INT);
        $stmt->execute();
        $this->db = null;
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /* Last Edit 17-Oct-2013 */

    public function getQuestData($currentPage, $pageSize) {
        try {
            $sql = 'CALL sp_paginationquest(:currentPage, :pageSize)';
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':currentPage', $currentPage, PDO::PARAM_INT);
            $stmt->bindparam(':pageSize', $pageSize, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $this->db = null;

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /* Last Edit 18-Oct-2013 */

    public function updateAcceptQuest($userId, $questId, $parentQuestId) {

        $sql = 'CALL sp_useracceptquest(:userId, :questId, :parentQuestId)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':userId', $userId, PDO::PARAM_INT);
        $stmt->bindparam(':questId', $questId, PDO::PARAM_INT);
        $stmt->bindparam(':parentQuestId', $parentQuestId, PDO::PARAM_INT);
        $stmt->execute();

        $this->db = null;

        return $stmt->fetch(PDO::FETCH_NUM);
    }

    /* Last Edit 18-Oct-2013 */

    public function updateStatus($userId, $questId) {

        $sql = 'CALL sp_usercompletequest(:userId, :questId)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':userId', $userId, PDO::PARAM_INT);
        $stmt->bindparam(':questId', $questId, PDO::PARAM_INT);
        $stmt->execute();

        $this->db = null;

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getAcceptQuestOfUser($userId) {
        $sql = 'CALL sp_allquestofuseraccept(:userId)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        $this->db = null;
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    // Get quest list for one specific user.
    public function getQuestDatabyUser($currentPage, $pageSize, $userId) {
        try {
            $rowNumber = (int) $currentPage*$pageSize;
            $pageSize = (int) $pageSize;
            $sql = 'SELECT * FROM quest WHERE quest_owner_id = :userId AND !isnull(parent_quest_id)
                ORDER BY id DESC LIMIT :rowNumber, :pageSize';
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':userId', $userId, PDO::PARAM_INT);
            $stmt->bindparam(':rowNumber', $rowNumber, PDO::PARAM_INT);
            $stmt->bindparam(':pageSize', $pageSize, PDO::PARAM_INT);
            
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $this->db = null;

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    // Get detail information of one quest
    public function getQuestDetail($questId) {
        $sql = 'SELECT * FROM quest WHERE id = :inQuestId';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':inQuestId', $questId, PDO::PARAM_INT);
        $stmt->execute();

        $this->db = null;
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    // Activate or deactivate state of quest
    public function updateQuestState($questId, $state){
        $sql = 'UPDATE quest SET state= :state WHERE id= :questId';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':state', $state, PDO::PARAM_INT);
        $stmt->bindparam(':questId', $questId, PDO::PARAM_INT);
        $stmt->execute();

        $this->db = null;

        return "success";
    }

}

