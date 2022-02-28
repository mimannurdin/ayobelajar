<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section class="" id="services">
        <div class="container" style="margin-bottom: 10rem;">
            <div class="row">
            <div class="col-sm-12">
                <h5 class="">Ayo Belajar</h5>
                <h3 class="font-weight-medium mb-5">Pendidikan Pancasila dan Kewarganegaraan</h3>
            </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card" style="width: 100%;">
                            <a href="#">
                                <img src="<?= base_url('themes/images')?>/contact.jpg" class="card-img-top" alt="materi 1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card" style="width: 100%;">
                            <a href="#">
                                <img src="<?= base_url('themes/images')?>/contact.jpg" class="card-img-top" alt="materi 2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card" style="width: 100%;">
                            <a href="#">
                                <img src="<?= base_url('themes/images')?>/contact.jpg" class="card-img-top" alt="materi 3">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card" style="width: 100%;">
                            <a href="#">
                                <img src="<?= base_url('themes/images')?>/contact.jpg" class="card-img-top" alt="materi 4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>