<div class="container-fluid">
    <div class="row login">
        <div class="col-4 " id="main">
            <div class="form-sub-div">
                <form action="./request/request.php" method="post">
                    <div class="logo"><img src="./public/logo-1.png" alt="" style="width:80px">
                        <h6 class="text-center mt-3"><code>Blog Panel</code> <br> Sub User</h6>

                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Admin Email address <span
                                class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter your email" required>
                        <div id="emailHelp" class="form-text text-light"><a href="?admin=true">

                                Login By Admin</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark" name="subUser"><i
                            class="bi bi-box-arrow-in-right me-2"></i>
                        Sign
                        In</button>

                </form>
            </div>
        </div>
        <div class="col-8 login-bgImg"></div>
    </div>
</div>