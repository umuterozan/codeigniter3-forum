<footer>
    <div class="container">
        <div class="footer-inner">
            <div class="footer-row">
                <div class="footer-row-main">
                    <i class="fas fa-globe"></i> Türkçe</a>
                </div>
                <div class="footer-row-opposite">
                    <?php if($this->session->has_userdata('login')) : ?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#talep_gonderModal">İletişim</a>
                    <?php else : ?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#giris_yapModal" onclick="needLogin()">İletişim</a>
                    <?php endif;?>
                    <a href="<?=base_url('help/terms_rules')?>">Kurallar</a>
                    <a href="<?=base_url('help/privacy_policy')?>">Gizlilik Politikası</a>
                    <a href="<?=base_url('help')?>">Yardım</a>
                    <a href="<?=base_url()?>">Anasayfa</a>
                </div>
            </div>
            <div class="footer-copyright">
                <a href="https://github.com/drepsofficial/project" target="blank">Community platform by teknoloji
                    <sup>®</sup>
                    <span class="copyright">© 2021-2022 Teknoloji Forumu</span>
                </a>
            </div>
        </div>
    </div>
</footer>