<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themeon.net/nifty/v3.0.0/front-pages/lock-screen/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Dec 2021 05:26:45 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="LockScreen is designed to allow the user to lock sensitive pages with a password protected.">
    <title>E-DOKAR | SYAMRABU</title>

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.24323102f2dae5917bf32bd9a470b04ef921f8c64a12388fb0c548fe5dbc97d2.css">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="assets/css/nifty.min.b62b57e9970804afb27aad6829d5d500079b5caeacab36cb742a093376542acd.css">

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~---

    [ REQUIRED ]
    You must include this category in your project.


    [ OPTIONAL ]
    This is an optional plugin. You may choose to include it in your project.


    [ DEMO ]
    Used for demonstration purposes only. This category should NOT be included in your project.


    [ SAMPLE ]
    Here's a sample script that explains how to initialize plugins and/or components: This category should NOT be included in your project.


    Detailed information and more samples can be found in the documentation.

    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->
</head>

<body class="">

    <!-- PAGE CONTAINER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="root" class="root front-container">

        <!-- CONTENTS -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section id="content" class="content">
            <div class="content__boxed w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="content__wrap">

                    <!-- Login card -->
                    <div class="card shadow-lg">
                        <div class="card-body">

                            <div class="text-center">
                                <img class="img-lg rounded-circle mb-3" src="assets/img/profile-photos/logo.png" alt="Picture profile">
                                <h1 class="h3">Admin</h1>
                                <p>Web Profile
                                    <br> UOBK RSUD Syarifah Ambami Rato Ebu bang
                                </p>
                            </div>

                            <form class="mt-4" action="#"method="POST">

                                <div class="mb-3 <?php if (isset($error)) {
																	if ($error[0] == "email") echo "alert-validate";
																} ?>" data-validate="<?php if (isset($error)) {
																							if ($error[0] == "email") {
																								echo $error[1];
																							} else {
																								echo "Silahkan isi Email.";
																							}
																						} else {
																							echo "Silahkan isi Email.";
																						} ?>" id="pesanEmail">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value("email"); ?>">
                                </div>

                                <div class="mb-3 <?php if (isset($error)) {
																	if ($error[0] == "pass") echo "alert-validate";
																} ?>" data-validate="<?php if (isset($error)) {
																							if ($error[0] == "pass") {
																								echo $error[1];
																							} else {
																								echo "Silahkan isi password.";
																							}
																						} else {
																							echo "Silahkan isi password.";
																						} ?>" id="pesanPass">
                                    <input type="password" class="form-control"id="pass" name="pass" placeholder="Password">
                                </div>

                                <!-- <div class="form-check">
                                    <input id="_dm-loginCheck" class="form-check-input" type="checkbox">
                                    <label for="_dm-loginCheck" class="form-check-label">
                                        Remember me
                                    </label>
                                </div> -->

                                <div class="d-grid mt-5">
                                    <button value="Log in" class="btn btn-info btn-lg" id="tmbl_login">
                                        Login
                                    </button>
                                    <!-- <button class="btn btn-info btn-lg" type="submit">Login</button> -->
                                </div>
                            </form>

                            <!-- <div class="text-center mt-4">
                                <a href="#" class="btn-link text-decoration-none">Sign in using different account</a>
                            </div> -->

                        </div>
                    </div>
                    <!-- END : Login card -->


                </div>
            </div>
        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - PAGE CONTAINER -->

    <!-- JAVASCRIPTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script src="assets/js/bootstrap.min.bdf649e4bf3fa0261445f7c2ed3517c3f300c9bb44cb991c504bdc130a6ead19.js" defer></script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="assets/js/nifty.min.736fe03287ab6abf8e0a4e5bd06329bb8e8d21535170616163ea9c3bd96b3cd6.js" defer></script>
</body>


<!-- Mirrored from themeon.net/nifty/v3.0.0/front-pages/lock-screen/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Dec 2021 05:26:45 GMT -->
</html>