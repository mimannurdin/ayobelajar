<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section class="" id="services">
        <div class="container">
            <div class="row">

            <div class="modal" id="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark">Modal title</h5>
                            <a id="modal-close" class="close-modal text-dark"><i class="mdi mdi-close"></i></a>
                        </div>
                        <div class="modal-body text-dark">
                            <p id="result"></p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('ipa/soal1'); ?>" type="button" class="btn btn-secondary">Coba Lagi</a>
                            <a href="<?= base_url('ipa/soal2'); ?>" type="button" class="btn btn-primary">Selanjutnya</a>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col-sm-12 text-left" data-aos="fade-up">
                    <h3 class="font-weight-medium">Latihan Soal Bab 1</h3>
                    <h5 class="mb-5">Mengenal Bentuk dan Wujud Benda yang ada di Sekitar Kita!</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 score">
                    <span class="correct">0</span>/<span class="total">0</span>
                    <button id="play-again-btn" class="btn btn-secondary">Main Lagi</button>
                    <a id="done-btn" class="btn btn-primary" href="<?= base_url('main/ipa'); ?>">Selesai</a>
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

    <script src="<?= base_url('quiz/js'); ?>/match1.js"></script>
<?= $this->endSection(); ?>