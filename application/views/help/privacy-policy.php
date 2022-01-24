<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gizlilik | Teknoloji Forumu</title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
    <?php $this->load->view('includes/style');?>
    <link rel="stylesheet" href="<?=base_url('assets/css/help.css')?>">
</head>
<body>
    <?php $this->load->view('includes/navbar');?>
    <section>
    <?php $this->load->view('includes/modal');?>
        <div class="container">
            <h3>Gizlilik Politikası</h3>
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
                                        <a href="<?=base_url('help/privacy_policy')?>" class="blockLink is-selected">Gizlilik Politikası</a>
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
                                        <p>
                                            Bu bölüm forum hakkında bilgilendirici yazı metnini içerir.

                                            <br><br>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur unde mollitia dolores et vitae, sit iure illo dicta odit? Laborum fugit veniam perferendis tenetur neque culpa alias repellat, doloribus velit.
                                            <br><br>
                                            <br><br>
                                            <br><br>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur unde mollitia dolores et vitae, sit iure illo dicta odit? Laborum fugit veniam perferendis tenetur neque culpa alias repellat, doloribus velit.

                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur unde mollitia dolores et vitae, sit iure illo dicta odit? Laborum fugit veniam perferendis tenetur neque culpa alias repellat, doloribus velit.
                                            <br>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur unde mollitia dolores et vitae, sit iure illo dicta odit? Laborum fugit veniam perferendis tenetur neque culpa alias repellat, doloribus velit.

                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur unde mollitia dolores et vitae, sit iure illo dicta odit? Laborum fugit veniam perferendis tenetur neque culpa alias repellat, doloribus velit.
                                            <br><br>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur unde mollitia dolores et vitae, sit iure illo dicta odit? Laborum fugit veniam perferendis tenetur neque culpa alias repellat, doloribus velit.

                                            <br><br>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur unde mollitia dolores et vitae, sit iure illo dicta odit? Laborum fugit veniam perferendis tenetur neque culpa alias repellat, doloribus velit.

                                            <br><br>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur unde mollitia dolores et vitae, sit iure illo dicta odit? Laborum fugit veniam perferendis tenetur neque culpa alias repellat, doloribus velit.

                                        </p>
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