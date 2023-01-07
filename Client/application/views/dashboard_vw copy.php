<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    
    <?php $this->load->view('partials/navbar.php'); ?>
    <!-- <h1>Dashboard</h1> -->
    <!-- <h3>Halo,
        <?php echo $nama; ?> <br>
        <?php echo $kelas; ?> <br>
        <?php echo $jurusan; ?> <br>
        <?php echo $telpon; ?> <br>
        <?php echo $kelamin; ?> <br>
    </h3> -->
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