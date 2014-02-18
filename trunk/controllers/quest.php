<?php

class Quest extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('travelhero/index');
    }
    
    // For the display of an quest detail
    public function detail($id) {
        $this->view->questId = $id;
        $this->view->render('quest/detail'); // call View
    }

    /* Last Edit 17 Oct 2013 */

    public function questInfo() {
        //http://localhost:1337/travelhero/user/questInfo
        $result = array();
        $result['code'] = -1;
        $result['message'] = "";
        $result['info'] = null;

        $currentPage = $_POST['currentPage'];
        $pageSize = $_POST['pageSize'];

        $resultCheck = $this->model->getQuestData($currentPage, $pageSize);

        if ($resultCheck) {
            $result['code'] = 1;
            $result['message'] = "Get Quest Success";
            $result['info'] = $resultCheck;
        } else {
            $result['code'] = 0;
            $result['message'] = "Get Quest Fail";
            $result['info'] = $resultCheck;
        }
        echo json_encode($result);
    }

    /* Last Edit 15-Oct-2013 */

    public function questQRCodeInfo() {
        $questId = $_POST['questId'];
        $result = $this->model->getSpecialQuestData($questId);
        if ($result) {
            $qrCodeInfo = base64_encode(json_encode($result));
            $url = 'https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=' . $qrCodeInfo;
            echo '<img src="' . $url . '" />';
        } else {
            echo 'Error';
        }
    }

    /*
      Last Edit 17-Oct-2013
     */

    public function relatedQuest() {
        $questId = $_POST['questId'];

        $data = array();
        $data['code'] = -1;
        $data['message'] = '';
        $data['info'] = null;

        $result = $this->model->getQuestReferData($questId);
        if ($result) {
            $data['code'] = 1;
            $data['message'] = 'Success';
            $data['info'] = $result;
        } else {
            $data['code'] = 0;
            $data['message'] = 'Fail';
            $data['info'] = null;
        }
        echo json_encode($data);
    }

    /* Last Edit 18-Oct-2013 */

    public function acceptQuest() {
        $data = array();
        $data['code'] = -1;
        $data['message'] = '';

        $userId = $_POST['userId'];
        $questId = $_POST['questId'];
        $parentQuestId = $_POST['parentQuestId'];

        $result = $this->model->updateAcceptQuest($userId, $questId, $parentQuestId);

        if ($result[0] == 1) {
            $data['code'] = 1;
            $data['message'] = 'True';
        } else if ($resutl[0] == 0) {
            $data['code'] = 0;
            $data['message'] = 'False';
        }

        echo json_encode($data);
    }

    /* Last Edit 21-Oct-2013 */

    public function completeQuest() {
        $userId = $_POST['userId'];
        $questId = $_POST['questId'];

        $result = $this->model->updateStatus($userId, $questId);

        echo json_encode($result);
    }

    public function allAcceptQuestOfUser() {
        $data = array();
        $data['code'] = -1;
        $data['message'] = '';
        $data['info'] = null;

        $userId = $_POST['userId'];
        $result = $this->model->getAcceptQuestOfUser($userId);

        if ($result != null) {
            $data['code'] = 1;
            $data['message'] = 'Success';
            $data['info'] = $result;
        } else {
            $data['code'] = 0;
            $data['message'] = 'Fail';
            $data['info'] = null;
        }
        echo json_encode($data);
    }
    
    // Function to get list of quests by one user- NGO
    // Not completed
    public function questListInfobyUser() {
        //http://localhost:1337/travelhero/quest/questListInfobyUser
        $result = array();
        $result['code'] = -1;
        $result['message'] = "";
        $result['info'] = null;

        $currentPage = $_POST['currentPage'];
        $pageSize = $_POST['pageSize'];
        $userId = $_POST['userId'];

        $resultCheck = $this->model->getQuestDatabyUser($currentPage, $pageSize, $userId);

        if ($resultCheck) {
            $result['code'] = 1;
            $result['message'] = "Get Quest Success";
            $result['info'] = $resultCheck;
        } else {
            $result['code'] = 0;
            $result['message'] = "Get Quest Fail";
            $result['info'] = $resultCheck;
        }
        echo json_encode($result);
    }

}

