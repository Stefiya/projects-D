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
				redirect(base_url().'Main/office');
			}
			else if($_SESSION['status']=='1' && $_SESSION['usertype']=='2')
			{
				redirect(base_url().'Main/pblic');
			}
			else if($_SESSION['status']=='1' && $_SESSION['usertype']=='3')
			{
				redirect(base_url().'Main/staffs');
			}
			else
			{
				echo "waiting for approval"; 
			}

			
		}

		else
		{
			echo "Invalid user";
		}

		}
		else
		{
			redirect(base_url().'Main/loginview');
		}
	}








	/*public function comp()
	{
		$this->load->view('complaint');
	}
	
	public function notif()
	{
		$id=$this->session->loginid;
		$this->load->model('Mainmodel');
		$this->load->library('form_validation');
		$this->form_validation->set_rules("complaint","comp",'required');
			if($this->form_validation->run())
			
		{
		
		$a=array("notification"=>$this->input->post("complaint"),
		 "currentdate"=>date('y-m-d'),
		 "loginid"=>$id);
	 	$this->Mainmodel->notif($a);
		redirect(base_url().'Main/del');
	
		}
	}*/






//public

	/*public function p_form()
    {
        $this->load->view('publicform');
    }*/
    public function publ()
	{
		$this->load->view('publicform');
	}
        public function frm()
    {
     $this->load->library('form_validation');
     $this->load->model('Mainmodel');
     $this->form_validation->set_rules("fname","name",'required');
     $this->form_validation->set_rules("lname","name",'required');
     $this->form_validation->set_rules("address","useraddress",'required');
     $this->form_validation->set_rules("pin","useraddress",'required');
     $this->form_validation->set_rules("phoneno","phno",'required');
     $this->form_validation->set_rules("gender","gender",'required');
     $this->form_validation->set_rules("email","email",'required');
     $this->form_validation->set_rules("password","userpassword",'required');
     $this->form_validation->set_rules("confirmpassword","userpassword",'required');
        if($this->form_validation->run())
         {
            $pas=$this->input->post("password");
            $encpass1=$this->Mainmodel->encpass1($pas);
            $a=array("fname"=>$this->input->post("fname"),
                "lname"=>$this->input->post("lname"),
                "address"=>$this->input->post("address"),
                "pincode"=>$this->input->post("pin"),
                "phno"=>$this->input->post("phoneno"),
                "gender"=>$this->input->post("gender"));
             $b=array("email"=>$this->input->post("email"),
                "password"=>$encpass1,"usertype"=>'2');
            $this->Mainmodel->data_insert($a,$b);
              redirect(base_url().'Main/publ');
        }
    }

    /*public function b_app()
    {
        $this->load->view('applicationfrm');
    }*/
        

	
	
	//approve or reject public
	public function public()
	{
		$this->load->model('Mainmodel');
		$data['n']=$this->Mainmodel->publics();
		$this->load->view('pubapprove',$data);

	}


	public function approvedetails()
	{
		$this->load->model('Mainmodel');
		$fid=$this->uri->segment(3);
		$this->Mainmodel->approvedetails($fid);
	    redirect('Main/public','refresh');
		}
		
	
	public function rejectdetails()
	{

		$this->load->model('Mainmodel');
		$fid=$this->uri->segment(3);
		$this->Mainmodel->rejectdetails($id);
	    redirect('Main/public','refresh');
	}




	//Emp_office
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
              redirect(base_url().'Main/emp_reg');

          }
    }

// employeeoffice approve or reject

public function emp_table1()
{
	$this->load->model('Mainmodel');
	$data['n']=$this->Mainmodel->emp_view2();
	$this->load->view('emp_table',$data);
}

public function emp_approve()
{
	$this->load->model('Mainmodel');
	$empid=$this->uri->segment(3);
	$this->Mainmodel->emp_approve2($empid);
	redirect('Main/emp_table1','refresh');
}
public function emp_reject()
{
	$this->load->model('Mainmodel');
	$empid=$this->uri->segment(3);
	$this->Mainmodel->emp_reject2($empid);
	redirect('Main/emp_table1','refresh');
}


//empstaff
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


//empstaff approve and reject

