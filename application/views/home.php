<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknoloji Forumu</title>
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicon.png');?>" sizes="32x32" />
    <?php $this->load->view('includes/style');?>
</head>
<body>
    <?php $this->load->view('includes/navbar');?>
    <section>
    <?php $this->load->view('includes/modal');?>
        <div class="container">
            <h3>Teknoloji Forumu</h3>
            <?php foreach ($board_parent as $key => $value) : ?>
                <span class="u-anchorTarget" id="donanim"></span>
                <div class="block-container">
                    <h2 class="block-header">
                        <a href="#donanim"><?=$value->board_name?></a>
                    </h2>
                    <?php foreach($this->boardmodel->getAltBoards(array('board_parent' => $value->board_id)) as $key => $value) : ?>
                        <div class="node-body">
                            <div class="node-icon">
                                <i class="far fa-comments" style="opacity:1;color: #f9c479;"></i>
                            </div>
                            <div class="node-main">
                                <h3 class="node-title">
                                    <a href="<?=base_url('forumlar/' . $value->board_url);?>"><?=$value->board_name?></a>
                                </h3>
                            </div>
                            <?php $topic_counter = 0; ?>
                            <?php foreach($this->topicmodel->getTopics(array('board_id' => $value->board_id)) as $key => $value) : ?>
                                <?php $topic_counter += 1; ?>
                                <div class="node-stats">
                                    <dl class="pairs pairs-rows">
                                        <dt>Konular</dt>
                                        <dd><?=$topic_counter;?></dd>
                                    </dl>
                                    <dl class="pairs pairs-rows">
                                        <dt>Mesajlar</dt>
                                        <dd>21</dd>
                                    </dl>
                                </div>
                                <div class="node-extra">
                                    <div class="node-extra-icon">
                                        <a href="#" class="avatar avatar--xs avatar--default avatar--default--dynamic" style="background-color: #ebebad; color: #b8b82e">
                                            <span><?=strtoupper($value->user_name[0]);?></span> 
                                        </a>
                                    </div>
                                    <div class="node-extra-row">
                                        <a href="#" class="node-extra-title" title="<?=$value->topic_name;?>"><?=$value->topic_name;?></a>
                                    </div>
                                    <div class="node-extra-row">
                                        <ul class="listInline">
                                            <li><time class="node-extra-date u-dt" dir="auto"><?=$value->topic_created_date;?></time><i class="fas fa-circle" style="font-size: 3px;position: relative;bottom: 3px;left: 3px;margin-right: 3px;"></i></li>
                                            <li class="node-extra-user"><a href="#" class="username"><?=$value->user_name?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    <?php endforeach;?>
                </div>
                <br> 
            <?php endforeach;?>
        </div>
    </section>
    <br>
    <?php $this->load->view('includes/footer');?>
    <?php $this->load->view('includes/script');?>
    <?php if($this->session->flashdata('error')) : ?>
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("kayit_olModal"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
    <?php elseif($this->session->flashdata('success') || $this->session->flashdata('login_error')) : ?>
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("giris_yapModal"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
    <?php endif;?>
</body>
</html>