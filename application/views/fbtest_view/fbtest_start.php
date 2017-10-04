<!DOCTYPE html>
<html>
    <head>
        <title><?= $title; ?></title>
    </head>
    <body>

        <h1><?= $heading; ?></h1>
        <h3><?= $message; ?></h3>

        <input type="button" name="" onclick="toLoginPanel();" value="redirect to loginpanel" />



        <script type="text/javascript">
            function toLoginPanel() {
                window.location.href = "<?= base_url('fbtest_home/loginpanel'); ?>";
            }
        </script>
    </body>
</html>