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
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper"><?php echo $cours->titre; ?>
                            </h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->

                <div class="wrapper">
                <form id="contact-form" class="form" method="get" action="<?= base_url('coursonline/validate_qcm') ?>" data-toggle="validator">
                   <input type="hidden" name="cours" value="<?=$cours->id?>">
                ]   <?php foreach($questions as $question):?>
                    <div class="root-blog section-margin ">
                        <div class="form-box">
                            <div class="mb-30 d-flex text-left flex-column align-items-start">
                                <p class="sub-heading line-shap line-shap-before mb-15">
                                    <span class="line-bg-right"><?php echo $question->question ?></span>
                                </p>
                            </div>
                            <?php if($question->idtype == 3):?>
                            <!-- <form id="contact-form" class="form" method="post" action="contact.php" -->
                                <!-- data-toggle="validator"> -->
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>Your answer *</label>
                                            <input id="form_name" type="text" 
                                                placeholder="Type your answer" required="required"
                                                data-error="answer is required." name="reponses[<?= $question->id ?>]" />
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            <!-- </form> -->
                            <?php endif;?>
                            <?php if($question->idtype == 1 || $question->idtype == 2):?>

                            <div class="container ">
                                <form>
                                    <div class="image-response">
                                        <div
                                            class="dsn-posts d-grid grid-lg-3 grid-sm-2 our-blog our-blog-classic our-blog-full-img">
                                            <?php foreach ($question->reponses_possibles as $reponse): ?>
                                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                                data-swiper-parallax-scale="0.85">
                                                <label>
                                                    <input class="radio-container" type="radio" name="reponses[<?= $question->id ?>]" name="article"
                                                        value="article1">
                                                    <img class="cover-bg-img"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-dsn-src="<?= base_url()?>assets/clients/assets/img/answer/<?= $reponse->image; ?>"
                                                        alt="">

                                                </label>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <?php endif;?>
                            <?php if($question->idtype == 4):?>
                            <div
                                style="font-family: Arial; display: flex; flex-direction: column; align-items: center; justify-content: center; ">
                                <h2 style="margin:20px">REPEAT THREE TIMES</h2>
                                <div class="card" id="letterCard"
                                    style="width: 100px;border: 1px solid #ccc; margin-bottom: 20px; display: flex; justify-content: center; align-items: center; background-color: black; color: #fff;">
                                    <div style="font-size: 24px;"><?= $question->reponses_possibles[0]->reponse ?></div>
                                </div>

                                <img style="cursor: pointer; width: 40px;background-color: green;"
                                    src="<?= base_url('assets/img/microphone-icon.png') ?>" alt="Microphone"
                                    id="microphoneBtn" class="microphone-icon">
                                <div id="output" style="margin-top: 10px; font-size: 24px;"></div>
                                <div id="hu"></div>
                                <script>
                                    const letterCard = document.getElementById('letterCard');
                                    const microphoneBtn = document.getElementById('microphoneBtn');
                                    const outputDiv = document.getElementById('output');
                                    
                                    var hiddenInput = document.createElement('input');
                                    hiddenInput.setAttribute('id', 'reponse_vocale');
                                    hiddenInput.setAttribute('type', 'hidden');
                                    hiddenInput.setAttribute('name', 'reponses[<?= $question->id ?>]');
                                    // hiddenInput.setAttribute('placeholder', 'huhuhuuu');
                                    hiddenInput.setAttribute('value', <?= $question->reponses_possibles[0]->reponse ?>);
                                    document.getElementById('contact-form').appendChild(hiddenInput);
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
                                        const recognition = new(webkitSpeechRecognition || SpeechRecognition)
                                            (); // Support pour différents navigateurs

                                        recognition.lang = 'en-EN'; // Langue française

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
                                            const firstLetter = transcript.charAt(0)
                                                .toUpperCase(); // Extraire la première lettre et la mettre en majuscule
                                            console.log('Vous avez dit:',
                                                firstLetter
                                            ); // Affichage dans la console de la première lettre détectée
                                            outputDiv.textContent = firstLetter;
                                            hiddenInput.setAttribute('value', firstLetter);
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
                            <?php endif;?>
                        </div>
                    </div>
                    <?php endforeach;?> 
                </form>
                    <div class="dsn-paginations d-flex justify-content-center border-bottom border-top pt-30 pb-30">
                        <a class="next page-numbers d-flex align-items-center justify-content-center text-center"
                           href="#">
                            <button  type="submit"class="button-m d-flex justify-content-center align-items-center">
                                <svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                    <path
                                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                                    </path>
                                </svg>
                                <span>NEXT</span>
                                </button>
                        </a>
                    </div>
                </div>
                <script>
                    // Récupération du formulaire
                    const form = document.getElementById('contact-form');

                    // Récupération du lien "NEXT"
                    const nextLink = document.querySelector('.next');

                    // Ajout d'un écouteur d'événement sur le lien "NEXT"
                    nextLink.addEventListener('click', function(event) {
                        // Empêcher le comportement par défaut du lien
                        event.preventDefault();
                        
                        // Soumettre le formulaire
                        form.submit();
                    });
                </script>
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