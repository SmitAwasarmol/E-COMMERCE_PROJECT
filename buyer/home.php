<html>
    <head>
        <style>
            .pdt-card{
                width: 250px;
                height: fit-content;
                display: inline-block;
                margin: 20px;
                vertical-align: top;
                background-color:lightsalmon;
                padding:10px;
                border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.2s ease;
            }
            .pdt-card:hover {
            transform: scale(1.1);
            }
            .pdt-img{
                width:100%;
                height: 200px;
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

    include "menu.html";

    include "../shared/connection.php";

    $sql_result=mysqli_query($conn,"select * from product");
    
    while($dbrow=mysqli_fetch_assoc($sql_result))
    {
    echo "<div class='pdt-card' >
    <div class='name'>$dbrow[name]</div>
    <div class='price'>$dbrow[price]</div>
    <img class='pdt-img' src='$dbrow[impath]'>
    <div class='details'>$dbrow[details]</div>
    <div class='text-center'>
    <a href='addcart.php?pid=$dbrow[pid]'>
        <button class='btn btn-primary'>Add to cart</button>
        </a>
        </div>
    </div>";
    
    }


?>