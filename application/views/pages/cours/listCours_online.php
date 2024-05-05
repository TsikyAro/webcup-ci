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
                                        data-dsn-src="<?= base_url()?>assets/clients/assets/img/cours/<?= $cours[$i]->photo; ?>"
                                        alt="">
                                </div>
                                <div class="box-content p-relative">

                                    <div class="box-content-body">
                                        <div class="metas">
                                            <span>Course number</span>
                                            <span><?= $cours[$i]->ordre ?></span>
                                        </div>
                                        <h4 class="title-block mb-20">
                                            <a href="<?= base_url('coursOnline/fiche')?>?cours=<?=$cours[$i]->id?>"
                                                class="">Let's study
                                                <?= $cours[$i]->titre?></a>
                                        </h4>
                                        <p><?= $cours[$i]->descriptioncourte?></p>
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
                                        <?php if($cours[$i]->etat_cours == 'Terminé' ):?>
                                        <a href="<?= base_url('coursOnline/resultat')?>?idcours=<?=$cours[$i]->id?>"
                                            class="link-vist p-relative mt-20">

                                            <span class="link-vist-text">Result</span>

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