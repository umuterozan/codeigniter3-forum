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
    <header>
        <div class="container">
            <div class="header-container">
                <div class="left-items-navbar">
                    <img src="assets/img/xenforo-logo.png" alt="Logo">
                    <a href=".."><i class="fas fa-home"></i> Anasayfa</a>
                </div>
                <div class="right-items-navbar">
                    <ul>
                        <li>
                            <!-- Giriş Yap Modal Trigger -->
                            <a href="" style="border-right: 1px solid #1d3a87;" data-bs-toggle="modal" data-bs-target="#giris_yapModal">Giriş Yap</a>                                                               
                        </li>
                        <li>
                            <!--Kayıt Ol Modal Trigger -->
                            <a href="#" data-bs-toggle="modal" data-bs-target="#kayit_olModal">Kayıt Ol</a>                        
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
    </header>
    <br>
    <section>
        <!-- Giriş Yap Modal -->
        <div class="modal fade" id="giris_yapModal" tabindex="-1" aria-labelledby="giris_yapModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="giris_yapModalLabel">Giriş Yap</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <?php if($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <div>
                                <?=$this->session->flashdata('success');?>
                            </div>
                        </div>
                        <?php elseif($this->session->flashdata('login_error')) : ?>
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div>
                                <?=$this->session->flashdata('login_error');?>
                            </div>
                        </div>
                    <?php endif;?>
                    <div class="modal-body">
                        <form action="<?=base_url('user/login');?>" method="post">
                            <div class="mb-3">
                                <label for="giris_yapInputEmail" class="form-label">E-posta adresiniz:</label>
                                <input type="email" class="form-control" id="giris_yapInputEmail" name="email" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">Kişisel verilerinizi asla başkalarıyla paylaşmayız.</div>
                            </div>
                            <div class="mb-3">
                                <label for="giris_yapInputPassword" class="form-label">Parola:</label>
                                <input type="password" class="form-control" id="giris_yapInputPassword" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="giris_yapCheck">
                                <label class="form-check-label" for="giris_yapCheck">Beni Hatırla</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                <button type="submit" class="btn btn-primary">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Giriş Yap Modal End -->
        <!-- Kayıt Ol Modal -->
        <div class="modal fade" id="kayit_olModal" tabindex="-1" aria-labelledby="kayit_olModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kayit_olModalLabel">Kayıt Ol</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <?php if($this->session->flashdata('error')) : ?>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div>
                                <?=$this->session->flashdata('error');?>
                            </div>
                        </div>
                    <?php endif;?>
                    <div class="modal-body">
                        <form action="<?=base_url('user/register');?>" method="post">
                            <div class="mb-3">
                                <label for="kayit_olInputNick" class="form-label">Kullanıcı adı:</label>
                                <input type="text" class="form-control" id="kayit_olInputNick" name="username" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">Forum kullanıcı adınıza özenle karar verin. Kullanıcıları rahatsız edebilecek, küfür, hakaret vb. ifadeler barındıran kullanıcı adları forumdan süresiz uzaklaştırılacaktır.</div>
                            </div>
                            <div class="mb-3">
                                <label for="kayit_olInputEmail" class="form-label">E-posta adresiniz:</label>
                                <input type="email" class="form-control" id="kayit_olInputEmail" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="kayit_olInputPassword" class="form-label">Parola:</label>
                                <input type="password" class="form-control" id="kayit_olInputPassword" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="kayit_olCheck" name="checkbox" required>
                                <label class="form-check-label" for="kayit_olCheck">Kullanım Koşulları ve Gizlilik Politikasını okudum, kabul ediyorum.</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kayıt Ol Modal End -->
        <div class="container">
            <h3>Teknoloji Forumu</h3>
            <?php foreach ($category_parent as $key => $value) : ?>
                <span class="u-anchorTarget" id="donanim"></span>
                <div class="block-container">
                    <h2 class="block-header">
                        <a href="#donanim"><?=$value->category_name?></a>
                    </h2>
                    <?php foreach($this->forummodel->getAltCategories($value->category_id) as $key => $value) : ?>
                        <div class="node-body">
                            <div class="node-icon">
                                <i class="far fa-comments"></i>
                            </div>
                            <div class="node-main">
                                <h3 class="node-title">
                                    <a href="forums/donanim/masaustu-dizustu/"><?=$value->category_name?></a>
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
    <footer>
        <div class="container">
            <div class="footer-inner">
                <div class="footer-row">
                    <div class="footer-row-main">
                        <i class="fas fa-globe"></i> Türkçe</a>
                    </div>
                    <div class="footer-row-opposite"> 
                        <a href="#">İletişim</a>
                        <a href="#">Terms and rules</a>
                        <a href="#">Privacy policy</a>
                        <a href="#">Help</a>
                        <a href="#">Home</a>
                    </div>
                </div>
                <div class="footer-copyright">
                    <a href="#">Community platform by XenForo
                        <sup>®</sup>
                        <span class="copyright">© 2010-2021 XenForo Ltd.</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
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