public function staff_table1()
    {
        $this->load->model('Mainmodel');
        $data['n']=$this->Mainmodel->staff_view2();
        $this->load->view('staff_table',$data);
    }
    
    
    public function staff_approve()
    {
        $this->load->model('Mainmodel');
        $fid=$this->uri->segment(3);
        $this->Mainmodel->staff_approve2($fid);
        redirect('Main/staff_table1','refresh');
    }
    public function staff_reject()
    {
        $this->load->model('Mainmodel');
        $fid=$this->uri->segment(3);
        $this->Mainmodel->staff_reject2($fid);
        redirect('Main/staff_table1','refresh');
    }


//Add complaint
public function vi()
{
$this->load->view('com');
}
public function add_complaint()
{
   
$this->load->library('form_validation');
$this->load->model('Mainmodel');
$this->form_validation->set_rules("complaint","complaint",'required');
$this->form_validation->set_rules("subject","subject",'required');

if($this->form_validation->run())
         {

           $a=array("complaint"=>$this->input->post("complaint"),
                     "currentdate"=>date('y-m-d'),
                      "subject"=>$this->input->post("subject"));
           
           $this->Mainmodel->insert_complaint($a);
           redirect("Main/view_complaint",'refresh');

          }
    }
//View complaint

      public function view_complaint()
      {
        $this->load->model('Mainmodel');
        $data['n']=$this->Mainmodel->view();
        $this->load->view('viewcomplaint',$data);    
      }

//delete complaint
public function deletedetail()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->deletedetail($id);
		redirect('Main/view_complaint','refresh');

	}

	//Add notification
	public function notview()
    {
        $this->load->view('notfy');
    }
    public function add_notification()
    {
       
        $this->load->library('form_validation');
        $this->load->model('Mainmodel');
        $this->form_validation->set_rules("notification","notification",'required');
       

         if($this->form_validation->run())
         {

           $a=array("notification"=>$this->input->post("notification"),"currentdate"=>date('y-m-d'));
           
           $this->Mainmodel->insert_notify($a);
           redirect("Main/view_not",'refresh');

          }
         }

		 //view notification
   
        public function view_not()
      {
        $this->load->model('Mainmodel');
        $data['n']=$this->Mainmodel->viewnotif();
        $this->load->view('viewnot',$data);    
      }

      //delete notification
   
      public function delete()
	{
		$this->load->model('Mainmodel');
		$id=$this->uri->segment(3);
		$this->Mainmodel->delete($id);
		redirect('Main/view_not','refresh');

	}
	
	//insert death certificte

	public function death()
    {
        $this->load->view('death');
    }
    public function death_form()
    {
     $this->load->library('form_validation');
     $this->form_validation->set_rules("date","date",'required');
     $this->form_validation->set_rules("name","name",'required');
     $this->form_validation->set_rules("gender","gender",'required');
     $this->form_validation->set_rules("address","address",'required');
     $this->form_validation->set_rules("hfname","hfname",'required');
     $this->form_validation->set_rules("mname","mothername",'required');
     $this->form_validation->set_rules("daddress","daddress",'required');
     $this->form_validation->set_rules("age","age",'required');
     $this->form_validation->set_rules("dplace","dplace",'required');
     $this->form_validation->set_rules("iname","iname",'required');
     $this->form_validation->set_rules("iaddress","iaddress",'required');
     $this->form_validation->set_rules("panchayath","panchayath",'required');
    $this->form_validation->set_rules("aadharno","adno",'required');
    $this->form_validation->set_rules("phoneno","phoneno",'required');
    
        if($this->form_validation->run())
         {  
            //echo"higghj";exit;
            $this->load->model('Mainmodel');
            //$id=$this->session->id;
            $a=array("d_date"=>$this->input->post("date"),
                "name"=>$this->input->post("name"),
                "gender"=>$this->input->post("gender"),
                "address"=>$this->input->post("address"),
                "hf_name"=>$this->input->post("hfname"),
                "mother_name"=>$this->input->post("mname"),
                "d_address"=>$this->input->post("daddress"),
                "age"=>$this->input->post("age"),
                "d_place"=>$this->input->post("dplace"),
                "i_name"=>$this->input->post("iname"),
                "I_address"=>$this->input->post("iaddress"),
                "panchayath"=>$this->input->post("panchayath"),
                "aadharno"=>$this->input->post("aadharno"),
                "phno"=>$this->input->post("phoneno"));
              $this->Mainmodel->Death_data($a);
              redirect(base_url().'Main/death');
        }
    }

