<?php
// Initialiser le compteur de réponses correctes
$nombre_de_reponses_correctes = 0;

// Calculer le nombre de réponses correctes
foreach ($resultats as $resultat) {
    // Vérifier si la réponse de l'utilisateur est correcte
    if ($resultat->bonne_reponse === $resultat->reponseutilisateur) {
        $nombre_de_reponses_correctes++;
    }
}

// Calculer la note sur 10
$nombre_de_questions = count($resultats);
$note = ($nombre_de_reponses_correctes / $nombre_de_questions) * 10;
?>

<div class="result">
    <div class="result-details">
        <div class="container d-flex text-center flex-column align-items-center mb-70">
            <p class="sub-heading mb-15">
                <span class="text">RESULT</span>
            </p>
            <h2 class="section-title">List Answer</h2>
        </div>
        <div class="result-content">
            <table id="result">
                <tr>
                    <th>QCM</th>
                    <th>Correct Answer</th>
                </tr>
                <?php foreach($resultats as $resultat): ?>
                <tr>
                    <td><?= $resultat->question ?></td>
                    <td <?php if($resultat->bonne_reponse != $resultat->reponseutilisateur): ?> style="color:red"
                        <?php endif; ?>>
                        <?= $resultat->bonne_reponse ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="box-awards-item has-border dsn-up ">
            <h5 class="number background-section p-10">
                <div class="point">
                    <div>
                        <span class="has-animate-number title"><?php echo round($note, 1) ?></span>
                        <span class="sm-title-block"> /10
                            <br> points</span>
                    </div>
                    <div class="content-icon-zombi">
                        <img class="icon-zombi"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-dsn-src="<?php echo base_url() ?>assets/clients/assets/img/<?php if($note < 5){ echo 'zombie'; } else{echo 'happy';}?>.png"
                            alt="">
                    </div>
                </div>
            </h5>
        </div>
        <div class="button-box d-flex justify-content-center align-items-center">
            <div>
                <?php if($note > 5): ?>
                <a href="<?=base_url() ?>coursOnline/fiche?cours=<?=$cours->id+1?>"
                    class="mt-30 dsn-button p-relative">
                    <span class="dsn-border-rdu "></span>Next Cours
                </a>
                <?php else: ?>

                <a href="<?=base_url() ?>coursOnline/qcm?id_cours=<?=$cours->id?>&arefaire=true"
                    class="mt-30 dsn-button p-relative">
                    <span class="dsn-border-rdu "></span>Cancel
                </a>
                <?php endif?>
            </div>
        </div>
    </div>
</div>