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
                                <a href="<?= base_url('ipa/soal3_3'); ?>" type="button" class="btn btn-secondary">Coba Lagi</a>
                                <a href="<?= base_url('ipa/soal3_4'); ?>" type="button" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 text-left" data-aos="fade-up">
                    <h3 class="font-weight-medium">Latihan Soal Bab 3</h3>
                    <h5 class="mb-5">Mengenal Macam-macam Musim di Indonesia</h5>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col text-left">
                    <form name="quiz" id="quiz">
                        <div>
                            <h5 class="font-weight-medium">3. Pada saat musim hujan udara akan terasa...</h5>
                            <p><input type="radio" name="question3" value="A"> Hangat</p>
                            <p><input type="radio" name="question3" value="B"> Panas</p>
                            <p><input type="radio" name="question3" value="C"> Dingin</p>
                        </div>
                    </form>
                </div>
            </div>
            <div id="confetti" class="confetti"></div>
            <div class="row" data-aos="fade-up">
                <div class="col">
                <a id="btn-open" class="btn btn-primary" onclick="check3_3()" style="float: right; margin: 3rem 0 0 0;">Selanjutnya</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>