//cast certificate
    public function cast()
    {
        $this->load->view('cast');
    }

public function cast_form()
    {
     $this->load->library('form_validation');
     $this->form_validation->set_rules("name","name",'required');
     $this->form_validation->set_rules("age","age",'required');
     $this->form_validation->set_rules("gender","gender",'required');
     $this->form_validation->set_rules("fname","fname",'required');
     $this->form_validation->set_rules("pin","pin",'required');
     $this->form_validation->set_rules("local","local",'required');
     $this->form_validation->set_rules("village","village",'required');
     $this->form_validation->set_rules("taluk","taluk",'required');
     $this->form_validation->set_rules("cast","cast",'required');
      $this->form_validation->set_rules("religion","religion",'required');
     $this->form_validation->set_rules("panchayath","panchayath",'required');
     $this->form_validation->set_rules("aadharno","adno",'required');
     $this->form_validation->set_rules("phoneno","phoneno",'required');
    //echo"hi";exit;
        if($this->form_validation->run())
         {  
            
            $config['upload_path'] = './file/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|doc|pdf'; 
            $config['max_size'] = '1000';
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
            $this->load->model('Mainmodel');
            $a=array("name"=>$this->input->post("name"),
            "age"=>$this->input->post("age"),
                "gender"=>$this->input->post("gender"),
                "fname"=>$this->input->post("fname"),
                "pin"=>$this->input->post("pin"),
                "local"=>$this->input->post("local"),
                "village"=>$this->input->post("village"),
                "taluk"=>$this->input->post("taluk"),
                "cast"=>$this->input->post("cast"),
                "religion"=>$this->input->post("religion"),
                "panchayath"=>$this->input->post("panchayath"),
                "aadharno"=>$this->input->post("aadharno"),
                "phno"=>$this->input->post("phoneno"),
                "file"=>$img,
                      'c_id'=>$id); 
                $this->Mainmodel->cast_details($a); 
                redirect(base_url().'Main/cast');
                
        }
              

    }
    //birth certificate
    public function b_app()
    {
        $this->load->view('applicationfrm');
    }
    public function appl_form()
    {
     $this->load->library('form_validation');
     $this->form_validation->set_rules("fname","name",'required');
     $this->form_validation->set_rules("dob","dob",'required');
     $this->form_validation->set_rules("address","useraddress",'required');
     $this->form_validation->set_rules("pin","pincode",'required');
     $this->form_validation->set_rules("phoneno","phno",'required');
     $this->form_validation->set_rules("gender","gender",'required');
     $this->form_validation->set_rules("birth","bplace",'required');
     $this->form_validation->set_rules("houseno","house",'required');
     $this->form_validation->set_rules("gaurdian","gaurdian",'required');
     $this->form_validation->set_rules("street","street",'required');
     $this->form_validation->set_rules("district","district",'required');
     $this->form_validation->set_rules("panchayath","panchayath",'required');
     $this->form_validation->set_rules("ward","ward",'required');
     $this->form_validation->set_rules("aadharno","adno",'required');
    $this->form_validation->set_rules("block","block",'required');
        if($this->form_validation->run())
         {  
             //echo"hi";exit;
            $this->load->model('Mainmodel');
            //$id=$this->session->id;
            $a=array("fname"=>$this->input->post("fname"),
                "DOB"=>$this->input->post("dob"),
                "address"=>$this->input->post("address"),
                "pin"=>$this->input->post("pin"),
                "phoneno"=>$this->input->post("phoneno"),
                "gender"=>$this->input->post("gender"),
                "birthplace"=>$this->input->post("birth"),
                "guardianname"=>$this->input->post("gaurdian"),
                "street"=>$this->input->post("street"),
                "houseno"=>$this->input->post("houseno"),
                "district"=>$this->input->post("district"),
                "panchayath"=>$this->input->post("panchayath"),
                "ward"=>$this->input->post("ward"),
                "aadharno"=>$this->input->post("aadharno"),
                "block"=>$this->input->post("block"));
            $this->Mainmodel->app_insert($a);
              redirect(base_url().'Main/b_app');
        }
    }

