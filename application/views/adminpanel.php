<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
</head>
<body>
    <?php if($this->session->userdata('login')) : ?>
        <?php foreach($this->usermodel->getUserDetail(array('user_id' => $this->session->userdata('login')['user_id'])) as $key => $value) : ?>

            <?php if($value->user_id == 1) : ?>
                <h1>Admin Girişi Onaylandı</h1>
            <?php else : ?>
                <h1>Admin Değilsin</h1>
            <?php endif;?>

        <?php endforeach;?>

    <?php else : ?>

        <script>
            alert("Lütfen bu sayfayı görüntülemek için giriş yapın!");
            window.location.href = "<?=base_url();?>";
        </script>
        
    <?php endif; ?>
</body>
</html>