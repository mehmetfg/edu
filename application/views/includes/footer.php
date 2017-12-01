<!-- BEGIN FOOTER -->
<div id="footer">
    2013 &copy; Metro Lab Dashboard.
</div>
<!-- END FOOTER -->
<?php $this->load->view("includes/include_script");?>
<script>

    <?php $alert=$this->session->userdata("alert");
    if($alert){?>

    notif({
        'type': '<?php echo $this->session->userdata("type");?>',
        'msg': '<?php echo $this->session->userdata("alert-message");?>!',
        'position': 'right',
        'fade':'true'
    })

<?php }
        $this->session->set_userdata("alert",false);

    ?>

</script>
