<?= $this->extend('layout/template') ;?>

<?= $this->section('content'); ?>
    <div id="loading1" class="loader-wrapper"></div>
    
    <script>
        var loading = document.getElementById('loading1');

        window.addEventListener('load', function(){
            setTimeout(() =>(loading.style.display="none"),1000);
            setTimeout(() =>(document.getElementById("services").classList.add("show")),1100);
        });
    </script>

    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-left">
                    <h3 class="font-weight-medium">Bab 1</h3>
                    <h5 class="mb-5">Mengenal Bentuk dan Wujud Benda yang ada di Sekitar Kita!</h5>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col text-left">
                    <video width="60%" height="auto" src="<?= base_url('themes/videos')?>/ipa-materi-1.mp4" controls poster="<?= base_url('themes/images')?>/thumbnail1.png"></video>
                </div>
            </div>
            <div class="row " style="margin: 0 0.2rem;" data-aos="fade-up">
                <div class="col">
                    <a href="<?= base_url('ipa/soal1_1')?>" class="btn btn-primary" style="position: absolute; right: 16px; bottom: 8px;">Selanjutnya</a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>