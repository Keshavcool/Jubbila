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

    $query="select * from $table";
        $res=[];
        if($result=mysqli_query($conn,$query)){
            while($row=mysqli_fetch_assoc($result)){
                $res[]=$row;
            }

            $response=json_encode($res);
            echo $response;
    }
    else{
        header('Location: index.php');
    }
}




?>