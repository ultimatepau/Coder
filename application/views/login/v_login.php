	<section id="login-form">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-form bottom">
                        <h1 class="text-center">Login</h1>
                        <form id="login-form" method="post" action="<?php echo site_url('login/do_login')?>">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" required="required" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" required="required" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember"> Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Login">
                            </div>
                        </form>
                        <p class="text-center">
                            Don't have an account? <a href="<?php echo site_url('login/signup') ?>">Sign up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>