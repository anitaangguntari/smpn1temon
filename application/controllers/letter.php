<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Letter extends CI_Controller {
function __construct()
{
 parent::__construct();
  
}
 
 function index(){
 $this->load->view('letter_v');
 }
 function send()
 {
 $this->load->library('form_validation');
   
  // field name, error message, validation rules
  $this->form_validation->set_rules('name', 'Name', 'trim|required');
  $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
   
  if($this->form_validation->run() == FALSE)
  {
   $this->load->view('letter_v');
  }
  else
  {
   // validation berhasil. Tinggal mengirimkan email
   $name = $this->input->post('name');
   $email = $this->input->post('email');
   
  // mengirim email  
  $this->load->library('email');  
  $this->email->from('bapakdarul@gmail.com','ahmad darul abror');  
  $this->email->to($email);  
  $this->email->subject('Tes Konfirmasi Signup Newsletter');  
  $this->email->message("kamu sudah terdaftar sob!");  
  $this->email->send();   
   
  $path = $this->config->item('server_root');
  $file = $path . '/email/attachments/newsletter1.txt';
 
  $this->email->attach($file);
   if($this->email->send())
   {
    echo 'Your email was sent, fool.';
    //$this->load->view('signup_confirmation_view');
   }
 
   else
   {
    show_error($this->email->print_debugger());
   }
  }
}}
 
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */