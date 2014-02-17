<?php

class User_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getUserDataWithEmail($username, $password) {
        $sql = "CALL sp_getuserdatawithemail(:username, :password)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username', $username, PDO::PARAM_STR, 100);
        $stmt->bindparam(':password', $password, PDO::PARAM_STR, 100);
        $stmt->execute();

        /*         * * close the database connection ** */
        $this->db = null;

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getUserDataWithFacebookId($facebookId) {
        $stmt = $this->db->prepare('CALL sp_getuserdatawithfacebook(:facebookId)');
        $stmt->bindparam(':facebookId', $facebookId, PDO::PARAM_STR, 100);
        $stmt->execute();
        $this->db = null;

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function checkInfoExistsWithEmail($fullName, $heroName, $email, $phone, $password) {
        try {
            $stmt = $this->db->prepare('CALL sp_checksignupwithemailinfo(:fullName,:heroName,:email,:phone,:password)');
            $stmt->bindparam(':fullName', $fullName, PDO::PARAM_STR, 100);
            $stmt->bindparam(':heroName', $heroName, PDO::PARAM_STR, 100);
            $stmt->bindparam(':email', $email, PDO::PARAM_STR, 100);
            $stmt->bindparam(':phone', $phone, PDO::PARAM_STR, 20);
            $stmt->bindparam(':password', $password, PDO::PARAM_STR, 100);
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $this->db = null;

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /* Last Edit 17-Oct-2013 */

    public function checkInfoExistsWithFacebookId($facebookId, $fullName, $heroName, $email) {
        try {
            $sql = 'CALL sp_checksignupwithfacebookinfo(:facebookId, :fullName, :heroName, :email)';
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':facebookId', $facebookId, PDO::PARAM_STR);
            $stmt->bindparam(':fullName', $fullName, PDO::PARAM_STR);
            $stmt->bindparam(':heroName', $heroName, PDO::PARAM_STR);
            $stmt->bindparam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $this->db = null;

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getHotelAgodaData($currentPage, $pageSize, $lat, $lon, $distance, $countryisocode) {
        try {
            $sql = 'CALL sp_paginationhotelagodabydistance(:currentPage, :pageSize, :lat, :lon, :distance, :countryisocode)';
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':currentPage', $currentPage, PDO::PARAM_INT);
            $stmt->bindparam(':pageSize', $pageSize, PDO::PARAM_INT);
            $stmt->bindparam(':lat', $lat, PDO::PARAM_STR);
            $stmt->bindparam(':lon', $lon, PDO::PARAM_STR);
            $stmt->bindparam(':distance', $distance, PDO::PARAM_STR);
            $stmt->bindparam(':countryisocode', $countryisocode, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $this->db = null;

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /* Get Leader board Last Edit 22-Oct-2013 */

    public function getLeaderBoard() {
        $sql = 'SELECT * FROM user ORDER BY user.points DESC LIMIT 10';
        $stmt = $this->db->query($sql);
        $this->db = null;
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}

