<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="img/favicon.ico" rel="icon">

        <!-- Materialize CSS File -->
        <link href="<?= base_url('libs/materialize/css/materialize.min.css') ?>" rel="stylesheet">

        <!-- Font awesome CSS Files -->
        <link href="<?= base_url('libs/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="<?= base_url('css/customcss.css') ?>" rel="stylesheet">

        <!-- Light box css -->
        <link href="<?= base_url('libs/lightbox/dist/css/lightbox.min.css') ?>" rel="stylesheet">

        <!-- slick css -->
        <link href="<?= base_url('libs/slick/slick.css') ?>" rel="stylesheet">
        <link href="<?= base_url('libs/slick/slick-theme.css') ?>" rel="stylesheet">

<!-- jquery ui -->
        <link href="<?= base_url('libs/jquery-ui.css') ?>" rel="stylesheet">
        <script src="<?= base_url('libs/jquery-ui.js') ?>"></script>


        <script type="text/javascript">
            var testdata = 'test';
            console.log(testdata);
        </script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <!-- navbar -->
        <?php $this->load->view('frontend_view/includes/navbar'); ?>
        <!-- navbar -->

