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
                        <h1 class="title mt-30 dsn-load-animate text-transform-upper">List of courses</h1>
                        <?php if ($this->session->userdata('user')): ?>
                        Hello <?php echo $this->session->userdata('user')->nom; ?> !
                        <?php endif; ?>
                    </div>
                </div>
            </header>
            <!-- ========== End Header Normal ========== -->


            <div class="wrapper">
                <div class="root-blog section-margin ">
                    <?php $this->load->view('includes/messages_flash'); ?>
                    <div class="container ">
                        <div class="dsn-posts d-grid grid-lg-3 grid-sm-2 our-blog our-blog-classic our-blog-full-img">
                            <?php for($i = 0; $i< count($cours);$i++){?>
                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                data-swiper-parallax-scale="0.85">
                                <div class="box-meta">
                                    <div class="entry-date">
                                        <span class="author">Dsn Grid</span>
                                        <a href="post.html" class="effect-ajax">March , 17th 2020</a>
                                    </div>
                                </div>

                                <div class="box-img over-hidden">
                                    <img class="cover-bg-img"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/blog/1.jpg" alt="">
                                </div>
                                <div class="box-content p-relative">

                                    <div class="box-content-body">
                                        <div class="metas">
                                            <span>Course number</span>
                                            <span><?= $cours[$i]->ordre ?></span>
                                        </div>
                                        <h4 class="title-block mb-20">
                                            <a href="<?= base_url('coursOnline/fiche')?>" class="effect-ajax">Let's study
                                                <?= $cours[$i]->titre?></a>
                                        </h4>
                                        <p>Streamer fish California halibut Pacific saury. Slickhead grunion
                                            lake trout. Canthigaster rostrata spikefish…</p>
                                        <?php if($cours[$i]->etat_cours != 'Terminé' ):?>
                                        <a href="<?= base_url('coursOnline/fiche')?>?cours=<?=$cours[$i]->id?>"
                                            class="link-vist p-relative mt-20">

                                            <span class="link-vist-text">Load More</span>

                                            <div class="link-vist-arrow">
                                                <svg viewBox="0 0 80 80">
                                                    <polyline points="19.89 15.25 64.03 15.25 64.03 59.33">
                                                    </polyline>
                                                    <line x1="64.03" y1="15.25" x2="14.03" y2="65.18">
                                                    </line>
                                                </svg>
                                            </div>
                                        </a>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                            <?php }?>



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
</main>
<!-- ========== End Style Option Page ========== -->

<!-- ========== paginate-right-page ========== -->
<div class="dsn-paginate-right-page"></div>

<!-- ========== Line left & right with creative page ========== -->
<div class="line-border-style w-100 h-100"></div>

<!-- Optional JavaScript -->
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/dsn-grid.min.js"></script>
<script src="assets/js/custom.js"></script>