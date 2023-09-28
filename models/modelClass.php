<?php 
@session_start();

class modelClass
{
    public $connector;
    public function __construct()
    {
        include 'connector.php';
        $this->connector = $db;
    }
    public function addUser($name, $pass){
        $sql = "INSERT INTO `users`(`name`, `pass`) VALUES ('".$name."','".$pass."')";
        $result=mysqli_query($this->connector, $sql);
        if($result){
            return 'success';
        }else{
            return 'failed';
        }
    }
    public function editUser($name, $pass, $id){
        $sql="UPDATE `users` SET `name`='".$name."',`pass`='".$pass."' WHERE `id`='".$id."'";
        $result=mysqli_query($this->connector, $sql);
        if($result){
            return 'success';
        }else{
            return 'failed';
        }
    }

    public function deleteUser($id){
        $sql = "DELETE FROM `users` WHERE `id`='".$id."'";
        $result=mysqli_query($this->connector, $sql);
        if($result){
            return 'success';
        }else{
            return 'failed';
        }
    }

    public function selectAllUsers(){
        $sql = "SELECT * FROM `users`";
        $users = array();
        $r = "";
        $result = mysqli_query($this->connector, $sql);
        while ($r = @mysqli_fetch_assoc($result)) {
            array_push($users, $r);
        }

        return $users;
    }

    public function findUser($id){
        $sql = "SELECT * FROM `users` WHERE `id`='".$id."'";
        $result = mysqli_query($this->connector, $sql);
        $r = @mysqli_fetch_assoc($result);
        return $r;
    }

    public function login($name, $pass){
        $sql = "SELECT * FROM `users` WHERE `name`='".$name."' AND `pass`='".$pass."'";
        $result = mysqli_query($this->connector, $sql);
        $r = @mysqli_fetch_assoc($result);
        return $r;
    }
}

?>