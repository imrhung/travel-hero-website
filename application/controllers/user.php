<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends App_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('login');
    }

    public function login() {
        $this->body_class[] = 'login';
        
        $this->page_title = 'Please sign in';

        $this->current_section = 'login';

        // validate form input
        $this->form_validation->set_rules('identity', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            // check to see if the user is logging in
            // check for "remember me"
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                $this->session->set_flashdata('app_success', $this->ion_auth->messages());
                redirect('home');
            } else {
                $this->session->set_flashdata('app_error', $this->ion_auth->errors());
                redirect('login');
            }
        } else {
            // the user is not logging in so display the login page
            // set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $data['identity'] = array('name' => 'identity',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
                'class' => 'form-control',
                'placeholder' => 'Your email'
            );
            $data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Your password'
            );

            $this->assets_css[] = "social-buttons-3.css";
            $this->render_page('user/login', $data);
        }
    }

    public function logout() {
        // log the user out
        $logout = $this->ion_auth->logout();
        
        // redirect them back to the login page
        redirect('login');
    }

    public function forgot_password() {
        if ($this->form_validation->run('user_forgot_password')) {
            $forgotten = $this->ion_auth->forgotten_password($this->input->post('email', TRUE));

            if ($forgotten) {
                // if there were no errors
                $this->session->set_flashdata('app_success', $this->ion_auth->messages());
                redirect('login');
            } else {
                $this->session->set_flashdata('app_error', $this->ion_auth->errors());
                redirect('login');
            }
        }

        $this->body_class[] = 'forgot_password';

        $this->page_title = 'Forgot password';

        $this->current_section = 'forgot_password';

        $this->render_page('user/forgot_password');
    }

    public function account() {
        $this->body_class[] = 'my_account';

        $this->page_title = 'My Account';

        $this->current_section = 'my_account';

        $user = $this->ion_auth->user()->row_array();

        $this->render_page('user/account', array('user' => $user));
    }
    
    public function loginfacebook(){
        $this->facebook_ion_auth->login();
    }
    
    public function sendemail(){
        $this->load->helper("email");
        echo send_email("imrhung@yahoo.com", "Test mail", "I love you!!!");
        echo "OK";
    }
    public function sendemail2(){
        $this->load->library('email');

$this->email->from('imrhung@yahoo.com', 'Nguyen Vawn Hung');
$this->email->to('nguyenvanhungbkit@gmail.com'); 

$this->email->subject('Email Test');
$this->email->message('Testing the email class.');	

$this->email->send();

echo $this->email->print_debugger();
    }

}