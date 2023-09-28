<?php 
@session_start();

class controllerClass
{
    public function addUser($model, $name, $pass){
        $newUser = $model->addUser($name, $pass);
        print_r($newUser);
    }
    public function editUser($model, $data){
        $update = $model->editUser($data->name, $data->pass, $data->id);
        print_r($update);
    }

    public function deleteUser($model, $data){
        $delete = $model->deleteUser($data->id);
        print_r($delete);
    }

    public function listUsers($model){
        $users = $model->selectAllUsers();
        print_r($users);
    }

    public function login($model, $name, $pass){
        $login = $model->login($name, $pass);
        
        if(!(is_array($login))){
            return "False";
        }else{
            return($login);
        }
        

    }
}

?>