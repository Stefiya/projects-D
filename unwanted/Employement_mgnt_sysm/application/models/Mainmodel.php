<?php
class Mainmodel extends CI_model
{
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
  

//public
  public function data_insert($a,$b)
  {
      $this->db->insert("logtb",$b);
      $logid=$this->db->insert_id();
      $a['fkey']=$logid;
      $this->db->insert("p_form",$a);
     
  }
public function encpass1($pas)
  {
      return password_hash($pas,PASSWORD_BCRYPT);
  }

//public approve and reject
  public function publics()
  {
    $this->db->select("*");
    $this->db->join('logtb','logtb.fid=p_form.fkey','inner');
    $qry=$this->db->get("p_form");
    return $qry;
  }
  
  public function approvedetails( $fid)
  {
    $qry=$this->db->where("fid",$fid);
    $qry=$this->db->set("status",'1');
    $qry=$this->db->update("logtb");
    return $qry;
  }
  public function rejectdetails( $fid)
  {
    $qry=$this->db->where("fid",$fid);
    $qry=$this->db->set("status",'2');
    $qry=$this->db->update("logtb");
    return $qry;
  }



//emp_office

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
    
    //empoffice approve and reject
    public function emp_view2()
    {
        $this->db->select('*');
        $this->db->join('logtb','logtb.fid=emp_reg.empid','inner');
        $qry=$this->db->get("emp_reg");
         return $qry;
    }
    public function emp_approve2($fid)
    {
        $qry=$this->db->where("fid",$fid);
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("logtb");
        return $qry;   
    }
    public function emp_reject2($fid)
    {
        $qry=$this->db->where("fid",$fid);
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("logtb");
        return $qry;   
    } 



//empstaff

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


//empstaff approve and reject

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



//Add complaint

public function insert_complaint($a)
{
   $this->db->insert("comptb",$a);
}

//View complaint

public function view()
    {
       $this->db->select('*');
       $datas=$this->db->get("comptb");
       return $datas;
    }
   
    //delete complaint 
    public function deletedetail($id)
    {
      $this->db->where("id",$id);
      $this->db->delete("comptb");
    }

//Add notification
    public function insert_notify($a)
    {
       $this->db->insert("not_tb",$a);
    }
//view notification
    public function viewnotif()
        {
           $this->db->select('*');
           $datas=$this->db->get("not_tb");
           return $datas;
        }


//delete notification 
public function delete($id)
{
  $this->db->where("id",$id);
  $this->db->delete("not_tb");
}

  //death certificate
public function Death_data($a)
             {
                 $this->db->insert("death_tb",$a);
                 
             }

//cast certificate
    public function  cast_details($a)
             {
                $this->db->insert("cast_tb",$a);
                
            }
//birth certificate
            public function app_insert($a)
                {
                    $this->db->insert("birthcft_form",$a);
                    
                }
// public updateform

public function update_data($id)
                {
                    $this->db->select('*');
                    $this->db->join('logtb','logtb.fid=p_form.fkey','inner');
                    $qry=$this->db->where("fkey",$id);
                    $qry=$this->db->get("p_form");
                     return $qry;
                }


                public function updatareg($a,$b,$id)
                {
                    $this->db->select('*');
                    $this->db->join('logtb','logtb.fid=p_form.fkey','inner');
                    $qry=$this->db->where("p_form.fkey",$id);
                    $qry=$this->db->update('p_form',$a);
                    $qry=$this->db->where("logtb.fid",$id);
                    $qry=$this->db->update('logtb',$b);
                    return $qry; 
             }  

//staff updation
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

    //add salary bill
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

      //Add complaint

      public function  add_pcompl($a)
            {
               $this->db->insert("pub_compl",$a);
               
           }
           //view complaint
           public function publ_compl($id)
           {
                $this->db->select('*');
                $this->db->join('logtb','logtb.fid=pub_compl.fid','inner');
                $qry=$this->db->get("pub_compl");
                 return $qry;
            }
            public function delete_complaint($id)
            {
                $this->db->where('com_id',$id);
                $this->db->delete("pub_compl");
            }
//view salary bill
            public function salnotify()
      {
        $this->db->select("*");
        $this->db->join("logtb","logtb.fid=saltb.sid",'inner');
        $qry=$this->db->get("saltb");
        return $qry;
      }

// birth certificate approve or reject

    public function birth_view1()
    {
        $this->db->select('*');
        $query=$this->db->get("birthcft_form");
        return $query;
    }
    public function birth_approve1($bid)
    {
        $qry=$this->db->where("bid",$bid);
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("birthcft_form");
        return $qry;
    }
    public function birth_reject1($bid)
    {
        $qry=$this->db->where("bid",$bid);
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("birthcft_form");
        return $qry;
    }

    // caste certificate approve or reject

    public function caste_view1()
    {
        $this->db->select('*');
        $query=$this->db->get("cast_tb");
        return $query;
    }
    public function caste_approve1($cid)
    {
        $qry=$this->db->where("c_id",$cid);
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("cast_tb");
        return $qry;
    }
    public function caste_reject1($cid)
    {
        $qry=$this->db->where("c_id",$cid);
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("cast_tb");
        return $qry;
    }

    // death certificate approve or reject

    public function death_view1()
    {
        $this->db->select('*');
        $query=$this->db->get("death_tb");
        return $query;
    }
    public function death_approve1($did)
    {
        $qry=$this->db->where("d_id",$did);
        $qry=$this->db->set("status",'1');
        $qry=$this->db->update("death_tb");
        return $qry;
    }
    public function death_reject1($did)
    {
        $qry=$this->db->where("d_id",$did);
        $qry=$this->db->set("status",'2');
        $qry=$this->db->update("cast_tb");
        return $qry;
    }



}
?>