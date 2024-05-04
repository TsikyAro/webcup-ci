 <main class="main-root">
        <div id="dsn-scrollbar">
            <div class="main-content">

                <!-- ========== Header Normal ========== -->
                <header
                    class="header-page over-hidden background-section p-relative header-padding-top header-padding-bottom border-bottom dsn-header-animation">
                    <div class="bg-circle-dotted"></div>
                    <div class="container">
                        <div class="content-hero p-relative d-flex flex-column h-100 dsn-hero-parallax-title">
                            <p class="subtitle p-relative line-shap  line-shap-after">
                                <span class="pl-10 pr-10 background-main dsn-load-animate">LEARN & UNDERSTAND</span>
                            </p>
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper">Course: <?= $cours->titre?></h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->


                <div class="wrapper">
                    <div class="root-blog section-margin ">
                        <div class="container ">
                            <div class="dsn-posts d-grid grid-lg-1">
                                <div class="fiche-content">
                                    <?= $cours->description?>
                                </div>
                                <div
                                    class="dsn-paginations d-flex justify-content-center border-bottom border-top pt-30 pb-30">
                                    <span
                                        class="page-numbers border d-flex align-items-center justify-content-center text-center current ">
                                        <span class="dsn-numbers">
                                            <span class="number">1</span></span>
                                    </span>
                                    <a class="page-numbers border d-flex align-items-center justify-content-center text-center"
                                        href="#">
                                        <span class="dsn-numbers">
                                            <span class="number">2</span>
                                        </span>
                                    </a>

                                    <a class="page-numbers border d-flex align-items-center justify-content-center text-center"
                                        href="#">
                                        <span class="dsn-numbers">
                                            <span class="number">3</span>
                                        </span>
                                    </a>
                                    <a class="next page-numbers d-flex align-items-center justify-content-center text-center"
                                        href="#">
                                        <span class="button-m d-flex justify-content-center align-items-center">
                                            <svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%"
                                                height="100%">
                                                <path
                                                    d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                                                </path>
                                            </svg>
                                            <span>NEXT</span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>