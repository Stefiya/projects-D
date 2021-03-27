<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	/*public function index()
	{
		$this->load->view('first');
    }
	public function details()
	{
		$this->load->view('details');
	}*/

public function staff()
	{
		$this->load->view('staffregister');
	}
	public function staff_reg()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("staffid","staffid",'required');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("officeid","officeid",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("dob","dob",'required');
		$this->form_validation->set_rules("contact","contact",'required');
		$this->form_validation->set_rules("designation","designation",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		
	
	  if($this->form_validation->run()){
	
		$pass=$this->input->post("password");
		$encpass=$this->Mainmodel->encpass($pass);
		$a=array("staffid"=>$this->input->post("staffid"),
				"name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"gender"=>$this->input->post("gender"),
				"officeid"=>$this->input->post("officeid"),
				"pincode"=>$this->input->post("pincode"),
				"district"=>$this->input->post("district"),
				"gender"=>$this->input->post("gender"),
				"dob"=>$this->input->post("dob"),
				"contact"=>$this->input->post("contact"),
				"designation"=>$this->input->post("designation"));
		$b=array("email"=>$this->input->post("email"),
			"password"=>$encpass,"usertype"=>'3');
		$this->Mainmodel->show($a,$b);
		redirect(base_url().'Main/staff');

	}
    }
	public function staff_table1()
    {
        $this->load->model('Mainmodel');
        $data['n']=$this->Mainmodel->staff_view2();
        $this->load->view('stafftable',$data);
    }
    
    
    public function staff_approve()
    {
        $this->load->model('Mainmodel');
        $fid=$this->uri->segment(3);
        $this->Mainmodel->staff_approve2($fid);
        redirect('main/staff_table1','refresh');
    }
    public function staff_reject()
    {
        $this->load->model('Mainmodel');
        $fid=$this->uri->segment(3);
        $this->Mainmodel->staff_reject2($fid);
        redirect('main/staff_table1','refresh');
    }
	
	public function emp_reg()
    {
        $this->load->view('emp_form');
    }
    public function emp_regist()
    {
        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
        $this->form_validation->set_rules("ofid","id",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("pincode","pincode",'required');
        $this->form_validation->set_rules("district","district",'required');
        $this->form_validation->set_rules("thaluk","thaluk",'required');
        $this->form_validation->set_rules("phoneno","phoneno",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        $this->form_validation->set_rules("confirm_password","confirmpassword",'required');
        if($this->form_validation->run())
          {
            $pass=$this->input->post("password");
            $encpass=$this->Mainmodel->encpass5($pass);
            
            $a=array("ofid"=>$this->input->post("ofid"),
              "address"=>$this->input->post("address"),
              "pincode"=>$this->input->post("pincode"),
              "district"=>$this->input->post("district"),
              "thaluk"=>$this->input->post("thaluk"),
              "phoneno"=>$this->input->post("phoneno"));

            $b=array("email"=>$this->input->post("email"),
              "password"=>$encpass,
              "usertype"=>'1');
              $this->Mainmodel->emp_regtr($a,$b);
              redirect(base_url().'main/emp_reg');

          }
    }
    


	public function view1()
	{
		$this->load->view('staffupdation');
		
	}
	public function updates()
	{
		$this->load->model('Mainmodel');
		$id=$this->session->fid;
		$data['user_data']=$this->Mainmodel->updateview($id);
		$this->load->view("staffupdation",$data);
	}

	public function updation()
{
	$id=$this->session->fid;
	$this->load->model('Mainmodel');
	$a=array("staffid"=>$this->input->post("staffid"),
	"name"=>$this->input->post("name"),
  	"address"=>$this->input->post("address"),
	"officeid"=>$this->input->post("officeid"),
	"pincode"=>$this->input->post("pincode"),
	"district"=>$this->input->post("district"),
	"gender"=>$this->input->post("gender"),
	"dob"=>$this->input->post("dob"),
	"contact"=>$this->input->post("contact"),
	"designation"=>$this->input->post("designation"));
	$b=array("email"=>$this->input->post("email"));
    $this->Mainmodel->update($a,$b,$id);
	redirect(base_url().'main/updates','refresh');

	
}

	public function login()
    {
        $this->load->view('emlogin');
    }
    public function loginview()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("email","useremail",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
    {
        $this->load->model('Mainmodel');
        $email=$this->input->post("email");
        $pass=$this->input->post("password");
        $rslt=$this->Mainmodel->selectpass1($email,$pass);
        if($rslt)
        {
            $id=$this->Mainmodel->getusersid($email);
            $user=$this->Mainmodel->getusers($id);
            $this->load->library(array('session'));
            $this->session->set_userdata(array('fid'=>(int)$user->fid,'status'=>$user->status,
            'usertype'=>$user->usertype));
            if($_SESSION['status']=='1' && $_SESSION['usertype']=='0')
            {
                redirect(base_url().'Main/admin');
            }
            else if($_SESSION['status']=='1' && $_SESSION['usertype']=='1')
            {
                redirect(base_url().'Main/public');
            }
            else if($_SESSION['status']=='1' && $_SESSION['usertype']=='2')
            {
                redirect(base_url().'Main/employeoffice');
            }
            else if($_SESSION['status']=='1' && $_SESSION['usertype']=='3')
            {
                redirect(base_url().'Main/empstaff');
            }

            else
            {
                echo "waiting for Approval";
            }
        }
        else
        {
            echo "Invalid user";
        }
        }
        else
        {
            redirect(base_url().'Main/login');
        }
    }

	public function home()
    {

        $this->load->view('Home_EMS.php');

    } 
	public function empstaff()
    {

        $this->load->view('empstaffhome.php');

    }
	public function sal()
    {

        $this->load->view('salbill.php');

    }
	public function add_bill(){

        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
        $this->form_validation->set_rules("name","name",'required');
         $this->form_validation->set_rules("designation","designation",'required');
       
        if($this->form_validation->run()){
            $config['upload_path']='./bill/';
            $config['allowed_types']='jpg|gif|pdf|png|doc';
            $config['max_size']=1000;

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('file'))
            {
                $error=array('error'=>$this->upload->display_errors());
                print_r($error);
            }
            else{
                $data=array('file'=>$this->upload->data());
                $img=$data['file']['file_name'];
            }
           
            $id=$this->session->fid;
            $a=array("file"=>$img,"name"=>$this->input->post("name"),
            "designation"=>$this->input->post("designation"),
            'sid'=>$id);          
            $this->Mainmodel->bill_add($a);
            redirect('main/sal','refresh');
            }
            echo "<script> alert("."Do you want to insert"."); </script>";
           
    }

	public function viewsal()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->salnotify();
		$this->load->view('view_sal',$data);
	}


}
