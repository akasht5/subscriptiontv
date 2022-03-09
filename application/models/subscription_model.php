<?php
    class Subscription_Model extends CI_Model{
            public function __construct(){
                $this->load->database();
            }
    
            public function get_subscriptions($slug=FALSE){
                if($slug === FALSE){
                    $query = $this->db->get('subscription');
    
                    return $query->result_array();
                }
    
                $query = $this->db->get_where('subscription', array('slug' => $slug));
                return $query->row_array();
            }
    }
?>