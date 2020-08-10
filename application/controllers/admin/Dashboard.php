<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['logged_in'])) {
			$url = base_url('administrator');
			redirect($url);
		};
	}
	function index()
	{

		$this->load->view('admin/v_dashboard');
	}
}
