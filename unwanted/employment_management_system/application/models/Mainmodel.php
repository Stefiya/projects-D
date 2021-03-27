<?php
class Mainmodel extends CI_model
{
/*public function details_view()
{

    $this->db->insert('details',$a);
}
public function encpass()
{
    $this->encpass->($pass,PASSWORD_BCRYPT)
}*/

public function show($a,$b)
{
  $this->db->insert("logtb",$b); 
  $logid=$this->db->insert_id();
  $a['lid']=$logid; 
  $this->db->insert("stafftb",$a);  
}
public function encpass($pass)
{
return  password_hash($pass,PASSWORD_BCRYPT);
}

public function views1()
{
  $this->db->select('*');
  $qry=$this->db->join("logtb","logtb.fid=stafftb.lid",'inner');
  $qry=$this->db->get("stafftb");
  return $qry;
}
public function emp_regtr($a,$b)
    {
     
     $this->db->insert("logtb",$b);
     $fid=$this->db->insert_id();
     $a['empid']=$fid;
     $this->db->insert("emp_reg",$a);
     return $insert_id=$this->db->insert_id();
     
    }
    public function encpass5($pass)
    {
        return password_hash($pass,PASSWORD_BCRYPT);
    }
    

public function staff_view2()
    {
        $this->db->select('*');
        $this->db->join('logtb','logtb.fid=stafftb.lid','inner');
        $qry=$this->db->get("stafftb");
         return $qry;
    }
    public function staff_approve2($fid)
    {
        $qry=$this->db->where("fid",$fid);
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("logtb");
        return $qry;   
    }
    public function staff_reject2($fid)
    {
        $qry=$this->db->where("fid",$fid);
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("logtb");
        return $qry;   
    } 

    public function updateview($id)
    {
      $this->db->select("*");
      $this->db->join("logtb","logtb.fid=stafftb.lid",'inner');
      $qry=$this->db->where("lid",$id);
      $qry=$this->db->get("stafftb");
      return $qry;
    }
    public function update($a,$b,$id)
    {
      $qry=$this->db->where('fid',$id);
      $qry=$this->db->update("logtb",$b);
      $qry=$this->db->where('lid',$id);
      $qry=$this->db->update("stafftb",$a);
      return $qry;
      /*$this->db->select('*');
      $this->db->join("logtb","logtb.fid=stafftb.lid",'inner');
      $qry=$this->db->where("stafftb.lid",$id);
      $qry=$this->db->update("stafftb",$a);
      $qry=$this->db->where("logtb.fid",$id);
      $qry=$this->db->update("logtb",$b);
      
      return $qry;*/
    }
    public function getusersid($email)
    {
      $this->db->select('fid');
      $this->db->from("logtb");
      $this->db->where("email",$email);
      return $this->db->get()->row('fid');
    }
    public function getusers($fid)
    {
      $this->db->select('*');
      $this->db->from("logtb");
      $this->db->where("fid",$fid);
      return $this->db->get()->row();
    }
    public function selectpass1($email,$pass)
    {
      $this->db->select('password');
      $this->db->from("logtb");
      $this->db->where("email",$email);
      $qry=$this->db->get()->row('password');
      return $this->verifypass1($pass,$qry);
    }
    public function verifypass1($pass,$qry)
    
    {
      return password_verify($pass,$qry);
    }
    
    public function bill_add($a)
    {
      $this->db->insert('saltb',$a);
    }
    public function bill_join()
      {
        $this->db->select('*');
        $this->db->join("logtb","logtb.fid=stafftb.lid",'inner');
        $qry=$this->db->get("saltb");
        return $qry;
      }
  
      public function salnotify()
      {
        $this->db->select("*");
        $this->db->join("logtb","logtb.fid=saltb.sid",'inner');
        $qry=$this->db->get("saltb");
        return $qry;
      }

}

?>