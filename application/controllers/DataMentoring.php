<?php

class DataMentoring extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_monitoring');
        $this->load->library('form_validation');
    }

   
    public function index()
    {
        
     
        $data['judul'] = 'Data';
        $data['monitoring'] = $this->Model_monitoring->getAllMonitoring();
        $this->load->view('templates/header', $data);
        $this->load->view('Mentoring/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['judul'] = 'Tambah Data Monitoring';

        $this->form_validation->set_rules('id_monitoring', 'Id', 'Required');
        if ( $this->form_validation->run() == FALSE ) {
 
            $this->load->view('templates/header', $data);
            $this->load->view('mentoring/tambah');
            $this->load->view('templates/footer');
        }
        else
        {
                $this->Model_monitoring->tambahDataMonitoring();
                redirect('DataMentoring');
        }
       
        
    }

    public function hapus($id)

        {

            $this->Model_monitoring->hapusDataMonitoring($id);
            redirect('DataMentoring');
        }

        public function detail($id)
        {
            $data['judul'] = 'Detail Data Monitoring';
            $data['monitoring'] = $this->Model_monitoring->getMonitorinById($id);
            $this->load->view('templates/header', $data);
            $this->load->view('mentoring/detail', $data);
            $this->load->view('templates/footer');

        }

        public function ubah($id)
        {
    
            $data['judul'] = 'Ubah Data Monitoring';
            $data['monitoring'] = $this->Model_monitoring->getMonitorinById($id);
    
            $this->form_validation->set_rules('id_monitoring', 'Id', 'Required');
            if ( $this->form_validation->run() == FALSE ) {
     
                $this->load->view('templates/header', $data);
                $this->load->view('mentoring/ubah', $data);
                $this->load->view('templates/footer');
            }
            else
            {
                    $this->Model_monitoring->ubahDataMonitoring();
                    redirect('DataMentoring');
            }
           
            
        }
}
?>