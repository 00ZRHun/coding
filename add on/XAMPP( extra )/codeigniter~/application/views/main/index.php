<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="<?= site_url(); ?>dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-image: url('img/login-bg3.jpg');background-repeat: no-repeat;background-size: cover;">
            <div class="auth-box border-secondary" style="border-radius: 5px;background: rgba(204, 204, 204, 0.2);">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db" style="font-size: 25px;color: white;">Admin Panel</span>
                    </div>
                    <form class="form-horizontal m-t-20" id="loginform" action="<?php echo base_url(); ?>login/login_validation" method="POST">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-white" id="basic-addon1"><i class="ti-user" style="color: black;"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-white" id="basic-addon2"><i class="ti-lock" style="color: black;"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                </div>
                                <?php
                            echo '<span class="text-danger">'.$this->session->flashdata("error").'</span>';
                        ?>
                            </div>
                            
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20" style="text-align: center;">
                                        <button class="btn btn-success" type="submit" name="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= site_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= site_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= site_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>

</html>