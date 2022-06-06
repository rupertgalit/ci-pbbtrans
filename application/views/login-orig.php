<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <!-- <link rel="stylesheet" href="../login-style.css"> -->
    <link href="<?php echo base_url('./assets/css/login-style.css'); ?>" rel="stylesheet">
    <!-- <link href="<?php echo base_url('../assets/css/login-style.css'); ?>" rel="stylesheet" type="text/css"> -->

     <!-- <link href="<?php echo base_url('assets/new_assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet"> -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'>
    

    <style>
    .alert-danger {
        border-radius: 10px;
        background-color: #FFAEBC;
        margin-left: 25%;
        margin-right: 25%;
        padding-top: 10px;
        padding-bottom: 10px;
        color: #050A30;
    }

    .alert-success {
        border-radius: 10px;
        background-color: #5CD85A;
        margin-left: 25%;
        margin-right: 25%;
        padding-top: 10px;
        padding-bottom: 10px;
        color: #050A30;
    }

    .sign-in-image{
        height: 75%;
        width: 75%;
        margin-top: -150px;;
    }
    #cover{
        background-color: #057DCD;

    }
    .container{
        background-image: url(<?php echo base_url("assets/images/eagleside.jpg");?>);
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 0.9;
    }
    #container{
       
        opacity: 0.9;
       
    }
    
    </style>

</head>

<body class="container">
    <!-- partial:index.partial.html -->
    <!-- <div id="info">

    </div> -->
    <div id="container">
        <!-- Cover Box -->
        <div id="cover">
            <!-- Sign Up Section -->
            
            <h1 class="sign-up"><img class='sign-in-image' src=<?php echo base_url("assets/images/logo.png"); ?> ></h1>
            <!-- <p class="sign-up">Enter your personal details<br> and start a journey with us</p> -->
            <a class="button sign-up" href="#cover">Sign Up</a>
            <!-- Sign In Section -->
            
            <h1 class="sign-in"><img class='sign-in-image' src=<?php echo base_url("assets/images/logo.png");?> ></h1>
            <!-- <p class="sign-in">To keep connected with us please<br> login with your personal info</p> -->
            <br>
            <a class="button sub sign-in" href="#">Sign In</a>
           
        </div>
        <!-- Login Box -->
        <div id="login">
            <h1>Sign In</h1>
            <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/59/59439.png"></a>
            <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/49/49026.png"></a>
            <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/34/34227.png"></a>
            <p>or use your email account:</p>
            <form method="post" action="<?php echo base_url('AuthController/login'); ?>">

                <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success text-center" style="margin-top: 10px;">
                    <?=$this->session->flashdata('success')?></div>
                <?php endif; ?><br>

                <input type="email" name="email" placeholder="Email" autocomplete="off" required=""><br>
                <input type="password" name="password" placeholder="Password" autocomplete="off" required=""><br>
                <a id="forgot-pass" href="#">Forgot your password?</a><br>
                <br>
                <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger text-center" style="margin-top: 10px;">
                    <?=$this->session->flashdata('error')?></div>
                <?php endif; ?>

                <input class="submit-btn" type="submit" value="Sign In">


            </form>


        </div>

        <!-- Register Box -->
        <div id="register">
            <h1>Create Account</h1>
            <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/59/59439.png"></a>
            <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/49/49026.png"></a>
            <a href="#"><img class="social-login" src="https://image.flaticon.com/icons/png/128/34/34227.png"></a>
            <p>or use your email for registration:</p>
            <form method="post" action="<?php echo base_url('AuthController/signup'); ?>">
                <input type="text" name="name" placeholder="Name" autocomplete="off" required=""><br>
                <input type="email" name="email" placeholder="Email" autocomplete="off" required=""><br>
                <input type="password" name="password" placeholder="Password" autocomplete="off" required=""><br>
                <input type="text" name="role_id" placeholder="Role Id" autocomplete="off" required=""><br>
                <input class="submit-btn" type="submit" value="Sign Up">


            </form>
        </div>
    </div> <!-- END Container -->
    <!-- partial -->
</body>

</html>