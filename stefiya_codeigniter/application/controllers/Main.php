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
	public function index()
	{
		$this->load->view('first');
    }
    public function display()
    {
    	$this->load->view('registration');
	} public function show_fruit()
    {
        $this->load->view('sample');
	}
	public function insrtFruit()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("fruit","name",'required');
		if($this->form_validation->run()){
		$al=array("n_fruit"=>$this->input->post("fruit"));
		$this->Mainmodel->infrt($al);
		redirect(base_url().'Main/show_fruit');
	}
	}
	public function show()
	{
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
	
	  if($this->form_validation->run()){
	
		$pass=$this->input->post("password");
		$encpass=$this->Mainmodel->encpass($pass);
		$a=array("name"=>$this->input->post("name"),"address"=>$this->input->post("address"),
		"gender"=>$this->input->post("gender"),"age"=>$this->input->post("age"),

		"email"=>$this->input->post("email"),"password"=>$encpass);
		$this->Mainmodel->show($a);
		redirect(base_url().'Main/display');

	}
    }

public function views()
{
$this->load->model('Mainmodel');
	$data['n']=$this->Mainmodel->views();
	$this->load->view('table',$data);
}

public function updatedetails()
{
	$a=array("name"=>$this->input->post("name"),
	"address"=>$this->input->post("address"),
	"gender"=>$this->input->post("gender"),
	"age"=>$this->input->post("age"),
	"email"=>$this->input->post("emailid"));

$id=$this->uri->segment(3);
$this->load->model('Mainmodel');
$data['user_data']=$this->Mainmodel->singledetails($id);
$this->Mainmodel->singledata();
$this->load->view('table',$data);
if($this->input->post("update"))
{
	$this->Mainmodel->updatedetails($a,$this->input->post("id"));
	redirect('main/views','refresh');
}
}
public function deletedetails()
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->deletedetails($id);
	redirect('main/views','refresh');
}
public function views1()
{
	$this->load->model('Mainmodel');
	$data['n']=$this->Mainmodel->views1();
	$this->load->view('approve',$data);
}
public function approvedetails()
{
	
$this->load->model('Mainmodel');
$id=$this->uri->segment(3);
$this->Mainmodel->approvedetails($id);
redirect('Main/views1','refresh');

}
public function rejectdetails()
{
	
$this->load->model('Mainmodel');
$id=$this->uri->segment(3);
$this->Mainmodel->rejectdetails($id);
redirect('main/views1','refresh');

}
public function loginpage()
{
	$this->load->view('login');
	
}
public function login()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules("email","email",'required');
	$this->form_validation->set_rules("password","password",'required');
	if($this->form_validation->run())
	{
		$this->load->model('Mainmodel');
		$email=$this->input->post("email");
		$pass=$this->input->post("password");
		$rslt=$this->Mainmodel->selectpass($email,$pass);
		if($rslt)
		{
			$id=$this->Mainmodel->getuserid($email);
			$user=$this->Mainmodel->getuser($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('id'=>(int)$userid->id,'status'=>$user->status));
			if($_SESSION['status']=='1')
			{
				redirect(base_url().'main/views1');
			}
			else
			{
				echo"waiting for approvel";
			}
		}
		else
		{
			echo"invalid user";
	     }
}
else
{
	redirect(base_url().'main/login');
}
}
public function reg()
{
	$this->load->view('register1');
	
}
public function reg1()
{
	
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("fname","name",'required');
		$this->form_validation->set_rules("lname","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("phone","phone",'required');
		$this->form_validation->set_rules("dob","dob",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("education","education",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
	
	  if($this->form_validation->run()){	
	
		$pass=$this->input->post("password");
		$encpass=$this->Mainmodel->encpass($pass);
		$a=array("fname"=>$this->input->post("fname"),
				"lname"=>$this->input->post("lname"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"pincode"=>$this->input->post("pincode"),
				"phone"=>$this->input->post("phone"),
				"dob"=>$this->input->post("dob"),
				"gender"=>$this->input->post("gender"),
				"education"=>$this->input->post("education"));
		$b=array("email"=>$this->input->post("email"),
				"password"=>$encpass,
			"usertype"=>'1');


		$this->Mainmodel->reg1($a,$b);
		redirect(base_url().'Main/logview');

	
    	
	}
	
}
public function join()
{
$this->load->model('Mainmodel');
	$data['n']=$this->Mainmodel->join();
	$this->load->view('login',$data);
}
public function reg3()
{
	$this->load->model('Mainmodel');
	$data['n']=$this->Mainmodel->join();
	$this->load->view('approves',$data);
}
public function approve($loginid)
{
	
$this->load->model('Mainmodel');
$loginid=$this->uri->segment(3);
$this->Mainmodel->approve($loginid);
redirect('Main/reg3','refresh');

}
public function reject($loginid)
{
	
$this->load->model('Mainmodel');
$loginid=$this->uri->segment(3);
$this->Mainmodel->reject($loginid);
redirect('main/reg3','refresh');
}
public function treg()
{
	$this->load->view('t_register');
	
}
public function logview()
{
	$this->load->view('login');
	
}
public function reg4()
{
	
		$this->load->library('form_validation');
		$this->load->model('Mainmodel');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("district","district",'required');
		$this->form_validation->set_rules("pincode","pincode",'required');
		$this->form_validation->set_rules("phone","phone",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("subject","subject",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
	
	  if($this->form_validation->run()){	
	
		$pass=$this->input->post("password");
		$encpass1=$this->Mainmodel->encpass1($pass);
		$a=array("name"=>$this->input->post("name"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"pincode"=>$this->input->post("pincode"),
				"phone"=>$this->input->post("phone"),
				"gender"=>$this->input->post("gender"),
				"age"=>$this->input->post("age"),
				"subject"=>$this->input->post("subject"));
		$b=array("email"=>$this->input->post("email"),
		        "password"=>$encpass1,"status"=>'1',"usertype"=>'0');

		
		$this->Mainmodel->reg4($a,$b);
		redirect(base_url().'Main/logview');

	
    	
	}
	
}
public function login1()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules("email","email",'required');
	$this->form_validation->set_rules("password","password",'required');
	if($this->form_validation->run())
	{
		$this->load->model('Mainmodel');
		$email=$this->input->post("email");
		$pass=$this->input->post("password");
		$rslt=$this->Mainmodel->selectpass1($email,$pass);
		if($rslt)
		{
			$id=$this->Mainmodel->getid($email);
			$user=$this->Mainmodel->getusers($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('id'=>(int)$user->id,
			'status'=>$user->status,
			'usertype'=>$user->usertype));
			if($_SESSION['status']=='1'&& $_SESSION['usertype']=='0')
			{
				redirect(base_url().'Main/indexvw');
			}
			else if($_SESSION['status']=='1'&& $_SESSION['usertype']=='1')
			{
				redirect(base_url().'Main/indexviews');
			}
		}
		else
		{
			echo"waiting for approvel";
	     }
}
else
{
	echo"invalid user";
}
}
public function approve1($loginid)
{
	
$this->load->model('Mainmodel');
$loginid=$this->uri->segment(3);
$this->Mainmodel->approve1($loginid);
redirect('Main/reg3','refresh');

}
public function reject1($loginid)
{
	
$this->load->model('Mainmodel');
$loginid=$this->uri->segment(3);
$this->Mainmodel->reject1($loginid);
redirect('main/reg3','refresh');
}
public function reg5()
{
	$this->load->view('updation');
	
}
public function view5()
{
	$this->load->model('Mainmodel');
	$id=$this->session->id;
	$data['user_data']=$this->Mainmodel->view5($id);
	$this->load->view("updation",$data);
}

public function update()
{
	$a=array("fname"=>$this->input->post("fname"),
	"lname"=>$this->input->post("lname"),
  	"address"=>$this->input->post("address"),
	"district"=>$this->input->post("district"),
	"pincode"=>$this->input->post("pincode"),
	"phone"=>$this->input->post("phone"),
	"gender"=>$this->input->post("gender"),
	"dob"=>$this->input->post("dob"),
	"education"=>$this->input->post("education"));
	$b=array("email"=>$this->input->post("email"));


$this->load->model('Mainmodel');
if($this->input->post("update"))
{
	$id=$this->session->id;
	$this->Mainmodel->update($a,$b,$id);
	redirect('main/view5','refresh');
}
}
public function notification()
{
	$this->load->view('notification');
	
}


public function notification1()
{
	$id=$this->session->id;
	$this->load->model('Mainmodel');
	$this->load->library('form_validation');
	$this->form_validation->set_rules("notify","notification",'required');
	if($this->form_validation->run())
	{
	$a=array("notification"=>$this->input->post("notify"),
	        "curnt_date"=>date("y-m-d"),
			  "loginid"=>$id);
	$this->Mainmodel->notification1($a);
	redirect('Main/note','refresh');
	}

	}
	
	
	public function notifictn()
{
	$this->load->model('Mainmodel');
	$data['n']=$this->Mainmodel->notifyvw();
	$this->load->view('notifytable',$data);
}

public function note()
{
	$this->load->model('Mainmodel');
	$id=$this->session->id;
	$data['n']=$this->Mainmodel->notedel($id);
	$this->load->view('notifydelete',$data);
	
}

public function deletenotify()
{
	$this->load->model('Mainmodel');
	$id=$this->uri->segment(3);
	$this->Mainmodel->deletenotify($id);
	redirect('main/note','refresh');
}
public function indexview()
{
	$this->load->view('index');
	
}
public function indexviews()
{
	$this->load->view('index2');
	
}
public function indexvw()
{
	$this->load->view('index3');
	
}

}