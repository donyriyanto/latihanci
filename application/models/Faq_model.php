<?php
class Faq_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_faq()
    {
        $query = $this->db->get('faq');
        
        /*foreach ($query->result() as $row)
        {
            echo $row->pertanyaan;
        }*/
        
        return $query->result_array();
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