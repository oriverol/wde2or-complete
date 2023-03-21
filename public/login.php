<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/login.php';
?>

<?php view('header', ['title' => 'WebApp Login Form']) ?>

<section id="contact" class="contact-section contact-style-3 img-bg" style="background-image: url('../../assets/img/hero/hero-5/hero-bg.svg')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
                        <div class="section-title text-center mb-50">
                            <br>
                            <h3 class="mb-15">&lt;&sol;WebApp Login Form&gt;</h3>
                            <p>Please fill the following form to log in.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="section-title text-center mb-50">
                            <img src="./img/registerImg.png" width="60%" alt="Register" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php flash() ?>
                        <?php if (isset($errors['login'])) : ?>
                            <div class="alert alert-danger">
                                <?= $errors['login'] ?>
                            </div>
                        <?php endif ?>
                        <div class="contact-form-wrapper" style="padding: 20px; border-radius: 10px; border: 4px solid #6466aa; background-color: rgba(235, 194, 110, 0.5);">
                            
                            <form action="login.php" method="post">
                                <div class="row">                                    
                                    <div class="col-md-12">
                                        <label for="username">Username:</label>
                                        <div class="single-input">
                                            <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>" 
                                                class="form-input" placeholder="Enter your new username here.">
                                                <small class="<?= error_class($errors, 'username') ?>"><?= $errors['username'] ?? '' ?></small>                                            
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="password">Password:</label>
                                        <div class="single-input">
                                            <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>"
                                                class="form-input" placeholder="Enter your new password here.">
                                                <small class="<?= error_class($errors, 'password') ?>"><?= $errors['password'] ?? '' ?></small>                                            
                                            <i class="lni lni-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>&nbsp;</label>
                                        <div class="form-button">
                                            <button type="submit" class="button"><i class="lni lni-enter"></i>Login</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <footer>Don't have an account? <a href="register.php">Register here.</a></footer>
                            </form>
                        </div>    
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                </div>
            </div>
        </section>

<?php view('footer') ?>