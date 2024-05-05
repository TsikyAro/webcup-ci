<?php
$note = 3;
?>


<div class="result">
    <div class="result-details">
        <div class="container d-flex text-center flex-column align-items-center mb-70">
            <p class="sub-heading mb-15">
                <span class="icon">{</span>
                <span class="text">RESULT</span>
                <span class="icon">}</span>
            </p>
            <h2 class="section-title">List Answer</h2>
        </div>
        <div class="result-content">
            <table id="result">
                <tr>
                    <th>QCM</th>
                    <th>Answer</th>
                    <th>Details</th>
                    <th>Mark</th>
                </tr>
                <?php for($i=0; $i<count($resultat);$i++){?>
                    <tr>
                        <td><?= $resultat[$i]->idqcmcours?></td>
                        <td><?= $resultat[$i]->reponseutilisateur?></td>
                        <td><?= $resultat[$i]->question?></td>
                        <td><?= $resultat[$i]->note?></td>
                        <?php //$note = $resultat[$i]->note?>
                    </tr>
                <?php }?>
                
            </table>
        </div>
        <div class="box-awards-item has-border dsn-up ">
            <h5 class="number background-section p-10">
                <div class="point">
                    <div>
                        <span class="has-animate-number title"><?php echo $note ?></span>
                        <span class="sm-title-block"> /10
                            <br> points</span>
                    </div>
                    <div class="content-icon-zombi">
                    <img class="icon-zombi"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-dsn-src="<?php echo base_url() ?>assets/clients/assets/img/<?php if($note<5){ echo 'zombie'; }else{echo 'happy';}?>.png" alt="">
                    </div>
                </div>
            </h5>
        </div>
        <div class="button-box d-flex justify-content-center align-items-center">
            <div>
                <a href="contact.html" class="mt-30 effect-ajax dsn-button p-relative">
                    <span class="dsn-border-rdu "></span>Next Cours
                </a>
            </div>
        </div>
    </div>
</div>