<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section class="" id="services">
        <div class="container">
            <div class="row">

                <div class="modal" id="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark"></h5>
                                <a id="modal-close" class="close-modal text-dark"><i class="mdi mdi-close"></i></a>
                            </div>
                            <div class="modal-body text-dark">
                                <p id="result"></p>
                            </div>
                            <div class="modal-footer">
                                <a href="<?= base_url('ipa/soal1_1'); ?>" type="button" class="btn btn-secondary">Coba Lagi</a>
                                <a href="<?= base_url('ipa/soal1_2'); ?>" type="button" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 text-left" data-aos="fade-up">
                    <h3 class="font-weight-medium">Latihan Soal Bab 1</h3>
                    <h5 class="mb-5">Mengenal Bentuk dan Wujud Benda yang ada di Sekitar Kita!</h5>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col text-left">
                    <form name="quiz" id="quiz">
                        <div>
                            <h5 class="font-weight-medium">1. Susu adalah benda berwujud...</h5>
                            <p><input type="radio" name="question1" value="A"> Padat</p>
                            <p><input type="radio" name="question1" value="B"> Cair</p>
                            <p><input type="radio" name="question1" value="C"> Gas</p>
                        </div>
                    </form>
                </div>
            </div>
            <div id="confetti" class="confetti"></div>
            <div class="row" data-aos="fade-up">
                <div class="col">
                <a id="btn-open" class="btn btn-primary" onclick="check1_1()" style="float: right; margin: 3rem 0 0 0;">Selanjutnya</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>