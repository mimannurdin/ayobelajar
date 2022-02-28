<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section class="" id="services">
        <div class="container">
            <div class="row">
            <div class="col-sm-12">
                <h3 class="font-weight-medium mb-5">Ilmu Pengetahuan Alam</h3>
                <h5></h5>
            </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card" style="width: 100%;">
                            <a href="<?= base_url('ipa/materi1');?>">
                                <img src="<?= base_url('themes/images')?>/ipa1.png" class="card-img-top" alt="materi 1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card" style="width: 100%;">
                            <a href="<?= base_url('ipa/materi2');?>">
                                <img src="<?= base_url('themes/images')?>/ipa2.png" class="card-img-top" alt="materi 2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card" style="width: 100%;">
                            <a href="<?= base_url('ipa/materi3');?>">
                                <img src="<?= base_url('themes/images')?>/ipa3.png" class="card-img-top" alt="materi 3">
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>