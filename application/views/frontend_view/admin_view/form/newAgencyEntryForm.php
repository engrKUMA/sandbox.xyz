<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?= form_open('adminCOntroller/newAgencySubmit'); ?>

        <div>Agency Name: 
            <?php
            $data = array(
                'name' => 'agencyName',
                'id' => 'agencyName',
                'value' => '',
                'maxlength' => '100',
                'size' => '50',
                'style' => 'width:50%'
            );

            echo form_input($data);
            ?>
        </div>

        <div>Agency Website: 
            <?php
            $data = array(
                'name' => 'agencyWebsite',
                'id' => 'agencyWebsite',
                'value' => '',
                'maxlength' => '100',
                'size' => '50',
                'style' => 'width:50%'
            );

            echo form_input($data);
            ?>
        </div>

        <div>Agency Address: 
            <?php
            $data = array(
                'name' => 'agencyAddress',
                'id' => 'agencyAddress',
                'value' => '',
                'maxlength' => '100',
                'size' => '50',
                'style' => 'width:50%'
            );

            echo form_input($data);
            ?>
        </div>

        <div>Agency Number: 
            <?php
            $data = array(
                'name' => 'agencyNumber',
                'id' => 'agencyNumber',
                'value' => '',
                'maxlength' => '100',
                'size' => '50',
                'style' => 'width:50%'
            );

            echo form_input($data);
            ?>
        </div>
        <!--submit btn-->
        <?php echo form_submit('mysubmit', 'Submit Agency Data'); ?>
        <!--reset BTN-->
        <?php
        $data = array(
            'name' => 'button',
            'id' => 'button',
            'value' => 'true',
            'type' => 'reset',
            'content' => 'Reset'
        );

        echo form_button($data);
        ?>

<?php echo form_close(); ?>

    </body>
</html>
