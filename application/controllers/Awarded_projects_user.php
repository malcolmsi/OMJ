<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awarded_projects_user extends CI_Controller {

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
	
						$userid=$this->session->userdata('userid');
						
				
	
						$query=$this->db->select('*');
						$query=$this->db->from('orders');
						$query=$this->db->where('SCRIPTOLUTIONLANCER',$userid);
						$query=$this->db->join('scriptolutionprojects','scriptolutionprojects.PID=orders.PID','left');
						$query=$this->db->get();
						$data['result']=$query->result_array();
						
						
	
                        $this->load->view('inc/header');
						$this->load->view('inc/navbar');
						$this->load->view('awarded-projects-user',$data);
						$this->load->view('inc/footer');
		
		
	}
	
}
