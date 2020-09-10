<?php

class Users extends CI_Controller {

    public function show($user_id, $username) {

        // $this->load->model('user_model');  //add autoload

        $data['result'] = $this->user_model->get_users($user_id, $username);

        $this->load->view('user_view', $data);

    }

    public function insert() {
        $username = 'dhiru';
        $password = '123';
        $this->user_model->create_users([

            'username' => $username,
            'password' => $password,

        ]);
    }

    public function update() {
        $id = 3;
        $username = 'dhiru1';
        $password = '1231';
        $this->user_model->update_users(['username' => $username, 'password' => $password], $id);

    }
    public function delete() {
        $id = 3;
        $this->user_model->delete_users($id);

    }

}

?>