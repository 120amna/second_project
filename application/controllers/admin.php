<?php
class admin extends my_controller
{
	public function login()
	{
	// $this->form_validation->set_rules('user', 'Username', 'required|alpha');
	// $this->form_validation->set_rules('pass', 'Password', 'required|max_length[12]');
		// if($this->form_validation->run('validation'))
		// {
			 $name = $this->input->post('user');
		$pass = $this->input->post('pass');
		$this->load->model('my_model');
		$data = $this->my_model->login($name,$pass);
		if($data)
		{
			$this->session->set_userdata('id',$data);
			return redirect('admin/welcome');

		}else
		{
			$this->load->view('for_stafe/login_form');
		}
	}
//  coding stock dashborad page
	public function welcome()
	{
		$this->load->model('my_model');
		$data = $this->my_model->stock_list_data();
		$this->load->view('for_stafe/stock_dashborad',['product_data'=>$data]);
	} 

		// }else
		// {
		// 	// $this->load->view('users/login_form');
		// 	echo validation_errors();
			
			
		// }
		 
	// }
// coding product_user_id 
	public function product_user_id($id)
	{
		$this->load->view('for_stafe/product_image_add',['id'=>$id]);
	}

// coding upload image
	public function upload_image()
	{
		{
		$config=[
			'upload_path'=>'./upload/',
			'allowed_types'=>'gif|jpg|jpeg',
		];
		$this->load->library('upload',$config);
		 
		if($this->upload->do_upload())
		{
			$post = $this->input->post();
			 $data=$this->upload->data();
	$pic_path=base_url("upload/".$data ['raw_name'].$data['file_ext']);
			  
			 $post['image']=$pic_path;
			 $this->load->model('my_model');
			 $tada=$this->my_model->datainsert($post);
			  
			 if($tada)
			 {
			 	return redirect('admin/welcome');
			 }else
			 {
			 	echo "hello";
			 }
		}else
		{
			$upload_error=$this->upload->display_errors();
	$this->load->view('for_stafe/product_image_add',compact('upload_error'));
		}
	}
	}

// stafe logout page 
	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('user/loginform');
	}
// user login page coding
	public function user_login()
	{
		$name = $this->input->post('username');
		$pass = $this->input->post('password');
		 
		$this->load->model('my_model');
		$data = $this->my_model->user_login($name,$pass);
		if($data)
		{
			$this->session->set_userdata('id',$data);
			return redirect('admin/user_welcome');

		}else
		{
			$this->load->view('users/user_login');
		}
	}
// user welcome page coding
	public function user_welcome()
	{
	$this->load->view('users/product_sale');
	}
// user logout coding 
	public function user_logout()
	{
		$this->session->unset_userdata('id');
		return redirect('user/user_login');
	}
//coding oreder  create page
	public function product_sales()
	{
		$this->load->model('my_model');
		$data = $this->my_model->list_sale();
		$this->load->view('users/product_sale',['sale_data'=>$data]);
	}
// coding product sale page
	public function product_sale_list()
	{
		$iteam=$this->input->post('product_name');
		$price=$this->input->post('product_price');
	echo $iteam."<br>".$price;
		 
		// $this->load->model('my_model');
		// $this->my_model->product_sale();
		// $this->load->view('users/sale_dashbroad');
	}
 

}
?>
 

 