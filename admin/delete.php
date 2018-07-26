<?php

session_start();

if(!$_SESSION['id']){
    header('Location: index.php');
}
else{

    require_once('../init.php');
    $msg=$_REQUEST['msg'];
    if($msg=='1'){
        $table='eventquery';
    }
    elseif($msg=='2'){
        $table='vendourquery';
    }
    elseif($msg=='3'){
        $table='contact';
    }

    $id=$_REQUEST['id'];

    $query="delete from $table where id=$id";
        if($result=mysqli_query($conn,$query)){
            echo true;
    }
    else{
        echo false;
    }
}




?>