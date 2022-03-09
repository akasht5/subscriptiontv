<?php
    class Subscriptions extends CI_Controller{
        public function index(){
            $data['title'] = "Manage Subscriptions";

            /* $data['subscriptions'] = $this->subscription_model->get_subscriptions(); */

            $this->load->view('templates/header');
            $this->load->view('subscriptions/index.php', $data);
            $this->load->view('templates/footer');
        }
    }