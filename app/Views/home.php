<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container-home">
    <div class="row">
        <div class="col">
            <div class="poster"  id="menu-nav">
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
                        <a href="/Pages/register"><button class="join-button">Join With Us</button></a>
                    </div>
                    <div id="about-nav"></div>
                </div>
            </div>
            <div class="about" id="about">
                <div class="head-about">
                    <h2>Selamat Datang di GoGreen Technology</h2>

                </div>
                <div class="text-about">
                    <h3>GoGreen Technology, tempat di mana semangat kehijauan dan keberlanjutan <br> berkumpul. Kami percaya bahwa setiap tindakan kecil memiliki dampak besar, dan itulah <br> mengapa kami bersatu untuk merayakan dan mendorong gaya hidup berkelanjutan. Dari <br> tips hemat energi hingga inisiatif penanaman pohon, kami berkomitmen untuk <br> memberdayakan masyarakat dalam upaya menjaga keindahan bumi kita. Bergabunglah <br> dengan kami di perjalanan ini, karena bersama-sama kita dapat menciptakan perubahan <br> positif bagi lingkungan dan generasi mendatang.</h3>
                    <img src="/img/1575268118.jpg" alt="">                   
                </div> 
                <div id="news-nav"></div>            
            </div>
        </div>
        <div class="cards-news" id="cards-news">
    <h2>NEWS</h2>
    <div class="cards-all">
        <?php foreach ($gambar as $berita): ?>
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url('uploads/' . $berita['gambar']) ?>" class="card-img-top" alt="..." height="100px" width="100px">

                <div class="card-body">
                    <h5 class="card-title"><?= $berita['name'] ?></h5>
                    <a href="<?= base_url('news/detail/' . $berita['id']) ?>" class="btn btn-success">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

        <div id="contact-nav"></div>

                </div>
            </div>

        </div>

        
        <?php ;?>
        
       
        
        <form action="<?= base_url('/Pages/save')?>"  method="post"  id="contact" name="contact">
            <h2 class="text-send">Send us a message</h2>
            <div class="line"></div>
            <div class="container">
            <?php if (session()->getFlashdata('notif')) { ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('notif') ?>
            </div>
        <?php } ?>
                <div class="container1">
               
                    <div class="maps"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9745152231662!2d107.45731867441428!3d-6.524902163787165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690de1d4181d33%3A0x46b385e69e63b332!2sDuta%20Graha%20Ciseureuh!5e0!3m2!1sid!2sid!4v1700612772285!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="name-email">
                        <input type="text" id="name" placeholder="Name" name="name">
                        <input type="text" id="email" placeholder="E-mail" name="email">
                    </div>
                </div>
                <div class="container-child">
                    <input type="text" id="subject" placeholder="Subject" name="subject">
                    <br>
                   <textarea name="message" id="message" cols="100" rows="50" placeholder="Message" ></textarea>
                    <br>
                    <button type ="submit">Send</button>
                </div>
            </div>
            <footer>
                <div class="footer">
                <a href="#"><img src="/img/gogreen-white.png" alt=""></a>
                <h4>Perumahan Duta Graha,Cisereuh,Purwakarta,Jawa Barat 41118 Indonesia</h4>
                </div>
                
                <div class="icons">
                <a href="https://www.instagram.com/xzdva_/?next=%2F"><i data-feather="instagram"></i></a>
                <a href=""><i data-feather="facebook"></i></a>
                <a href=""><i data-feather="linkedin"></i></a>
                <h6>Copyright @ 2023 DavzTechnology</h6>

                </div>
            </footer>
          



            <?= $this->endSection(''); ?>