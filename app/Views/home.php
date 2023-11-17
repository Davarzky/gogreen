<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container-home">
    <div class="row">
        <div class="col">
            <div class="poster">
                <div class="subject-poster">
                    <img src="/img/front-background.jpg" alt="">

                    <div class="head-poster" id="head-poster">
                        <h1>Satu Langkah, Satu Perubahan:
                            <br>
                            Menanamkan Kehijauan untuk Masa Depan Yang Lebih Baik
                        </h1>
                    </div>
                    <h3>Bergabunglah dengan Kami untuk Menjadi <br> Agen Perubahan! Daftarkan Diri Anda! </h3>
                    <div class="button-poster">
                        <a href="#about"> <button class="learn-button">Learn More</button></a>
                        <a href=""><button class="join-button">Join With Us</button></a>
                    </div>
                </div>
            </div>
            <div class="about" id="about">
                <div class="head-about">
                    <h2>Selamat datang di GoGreen Technology</h2>

                </div>
                <div class="text-about">
                    <h3>GoGreen Technology, tempat di mana semangat kehijauan dan keberlanjutan <br> berkumpul. Kami percaya bahwa setiap tindakan kecil memiliki dampak besar, dan itulah <br> mengapa kami bersatu untuk merayakan dan mendorong gaya hidup berkelanjutan. Dari <br> tips hemat energi hingga inisiatif penanaman pohon, kami berkomitmen untuk <br> memberdayakan masyarakat dalam upaya menjaga keindahan bumi kita. Bergabunglah <br> dengan kami di perjalanan ini, karena bersama-sama kita dapat menciptakan perubahan <br> positif bagi lingkungan dan generasi mendatang.</h3>
                    <img src="/img/1575268118.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="cards-news" id="cards-news">
            <div class="cards-all">
                <div class="card" style="width: 18rem;">
                    <img src="/img/download.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/download(1).jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/download(2).jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>



        <?= $this->endSection(''); ?>