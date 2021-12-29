<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$topic_name;?></title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
    <?php $this->load->view('includes/style');?>
</head>
<body>
    <?php $this->load->view('includes/navbar');?>
    <section>
    <?php $this->load->view('includes/modal');?>
        <div class="p-body">
            <div class="container p-body-inner">
                <div class="p-body-header">
                    <div class="p-title">
                        <h3 class="p-title-value"><?=$topic_name;?></h3>
                    </div>
                    <div class="p-description">
                        <ul class="listInline listInline--bullet">
                            <li>
                                <i class="fa--xf far fa-user"></i>
                                <span class="u-srOnly"></span>
                                <a href="#" class="username  u-concealed" dir="auto"><?=$user_name;?></a>
                            </li>
                            <li>
                                <i class="fas fa-circle" style="font-size: 3px;position: relative;bottom: 3px;left: 3px;margin-right: 3px;color: #8c8c8c;"></i>
                                <i class="fa--xf far fa-clock"></i>
                                <span class="u-srOnly"></span>
                                <a href="#" class="u-concealed"><time class="u-dt" dir="auto"><?=strftime('%d %b %Y', strtotime($topic_created_date));?></time></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-body-main">
                    <div class="p-body-contentCol"></div>
                    <div class="p-body-sidebarCol"></div>
                    <div class="p-body-content">
                        <div class="p-body-pageContent">
                            <div class="block block--messages">
                                <span class="u-anchorTarget"></span>
                                <div class="block-outer"></div>
                                <div class="block-container lbContainer">
                                    <div class="block-body">
                                        <?php foreach ($messages as $key => $value) : ?>
                                            <article class="message message--post">
                                                <span class="u-anchorTarget"></span>
                                                <div class="message-inner">
                                                    <div class="message-cell message-cell--user">
                                                        <div itemscope itemtype="https://schema.org/Person" class="message-user">
                                                            <div class="message-avatar">
                                                                <div class="message-avatar-wrapper">
                                                                    <a href="#" class="avatar avatar--m avatar--default avatar--default--dynamic" style="background-color: #ebebad; color: #b8b82e"><span class="avatar-u134-m" role="img" aria-label="Teknonely (APK Meydanı)"><?=strtoupper($value->user_name[0]);?></span></a>
                                                                </div>
                                                            </div>
                                                            <div class="message-userDetails">
                                                                <h4 class="message-name">
                                                                    <a href="#" class="username" dir="auto" itemprop="name"><?=$value->user_name;?></a>
                                                                </h4>
                                                            </div>
                                                            <span class="message-userArrow"></span>
                                                        </div>
                                                    </div>
                                                    <div class="message-cell message-cell-main">
                                                        <div class="message-main">
                                                            <div class="message-attribution message-attribution--split">
                                                                <ul class="message-attribution-main listInline">
                                                                    <li class="u-concealed">
                                                                        <a href="#" rel="nofollow"><time class="u-dt" dir="auto"><?=strftime('%d %b %Y - %H:%M', strtotime($value->message_created_date));?></time></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="message-content">
                                                                <div class="message-userContent lbContainer">
                                                                    <article class="message-body">
                                                                        <div class="bbWrapper">
                                                                            <?=$value->message_content;?>
                                                                        </div>
                                                                    </article>
                                                                </div>                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <br>
                                        <?php endforeach;?>                             
                                    </div>
                                </div>    
                                <div class="block-outer block-outer--after" style="margin-top: -24px;">
                                    <div class="block-outer-opposite">
                                    <?php if($this->session->has_userdata('login')) : ?>
                                        mesaj gönderme kutusu gelecek
                                    <?php else : ?>
                                        <a href="" class="button--link button--wrap button login-for-post-thread" data-bs-toggle="modal" data-bs-target="#giris_yapModal"><span class="button-text">Cevap yazmak için giriş yapmalı veya kayıt olmalısınız.</span></a>
                                    <?php endif;?>                                        
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