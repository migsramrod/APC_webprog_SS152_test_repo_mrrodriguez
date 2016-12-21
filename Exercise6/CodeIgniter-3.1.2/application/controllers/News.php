<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
function __construct()
{
parent::__construct();
#$this->load->helper('url');
$this->load->model('users_model');
}
public function index(){
	$data['user_list'] = $this->users_model->get_all_users();
	$this->load->view('Users_view',$data);
	
}
public function add_form()
{
$this->load->view('Users_add');
}
public function insert_users_db()
{
$udata['complete_name'] = $this->input->post('Complete_name');
$udata['nickname'] = $this->input->post('Nickname');
$udata['email'] = $this->input->post('Email_Address');
$udata['address'] = $this->input->post('Home_Address');
$udata['gender'] = $this->input->post('Genderender');
$udata['cellnumber'] = $this->input->post('Phone');
$udata['comment'] = $this->input->post('Comments');
$res = $this->users_model->insert_users_to_db($udata);
if($res){
header('location:'.base_url()."index.php/users/");
}
}
public function Users_edit(){
$user_id = $this->uri->segment(3);
 $data['users'] = $this->users_model->getById($user_id);
$this->load->view('Users_edit', $data);
}
public function update()
{
$mdata['Complete_nameomplete_name']=$_POST['Complete_name'];
$mdata['Nicknameickname']=$_POST['Nickname'];
$mdata['Email_Addressmail']=$_POST['Email_Addressmail'];
$mdata['Home_Address']=$_POST['Home_Address'];
$mdata['Genderender']=$_POST['Gender'];
$mdata['Phone']=$_POST['Phone'];
$mdata['Comments']=$_POST['Comments'];
$res=$this->users_model->update_info($mdata, $_POST['user_id']);
if($res){
header('location:'.base_url()."index.php/users/");
}
}
public function delete($user_id)
{
$this->users_model->delete_a_user($user_id);
$this->index();
}
}