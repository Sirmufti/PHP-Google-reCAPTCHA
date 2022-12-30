<body class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card border shadow-sm bg-white p-3">
                    <div class="card-body">
                        <h3 class="card-title mb-3">PHP Google reCAPTCHA</h3>
                        <p><?php echo $msg; ?></p>
                        <form action="" method="POST">

                            <div class="mb-3">
                                <label for="name" class="form-label">Enter your Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="E.g. Mufti Wahab" value="<?php echo $name; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Enter your Age</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="E.g 32" value="<?php echo $age; ?>" required>
                            </div>

                            <div class="g-recaptcha mb-3" data-sitekey="<?php echo $siteKey; ?>"></div>

                            <button class="btn btn-primary" name="submit" type="submit">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>