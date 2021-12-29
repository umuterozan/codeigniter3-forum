<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<?php if($this->session->flashdata('register_success')) : ?>
    <script>
        toastr.success("Başarıyla kayıt olundu!");
        var myModal = new bootstrap.Modal(document.getElementById("giris_yapModal"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>
<?php endif;?>
<?php if($this->session->flashdata('register_error')) : ?>
    <script>
        toastr.error("Lütfen girdiğiniz bilgileri kontrol edin.")
        var myModal = new bootstrap.Modal(document.getElementById("kayit_olModal"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>
<?php endif;?>
<?php if($this->session->flashdata('login_success')) : ?>
    <script>        
        toastr.success('Başarıyla giriş yapıldı!');
    </script>
<?php endif;?>
<?php if($this->session->flashdata('login_error')) : ?>
    <script>
        toastr.error("Lütfen girdiğiniz bilgileri kontrol edin.")
        var myModal = new bootstrap.Modal(document.getElementById("giris_yapModal"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>
<?php endif;?>
<?php if($this->session->flashdata('login_logout')) : ?>
    <script>
        toastr.success('Başarıyla çıkış yapıldı!');
    </script>
<?php endif;?>