// public update form
    public function update_reg()
    {
            $this->load->model('Mainmodel');
            $id=$this->session->fid;
            $data['userdata']=$this->Mainmodel->update_data($id);
            $this->load->view("pform_update",$data);
            
         }


    public function updatereg()
    {
        $id=$this->session->fid;
        $this->load->model('Mainmodel');
        $a=array("fname"=>$this->input->post("fname"),
        "lname"=>$this->input->post("lname"),
        "address"=>$this->input->post("address"),
        "pincode"=>$this->input->post("pin"),
        "phoneno"=>$this->input->post("phno"),
        "gender"=>$this->input->post("gender"));
       $b=array("email"=>$this->input->post("email"));
       $this->Mainmodel->updatareg($a,$b,$id);
       redirect(base_url().'Main/update_reg');      
    
            
       }   

// staff updateform

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


//add salary bill

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
    //Add complaint
    public function comp()
            {
                $this->load->view('pub_complaint');
            }


            public function pub_comp()
                    {
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules("complaint","complaint",'required');
                        if($this->form_validation->run())
                        {
                            $fid=$this->session->fid;
                            $this->load->model('Mainmodel');
                            $a=array("complaint"=>$this->input->post("complaint"),
                            "curent_date"=>date('y-m-d'),
                            "fid"=>$fid );
                            $this->Mainmodel->add_pcompl($a);
                            redirect(base_url().'Main/viewcompl');
                        }
                    }
                    
//view complaint
                    
                public function viewcompl()
                    {
                            $this->load->model('Mainmodel');
                            $id=$this->session->fid;
                            $data['userdata']=$this->Mainmodel->publ_compl($id);
                            $this->load->view("vew_pcomp",$data);
                            
                        }
                public function delete_complaint()
                {
                    $this->load->model('Mainmodel');
                    $id=$this->uri->segment(3);
                    $this->Mainmodel->delete_complaint($id);
                    redirect('Main/viewcompl','refresh');
                }////////////////////////

//view salary bill

public function viewsal()
    {
        $this->load->model('Mainmodel');
        $data['n']=$this->Mainmodel->salnotify();
        $this->load->view('view_sal',$data);
    }

// view birth certificate approve and reject

     
    public function birth_data()
    {
        $this->load->model('Mainmodel');
        $data['n']=$this->Mainmodel->birth_view1();
        $this->load->view('birth_table',$data);
        
    }
    public function birth_approve()
    {
        $this->load->model('Mainmodel');
        $bid=$this->uri->segment(3);
        $this->Mainmodel->birth_approve1($bid);
        redirect(base_url().'Main/birth_data');
    }
    public function birth_reject()
    {
        $this->load->model('Mainmodel');
        $bid=$this->uri->segment(3);
        $this->Mainmodel->birth_reject1($bid);
        redirect(base_url().'Main/birth_data');

}
// caste certificate approve or reject

public function caste_data()
{
    $this->load->model('Mainmodel');
    $data['n']=$this->Mainmodel->caste_view1();
    $this->load->view('caste_table',$data);
    
}
public function caste_approve()
{
    $this->load->model('Mainmodel');
    $cid=$this->uri->segment(3);
    $this->Mainmodel->caste_approve1($cid);
    redirect(base_url().'Main/caste_data');
}
public function caste_reject()
{
    $this->load->model('Mainmodel');
    $cid=$this->uri->segment(3);
    $this->Mainmodel->caste_reject1($cid);
    redirect(base_url().'Main/caste_data');

}

// death certificate approve or reject

public function death_data()
{
    $this->load->model('Mainmodel');
    $data['n']=$this->Mainmodel->death_view1();
    $this->load->view('death_table',$data);
    
}
public function death_approve()
{
    $this->load->model('Mainmodel');
    $did=$this->uri->segment(3);
    $this->Mainmodel->death_approve1($did);
    redirect(base_url().'Main/death_data');
}
public function death_reject()
{
    $this->load->model('Mainmodel');
    $did=$this->uri->segment(3);
    $this->Mainmodel->death_reject1($did);
    redirect(base_url().'Main/death_data');

}

public function home()
	{
		$this->load->view('Home_EMS.php');
	}
	
	
	public function admin()
	{
		$this->load->view('adminhome');
	}

	public function pblic()
	{
		$this->load->view('publichome');
	}

	public function office()
	{
		$this->load->view('empofficehome');
	}

	public function staffs()
	{
		$this->load->view('empstaffhome');
	}


}
