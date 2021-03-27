<?php
class newmodel extends CI_model
{
    public function notifi($a)
    {
      $this->db->insert("complaint",$a);
    
    }
    public function notifyvw()
    {
      $this->db->select("*");
      $this->db->join('complaint','complaint.id=complaint.id','inner');
      $qry=$this->db->get("complaint");
      return $qry;
    } 
}