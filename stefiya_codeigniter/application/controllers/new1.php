<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class new1 extends CI_Controller {

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


   public function comp()
	{
		$this->load->view('complaint');
    }
    public function notifi()
{
   //	$id=$this->session->id;
	$this->load->model('newmodel');
	$this->load->library('form_validation');
	$this->form_validation->set_rules("notify","complaint",'required');
	if($this->form_validation->run())
	{
	$a=array("complaint"=>$this->input->post("notificn"),
	        "curnt_date"=>date("y-m-d"),
			  "id"=>$id);
	$this->newmodel->complaint($a);
	redirect('new1/comp','refresh');
	}

	}
	public function notificn()
{
	$this->load->model('newmodel');
	$data['n']=$this->newmodel->notifyvw();
	$this->load->view('viewcomplaint',$data);
}

}