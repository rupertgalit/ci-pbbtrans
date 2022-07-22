<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log In / Sign Up </title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/new-login-style.css'); ?>">

    

    <style>
    .bg {
        background-image: url(<?php echo base_url("assets/images/bus.jpg");
        ?>);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        opacity: 0.9;
        max-width: 100%;
        height: auto;
    }
	.login-image{
		max-width: 220px;
        height: 220px;
				
		-webkit-filter: drop-shadow(5px 5px 5px #222);
		filter: drop-shadow(5px 5px 5px #222);
		

	}
    h6{
        color: black;
    }
    </style>

</head>

<body>
    <!-- partial:index.partial.html -->
    <!-- <a href="https://front.codes/" class="logo" target="_blank">
        <img src="https://assets.codepen.io/1462889/fcy.png" alt="">
    </a> -->

    <div class="section bg">
        <div class="container">
            <div class="row full-height justify-content-center">
			
                <div class="col-12 text-center align-self-center py-5">
				<!-- <img class='login-image' src=<?php echo base_url("assets/images/logo.png");?> > -->
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <form method="post" action="<?php echo base_url('AuthController/login'); ?>">
                                        <div class="center-wrap">
                                            <?php if (isset($_SESSION['success'])): ?>
                                            <div class="alert alert-success text-center" style="margin-top: 10px;">
                                                <?=$this->session->flashdata('success')?></div>
                                            <?php endif; ?><br>
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Your Email" id="logemail" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>

                                                <input class="btn mt-4" type="submit" value="Sign In">
                                                <!-- <a href="#" class="btn mt-4">submit</a> -->
                                                <!-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your
                                                        password?</a></p> -->
                                                <p class="mb-0 mt-4 text-center"><a href="http://localhost/ci-pbbtrans/" class="link">Go Back Home</a></p>       
                                                <?php if (isset($_SESSION['error'])): ?>
                                                <div class="alert alert-danger text-center" style="margin-top: 10px;">
                                                    <?=$this->session->flashdata('error')?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </form>

                                    Website Builder Website 54.169.247.225
                                </div>
                                <div class="card-back">
									<form method="post" action="<?php echo base_url('AuthController/signup'); ?>">
										<div class="center-wrap">
											<div class="section text-center">
												<h4 class="mb-4 pb-3">Sign Up</h4>
												<div class="form-group">
													<input type="text" name="name" class="form-style"
														placeholder="Your Full Name" id="logname" autocomplete="off">
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="form-group mt-2">
													<input type="email" name="email" class="form-style"
														placeholder="Your Email" id="logemail" autocomplete="off">
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" name="password" class="form-style"
														placeholder="Your Password" id="logpass" autocomplete="off">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<input class="btn mt-4" type="submit" value="Sign Up">
												<!-- <a href="#" class="btn mt-4">submit</a> -->
											</div>
										</div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="./script.js"></script>

    <!-- eagle cursor -->
    <!-- <div align="center" style="z-index:9;visibility:visible;"></div><style>HTML,BODY{cursor: url("https://downloads.totallyfreecursors.com/cursor_files/eagle.cur"), url("https://downloads.totallyfreecursors.com/thumbnails/eagle.gif"), auto;}</style> -->

</body>

</html>