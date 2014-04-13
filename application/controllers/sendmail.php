<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendmail extends CI_Controller {
	        
	        
	        public function emailsender(){
	        $this->load->library('email', array('mailtype' => 'html'));
	        $this->email->from('brid@familymediationgalway.ie', 'Brid Manifold');
	        $this->email->to('mairead_manifold@yahoo.com');
	        $this->email->subject("Test");
	        
	        $message = "<p> Did you say this was a settings thing </p>";
	        //$message .= "<p><a href='".base_url()."main/register_user/$key'>Click here</a> to confirm your account</p>";
	        //send email to user
	        $this->email->message($message);
	        if ($this->email->send()){
	                echo "the email has been sent";
	            } else {
	                echo $this->email->print_debugger();
	                echo "failed, could not send the email";
	            }    
}
}