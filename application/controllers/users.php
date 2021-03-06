<?php

class Users extends CI_Controller {

    // public function show($user_id, $username) {

    //     // $this->load->model('user_model');  //add autoload

    //     $data['result'] = $this->user_model->get_users($user_id, $username);

    //     $this->load->view('user_view', $data);

    // }

    // public function insert() {
    //     $username = 'ram';
    //     $password = '123';
    //     $this->user_model->create_users([

    //         'username' => $username,
    //         'password' => $password,

    //     ]);
    // }

    // public function update() {
    //     $id = 3;
    //     $username = 'dram1';
    //     $password = '1231';
    //     $this->user_model->update_users(['username' => $username, 'password' => $password], $id);

    // }
    // public function delete() {
    //     $id = 3;
    //     $this->user_model->delete_users($id);

    // }

    public function register(){


        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
        
        if($this->form_validation->run() == FALSE){

            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main',$data);

        }else{

            if($this->user_model->create_user()){

                $this->session->set_flashdata('user_registered','User has been registered');
                redirect("home/index");

            }

           
        }








    }    


    public function login() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $data = array(

                'errors' => validation_errors(),

            );
            $this->session->set_flashdata($data);

            redirect('home');

        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username, $password);

            if ($user_id) {

                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true,

                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'You are now logged in');

                // $data['main_view'] = "admin_view";

                // $this->load->view('layouts/main', $data);

                redirect('home/index');
            } else {

                $this->session->set_flashdata('login_failed', 'Sorry You are not logged in');
                redirect('home/index');
            }

        }

    }

    public function logout() {

        //  $data=array('logged_in','username','user_id');
        //  $this->session->unset_userdata($data);

        $this->session->sess_destroy();

        redirect('home/index');
    }

}

?>