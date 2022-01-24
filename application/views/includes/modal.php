<!-- Giriş Yap Modal -->
<div class="modal fade" id="giris_yapModal" tabindex="-1" aria-labelledby="giris_yapModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="giris_yapModalLabel">Giriş Yap</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>                                   
            <?php if($this->session->flashdata('login_error')) : ?>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kayit_olModalLabel">Kayıt Ol</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php if($this->session->flashdata('register_error')) : ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                        <?=$this->session->flashdata('register_error');?>                            
                    </div>
                </div>
            <?php endif;?>
            <div class="modal-body">
                <form action="<?=base_url('user/register');?>" method="post">
                    <div class="mb-3">
                        <label for="kayit_olInputNick" class="form-label">Kullanıcı adı:</label>
                        <input type="text" class="form-control" id="kayit_olInputNick" name="username" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">Forum kullanıcı adınıza özenle karar verin, konularınız ve mesajlarınız üzerinde bu ad görünecektir.</div>
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
                        <label class="form-check-label" for="kayit_olCheck"><a href="<?=base_url('help/terms_rules')?>">Kurallar</a> ve <a href="<?=base_url('help/privacy_policy')?>">Gizlilik Politikasını</a> okudum, kabul ediyorum.</label>
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
<!-- İletişim Modal -->
<div class="modal fade" id="talep_gonderModal" tabindex="-1" aria-labelledby="talep_gonderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="talep_gonderModalLabel">Talep Gönder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>     
            <?php if($this->session->flashdata('post_ticket_error')) : ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                        <?=$this->session->flashdata('post_ticket_error');?>
                    </div>
                </div>
            <?php endif;?>       
            <div class="modal-body">
                <form action="<?=base_url('user/sendTicket');?>" method="post">
                    <div class="mb-3">
                        <label for="talep_gonderInputTopic" class="form-label">Konu:</label>
                        <input type="text" class="form-control" id="talep_gonderInputTopic" name="input_ticket_topic" required>
                    </div>
                    <div class="mb-3">
                        <label for="talep_gonderInputMessage" class="form-label">Mesaj:</label>
                        <textarea class="form-control" id="talep_gonderInputMessage" name="input_ticket_message" rows="5" required></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="talep_gonderCheck" name="input_ticket_checkbox" required>
                        <label class="form-check-label" for="talep_gonderCheck"><a href="<?=base_url('help/terms_rules')?>">Kurallar</a> ve <a href="<?=base_url('help/privacy_policy')?>">Gizlilik Politikasını</a> okudum, kabul ediyorum.</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- İletişim Modal End -->