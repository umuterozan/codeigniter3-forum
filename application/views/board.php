<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$board_name?></title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
    <?php $this->load->view('includes/style');?>
</head>
<body>
    <?php $this->load->view('includes/navbar');?>
    <section>
    <?php $this->load->view('includes/modal');?>
        <div class="container">
            <h3><?=$board_name?></h3>
            <div class="block-container">
                <div class="block-bar"></div>
                <div class="block-body">
                    <div class="structItemContainer">
                        <?php foreach ($topics as $key => $value) : ?>
                            <div class="structItem">
                                <div class="structItem-cell structItem-cell--icon">
                                    <div class="structItem-iconContainer">
                                        <a href="#" class="avatar avatar--s avatar--default avatar--default--dynamic" style="background-color: #ebebad; color: #b8b82e">
                                            <span class="avatar-u134-s" role="img"><?=strtoupper($value->user_name[0]);?></span> 
                                        </a>
                                    </div>
                                </div>
                                <div class="structItem-cell structItem-cell--main">
                                    <div class="structItem-title">
                                        <a href="<?=base_url('konular/' . $value->topic_url);?>"><?=$value->topic_name;?></a>
                                    </div>
                                    <div class="structItem-minor">
                                        <ul class="structItem-parts">
                                            <li>
                                                <a href="#" class="username"><?=$value->user_name;?><i class="fas fa-circle" style="font-size: 3px;position: relative;bottom: 3px;left: 3px;margin-right: 3px;"></i></a>
                                            </li>
                                            <li class="structItem-startDate">
                                                <a href="<?=base_url('konular/' . $value->topic_url);?>" rel="nofollow"><time class="u-dt" dir="auto"><?=$value->topic_created_date;?></time></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="structItem-cell structItem-cell--meta">
                                    <dl class="pairs pairs--justified">
                                        <dt>
                                            Cevaplar:
                                        </dt>
                                        <dd>
                                            0
                                        </dd>
                                    </dl>
                                    <dl class="pairs pairs--justified structItem-minor">
                                        <dt>
                                            Görüntüleme:
                                        </dt>
                                        <dd>
                                            0
                                        </dd>
                                    </dl>
                                </div>
                                <div class="structItem-cell structItem-cell--latest">
                                    <a href="<?=base_url('konular/' . $value->topic_url);?>" rel="nofollow"><time class="structItem-latestDate u-dt" dir="auto"><?=$value->topic_created_date;?></time></a>
                                    <div class="structItem-minor">
                                        <a href="#" class="username" dir="auto" itemprop="name"><?=$value->user_name;?></a>
                                    </div>
                                </div>
                                <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                    <div class="structItem-iconContainer">
                                        <a href="#" class="avatar avatar--xxs avatar--default avatar--default--dynamic" style="background-color: #ebebad; color: #b8b82e">
                                            <span class="avatar-u134-s" role="img" style="font-size: 14px;"><?=strtoupper($value->user_name[0]);?></span> 
                                        </a>
                                    </div>
                                </div>
                            </div>                            
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="block-outer block-outer--after">
                <div class="block-outer-opposite">
                    <?php if($this->session->has_userdata('login')) : ?>
                        <a href="" class="button--link button--wrap button" data-xf-click="overlay" style="background: #f2930d;color: #fff;border-color: #f39e25 #da840c #da840c #f39e25;"><span class="button-text"><i class="far fa-edit"></i> Yeni Konu</span></a>
                    <?php else : ?>
                        <a href="" class="button--link button--wrap button" data-xf-click="overlay" data-bs-toggle="modal" data-bs-target="#giris_yapModal"><span class="button-text">Cevap yazmak için giriş yapmalı veya kayıt olmalısınız.</span></a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
    <br>
    <?php $this->load->view('includes/footer');?>
    <?php $this->load->view('includes/script');?>
</body>
</html>