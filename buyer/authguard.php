<?php
    session_start();
    if(!isset($_SESSION['login_status'])){
        echo "you skipped the login...";
        echo "<br> <a href='../shared/login.html'> login here..</a>";
        die;
    }

    if($_SESSION['login_status']==false){
        echo "Unauthrized Attempt";
        echo "<br> <a href='../shared/login.html'> login here.. </a>";
        die;
    }
    echo "<div style='display:flex;justify-content:space-around'>
        <div> $_SESSION[usertype]</div>
        <div> $_SESSION[username]</div>
        </div>";
        
?>