<?php
    class Packages extends CI_Controller{
        public function index(){
            $data['title'] = "Manage Packages";

/*             $data['packages'] = $this->package_model->get_packages();
 */
            $this->load->view('templates/header');
            $this->load->view('packages/index.php', $data);
            $this->load->view('templates/footer');
        }
    }