<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yardım | Teknoloji Forumu</title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
    <?php $this->load->view('includes/style');?>
    <link rel="stylesheet" href="<?=base_url('assets/css/help.css')?>">
</head>
<body>
    <?php $this->load->view('includes/navbar');?>
    <section>
    <?php $this->load->view('includes/modal');?>
        <div class="container">
            <h3>Yardım</h3>
            <div class="p-body-main p-body-main--withSideNav">
                <div class="p-body-sideNavCol"></div>
                <div class="p-body-contentCol"></div>
                <div class="p-body-sideNav">
                    <div class="p-body-sideNavInner">
                        <div class="p-body-sideNavContent">
                            <div class="block">
                                <div class="block-container">
                                    <h2 class="block-header">Yardım</h2>
                                    <div class="block-body">
                                        <a href="<?=base_url('help/about_forum')?>" class="blockLink">Forum</a>
                                        <a href="<?=base_url('help/cookies')?>" class="blockLink">Çerez kullanımı</a>
                                        <a href="<?=base_url('help/terms_rules')?>" class="blockLink">Kurallar</a>
                                        <a href="<?=base_url('help/privacy_policy')?>" class="blockLink">Gizlilik Politikası</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-body-content">
                    <div class="p-body-pageContent">
                        <div class="block">
                            <div class="block-container">
                                <div class="block-body">
                                    <div class="block-row block-row--seperated">
                                        <h3 class="block-textHeader">
                                            <a href="<?=base_url('help/about_forum')?>">Forum Hakkında</a>
                                        </h3>
                                        Bu bölüm forum hakkında bilgilendirici yazı metnini içerir.
                                    </div>
                                    <div class="block-row block-row--seperated">
                                        <h3 class="block-textHeader">
                                            <a href="<?=base_url('help/cookies')?>">Çerez Kullanımı</a>
                                        </h3>
                                        Bu bölüm forumun çerez kullanımıyla ilgili bilgilendirici yazı metnini içerir.
                                    </div>
                                    <div class="block-row block-row--seperated">
                                        <h3 class="block-textHeader">
                                            <a href="<?=base_url('help/terms_rules')?>">Şartlar ve Kurallar</a>
                                        </h3>
                                        Bu bölüm paylaşımlarda ve mesajlarda geçerli forum kurallarını içerir.
                                    </div>
                                    <div class="block-row block-row--seperated">
                                        <h3 class="block-textHeader">
                                            <a href="<?=base_url('help/privacy_policy')?>">Gizlilik Politikası</a>
                                        </h3>
                                        Bu bölüm forumun gizlilik politikasıyla ilgili bilgilendirici yazı metnini içerir.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <?php $this->load->view('includes/footer');?>
    <?php $this->load->view('includes/script');?>      
</body>
</html>