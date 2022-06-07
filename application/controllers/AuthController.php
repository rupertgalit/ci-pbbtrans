<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	
	public function __construct(){
		parent::__construct();

		$this->load->model('AuthModel');

	}

	public function index()
	{		
 
		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('dash');
		// 	session_destroy();
        // redirect('/','refresh');
			
		}
		else{
			$this->load->view('landing');
		}
		// $this->load->view('login');
		
	}

	public function login_page(){

			$this->load->view('login');
	}

	
	public function login(){

		// $this->load->view('login');

		$jwt = new JWT();

		$JwtSecretKey = "myloginSecret";
		// $email = $this->input->post('email');
		// $password = $this->input->post('password');
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$result = $this->AuthModel->check_login($email, $password );

		if($result){

			$query = $this->db->query("SELECT * from TBL_USER WHERE email = '$email'; ");

			foreach ($query->result() as $row)
			{
					$name = $row->name;
					$role_id = $row->role_id;
					
			}

		// // 	$name = $result->row('NAME');
		// 	$email = $result->row('email');
		// // 	$password = $result->row('PASSWORD');
		// // 	$status = $result->row('STATUS');
			// $role_id = $result->row('ROLE_ID');

		// 	$session_data = array(
		// // 		'NAME'			 	=> $name,
		// 		'email'          	=> $email,
		// // 		'password'     		=> $password,
		// // 		'status'			=> $status,
		// // 		'role_id'			=> $role_id,
			
		// 	);
			
			

		// $this->session->set_userdata($session_data);
		// redirect(base_url('AuthController/dash'));  
		
		// $this->load->view('login');
		$this->session->set_userdata('user', $result,);

		if ($role_id == 'ACC_TYPE_100448'){
		redirect(base_url('AuthController/dash'));
		}
		else
		{
			redirect(base_url('AuthController/dash_admin'));
		
		}
		// $token =$jwt->encode($result,$JwtSecretKey,'HS256');
		// echo json_encode($token);	
			

		}
		else{

		// echo 'User not found';
		$this->session->set_flashdata('error','Invalid Email or Password!.');
		echo '<script type="text/javascript">
		   window.location = "http://ci-localhost/pbbtrans/"
		  </script>';

		
		}

	}

	public function signup(){

		if($this->input->post()){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$role_id = 'ACC_TYPE_100448';
			$data = array(
				'name'=>$name,
				'email'=>$email,
				'password'=>$password,
				'role_id'=>$role_id,
			);

			$userId = $this->AuthModel->signup($data);

			if($userId){
				$this->session->set_flashdata('success','User Registered Successfully.');
			echo '<script type="text/javascript">
           	window.location = "http://localhost/ci-pbbtrans/"
      		</script>';
			}
			else
			{
				echo "User Registration Failed";
			}
			
		}
	}

	public function dash(){

		
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			
			$this->load->view('user/dashboard');
		}
		else{
			redirect('/');
		}

		// $this->load->view('dash');

		// if($this->session->userdata('email') != '')  
        //    {  
        //         // echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';  
        //         // echo '<label><a href="'.base_url

		// 		// ().'main/logout">Logout</a></label>';  
		// 		$this->load->view('dash');
        //    }  
        //    else  
        //    {  
        //         // redirect(base_url() . 'main/login');  
		// 		$this->load->view('login');
        //    }  
 
	}
	public function dash_admin(){
		if($this->session->userdata('user')){
			
			$this->load->view('admin/dashboard_admin');
		}
		else{
			redirect('/');
		}
	}


	public function logout(){
		session_destroy();
        redirect('/','refresh');
	}




	public function reg_profile(){

		if($this->input->post()){

			$member_number = "MBR-NUM-100448";
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$gender = $this->input->post('gender');
			$birthday = $this->input->post('birthday');
			$category = $this->input->post('category');
			$street = $this->input->post('street');
			$barangay = $this->input->post('barangay');
			$city = $this->input->post('city');
			$region = $this->input->post('region');
			$postcode = $this->input->post('postcode');
			$country = $this->input->post('country');
		
			$data = array(
				'member_number'=>$member_number,
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'gender'=>$gender,
				'birthday'=>$birthday,
				'category'=>$category,
				'street'=>$street,
				'street'=>$street,
				'barangay'=>$barangay,
				'city'=>$city,
				'region'=>$region,
				'postcode'=>$postcode,
				'country'=>$country,
			);

			$userId = $this->AuthModel->reg_profile($data);

			if($userId){
				$this->session->set_flashdata('success','User Registered Successfully.');
			echo '<script type="text/javascript">
           	window.location = "http://localhost/ci-pbbtrans/AuthController/dash"
      		</script>';
			}
			else
			{
				echo "User Registration Failed";
			}
			
		}

	}


// 	public function token(){

// 		$jwt = new JWT();

// 		$JwtSecretKey = "Mysecretwordshare";
// 		$data = array(
// 			'userId' => '145',
// 			'email' => 'ammir@gmail.com',
// 			'userType' => 'admin',
// 		);

// 		$token =$jwt->encode($data,$JwtSecretKey,'HS256');
// 		echo $token;
//    }

//     public function decode_token(){
// 		$token = $this->uri->segment(3);

// 		$jwt = new JWT();

// 		$JwtSecretKey = "Mysecretwordshare";

// 		$decode_token = $jwt->decode($token,$JwtSecretKey,'HS256');

// 		echo '<pre>';
// 		// print_r($decode_token);

// 		$token1 =$jwt->jsonEncode($decode_token);
// 		echo $token1;


// 	}

}