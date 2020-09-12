<?php 

class User_model extends CI_Model{



    // public function get_users($user_id,$username){

    //        // $this->db->where('id',$user_id);
        
        
    //        $this->db->where(['id'=>$user_id,'username' => $username]);
        
    //        $query=$this->db->get('users');
    //      return $query->result();
    //     // $query=$this->db->query("SELECT * FROM users");
    //     // return $query->num_rows();
    //     // return $query->num_fields();
           

    // }


    // public function create_users($data){
    
    //     $this->db->insert('users',$data);
    
    
    // }
    
    // public function update_users($data,$id){

    //     $this->db->where(['id'=>$id]);
    //     $this->db->update('users',$data);
    
    
    // }

    // public function delete_users($id){

    //     $this->db->where(['id'=>$id]);
    //     $this->db->delete('users');
    
    
    // }

    public function login_user($username,$password){


        $this->db->where('username',$username);
       
        $result =$this->db->get('users');
        $db_password =$result->row(6)->password;         //num rows like(0=>"id",2=>'first_name')

        if(password_verify($password,$db_password )){

            return $result->row(0)->id;
        }else{

            return false;
        }


    }

    public function create_user(){

        $option = ['cost'=>12];
        $encripted_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$option);

        $data=array(

            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $encripted_pass


        );

        $insert_data=$this->db->insert('users',$data);

        return $insert_data;


    }




}








?>