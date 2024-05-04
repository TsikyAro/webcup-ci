<div class="signin">
    <div class="contact-container h-100 w-100  border-right">
        <div class="box-contact-inner section-padding ">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="form-box">
                        <div class="line line-top"></div>
                        <div class="line line-bottom"></div>
                        <div class="line line-left"></div>
                        <div class="line line-right"></div>

                        <div class="mb-30 d-flex text-left flex-column align-items-start">
                            <p class="sub-heading line-shap line-shap-before mb-15">
                                <span class="line-bg-right">Stay connected</span>
                            </p>
                            <h2 class="section-title  title-cap">
                                Sign up
                            </h2>
                        </div>

                        <form id="contact-form" class="form" method="post" action="contact.php" data-toggle="validator">
                            <div class="messages"></div>
                            <div class="input__wrap controls">
                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>Your name *</label>
                                        <input id="form_name" type="text" name="name" placeholder="Type your name"
                                            required="required" data-error="name is required." />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>Your pseudo *</label>
                                        <input id="form_name" type="text" name="pseudo" placeholder="Type your pseudo"
                                            required="required" data-error="pseudo is required." />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>Your password *</label>
                                        <input id="form_password" type="password" name="password"
                                            placeholder="Type your Password" required="required"
                                            data-error="Valid password is required." />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>Confirm your password *</label>
                                        <input id="form_password" type="password" name="confirmpassword"
                                            placeholder="Confirm your Password" required="required"
                                            data-error="Confirm password is required." />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="text-right">
                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                        <input type="submit" value="SIGN UP"
                                            class="dsn-button background-main border-radius">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="box-info-contact">
                        <img class="img-signup"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-dsn-src="<?php echo base_url() ?>assets/clients/assets/img/accueil/pexels-christina-petsos-200616875-14017248(1).jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>