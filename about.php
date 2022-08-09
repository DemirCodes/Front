<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABOUT</title>
    <link rel="stylesheet" href="sidebar.css">


    <style>
        #card {

            position: relative;
            margin: 0;
            padding: 0;
            top: 100px;
            left: 700px;
            width: 1100px;
            height: 1000px;
            background-color: white;
            border-color: white;
            border-radius: 8px 8px 8px 8px;
        }

        #c_header {
            position: relative;
            top: 90px;
            border-top: 5px solid #8c38ff;

        }
        #foto{
            position: relative;
            border-radius: 8px 8px 8px 8px;
            left: 60px;
            bottom: 35px;
        }

        #baslik {
            position: relative;
            left: 100px;
            bottom: -10px;
            font-size: 25pt;
            font-family: Times New Roman;
        }
        #b_card{
            position: relative;
            left: 300px;
            width: 450px;
            height: 60px;
            background-color: #8c38ff;
            background-image: white;
                    /*-webkit-linear-gradient(right, #8c38ff, #FDA366);*/
            bottom: 80px;
            border-radius: 8px 8px 8px 8px;
        }

        #c_body {
            position: relative;
            top: 100px;
        }

        body {
            background-color: #8c38ff;
            background-image: -webkit-linear-gradient(right, #8c38ff, #FDA366);
            background-image: -moz-linear-gradient(right, #8c38ff, #8c38ff);
            background-image: -o-linear-gradient(right, #8c38ff, #8c38ff);
            background-image: -ms-linear-gradient(right, #8c38ff, #8c38ff);
            background-image: linear-gradient(right, #8c38ff, #8c38ff);
        }
    </style>


</head>

<body bgcolor="#8c38ff">


<nav>
    <div class="container">
        <h1>DMRCODE</h1>

        <div class="menu">

            <a href="index.php">Home</a>
            <a href="about.php" class="is-active">About</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
            <a href="../login/login1.php">Login</a>
        </div>

        <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
<br>
<br>
<br>
<br>

<script src="temp.js"></script>


<div class="card text-center" id="card">
    <div class="card-header" id="c_header">
        <div id="b_card">
            <h1 id="baslik">HAKKIMDA</h1>
        </div>
    </div>
    <div class="card-body" id="c_body">
        <img  id="foto" src="85193040.jpg">
        <p class="card-text">With supporting .</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-muted" id="c_footer">
        2 days ago
    </div>
</div>


</body>
<!-- ******************** SCRIPTS **********************-->

<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/pooper.min.js"></script>
<script src="../../js/jquery-3.6.0.min.js"></script>

</html>