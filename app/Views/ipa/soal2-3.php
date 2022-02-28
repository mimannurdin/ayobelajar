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
                                <a href="<?= base_url('ipa/soal2_3'); ?>" type="button" class="btn btn-secondary">Coba Lagi</a>
                                <a href="<?= base_url('ipa/soal2_4'); ?>" type="button" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 text-left" data-aos="fade-up">
                    <h3 class="font-weight-medium">Latihan Soal Bab 2</h3>
                    <h5 class="mb-5">Mengenal Macam-macam Perubahan Wujud Benda yang ada di Sekitar Kita!</h5>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col text-left">
                    <form name="quiz" id="quiz">
                        <div>
                            <h5 class="font-weight-medium">3. Perhatikan Gambar dibawah ini!</h5>
                            <img src="<?= base_url('themes/images'); ?>/membeku.gif" alt="">
                            <h5 class="font-weight-medium">Jika air berada di suhu dingin maka akan...</h5>
                            <p><input type="radio" name="question3" value="A"> Menyublim</p>
                            <p><input type="radio" name="question3" value="B"> Mengkristal</p>
                            <p><input type="radio" name="question3" value="C"> Membeku</p>
                        </div>
                    </form>
                </div>
            </div>
            <div id="confetti" class="confetti"></div>
            <div class="row" data-aos="fade-up">
                <div class="col">
                <a id="btn-open" class="btn btn-primary" onclick="check2_3()" style="float: right; margin: 3rem 0 0 0;">Selanjutnya</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>