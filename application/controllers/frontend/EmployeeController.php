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
			$this->session->set_flashdata('status', 'Employee Data inserted Successfully');
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


	public function edit($id)
	{

		$this->load->view('template/header');

		$this->load->model('employee/Employee_model', 'empedit');
		$data['employee'] = $this->empedit->editEmployee($id);
		
		$this->load->view('frontend/edit', $data);
		$this->load->view('template/footer');
	}


	public function update($id) 
	{

		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('emailid', 'Email ID', 'required');
		if ($this->form_validation->run()) :

			$data = [
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'phone' => $this->input->post('phone'),
				'emailid' => $this->input->post('emailid'),
			];
			$this->load->model('employee/Employee_model', 'empupdate');
			$this->empupdate->updatEmployee($data, $id);
			redirect(base_url('employee'));

		else:
			$this->edit($id);

		endif;
		
	}

	public function delete($id){

		$this->load->model('employee/Employee_model', 'empdel');
		$this->empdel->deleteEmployee($id);
		redirect(base_url('employee'));
		

	}



}

/* End of file EmployeeController.php and path \application\controllers\frontend\EmployeeController.php */
