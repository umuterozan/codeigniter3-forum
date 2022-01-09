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
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="dropdownAccountDetail" data-bs-toggle="dropdown" aria-expanded="false" style="border-right: 1px solid #1d3a87;"><span class="avatar avatar--xxs avatar--default avatar--default--dynamic" data-user-id="<?=$this->session->userdata('login')['user_id'];?>" style="background-color: #adadeb; color: #2e2eb8"><span class="avatar-u213-s" role="img" aria-label="<?=$this->session->userdata('login')['user_name'];?>"><?=strtoupper($this->session->userdata('login')['user_name'][0]);?></span></span> <?php echo $this->session->userdata('login')['user_name']?></a>                                                               
                                    <div class="dropdown-menu" aria-labelledby="dropdownAccountDetail">
                                        <div class="account-detail">                                        
                                            <div class="account-detail-avatar">
                                                <span class="avatar avatar--m avatar--default avatar--default--dynamic" data-user-id="<?=$this->session->userdata('login')['user_id'];?>" style="background-color: #adadeb; color: #2e2eb8"><span class="avatar-u213-s" role="img" aria-label="<?=$this->session->userdata('login')['user_name'];?>"><?=strtoupper($this->session->userdata('login')['user_name'][0]);?></span></span>
                                            </div>
                                            <div class="account-detail-content">
                                                <?php foreach($this->usermodel->getUserDetail(array('user_id' => $this->session->userdata('login')['user_id'])) as $key => $value) : ?>
                                                    <b>Kullanıcı ID: </b><span><?=$value->user_id;?></span><br>
                                                    <b>Rumuz: </b><span><?=$value->user_name;?></span><br>
                                                    <b>E-posta: </b><span><?=$value->user_email;?></span><br>
                                                    <b>Kayıt tarihi: </b><span><?=strftime('%d %b %Y', strtotime($value->user_register_date));?></span><br>
                                                    <b>Açılan konular: </b><span><?=$this->usermodel->getUserTopicsCountRow($value->user_id);?></span><br>
                                                    <b>Yazılan mesajlar: </b><span><?=$this->usermodel->getUserMessagesCountRow($value->user_id);?></span>
                                                    <?php if($value->user_id == 1) : ?>
                                                        <div class="admin-panel-button">
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?=base_url('adminpanel')?>'">Admin Panel</button>
                                                        </div>
                                                    <?php endif;?>
                                                <?php endforeach;?>                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
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
