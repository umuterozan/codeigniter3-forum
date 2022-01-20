<script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery-3.6.0.min.js')?>"></script>
<script src="<?=base_url('assets/js/toastr.min.js')?>"></script>
<script>
    toastr.options.progressBar = true;   

    function needLogin() {        
        toastr.warning("Bu alanı görüntüleyebilmek için giriş yapmalısınız.", "Uyarı");
    }
</script>

<?php if($this->session->flashdata('register_success')) : ?>
    <script>
        toastr.success("Başarıyla kayıt olundu!", "Kayıt");
        var myModal = new bootstrap.Modal(document.getElementById("giris_yapModal"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>
<?php endif;?>
<?php if($this->session->flashdata('register_error')) : ?>
    <script>
        toastr.error("Lütfen girdiğiniz bilgileri kontrol edin.", "Hata");
        var myModal = new bootstrap.Modal(document.getElementById("kayit_olModal"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>
<?php endif;?>
<?php if($this->session->flashdata('login_success')) : ?>
    <script>        
        toastr.success('Başarıyla giriş yapıldı!', 'Giriş');
    </script>
<?php endif;?>
<?php if($this->session->flashdata('login_error')) : ?>
    <script>
        toastr.error("Lütfen girdiğiniz bilgileri kontrol edin.", "Hata");
        var myModal = new bootstrap.Modal(document.getElementById("giris_yapModal"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>
<?php endif;?>
<?php if($this->session->flashdata('login_logout')) : ?>
    <script>
        toastr.success('Başarıyla çıkış yapıldı!', 'Çıkış');
    </script>
<?php endif;?>

<?php if($this->session->flashdata('post_topic_success')) : ?>
    <script>        
        toastr.success('Başarıyla konu açıldı!', 'Forum');
    </script>
<?php endif;?>
<?php if($this->session->flashdata('post_topic_error')) : ?>
    <script>     
        toastr.error('Lütfen boşlukları doldurun.', 'Hata');
    </script>
<?php endif;?>
<?php if($this->session->flashdata('post_message_success')) : ?>
    <script>        
        toastr.success('Başarıyla mesaj gönderildi!', 'Forum');
    </script>
<?php endif;?>
<?php if($this->session->flashdata('post_message_error')) : ?>
    <script>     
        toastr.error('Lütfen bir şeyler yazın.', 'Hata');
    </script>
<?php endif;?>

<?php if($this->session->flashdata('post_ticket_success')) : ?>
    <script>        
        toastr.success('Başarıyla talep gönderildi!', 'Forum');
    </script>
<?php endif;?>
<?php if($this->session->flashdata('post_ticket_error')) : ?>
    <script>
        toastr.error("Lütfen girdiğiniz bilgileri kontrol edin.", "Hata");
        var myModal = new bootstrap.Modal(document.getElementById("talep_gonderModal"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>
<?php endif;?>