<?php
class Mainmodel extends CI_model
{
    
public function show($a)
{
  $this->db->insert("register",$a); 
  

}
public function infrt($a){
  $this->db->insert("fruit",$a); 
}
public function encpass($pass)
{
  return password_hash($pass,PASSWORD_BCRYPT);
}
public function views()
{
  $this->db->select('*');
  $qry=$this->db->get('register');
  return $qry;
}
public function singledetails($id)
{
  $this->db->select('*');
  $this->db->where("id",$id);
  $qry=$this->db->get("register");
  return $qry;
}
public function singledata()
{
  $qry=$this->db->get("register");
  return $qry;
}
public function updatedetails($a,$id)
{
  $this->db->select('*');
  $qry=$this->db->where("id",$id);
  $qry=$this->db->update("register",$a);
  return $qry;
}
public function deletedetails($id)
{
  $this->db->where("id",$id);
  $this->db->delete("register");
}
public function views1()
{
  $this->db->select('*');
  $qry=$this->db->get("register");
  return $qry;
}
public function approvedetails($id)
{
  
  $qry=$this->db->where("id",$id);
 $qry=$this->db->set("status",'1');
 $qry=$this->db->update("register");
  return $qry;
}
public function rejectdetails($id)
{
  
  $qry=$this->db->where("id",$id);
 $qry=$this->db->set("status",'2');
 $qry=$this->db->update("register");
  return $qry;
}
public function getuserid($email)
{
  $this->db->select('id');
  $this->db->from("register");
  $this->db->where("email",$email);
  return $this->db->get()->row('id');

}
public function getuser($id)
{
  $this->db->select('*');
  $this->db->from("register");
  $this->db->where("id",$id);
  return $this->db->get()->row();
}
public function selectpass($email,$pass)
{
  $this->db->select('password');
  $this->db->from("register");
  $this->db->where("email",$email);
  $qry= $this->db->get()->row('password');
  return $this->verifypass($pass,$qry);
 
}
public function verifypass($pass,$qry)
{
  return password_verify($pass,$qry);
}
public function reg1($a,$b){
  $this->db->insert("login",$b);
  $loginid=$this->db->insert_id();
  $a['loginid']=$loginid;
  $this->db->insert("reg",$a);
  return $insertid=$this->db->insert_id();
}
public function join()
{
  $this->db->select('*');
  $this->db->join('login','login.id=reg.loginid','inner');
  $qry=$this->db->get("reg");
  return $qry;
}

public function approve($loginid)
{
  
  $qry=$this->db->where("id",$loginid);
 $qry=$this->db->set("status",'1');
 $qry=$this->db->update("login");
  return $qry;
}
public function reject($loginid)
{
  
 $qry=$this->db->where("id",$loginid);
 $qry=$this->db->set("status",'2');
 $qry=$this->db->update("login");
  return $qry;
}
public function reg4($a,$b){
  $this->db->insert("login",$b);
  $loginid=$this->db->insert_id();
  $a['loginid']=$loginid;
  $this->db->insert("treg",$a);
  return $insertid=$this->db->insert_id();
}
public function encpass1($pass)
{
  return password_hash($pass,PASSWORD_BCRYPT);
}
public function getid($email)
{
  $this->db->select('id');
  $this->db->from("login");
  $this->db->where("email",$email);
  return $this->db->get()->row('id'); 
}

  public function getusers($id)
  {
    $this->db->select('*');
    $this->db->from("login");
    $this->db->where("id",$id);
    return $this->db->get()->row();
  }
  public function selectpass1($email,$pass)
{
  $this->db->select('password');
  $this->db->from("login");
  $this->db->where("email",$email);
  $qry= $this->db->get()->row('password');
  return $this->verifypass1($pass,$qry);
 
}
public function verifypass1($pass,$qry)
{
  return password_verify($pass,$qry);
}
public function approve1($id)
{
  
  $qry=$this->db->where("id",$id);
 $qry=$this->db->set("status",'1');
 $qry=$this->db->update("login");
  return $qry;
}
public function reject1($id)
{
  
  $qry=$this->db->where("id",$id);
 $qry=$this->db->set("status",'2');
 $qry=$this->db->update("login");
  return $qry;
}
public function view5($id)
{
  $this->db->select("*");
  $this->db->join('login','login.id=reg.loginid','inner');
  $qry=$this->db->where("loginid",$id);
  $qry=$this->db->get("reg");
  return $qry;
}
public function update($a,$b,$id)
{
  $this->db->select('*');
  $qry=$this->db->where("loginid",$id);
  $qry=$this->db->update("reg",$a);
  $qry=$this->db->where("id",$id);
  $qry=$this->db->update("login",$b);
  
  return $qry;
}
public function notification1($a)
{
  $this->db->insert("notification",$a);

}
public function notifyvw()
{
  $this->db->select("*");
  $this->db->join('treg','treg.loginid=notification.loginid','inner');
  $qry=$this->db->get("notification");
  return $qry;
}
public function notedel($id)
{
  $this->db->select("*");
  $this->db->where("loginid",$id);
  $qry=$this->db->get("notification");
  return $qry;
}

public function deletenotify($id)
{
  $this->db->where("id",$id);
  $this->db->delete("notification");
}
}


