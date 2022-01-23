<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Teknoloji Forumu</title>
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
                    <div id="content" class="p-4 p-md-5 pt-5 mt-4">
                        <h2 class="mb-4">Grafikler</h2>
                        <hr>
                        <div class="d-flex justify-content-evenly mb-4 mt-4">
                            <div class="card text-white bg-primary mb-3 chart-card" style="max-width: 18rem;">
                                <div class="card-header chart-card-header">Kullanıcılar</div>
                                <div class="card-body chart-card-body">
                                    <h5 class="card-title chart-card-title"><i class="fas fa-users fa-3x"></i></h5>
                                    <p class="card-text chart-card-text"><?=$this->adminmodel->getUsersCountRow();?></p>
                                </div>
                            </div>    
                            <div class="card text-white bg-secondary mb-3 chart-card" style="max-width: 18rem;">
                                <div class="card-header chart-card-header">Konular</div>
                                <div class="card-body chart-card-body">
                                    <h5 class="card-title chart-card-title"><i class="fas fa-folder fa-3x"></i></h5>
                                    <p class="card-text chart-card-text"><?=$this->adminmodel->getTopicsCountRow();?></p>
                                </div>
                            </div>
                            <div class="card text-white bg-success mb-3 chart-card" style="max-width: 18rem;">
                                <div class="card-header chart-card-header">Mesajlar</div>
                                <div class="card-body chart-card-body">
                                    <h5 class="card-title chart-card-title"><i class="fas fa-sticky-note fa-3x"></i></h5>
                                    <p class="card-text chart-card-text"><?=$this->adminmodel->getMessagesCountRow();?></p>
                                </div>
                            </div>
                            <div class="card text-white bg-info mb-3 chart-card" style="max-width: 18rem;">
                                <div class="card-header chart-card-header">Talepler</div>
                                <div class="card-body chart-card-body">
                                    <h5 class="card-title chart-card-title"><i class="fas fa-paper-plane fa-3x"></i></h5>
                                    <p class="card-text chart-card-text"><?=$this->adminmodel->getTicketsCountRow();?></p>
                                </div>
                            </div>       
                        </div>    
                        <center><div class="chart-container">
                            <canvas id="chart"></canvas>
                        </div></center>
                        <script>
                            const ctx = document.getElementById('chart').getContext('2d');                                                       
                            const chart = new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    labels: ['Kullanıcılar', 'Konular', 'Mesajlar', 'Talepler'],
                                    datasets: [{
                                        label: 'Forum Veritabanı',
                                        data: [
                                            <?=$this->adminmodel->getUsersCountRow();?>, 
                                            <?=$this->adminmodel->getTopicsCountRow();?>, 
                                            <?=$this->adminmodel->getMessagesCountRow();?>, 
                                            <?=$this->adminmodel->getTicketsCountRow();?>
                                        ],
                                        backgroundColor: [
                                            'rgb(31, 65, 155)',
                                            'rgb(128, 0, 0)',
                                            'rgb(210, 105, 30)',
                                            'rgb(100, 149, 237)'
                                        ],
                                        hoverOffset: 4,
                                    }]
                                }
                            });
                        </script>
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