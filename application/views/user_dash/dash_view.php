<!DOCTYPE html>
<html>
    <head>
        <title>test dashboard</title>
    </head>

    <body>
        <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
        <button type="button" class="btn btn-success" 
                onclick="<?= base_url('home/logout'); ?>"><?= base_url('home/logout'); ?></button>
        
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        &copy; <?= date('Y') ?>
    </body>
</html>