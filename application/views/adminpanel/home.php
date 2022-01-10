<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
    <?php $this->load->view('includes/style');?>
    <link rel="stylesheet" href="<?=base_url('assets/css/adminpanel.css')?>">
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
                        <h1><a href="<?=base_url()?>" class="logo">Teknoloji Forumu</a></h1>
                        <ul class="list-unstyled components mb-5">
                            <li class="active">
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
                            <li>
                                <a href="<?=base_url('adminpanel/charts')?>"><span class="far fa-chart-bar mr-3"></span> Grafikler</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Page Content  -->
                    <div id="content" class="p-4 p-md-5 pt-5">
                        <h2 class="mt-4 mb-4">Teknoloji Forumu</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
    <script src="<?=base_url('assets/js/popper.js')?>"></script>
    <script src="<?=base_url('assets/js/adminpanel.js')?>"></script>
</body>
</html>