<header>
        <div class="container">
            <div class="header-container">
                <div class="left-items-navbar">
                    <img src="<?=base_url('assets/img/logo.png');?>" alt="Logo">
                    <a href="<?=base_url();?>"><i class="fas fa-home"></i> Anasayfa</a>
                </div>
                <div class="right-items-navbar">
                    <ul>
                        <?php if($this->session->has_userdata('login')) : ?>
                            <li>
                                <!-- Giriş Yap Modal Trigger -->
                                <a href="" style="border-right: 1px solid #1d3a87;"><i class="fas fa-user"></i> <?php echo $this->session->userdata('login')['user_name']?></a>                                                               
                            </li>
                            <li>
                                <!--Kayıt Ol Modal Trigger -->
                                <a href="<?=base_url('user/logout');?>">Çıkış Yap</a>                        
                            </li>
                        <?php else : ?>
                            <li>
                                <!-- Giriş Yap Modal Trigger -->
                                <a href="" style="border-right: 1px solid #1d3a87;" data-bs-toggle="modal" data-bs-target="#giris_yapModal">Giriş Yap</a>                                                               
                            </li>
                            <li>
                                <!--Kayıt Ol Modal Trigger -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#kayit_olModal">Kayıt Ol</a>                        
                            </li>
                        <?php endif;?>
                    </ul>                    
                </div>
            </div>
        </div>
    </header>
    <br>