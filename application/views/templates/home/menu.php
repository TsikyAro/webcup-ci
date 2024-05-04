<div class="site-header dsn-container dsn-load-animate">
    <div class="extend-container d-flex w-100 align-items-baseline justify-content-between align-items-end">
        <div class="inner-header p-relative">
            <div class="main-logo">
                <a href="index.html" data-dsn="parallax">
                    <img class="light-logo"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-dsn-src="assets/img/logo.png" alt="" />
                    <img class="dark-logo"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-dsn-src="assets/img/logo-dark.png" alt="" />
                </a>
            </div>
        </div>
        <div class="menu-icon d-flex align-items-baseline">
            <div class="text-menu p-relative  font-heading text-transform-upper">
                <div class="p-absolute text-button">Menu</div>
                <div class="p-absolute text-open">Open</div>
                <div class="p-absolute text-close">Close</div>
            </div>
            <div class="icon-m" data-dsn="parallax" data-dsn-move="10">
                <span class="menu-icon-line p-relative d-inline-block icon-top"></span>
                <span class="menu-icon-line p-relative d-inline-block icon-center"></span>
                <span class="menu-icon-line p-relative d-block icon-bottom"></span>
            </div>
        </div>
        <nav class="accent-menu dsn-container main-navigation p-absolute  w-100  d-flex align-items-baseline ">
            <div class="menu-cover-title">Menu</div>
            <ul class="extend-container p-relative d-flex flex-column justify-content-center h-100">

                <li class="dsn-active dsn-drop-down">
                    <a href="<?php echo site_url();?>" class="user-no-selection">
                        <span class="dsn-title-menu">Home</span>
                    </a>
                </li>
                <?php if (!$this->session->userdata('user')): ?>
                <li class="dsn-drop-down">
                    <a href="<?php echo site_url();?>authentification/signin" class="user-no-selection">
                        <span class="dsn-title-menu">Sign in</span>
                    </a>
                </li>
                <li class="dsn-drop-down">
                    <a href="<?php echo site_url();?>authentification/signup" class="user-no-selection">
                        <span class="dsn-title-menu">Sign Up</span>
                    </a>
                </li>
                <?php else: ?>
                <li class="dsn-drop-down">
                    <a href="<?php echo site_url();?>authentification/logout" class="user-no-selection">
                        <span class="dsn-title-menu">Logout</span>
                    </a>
                </li>
                <?php endif; ?>
                <li class="dsn-drop-down">
                    <a href="<?php echo site_url();?>cours/listCours" class="user-no-selection">
                        <span class="dsn-title-menu">List of course</span>
                    </a>
                </li>
            </ul>
            <div class="container-content  p-absolute h-100 left-60 d-flex flex-column justify-content-center">
                <div class="nav__info">
                    <div class="nav-content">
                        <p class="title-line">
                            HumanizeU</p>
                        <p>
                            Antananarivo<br>
                            Madagascar</p>
                    </div>
                    <div class="nav-content">
                        <p class="title-line">
                            Contact</p>
                        <p class="links over-hidden">
                            <a href="#" data-hover-text="+261 34 87 402 07" class="link-hover">+261 34 87 402 07</a>
                        </p>
                    </div>
                    <div class="nav-content">
                        <div id="ecoindex-badge" data-theme="dark"></div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>