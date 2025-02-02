<html>
    <head>
        <style>
            .pdt-card{
                width: 250px;
                height: 300px;
                display: inline-block;
                margin: 30px;
                vertical-align: top;
                background-color:lightsalmon;
                padding:10px;

            }
            .pdt-img{
                width:100%;
                height: 70%;
            }
            .name{
                font-size: 24px;
                font-weight:bold;
            }
            .price{
                font-size:25px;
                color:brown;
            }
            .price::after{
                content: " Rs";
                font-size: 14px;
            }
        </style>
    </head>
</html>


<?php
    include "authguard.php";
    include "../shared/connection.php";

    $sql_result=mysqli_query($conn,"select * from product where owner=$_SESSION[userid]");
    
    while($dbrow=mysqli_fetch_assoc($sql_result))
    {
    echo "<div class='pdt-card' >
    <div class='name'>$dbrow[name]</div>
    <div class='price'>$dbrow[price]</div>
    <img class='pdt-img' src='$dbrow[impath]'>
    <div class='details'>$dbrow[details]</div>
    </div>";
    
    }


?>