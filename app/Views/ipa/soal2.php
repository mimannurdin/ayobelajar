<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section class="" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-left">
                    <h3 class="font-weight-medium">Latihan Soal 2</h3>
                    <h5 class="mb-5">Cocokan Gambar berikut ini!</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 score">
                    <span class="correct">0</span>/<span class="total">0</span>
                    <button id="play-again-btn">Play Again</button>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="draggable-items">
                    <!-- Will be dynamically populated - Example Element: -->
                    <!-- <i class="fab fa-codepen draggable" draggable="true" style="color: #111111;" id="codepen"></i> -->
                </div>
                <div class="matching-pairs">
                    <!-- Will be dynamically populated - Example Element: -->
                    <!-- <div class="matching-pair">
                    <span class="label">Codepen</span><span class="droppable" data-brand="codepen"></span>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>