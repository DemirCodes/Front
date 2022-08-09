<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="projects.css">
    <script src="projects.js" ></script>



    <style>
        #col1{
            position: relative;
            right: -475px;

        }

    </style>

    <style>
        body{
            background-color: #8c38ff;
            background-image: -webkit-linear-gradient(right, #8c38ff, #FDA366);
            background-image: -moz-linear-gradient(right, #8c38ff, #8c38ff);
            background-image: -o-linear-gradient(right, #8c38ff, #8c38ff);
            background-image: -ms-linear-gradient(right, #8c38ff, #8c38ff);
            background-image: linear-gradient(right, #8c38ff, #8c38ff);
        }
    </style>




</head>



<script src="temp.js"></script>


<body bgcolor="#212121">


<nav>
    <div class="container">
        <h1>DMRCODE</h1>

        <div class="menu">

            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="projects.php"  class="is-active"  >Projects</a>
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




<main>

    <figure>
        <figcaption>variables.php</figcaption>
        <pre><code contenteditable="false" tabindex="0" spellcheck="false">/**
//        $x=7;
//        $y=20;
//        function Test(){
//            global $x,$y;
//            $y=$x+$y;
//
//            echo "<p> X degiskenine fonksiyon içinden ulaştım:$x</p>";
//        }
//        Test();
//        echo $y;
//


//        $x=7;
//        $y=20;
//        function Test(){
//            // fonksiyonun icindeykken bazen calısmalar
//            $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
//
//        }
//        Test();
//        echo $y;


                $x=7;
                $y=20;
                function Test(){
                    static $z=60;
                    echo $z;
                    $z++;
                    // static fonksiyonuna sahip degiskeni aklında durmadan tut hafızada tut


                }
                Test();
                Test();
                Test();




</code></pre>
    </figure>

</main>






</body background="">
<!-- ******************** SCRIPTS **********************-->

<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/pooper.min.js"></script>
<script src="../../js/jquery-3.6.0.min.js"></script>

</html>