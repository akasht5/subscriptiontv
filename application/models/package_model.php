<?php
    class Package_Model extends CI_Model{
            public function __construct(){
                $this->load->database();
            }
    
            public function get_packages($slug=FALSE){
                if($slug === FALSE){
                    $query = $this->db->get('package');
    
                    return $query->result_array();
                }
    
                $query = $this->db->get_where('package', array('slug' => $slug));
                return $query->row_array();
            }
    }
?>