<?php
    class Customer_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_customers($id=FALSE){
            if($id === FALSE){
                $query = $this->db->get('customer');

                return $query->result_array();
            }

            $query = $this->db->get_where('customer', array('id' => $id));
			return $query->row_array();
        }

        public function create_customer(){
			$data = array(
				'name' => $this->input->post('name'),
				'gender' => $this->input->post('gender'),
				'email_id' => $this->input->post('email_id'),
                'mobile_no' => $this->input->post('mobile_no'),
                'photo' => $this->input->post('photo'),
				'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
				'city_id' => $this->input->post('city'),
                'country_id' => $this->input->post('country'),
                'active' => $this->input->post('active')
			);

			return $this->db->insert('customer', $data);
        }

        public function update_customer(){
            $data = array(
				'name' => $this->input->post('name'),
				'gender' => $this->input->post('gender'),
				'email_id' => $this->input->post('email_id'),
                'mobile_no' => $this->input->post('mobile_no'),
                'photo' => $this->input->post('photo'),
				'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
				'city_id' => $this->input->post('city'),
                'country_id' => $this->input->post('country'),
                'active' => $this->input->post('active')
			);

            $this->db->where('id', $this->input->post('id'));
			return $this->db->update('customer', $data);
        }
    }