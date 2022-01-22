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
                            <li class="active">
                                <a href="<?=base_url('adminpanel/tickets')?>"><span class="fa fa-paper-plane mr-3"></span> Talepler</a>
                            </li>
                            <li>
                                <a href="<?=base_url('adminpanel/charts')?>"><span class="far fa-chart-bar mr-3"></span> Grafikler</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Page Content  -->
                    <div id="content" class="p-4 p-md-5 pt-5 mt-4">
                        <h2 class="mb-4">Talepler</h2>
                        <hr>
                        <table class="table table-bordered table-striped table-hover" id="adminDataTables">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Konu Adı</th>
                                    <th scope="col">Mesaj İçeriği</th>
                                    <th scope="col">Kullanıcı ID</th>
                                    <th scope="col">Kullanıcı Adı</th>
                                    <th scope="col">Oluşturulma Tarihi</th>
                                    <th scope="col" style="width: 50px; text-align: center;">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tickets as $ticket) : ?>
                                    <tr>
                                        <th scope="row"><?=$ticket->ticket_id;?></th>
                                        <td><?=$ticket->ticket_topic_name;?></td>
                                        <td><?=$ticket->ticket_message_content;?></td>
                                        <td><?=$ticket->ticket_user_id;?></td>
                                        <td><?=$ticket->ticket_user_name;?></td>
                                        <td><?=strftime('%d %b %Y - %H:%M', strtotime($ticket->ticket_created_date));?></td>
                                        <td><a href="<?=base_url("adminpanel/deleteTicket/$ticket->ticket_id");?>" class="btn btn-danger" style="width: 100%;">Sil</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
    <script src="<?=base_url('assets/js/rundatatables.js');?>"></script>
</body>
</html>