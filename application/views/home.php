<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknoloji Forumu</title>
    <link rel="icon" type="image/png" href="https://teknoloji.org/wp-content/uploads/2020/10/favicon_teknoloji.png" sizes="32x32" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/normalize.css')?>">
</head>
<body>
    <?php $this->load->view('includes/navbar');?>
    <section>
    <?php $this->load->view('includes/modal');?>
        <div class="container">
            <h3>Teknoloji Forumu</h3>
            <?php foreach ($category_parent as $key => $value) : ?>
                <span class="u-anchorTarget" id="donanim"></span>
                <div class="block-container">
                    <h2 class="block-header">
                        <a href="#donanim"><?=$value->category_name?></a>
                    </h2>
                    <?php foreach($this->forummodel->getAltCategories(array('category_parent' => $value->category_id)) as $key => $value) : ?>
                        <div class="node-body">
                            <div class="node-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="node-main">
                                <h3 class="node-title">
                                    <a href="<?=base_url('forumlar/' . slugify($value->category_name, '-'));?>"><?=$value->category_name?></a>
                                </h3>
                            </div>
                            <div class="node-stats">
                                <dl class="pairs pairs-rows">
                                    <dt>Konular</dt>
                                    <dd>5</dd>
                                </dl>
                                <dl class="pairs pairs-rows">
                                    <dt>Mesajlar</dt>
                                    <dd>21</dd>
                                </dl>
                            </div>
                            <div class="node-extra">
                                <div class="node-extra-icon">
                                    <a href="#" class="avatar" style="background-color: #ebebad; color: #b8b82e">
                                        <span>T</span> 
                                    </a>
                                </div>
                                <div class="node-extra-row">
                                    <a href="#" class="node-extra-title" title="14 Bilgisayar Hızlandırma ve FPS Arttırma Yöntemi">14 Bilgisayar Hızlandırma ve FPS Arttırma Yöntemi</a>
                                </div>
                                <div class="node-extra-row">
                                    <ul class="listInline">
                                        <li><time class="node-extra-date u-dt" dir="auto" datetime="2020-12-06T15:24:40+0000" data-time="1607268280" data-date-string="6 Ara 2020" data-time-string="15:24" title="6 Ara 2020, Saat: 15:24">6 Ara 2020</time><i class="fas fa-circle" style="font-size: 3px;position: relative;bottom: 3px;left: 3px;margin-right: 3px;"></i></li>
                                        <li class="node-extra-user"><a href="#" class="username">pdetonator</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <br> 
            <?php endforeach;?>
        </div>
    </section>
    <br>
    <?php $this->load->view('includes/footer');?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php if($this->session->flashdata('error')) : ?>
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("kayit_olModal"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
    <?php elseif($this->session->flashdata('success') || $this->session->flashdata('login_error')) : ?>
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("giris_yapModal"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
    <?php endif;?>
</body>
</html>