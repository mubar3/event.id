<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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
    $id=$this->session->userdata['id'];
    $query = $this->db->get_where('user',
               array(
               'id_user' => $id
             ));
    $data['user']=$query->result();


		#query jenis event
		$this->db->select('*');
    $this->db->from('jenis_event');
    $query=$this->db->get();
    $data['jenis_event']=$query->result();

		$this->db->select('*');
    $this->db->from('event');
    $this->db->join('jenis_event','jenis_event.no=event.jenis');
    $query=$this->db->get();
    $data['event']=$query->result();

		$this->load->view('depan/template/headerhomelogin',$data);
		$this->load->view('depan/v_home_login',$data);
		$this->load->view('depan/registerevent');
		$this->load->view('depan/register');
		$this->load->view('depan/login');
		$this->load->view('depan/event');
		$this->load->view('depan/event_login');
		$this->load->view('depan/template/footer');
		$this->load->view('depan/javascript');
	}

  public function logout()
  {
  session_unset();
  $this->session->sess_destroy();
  redirect('welcome');
  }

}
