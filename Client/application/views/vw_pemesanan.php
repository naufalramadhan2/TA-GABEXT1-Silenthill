<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>

    
    <!-- import fontawesome (CSS) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- import file "style.css" -->
    <link rel="stylesheet" href="<?php echo base_url("ext/style.css")?>" />
</head>

<body>
    <!-- buat area untuk entry data -->
    <?php $this->load->view('partials/navbar.php'); ?>
    <nav class="area-btn">
        <button id="btn_pesan" class="btn-primary">Pesan</button>
    </nav>
    <div class="grid-container">
        <div class="item1">1</div>
        <div class="item2">2</div>
        <div class="item3">3</div>  
        <div class="item4">4</div>
        <div class="item5">5</div>
        <div class="item6">6</div>
        <div class="item7">7</div>
        <div class="item8">8</div>  
        <div class="item9">9</div>
        <div class="item10">10</div>
        <div class="item11">11</div>
        <div class="item12">12</div>
        <div class="item13">13</div>
        <div class="item14">14</div>
        <div class="item15">15</div>
        <div class="item16">16</div>
    </div>
    <script>
         // buat event untuk "btn_hasil"
             btn_pesan.addEventListener('click', function(){
            // alihkan ke halaman hasil sablon
            location.href='https://api.whatsapp.com/send?phone=6282180296417'
        })
    </script>
       
    <!-- buat menu/button save -->
    
    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>