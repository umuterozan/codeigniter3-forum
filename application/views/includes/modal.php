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
        <div class="modal-dialog modal-lg">
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