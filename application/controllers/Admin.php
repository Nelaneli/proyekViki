<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('adminviki');
    }

    public function index(){
        $this->load->view('login');
    }
    public function cek_login(){
        $data = array(
        'email' => $this->input->post('email'),
        'password'=>$this->input->post('password')
            );
        
		if($data['email'] == 'usaid_sc@yahoo.com' && $data['password']== '123'){	
            	$newdata = array(
				'email_admin' => $data['email'],
				'password' => $data['password'],
				'logged_in'  => TRUE);
			$this->session->set_userdata($newdata);
			redirect('Admin/home');
		} else{
			$data['error'] = 'Maaf! Email atau password yang Anda masukan salah!';
            redirect('Admin');
		}
    }
    public function home()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('email_admin') == 'usaid_sc@yahoo.com' 
		&& $this->session->userdata('password') == '123'){
            $this->load->view('header');
            $this->load->view('indexAdmin');
            $this->load->view('footer');
        }
        else{
            redirect('Admin');
		}
	}
	public function comp()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('email_admin') == 'usaid_sc@yahoo.com' 
		&& $this->session->userdata('password') == '123'){
            $this->load->view('header');
            $this->load->view('company');
            $this->load->view('footer');
        }
        else{
            redirect('Admin');
		}
	}
    public function form()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('email_admin') == 'usaid_sc@yahoo.com' 
		&& $this->session->userdata('password') == '123'){
            $this->load->view('header');
            $data['p'] = $this->adminviki->produk();
            $this->load->view('forms',$data);
            $this->load->view('footer');
        }
        else{
            redirect('Admin');
		}
	}
    public function add_produk(){
        $this->load->model('adminviki');
        $last=$this->adminviki->ambil_id();
        $this->load->library('upload');
        $this->load->library('form_validation');
        foreach ($last as $l ){
            $nmfile = $l->id_produk;
        }
        //$nmfile = "file_".time();
        $config = array(
        'upload_path' => "./uploads/",
        'allowed_types' => "gif|jpg|png|jpeg|bmp",
        'overwrite' => TRUE,
        'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'max_height' => "768",
        'max_width' => "1024",
        'file_name'=> $nmfile
        );
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($_FILES['filefoto']['name']){
            if($this->upload->do_upload('filefoto')){                
                $gbr=$this->upload->data();
                $data=array('nama_produk' => $this->input->post('nama'),
                            'desk_produk' => $this->input->post('des'),
                            'hrg_produk' => $this->input->post('hrg'),
                            'gbr_produk'=>$gbr['file_name']);
            $this->adminviki->tambah_produk($data);
            $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
            redirect(site_url('../index.php/admin/form'));
//jika berhasil maka akan ditampilkan view vupload
            }
            else{
                $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect(site_url('../index.php/admin/form'));//jika gagal maka akan ditampilkan form upload
            }  
        }
    }
    
    
    public function delete_produk($id)
	{
		$this->load->model('adminviki');
		$this->adminviki->hapus_produk($id);		
	
		redirect(site_url('../index.php/admin/form'));	
	}
    public function logout() {
        // Removing session data
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        redirect('Admin');
    }
}
