<main class="main-root">
    <div class="qcm">
        <div id="dsn-scrollbar">
            <div class="main-content">

                <!-- ========== Header Normal ========== -->
                <header
                    class="header-page over-hidden background-section p-relative header-padding-top header-padding-bottom border-bottom dsn-header-animation">
                    <div class="bg-circle-dotted"></div>
                    <div class="container">
                        <div class="content-hero p-relative d-flex flex-column h-100 dsn-hero-parallax-title">
                            <p class="subtitle p-relative line-shap  line-shap-after">
                                <span class="pl-10 pr-10 background-main dsn-load-animate">QCM</span>
                            </p>
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper">Alphabets</h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->

                <div class="wrapper">
                    <div class="root-blog section-margin ">
                        <div class="form-box">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="mb-30 d-flex text-left flex-column align-items-start">
                                <p class="sub-heading line-shap line-shap-before mb-15">
                                    <span class="line-bg-right">What's your name</span>
                                </p>
                            </div>

                            <form id="contact-form" class="form" method="post" action="contact.php"
                                data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>Your answer *</label>
                                            <input id="form_name" type="text" name="name" placeholder="Type your name"
                                                required="required" data-error="name is required." />
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </form>
                            <div class="container ">
                                <form>
                                    <div class="image-response">
                                        <div
                                            class="dsn-posts d-grid grid-lg-3 grid-sm-2 our-blog our-blog-classic our-blog-full-img">
                                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                                data-swiper-parallax-scale="0.85">
                                                <label>
                                                    <input class="radio-container" type="radio" name="article"
                                                        value="article1">
                                                    <div class="box-meta">
                                                        <div class="entry-date">
                                                            <span class="author">Dsn Grid</span>
                                                            <a href="post.html" class="effect-ajax">March , 17th
                                                                2020</a>
                                                        </div>
                                                    </div>

                                                    <div class="box-img over-hidden">
                                                        <img class="cover-bg-img"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-dsn-src="assets/img/blog/2.jpg" alt="">
                                                    </div>
                                                    <div class="box-content p-relative">

                                                        <div class="box-content-body">
                                                            <div class="metas">
                                                                <span>Creative</span>
                                                                <span>Travel</span>
                                                            </div>
                                                            <h4 class="title-block mb-20">
                                                                <p class="effect-ajax">The Day I Lost
                                                                    My
                                                                    Child
                                                                    in
                                                                    Charles de Gaulle Airport</p>
                                                            </h4>
                                                            <p>Streamer fish California halibut Pacific saury. Slickhead
                                                                grunion
                                                                lake trout. Canthigaster rostrata spikefish…</p>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                                data-swiper-parallax-scale="0.85"> <label>
                                                    <input class="radio-container" type="radio" name="article"
                                                        value="article2">
                                                    <div class="box-meta">
                                                        <div class="entry-date">
                                                            <span class="author">Dsn Grid</span>
                                                            <p class="effect-ajax">March , 17th
                                                                2020</p>
                                                        </div>
                                                    </div>

                                                    <div class="box-img over-hidden">
                                                        <img class="cover-bg-img"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-dsn-src="assets/img/blog/3.jpg" alt="">
                                                    </div>
                                                    <div class="box-content p-relative">

                                                        <div class="box-content-body">
                                                            <div class="metas">
                                                                <span>Creative</span>
                                                                <span>Travel</span>
                                                            </div>
                                                            <h4 class="title-block mb-20">
                                                                <p class="effect-ajax">The Day I Lost
                                                                    My
                                                                    Child
                                                                    in
                                                                    Charles de Gaulle Airport</p>
                                                            </h4>
                                                            <p>Streamer fish California halibut Pacific saury. Slickhead
                                                                grunion
                                                                lake trout. Canthigaster rostrata spikefish…</p>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div
                        style="font-family: Arial; display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
                        <h2 style="margin:20px">REPEAT THREE TIMES</h2>
                        <div class="card" id="letterCard"
                            style="width: 100px; height: 100px; border: 1px solid #ccc; margin-bottom: 20px; display: flex; justify-content: center; align-items: center; background-color: black; color: #fff;">
                            <div style="font-size: 24px;">A</div>
                        </div>

                        <img style="cursor: pointer; width: 40px;background-color: green;" src="<?= base_url('assets/img/microphone-icon.png') ?>" alt="Microphone" id="microphoneBtn" class="microphone-icon">
                        <div id="output" style="margin-top: 10px; font-size: 24px;"></div>

                        <script>
                            const letterCard = document.getElementById('letterCard');
                            const microphoneBtn = document.getElementById('microphoneBtn');
                            const outputDiv = document.getElementById('output');

                            // Fonction pour changer la couleur de la carte en fonction de la lettre détectée
                            function changeColor(letter) {
                                if (letter === 'A') {
                                    letterCard.style.backgroundColor = 'green';
                                } else {
                                    letterCard.style.backgroundColor = 'red';
                                }
                            }

                            // Fonction de reconnaissance vocale
                            function startSpeechRecognition() {
                                const recognition = new (webkitSpeechRecognition || SpeechRecognition)(); // Support pour différents navigateurs

                                recognition.lang = 'fr-FR'; // Langue française

                                recognition.onstart = function () {
                                    // Ajouter l'animation pulse à l'icône du microphone lorsqu'il commence à écouter
                                    microphoneBtn.classList.add('pulse');
                                };

                                recognition.onend = function () {
                                    // Supprimer l'animation pulse de l'icône du microphone lorsque l'écoute est terminée
                                    microphoneBtn.classList.remove('pulse');
                                };

                                recognition.onresult = function (event) {
                                    const transcript = event.results[0][0].transcript.trim();
                                    const firstLetter = transcript.charAt(0).toUpperCase(); // Extraire la première lettre et la mettre en majuscule
                                    console.log('Vous avez dit:', firstLetter); // Affichage dans la console de la première lettre détectée
                                    outputDiv.textContent = firstLetter;

                                    // Vérifier si la lettre A a été prononcée
                                    if (firstLetter === 'A') {
                                        changeColor('A');
                                    } else {
                                        changeColor('Autre');
                                    }
                                };

                                recognition.onerror = function (event) {
                                    console.error('Erreur de reconnaissance :', event.error);
                                    outputDiv.textContent = 'No response detected.';
                                    letterCard.style.backgroundColor = 'black'; 
                                };

                                recognition.start();
                            }

                            // Écouteur d'événement pour démarrer la reconnaissance vocale lors du clic sur l'icône du microphone
                            microphoneBtn.addEventListener('click', function () {
                                startSpeechRecognition();
                            });
                        </script>
                    </div>

                    <div class="dsn-paginations d-flex justify-content-center border-bottom border-top pt-30 pb-30">
                        <a class="next page-numbers d-flex align-items-center justify-content-center text-center"
                            href="<?= base_url('Qcm/resultat')?>">
                            <span class="button-m d-flex justify-content-center align-items-center">
                                <svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
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