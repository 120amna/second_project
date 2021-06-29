<?php
 class my_model extends CI_model
 {
 	public function login($username,$password)
 	{
 		// "select 'user'=>$username,'pass'=>$password from admin";
 		$id = $this->session->userdata('id');
 		$q=$this->db->where(['user' =>$username, 'pass' =>$password])
 		         ->from('admin')
 		         ->get();
 		          // $q->num_rows();
 		          if($q->num_rows())
 		          {
 		          	return $q->row()->id;
 		          }else{return false;}
 		          // exit();
 		          
 	}
 	public function stock_list_data()
 	{
 		$q=$this->db->select()
 		->from('product_items')
 		->get();
 		return $q->result();
 	}
 // product image insert
 public function datainsert($artical)
	 {
	 	return $this->db->insert('product_images',$artical);
	 }
 // user login page coding
 	public function user_login($username,$password)
 	{
 		// "select 'user'=>$username,'pass'=>$password from admin";
 		$id = $this->session->userdata('id');
 		$q=$this->db->where(['username' =>$username, 'password' =>$password])
 		         ->from('user_admin')
 		         ->get();
 		          // $q->num_rows();
 		          if($q->num_rows())
 		          {
 		          	return $q->row()->id;
 		          }else{return false;}
 		          // exit();
 		          
 	}
 // product sale list data
 	public function product_sale_sale()
 	{
 		$q=$this->db->select()
 		->from('product_items')
 		->get();
 		return $q->result();
 	}
 }
 ?>