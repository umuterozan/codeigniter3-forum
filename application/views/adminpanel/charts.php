<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
    <?php $this->load->view('includes/style');?>
    <?php $this->load->view('includes/adminstyle');?>
</head>
<body>
    <?php if($this->session->userdata('login')) : ?>
        <?php foreach($this->usermodel->getUserDetail(array('user_id' => $this->session->userdata('login')['user_id'])) as $key => $value) : ?>
            <?php if($value->user_id == 1) : ?>
                <div class="wrapper d-flex align-items-stretch">
                    <nav id="sidebar">
                        <div class="custom-menu">
                            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                                <i class="fa fa-bars"></i>
                                <span class="sr-only">Toggle Menu</span>
                            </button>
                        </div>
                        <h1><a href="<?=base_url()?>" class="logo"><img src="<?=base_url('assets/img/favicon.png')?>" alt="favicon" width="18"> Teknoloji Forumu</a></h1>
                        <ul class="list-unstyled components mb-5">
                            <li>
                                <a href="<?=base_url('adminpanel')?>"><span class="fa fa-home mr-3"></span> Anasayfa</a>
                            </li>
                            <li>
                                <a href="<?=base_url('adminpanel/users')?>"><span class="fa fa-user mr-3"></span> Kullanıcılar</a>
                            </li>
                            <li>
                                <a href="<?=base_url('adminpanel/topics')?>"><span class="fas fa-folder-open mr-3"></span> Konular</a>
                            </li>
                            <li>
                                <a href="<?=base_url('adminpanel/messages')?>"><span class="fa fa-sticky-note mr-3"></span> Mesajlar</a>
                            </li>
                            <li>
                                <a href="<?=base_url('adminpanel/tickets')?>"><span class="fa fa-paper-plane mr-3"></span> Talepler</a>
                            </li>
                            <li class="active">
                                <a href="<?=base_url('adminpanel/charts')?>"><span class="far fa-chart-bar mr-3"></span> Grafikler</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Page Content  -->
                    <div id="content" class="p-4 p-md-5 pt-5">
                        <center><div class="admin-panel-home-logo">
                            <img src="<?=base_url('assets/img/logo.png')?>" alt="Teknoloji Forumu Logo">
                        </div>
                        <h1 class="mt-5">Teknoloji Forumu Admin Paneli</h1></center>      
                        <div class="card text-center mt-5">
                            <div class="card-header">
                                Admin Paneli v1.0
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Hoş geldin, <?=$value->user_name?></h5>
                                <p class="card-text">Soldaki menüyü kullanarak yönetici işlemlerini yapabilirsin.</p>
                            </div>
                            <div class="card-footer text-muted">
                                Community platform by teknoloji ® © 2021-2022 Teknoloji Forumu
                            </div>
                        </div>
                    </div>
                </div>                
            <?php else : ?>
                <script>
                    alert("Admin hesabı bulunamadı!");
                    window.location.href = "<?=base_url();?>";            
                </script>
            <?php endif;?>
        <?php endforeach;?>
    <?php else : ?>
        <script>
            alert("Lütfen bu sayfayı görüntülemek için giriş yapın.");
            window.location.href = "<?=base_url();?>";            
        </script>
    <?php endif; ?>
    <?php $this->load->view('includes/script');?>
    <?php $this->load->view('includes/adminscript');?>
</body>
</html>