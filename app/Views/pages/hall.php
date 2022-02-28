<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div id="loading" class="loader-wrapper"></div>
    
    <script>
        var loading = document.getElementById('loading');

        window.addEventListener('load', function(){
            setTimeout(() =>(loading.style.display="none"),2500);
            setTimeout(() =>(document.getElementById("services").classList.add("show")),2500);
        });
    </script>

    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="font-weight-medium">Ruang Kelas</h3>
                <h5 class="mb-5">Pilihlah pelajaran yang kamu suka!</h5>
            </div>
            </div>
            <div class="row" style="margin: 0 0.2rem;" data-aos="fade-up">
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card">
                            <a href="<?= base_url('main/ppkn')?>">
                                <img src="<?= base_url('themes/images')?>/ppkn.png" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card">
                            <a href="<?= base_url('main/math')?>">
                                <img src="<?= base_url('themes/images')?>/mtk.png" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card">
                            <a href="<?= base_url('main/ipa')?>">
                                <img src="<?= base_url('themes/images')?>/ipa.png" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="card">
                            <a href="<?= base_url('main/ips')?>">
                                <img src="<?= base_url('themes/images')?>/ips.png" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>