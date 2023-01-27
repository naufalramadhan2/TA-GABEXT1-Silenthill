<!DOCTYPE html>
<html lang="en">

<head>
    <!-- import fontawesome (CSS) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- import file "style.css" -->
    <link rel="stylesheet" href="<?php echo base_url("ext/style.css")?>" />
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('partials/navbar.php'); ?>
    <div class="row"> 
        <div class="column">
            <img src="<?= base_url('ext/img/1.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/2.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/3.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/4.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/5.png') ?>" style="width:100%">
        </div>
        
        <div class="column">
            <img src="<?= base_url('ext/img/6.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/7.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/8.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/9.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/10.png') ?>" style="width:100%">
        </div> 

        <div class="column">
            <img src="<?= base_url('ext/img/11.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/12.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/13.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/14.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/15.png') ?>" style="width:100%">
        </div>
        
        <div class="column">
            <img src="<?= base_url('ext/img/16.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/17.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/18.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/19.png') ?>" style="width:100%">
            <img src="<?= base_url('ext/img/20.png') ?>" style="width:100%">
        </div> 
        
    </div>
    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>