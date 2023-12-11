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

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 0.5em 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 1em;
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
    </style>
</head>
<body>

    <header>
        <h1>Car Catalog</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="index.php?prog=aboutus.html">About Us</a>
        <a href="index.php?prog=contact.html">Contact</a>
    </nav>

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