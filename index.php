<?php
@session_start();
$url = explode("/", $_SERVER['REQUEST_URI']);

error_reporting(E_ALL);
ini_set('display_errors', 1);

// print_r($url);

//find page
switch ($url[2]) {
    case 'page':
        switch ($url[3]){
            case 'login':
                include './views/login.php';    
            break;
            case 'details':
                include './views/details.php';
            break;
            case 'logout':
                session_destroy();
                header('Location: http://localhost/login_register/page/login');
            break;

            default:
                print_r("Bad Request!");
            break;
        }
    break;
    
    case 'request':
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: *");
        header("Content-Type: application/json");
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        include "./controllers/controllerClass.php";
        include "./models/modelClass.php";
        $controller = new controllerClass();
        $model = new modelClass();

        $payload = file_get_contents('php://input');
        $data = json_decode($payload);

        switch ($url[3]){
            case 'login':
                $login = $controller->login($model, $_POST['name'], $_POST['pass']);
                if($login=="False"){
                    print_r(json_encode(["message"=>"Invalid credentials","status"=>"failed" ]));
                }else{
                    $_SESSION['id'] = $login['id'];
                    $_SESSION['name'] = $login['name'];
                    print_r(json_encode(["message"=>"found","status"=>"success" ]));
                    
                }
                // print_r($login);
                    
            break;
            default:
                print_r("Bad Request!");
            break;
        }

    break;

    default:
        print_r("Bad Request!");
    break;
    

    
}
