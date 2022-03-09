<?php
    class Report extends CI_Controller{
        public function index(){
            $data['title'] = "Generate Report";

            $this->load->view('templates/header');
            $this->load->view('report/index.php', $data);
            $this->load->view('templates/footer');
        }
    }