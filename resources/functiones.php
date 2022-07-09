<?php 

function set_message($msg){
    if(!empty($msg)){
        $_SESSION['message']=$msg;
    }else{
        $msg = "";
    }
}

function display_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
function confirm($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}
function redirect($location){
    header("Location: $location");
}
function login_user(){
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = query("SELECT * FROM users WHERE name = '{$username}' AND password = '{$password}' ");
        confirm($query);
        if(mysqli_num_rows($query)== 0){
            set_message("Your password or username are wrong!");
            redirect("index.php"); //or header("Location: index.php");
        }else{
            $_SESSION['username'] = $username;
            redirect("client");
        }

    }
}

?>