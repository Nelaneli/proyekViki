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
        $this->load->library('form_validation');
        $a = $this->input->post('nama');
        $b = $this->input->post('des');
        $c = $this->input->post('hrg');
        $this->adminviki->tambah_produk($a, $b, $c);
        redirect(site_url('../index.php/admin/form'));
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
