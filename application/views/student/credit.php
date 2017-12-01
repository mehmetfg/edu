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

</div>
  <?php $this->load->view("Dealer/credit_main_content");?>


<?php $this->load->view("includes/footer");?>



</body>
</html>
