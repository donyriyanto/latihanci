<?php
class Faq_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_faq()
    {
        $query = $this->db->get('faq');
        return $query->row_array();
    }
    
    public function set_faq()
    {
        $data = array(
            'pertanyaan' => $this->input->post('pertanyaan'),
            'jawaban' => $this->input->post('jawaban')
        );

        return $this->db->insert('faq', $data);
    }
}