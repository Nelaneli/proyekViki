<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
<<<<<<< HEAD
    function __construct() {
        parent::__construct();
     //   $this->load->helper(array('url','form'));
        $this->load->model('adminviki');
    }
	public function index()
	{
		//$this->load->view('header');
        $data['barang'] = $this->adminviki->produk();
		$this->load->view('proyek', $data);
=======
	function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('adminviki');
    }

	public function index()
	{
		//$this->load->view('header');
		$data['p'] = $this->adminviki->produk();
		$this->load->view('proyek',$data);
>>>>>>> f91c2076962aa436f93cddb87408144aa149e42d
	}
    
}
