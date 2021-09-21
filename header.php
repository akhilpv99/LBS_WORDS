<?php
    include "connection.php";
	session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tag -->
    <meta charset="UTF-8">
    <meta name="description" content="Library, inline Library">
    <meta name="keywords" content="HTML5, CSS3, javaScript, Bootstrap4, jQuery, Web Design, Web Development, Responsive Website, Online Library management system , Library, Books, Student, Librarian">
    <meta name="author" content="Izaz Shaikh">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap minified CSS-->
    <link rel="stylesheet" href="content/css/bootstrap/bootstrap.min.css">
    <!-- Fontawesome CSS-->
    <link rel="stylesheet" href="content/css/fontawsome/css/all.min.css">
    <!-- Custome CSS for the site -->
    <link rel="stylesheet" href="content/css/lms.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark back-black">
            <a class="navbar-brand text-center" href="index.php"><img src="content/images/WhiteLogo.png"><br>
               <I><b> <p style="color;red">LBS_WORDS</p></b>  </I>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lms-nav-content" aria-controls="lms-nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="lms-nav-content">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
              
                <li class="nav-item">
                        <a class="nav-link" href="student/student-login.php">STUDENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="librarian/admin-login.php">ADMIN</a>
                    </li>
                
             </ul>

            </div>
        </nav>
    </header>
    
    <!-- jQuery library-->
    <script src="content/js/jquery-3.5.1.min.js"></script>
    <!-- Fontawesome-->
    <script src="content/js/fontawsome/all.min.js"></script>
    <!-- Popper JS-->

    <!-- Bootstrap JavaScript-->
    <script src="content/js/bootstrap/bootstrap.min.js"></script>
    <!-- Custom JS-->
    <script src="content/js/lms.js"></script>
</body>

</html>