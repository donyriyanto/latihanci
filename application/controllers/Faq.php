<?php
class Faq extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('faq_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['faq'] = $this->faq_model->get_faq();
        $data['title'] = 'faq';

        $this->load->view('templates/header', $data);
        $this->load->view('faqview', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'faq';

        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required');
        $this->form_validation->set_rules('jawaban', 'jawaban', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('faq/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }
    
    
    
    
    
    
}