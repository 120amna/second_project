<?php
class user extends my_controller
{
		public function loginform()
		{
			$this->load->view('for_stafe/login_form');
		}
		public function add_product()
		{
			$this->load->view('for_stafe/add_product');
		}
// upload image page
		public function upload_image()
		{
			$this->load->view('for_stafe/product_image_add');
		}
		public function sale()
		{
			$this->load->view('users/product_sale');
		}
		public function user_login()
		{
			$this->load->view('users/user_login');
		}
}		
?>