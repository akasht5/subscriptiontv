<?php
    class Customers extends CI_Controller{
        public function index(){
            $data['title'] = "Manage Customers";

            $data['customers'] = $this->customer_model->get_customers();

            $this->load->view('templates/header');
            $this->load->view('customers/index.php', $data);
            $this->load->view('templates/footer');
        }

        public function create(){
            $data['title'] = "Add Customer";

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email_id','Email_id','required');
            $this->form_validation->set_rules('mobile_no','Mobile_no','required');

            if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
                $this->load->view('customers/create', $data);
                $this->load->view('templates/footer');
			}else{
                $this->customer_model->create_customer();

				redirect('customers');
            }
            
        }

        public function edit($id){
            $data['title'] = "Update Customer";

            $data['customers'] = $this->customer_model->get_customers($id);
            
            $this->load->view('templates/header');
            $this->load->view('customers/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->customer_model->update_customer();
            redirect('customers');
        }

        public function delete(){
            $data['title'] = "Delete Customer";
            
            $this->load->view('templates/header');
            $this->load->view('customers/delete', $data);
            $this->load->view('templates/footer');
        }
    }