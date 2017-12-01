<!DOCTYPE html>
<html lang="tr">
<head>
    <title>AnaSayfa</title>

    <?php $this->load->view("includes/head");?>

</head>
<body class="fixed-top">

<?php $this->load->view("includes/header");?>

<div id="container" class="row-fluid">

    <?php $this->load->view("includes/sidebar");?>

    <div class="page-content-wrapper">
        <?php $this->load->view("media/list_main_content");?>
    </div>
</div>
<?php $this->load->view("includes/footer");?>




</body>
</html>
