<div class="container-fluid">
    <div class="row login">
        <div class="col-4 " id="main">
            <div class="form-sub-div">
                <form action="./request/request.php" method="post">
                    <div class="logo"><img src="./public/logo-1.png" alt="" style="width:80px">
                        <h6 class="text-center mt-3"><code>Admin Register</code> <br> Register in below</h6>

                    </div>

                    <div class="mb-3">

                        <label for="username" class="form-label"> User Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                            placeholder="Enter your name" name="adminName" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Email address <span
                                class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter your email" name="adminEmail" required>
                    </div>
                    <div class="mb-3 pass">
                        <label for="exampleInputPassword1" class="form-label">Create Password <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control mb-2" id="exampleInputPassword1"
                            placeholder="Enter your password" name="adminPass" required>

                        <button type="button" class=" btn btn-primary text-primary" id="togglePass"><i
                                class="bi bi-eye"></i> Show Password </button>
                    </div>

                    <button type="submit" class="btn btn-dark" name="register"><i
                            class="bi bi-box-arrow-in-right me-2"></i>
                        Register</button>

                </form>
            </div>
        </div>
        <div class="col-8 login-bgImg"></div>
    </div>
</div>