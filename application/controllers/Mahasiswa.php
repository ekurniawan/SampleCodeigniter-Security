<?php 

class Mahasiswa extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Mahasiswa_model");
        $this->load->helper('url');
        $this->load->library('Uuid');
    }

    public function index(){
        $data['title'] = "Daftar Mahasiswa";
        $data['mhs'] = $this->Mahasiswa_model->get_all_mahasiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa_view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create_guid(){
        $data['title'] = "Menampilkan UUID";
        $data['struuid'] = $this->uuid->v4(); 

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa_uuid', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah(){
        $this->load->view('tambah_mahasiswa_view');
    }

    public function tambah_post(){
        $Nim = $this->input->post('nim',TRUE);
        $Nama = $this->input->post('nama',TRUE);
        $Alamat = $this->input->post('alamat',TRUE);
        $IPK = $this->input->post('ipk',TRUE);

        $data = array('Nim'=>$Nim,'Nama'=>$Nama,'Alamat'=>$Alamat,'IPK'=>$IPK);
        $this->Mahasiswa_model->insert_mahasiswa($data);
        redirect('Mahasiswa/index');
    } 
}

?>