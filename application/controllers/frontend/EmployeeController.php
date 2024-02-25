<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->model('employee/Employee_model', 'empmodel');
		$data['employee'] = $this->empmodel->getemployee();


		$this->load->view('frontend/employee', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('frontend/create');
		$this->load->view('template/footer');
	}

	public function store()
	{

		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('emailid', 'Email ID', 'required');
		if ($this->form_validation->run()) {

			$data = [
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'phone' => $this->input->post('phone'),
				'emailid' => $this->input->post('emailid'),
			];

			$this->load->model('employee/Employee_model', 'emp');
			$this->emp->insertemployee($data);
			redirect(base_url('employee'));
		} else {
			$this->create();
			// redirect(base_url('employee/add'));
		}











		//For Testing use var_dump(); it is like in laravel dd();
		// $data = [
		// 	'firstname' => $this->input->post('firstname'),
		// 	'lastname' => $this->input->post('lastname'),
		// 	'phonenumber' => $this->input->post('phonenumber'),
		// 	'emailid' => $this->input->post('emailid'),


		// ];
		// var_dump($data);

	}
}

/* End of file EmployeeController.php and path \application\controllers\frontend\EmployeeController.php */
