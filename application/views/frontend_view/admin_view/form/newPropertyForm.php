<html>
    <head>
        <title>
            test form
        </title>

        <script type="text/javascript">
            function testBtn() {
                console.log("btn pressed");
                window.location.reload();
            }

        </script>
    </head>
    <body>
        <?php echo form_open('home/insertNewProperty'); ?>

        <?php
//        label attribs
        $labelAttrib      = array(
            'class' => 'mycustomclass',
            'style' => 'color: #000;'
        );
//        input field attrib
        $inputFieldAttrib = array(
            'class' => 'customClassForInputField',
            'style' => 'color: red;'
        );
        ?>

        <?php
        echo form_label('Assign Agent', '', $labelAttrib);
//
//        //dropdown agency option
//        $dropdownOption = Array(
//            '1'  => 'agent 1',
//            '2'    => 'agent 2',
//            '3'  => 'agent 3',
//            '4' => 'agent 3'
//        );
//
//        echo form_dropdown('agentID', $dropdownOption, 'large');
        ?>

        <select name="agentID">
            <?php
            foreach ($agencyData as $row) {
                echo '<option value="' . $row->agencyName . '">' . $row->agencyName . '</option>';
            }
            ?>
        </select>

        <br />

        <?php
        echo form_label('Property Title', '', $labelAttrib);
        echo form_input('propertyTitle', '', $inputFieldAttrib);
        ?>
        <br />

        <?php
        echo form_label('Property Amount', '', $labelAttrib);
        echo form_input('propertyAmount', '', $inputFieldAttrib);
        ?>
        <br />

        <?php
        echo form_label('Property Lot Area', '', $labelAttrib);
        echo form_input('propertyLotArea', '', $inputFieldAttrib);
        echo form_label('SQM', 'propertyUnit', $labelAttrib);
        ?>
        <br />

        <?php
        echo form_label('Property Type', '', $labelAttrib);

        echo form_radio('propertyType', 'House and Lot', TRUE);
        echo form_label('House And Lot', 'propertyType');
        echo form_radio('propertyType', 'Condominium', FALSE);
        echo form_label('Condominium', 'propertyType');
        echo form_radio('propertyType', 'Townhouse', FALSE);
        echo form_label('Townhouse', 'propertyType');
        echo form_radio('propertyType', 'Apartment', FALSE);
        echo form_label('Apartment', 'propertyType');
        echo form_radio('propertyType', 'Lot', FALSE);
        echo form_label('Lot', 'propertyType');
        echo form_radio('propertyType', 'Land and Farm', FALSE);
        echo form_label('Land and Farm', 'propertyType');
        echo form_radio('propertyType', 'Commercial', FALSE);
        echo form_label('Commercial', 'propertyType');
        echo form_radio('propertyType', 'Industrial', FALSE);
        echo form_label('Industrial', 'propertyType');
        ?>
        <br />

        <?php
        echo form_label('Property Location', '', $labelAttrib);
        echo form_input('propertyLocation', '', $inputFieldAttrib);
        ?>
        <br />

        <?php echo form_label('Property Coordinates (foor google maps)', '', $labelAttrib); ?>               <br />

        <?php
        echo form_label('Property Details', '', $labelAttrib);
        echo "<br>";
        echo form_textarea('propertyDetails', '', $inputFieldAttrib);
        ?>
        <br />
        <?php
        $data = array(
            'name'    => 'reset',
            'id'      => 'reset-btn',
            'value'   => 'true',
            'type'    => 'reset',
            'content' => 'Reset'
        );

        echo form_button($data);
        echo form_submit('mysubmit', 'Submit Post!');

        $js = 'onClick="testBtn()"';
        echo form_button('mybutton', 'Click Me', $js);

        echo form_close();
        ?>
    </body>

</html>