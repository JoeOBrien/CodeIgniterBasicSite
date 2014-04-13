<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->login();
	}
	public function login(){
	    $this->load->view('login');
	}
	public function signup(){
	    $this->load->view('signup');
	}
	public function sentmail(){
	    $this->load->view('sentmail');
	}
	public function members(){
	    if($this->session->userdata('is_logged_in')){
	        $this->load->view('members');
	    } else {
	        redirect('main/restricted');
	    }
	}
	    
	public function restricted(){
	    $this->load->view('login');
	}
	public function login_validation(){
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
	    $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
	    
	    if($this->form_validation->run()){
	        $data = array(
	            'email' => $this->input->post('email'),
	            'is_logged_in' => 1
	            );
	        $this->session->set_userdata($data);
	        redirect('main/members');
	    } else {
	        $this->load->view('login');
	    }
	}
	public function signup_validation(){
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
	    $this->form_validation->set_rules('password', 'Password', 'required|trim');
	    $this->form_validation->set_rules('cpassword', 'Password', 'required|trim|matches[password]');
	    
	    $this->form_validation->set_message("is_unique", "That email address is already taken");
	    if($this->form_validation->run()){
	        //email
	        
	        //gen random key
	        $key = md5(uniqid());
	        
	        $this->load->library('email', array('mailtype' => 'html'));
	        $this->load->model("model_users");
	        $this->email->from('joe@joeobrien.kd.io', 'Joe');
	        $this->email->to($this->input->post('email'));
	        $this->email->subject("Confirm your account");
	        
	        $message = "<p> Thank you for signing up with us! </p>";
	        $message .= "<p><a href='".base_url()."main/register_user/$key'>Click here</a> to confirm your account</p>";
	        //send email to user
	        $this->email->message($message);

	        //add them to users in db
	        if($this->model_users->add_temp_user($key)){
	            if ($this->email->send()){
	                echo "the email has been sent";
	            } else {
	                echo $this->email->print_debugger();
	                echo "failed, could not send the email";
	            }    
	        } else {
	            echo "User was not added to database";
	        }
	    } else {
	        $this->load->view('signup');
	    }
	}
	
	public function email_validation(){
	        $this->load->library('email', array('mailtype' => 'html'));
	        $this->email->from($this->input->post('from_email'), $this->input->post('name_from'));
	        $this->email->to($this->input->post('to_email'));
	        $this->email->subject($this->input->post('the_subject'));
	        
	        $message = "<p>";
	        $message .= $this->input->post('the_message');
	        $message .= "</p>";
	        //send email to user
	        $this->email->message($message);

	        
	       if ($this->email->send()){
	            echo "the email has been sent";
	        } else {
	            echo $this->email->print_debugger();
	            echo "failed, could not send the email";
	        }    
	        
	    } 	
	
	
	public function validate_credentials(){
	    $this->load->model('model_users');
	    
	    if($this->model_users->can_log_in()){
	        return true;
	    }   else    {
	        $this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
	        return false;
	    }
	}
	public function logout(){
	    $this->session->sess_destroy();
	    redirect('main/login');
	}
	public function register_user($key){
	    $this->load->model('model_users');
	    
	    if($this->model_users->is_key_valid($key)){
	        if($newemail = $this->model_users->add_user($key)){
	            echo 'success, you\'ve been registered!';
	            $data = array(
	                'email' => $newemail,
	                'is_logged_in' => 1
	                );
	           $this->session->set_userdata($data);
	           redirect('main/members');
	        }else {
	            echo 'failed to register';
	        }
	    } else {
	        echo 'invalid key';
	    }
	}
}
