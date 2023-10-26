<?php
include('dbcon.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <!-- <script src=""></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
   
   
</head>
<body>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>


    <div class="side-bar">
        <div class="close-btn">
            <i class="fas fa-times"></i>


        </div>
        <div class="menu">
            <div class="item">
                <a class="sub-btn" href="#"><i class="fas fa-desktop"></i>Dashboard</a>
            </div>
            <div class="item"> <a class="sub-btn" href="#"><i class="fas fa-table"></i>Table <i class="fas fa-angle-right dropdown"></i></a> 
           <div class="sub-menu">
            <a href="#" class="sub-item">Sub Item 01</a>
            <a href="#" class="sub-item">Sub Item 02</a>
            <a href="#" class="sub-item">Sub Item 03</a>
           </div>
           </div>
            <div class="item"> <a class="sub-btn" href="#"><i class="fas fa-th"></i>Forms</a></div>
            <div class="item"> <a class="sub-btn" href="#"><i class="fas fa-cogs"></i>Settings <i class="fas fa-angle-right dropdown "></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Sub Item 01</a>
                    <a href="#" class="sub-item">Sub Item 02</a>
                </div>

            </div>
            <div class="item"> <a class="sub-btn" href="#"><i class="fas fa-info-circle"></i>About</a></div>
              

            
        </div>
    </div>
    <section class="main">
        <h1>Sidebar Menu With<br>Sub-Menus</h1> 

    </section>
 
</body>
</html>
<script>
        $(document).ready(function(){
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            //jquery for expand and collapse the sidebar
            $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility","visible");


            })

            $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');

            })


        });
    </script>