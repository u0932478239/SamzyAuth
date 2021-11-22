<?php
//TEMPORARY UNTIL I GET MAILING SERVERS
    error_reporting(E_ALL);
    include '../includes/settings.php';
    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: ../dashboard/");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>SamzyAuth - A Secure Licensing Solution</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="SamzyAuth - A Secure Licensing Solution">
	<meta name="description" content="A Secure Licensing Solution for Developers">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://auth.samzy.dev">
	<meta property="og:title" content="SamzyAuth - A Secure Licensing Solution">
	<meta property="og:description" content="A Secure Licensing Solution for Developers">
	<meta property="og:image" content="">
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://auth.samzy.dev">
	<meta property="twitter:title" content="SamzyAuth - A Secure Licensing Solution">
	<meta property="twitter:description" content="A Secure Licensing Solution for Developers">
	<meta property="twitter:image" content="">
    <link rel="icon" type="image/jpg" href="https://samzy.dev/profile.jpg"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://auth.samzy.dev/auth/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://auth.samzy.dev/auth/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="https://auth.samzy.dev/auth/assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="https://auth.samzy.dev/auth/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="https://auth.samzy.dev/auth/assets/css/forms/switches.css">

    <script src="https://kit.fontawesome.com/fe49a7dc3e.js" crossorigin="anonymous"></script>
</head>
<body class="form no-image-content">
    

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <div class="">
                            <center><h1><i class="fas fa-envelope" style="solid"></i></h1></center>             
                        </div>

                        <center>
                            <h3>Email Us!</h3>
                        </center>
                        </br>
                        <center>
                            <p style="color: lightgray">As of right now, our mailing servers are down, so please contact us directly at <a href="mailto:samzydev@gmail.com">samzydev@gmail.com</a>.</p>
                        </center>

                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="https://auth.samzy.dev/auth/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="https://auth.samzy.dev/auth/bootstrap/js/popper.min.js"></script>
    <script src="https://auth.samzy.dev/auth/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="https://auth.samzy.dev/auth/assets/js/authentication/form-2.js"></script>

</body>

</html>