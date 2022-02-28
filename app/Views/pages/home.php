<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section id="home" class="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="main-banner">
                        <div class="d-sm-flex">
                            <div data-aos="zoom-in-up">
                                <div class="banner-title">
                                        <h3 class="font-weight-medium">Ayo Belajar
                                    </h3>
                                </div>
                                <p class="mt-3">sebuah aplikasi pembelajaran digital untuk siswa autis beserta spektrumnya yang telah disesuaikan dengan disabilitas dan kemampuannya.

                                </p>
                                <a href="<?= base_url('home/main'); ?>" class="btn btn-primary mt-3" style="padding: 11px 40px;">Mulai</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div data-aos="zoom-in-up">
                        <div id="motion-home" style="width:80%; margin:auto;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>