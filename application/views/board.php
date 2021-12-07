<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$category_name?></title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
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
            <h3><?=$category_name?></h3>
            <div class="block-container">
                <div class="block-bar"></div>
                <div class="block-body">
                    <div class="structItemContainer">
                        <div class="structItem">
                            <div class="structItem-cell structItem-cell--icon">
                                <div class="structItem-iconContainer">
                                    <a href="#" class="avatar avatar--s avatar--default avatar--default--dynamic" style="background-color: #ebebad; color: #b8b82e">
                                        <span class="avatar-u134-s" role="img" aria-label="Teknonely (APK Meydanı)">T</span> 
                                    </a>
                                </div>
                            </div>
                            <div class="structItem-cell structItem-cell--main">
                                <div class="structItem-title">
                                    <a href="#">14 Bilgisayar Hızlandırma ve FPS Arttırma Yöntemi</a>
                                </div>
                                <div class="structItem-minor">
                                    <ul class="structItem-parts">
                                        <li>
                                            <a href="#" class="username">Teknonely (APK Meydanı)<i class="fas fa-circle" style="font-size: 3px;position: relative;bottom: 3px;left: 3px;margin-right: 3px;"></i></a>
                                        </li>
                                        <li class="structItem-startDate">
                                            <a href="#" rel="nofollow"><time class="u-dt" dir="auto" datetime="2020-12-06T15:24:40+0000" data-time="1607268280" data-date-string="6 Ara 2020" data-time-string="15:24" title="6 Ara 2020, Saat: 15:24">6 Ara 2020</time></a>
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
                                        333
                                    </dd>
                                </dl>
                            </div>
                            <div class="structItem-cell structItem-cell--latest">
                                <a href="#" rel="nofollow"><time class="structItem-latestDate u-dt" dir="auto" datetime="2020-12-06T15:24:40+0000" data-time="1607268280" data-date-string="6 Ara 2020" data-time-string="15:24" title="6 Ara 2020, Saat: 15:24">6 Ara 2020</time></a>
                                <div class="structItem-minor">
                                    <a href="#" class="username" dir="auto" itemprop="name" data-user-id="134" data-xf-init="member-tooltip" id="js-XFUniqueId4">Teknonely (APK Meydanı)</a>
                                </div>
                            </div>
                            <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                <div class="structItem-iconContainer">
                                    <a href="#" class="avatar avatar--xxs avatar--default avatar--default--dynamic" style="background-color: #ebebad; color: #b8b82e">
                                        <span class="avatar-u134-s" role="img" aria-label="Teknonely (APK Meydanı)">T</span> 
                                    </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>