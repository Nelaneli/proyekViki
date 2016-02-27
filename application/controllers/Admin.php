<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
            $this->load->view('forms');
            $this->load->view('footer');
        }
        else{
            redirect('Admin');
		}
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
