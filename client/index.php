<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="getData.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        }

        .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
        }

        .sidenav a:hover {
        color: #f1f1f1;
        }

        .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        }
        span{
            text-align: left;
        }
        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        main {
            padding: 20px;
        }

        #catalog{
            display: flex;
            
        }
        img{
            max-width: 300px;
            width: 100%;
        }
        .data{
            margin-left: 10px;
        }
        .custom-width{
            
            width: 1000px !important;
        }
        .hide{
            display: block;

        }
        @media (max-width:800px){
            .hide{display: none;}
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
   (function(){
      emailjs.init("wfQHM6QGcYbHJwJ18");
   })();
    </script>
</head>
<body>

    <header>
    <div class="row">   
        <div class="col-4 d-flex justify-content-start ps-5 "><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><span class="hide" style="font-size:30px;cursor:pointer" onclick="openNav()"> Menu</span></div>
        <div class="col-4 text-center"><h1>Car Catalog</h1></div>
        <div class="col-4"></div>
    
    </div>    

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="index.php?prog=aboutus.html">About Us</a>
            <a href="index.php?prog=contact.html">Contact</a>
        </div>
        
        <script>
            
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.body.addEventListener("click", clickClose)
            }
            function clickClose(e){
                    let sidenav = document.getElementById("mySidenav");
                    if (!sidenav.contains(e.target) && e.target.tagName != 'SPAN') {
                        closeNav();
                        document.body.removeEventListener("click", clickClose);
                    }
                }
            
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </header>

        <div class="data">
              <?php
                extract($_GET);
                if(isset($_GET['prog']))
                    include $prog;
                else
                    include "home.php";
            
            ?>
        </div>
        


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
</body>
</html>