<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	public function index()
	{
		//load database to check the connection
		//$this->load->database();
		$this->load->view('welcome_message');
	}

	public function demo()
	{
		//echo "My Friend";
		$this->load->view('about');
	}


	//Experimenting Views
	public function homepage()
	{
		// $data['title'] = "Helo I am Francis Junior Dev of Real Faith Solutions";
		$this->load->model('student/Student_model');
		$title = $this->Student_model->homedemo();
		$data['title'] = $title;
		$data['body'] = "I am inspired to exceed my limitation because I need to inspire our ojt and to help my Team!";
		$this->load->view('home', $data);
	}
}
