<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="adminlogin.php" method="POST">
                                        <p style="color: red;" class="text-center"><?php if (isset($_GET['error'])) {
                                                                                        echo $_GET['error'];
                                                                                    } ?>
                                            </p">

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="login-email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="login-password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>

                                        <input type="submit" name="login_btn" id="login-btn" value="login" class="btn btn-primary btn-user btn-block" />
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="admin-forgot.php">Forgot Password?</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>