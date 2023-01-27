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
    <div class="flex-container">
            <div class="single-box">
                <div class="box-area">
                <div style="flex-grow: 1">MEN</div>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div class="single-box">
                <div class="box-area">
                <div style="flex-grow: 1">WOMEN</div>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div class="single-box">
                <div class="box-area">
                <div style="flex-grow: 1">KIDS</div>
                </div>
            </div>
        </div>
        
    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>