<div id="estimator">
    <?php
            if(isset($_GET['nid'])) {

            $check = 0;
            $nid = $_GET['nid'];
            $check = $_GET['check'];

            $sqlstring = "select field_base_price_value FROM content_type_house_plan WHERE nid = ".$nid."";

            $sqlstring2 = "select title from node where nid = ".$nid."";
            $sqlstring3 = "select field_sq_footage_value from content_type_house_plan where nid = ".$nid."";

            $result = mysql_query($sqlstring);
            $row = mysql_fetch_assoc($result);
            $base_price = $row['field_base_price_value'];
            $result2 = mysql_query($sqlstring2);
            $row2 = mysql_fetch_assoc($result2);
            $plan_number = $row2['title'];
            $result3 = mysql_query($sqlstring3);
            $row3 = mysql_fetch_assoc($result3);
            $footage = $row3['field_sq_footage_value'];


            if ($footage > 2999) {
                $beam = 2400;
                $hrv = 8500;
            } elseif ($footage > 2499) {
                $beam = 2000;
                $hrv = 6850;
            } else {
                $beam = 1500;
                $hrv = 6250;
            }

            $r1 = $base_price * $_POST['1'];
            $r2 = $base_price * $_POST['2'];
            $r3 = $base_price * $_POST['3'];
            $r4 = $base_price * $_POST['4'];
            $r5 = $base_price * $_POST['5'];
            $r6 = $base_price * $_POST['6'];
            $r7 = $base_price * $_POST['7'];
            $r8 = $base_price * $_POST['8'];
            $r9 = $base_price * $_POST['9'];
            $r10 = $base_price * $_POST['10'];
            $r11 = $base_price * $_POST['11'];
            $r12 = $base_price * $_POST['12'];
            $r13 = $base_price * $_POST['13'];
            $r14 = $base_price * $_POST['14'];
            $r15 = $base_price * $_POST['15'];
            $r16 = $base_price * $_POST['16'];
            $r17 = $base_price * $_POST['17'];
            $r18 = $base_price * $_POST['18'];
            $r19 = $base_price * $_POST['19'];
            $r20 = $base_price * $_POST['20'];
            $r21 = $_POST['1a'];
            //$r22 = $_POST['22']; // old method was a hard coded value based on sqaure footage of plan
            $r22 = $base_price * $_POST['22'];

            $new_price = round($base_price + $r1 + $r2 + $r3 + $r4 + $r5 + $r6 + $r7 + $r8 + $r9 + $r10 + $r11 + $r12 + $r13 + $r14 + $r15 + $r16 + $r17 + $r18 + $r19 + $r20 + $r21 + $r22);

            if ($check == 1) {
            echo "<h3>Chosen Plan: $plan_number</h3><br /><h3>How much will my house cost to build?</h3><p>This page shows construction costs of your chosen house in your area using the finishes and options you select below.<br />Now that you have selected your area, choose from the various finishes blow and click 'Calculate Cost' to see how these effect your building costs</p><h1>Estimated building cost: €$new_price</h1>";
            }
            else {

            echo "<h3>How much will my house cost to build?</h3><p>This page shows construction costs of your chosen house in your area using the finishes and options you select below.<br />Select a region and click 'Calculate Cost' to display a basic build cost* of your design in your area.</p><p>*Basic build cost excludes kitchens, sanitary, wall and floor finishes.<br />See default values below for full list of inclusion</p>";
            }

            }

            else {

            echo "<p>You can use this page to get an estimation of how much one of our plans would cost to build.</p>The first thing you need to do however is select a plan as the base for the calculator. To do this, either browse to the plan you want, then click the calculater button, or you can enter the plan number in the box below and click calculate.</p>";
            }

            ?>

    <form method="post" action="calculator2?nid=<?php echo $nid; ?>&check=1">
        <fieldset>
            <legend>Region</legend>
            <ol>
                <li>
                    <label for ="1">Select your area</label>
                    <select id="1" name="1" class="select">
                        <option value="0.00" <?php if ($_POST['1'] == 0.00) {echo "selected=\"selected\"";} ?>>Ulster - Country &amp; Small Towns</option>
                    <option value="0.075" <?php if ($_POST['1'] == 0.075) {echo "selected=\"selected\"";} ?>>Ulster - Large Towns</option>
                <option value="0.15" <?php if ($_POST['1'] == 0.15) {echo "selected=\"selected\"";} ?>>Ulster - Belfast</option>
            <option value="0.125" <?php if ($_POST['1'] == 0.125) {echo "selected=\"selected\"";} ?>>Connaught - Country &amp; Small Towns</option>
        <option value="0.175" <?php if ($_POST['1'] == 0.175) {echo "selected=\"selected\"";} ?>>Connaught - Large Towns</option>
    <option value="0.225" <?php if ($_POST['1'] == 0.225) {echo "selected=\"selected\"";} ?>>Connaught - Galway</option>
<option value="0.25" <?php if ($_POST['1'] == 0.25) {echo "selected=\"selected\"";} ?>>Munster - Country &amp; Small Towns</option>
<option value="0.3" <?php if ($_POST['1'] == 0.3) {echo "selected=\"selected\"";} ?>>Munster - Large Towns</option>
<option value="0.35" <?php if ($_POST['1'] == 0.35) {echo "selected=\"selected\"";} ?>>Munster - Limerick/Cork</option>
<option value="0.2501" <?php if ($_POST['1'] == 0.2501) {echo "selected=\"selected\"";} ?>>Leinster - Country &amp; Small Towns</option>
<option value="0.325" <?php if ($_POST['1'] == 0.325) {echo "selected=\"selected\"";} ?>>Leinster - Large Towns</option>
<option value="0.4" <?php if ($_POST['1'] == 0.4) {echo "selected=\"selected\"";} ?>>Leinster - Dublin &amp; Environs</option>
        </select>
        </li>
        </ol>
        </fieldset>
<h2 style="padding-top:10px;">Choose Your Specification</h2>
<fieldset>
<legend>External</legend>
<ol>
    <li>
        <label for="1a">Garage</label>
        <select id="1a" name="1a" class="select">
            <option value="0" <?php if ($_POST['1a'] == 0) {echo "selected=\"selected\"";} ?>>No Garage</option>
        <option value="12000" <?php if ($_POST['1a'] == 12000) {echo "selected=\"selected\"";} ?>>Single</option>
    <option value="18000" <?php if ($_POST['1a'] == 18000) {echo "selected=\"selected\"";} ?>>Double</option>
</select><br />
        </li>
<li>
<label for="2">External Wall Finishes</label>
<select id="2" name="2" class="select">
    <option value="0.00"<?php if ($_POST['2'] == 0.00) {echo "selected=\"selected\"";} ?>>Smooth Render</option>
<option value="0.04"<?php if ($_POST['2'] == 0.04) {echo "selected=\"selected\"";} ?>>Feature Stonework</option>
<option value="0.14"<?php if ($_POST['2'] == 0.14) {echo "selected=\"selected\"";} ?>>Full Stone Cladding</option>
        </select>
        </li>
<li>
<label for="3">Roof Finish</label>
<select id="3" name="3" class="select">
    <option value="0.00"<?php if ($_POST['3'] == 0.00) {echo "selected=\"selected\"";} ?>>Tiles</option>
<option value="0.012"<?php if ($_POST['3'] == 0.012) {echo "selected=\"selected\"";} ?>>Slates</option>
<option value="0.032"<?php if ($_POST['3'] == 0.032) {echo "selected=\"selected\"";} ?>>Natural Slate</option>
        </select>
        </li>
<li>
<label for="4">Window Finish</label>
<select id="4" name="4" class="select">
    <option value="-0.027"<?php if ($_POST['4'] == -0.027) {echo "selected=\"selected\"";} ?>>Std u.PVC</option>
<option value="0.0"<?php if ($_POST['4'] == 0.0 || !isset($_POST['4'])) {echo "selected=\"selected\"";} ?>>A Rated double glaze</option>
<option value="0.02"<?php if ($_POST['4'] == 0.02) {echo "selected=\"selected\"";} ?>>Extra A Rated treble glaze</option>
        </select>
        </li>
<li>
<label for="5">Site Services</label>
<select id="5" name="5" class="select">
    <option value="0"<?php if ($_POST['5'] == 0) {echo "selected=\"selected\"";} ?>>Mains Services</option>
<option value="0.022"<?php if ($_POST['5'] == 0.022) {echo "selected=\"selected\"";} ?>>Mains w/ Treatment Plant</option>
<option value="0.033"<?php if ($_POST['5'] == 0.033) {echo "selected=\"selected\"";} ?>>Extensive Services</option>
        </select>
        </li>
<li>
<label for="6">Hard Landscape</label>
<select id="6" name="6" class="select">
    <option value="0"<?php if ($_POST['6'] == 0) {echo "selected=\"selected\"";} ?>>Kerbs &amp; Gravel</option>
<option value="0.022"<?php if ($_POST['6'] == 0.022) {echo "selected=\"selected\"";} ?>>Kerbs &amp; Tarmac</option>
<option value="0.033"<?php if ($_POST['6'] == 0.033) {echo "selected=\"selected\"";} ?>>Kerbs &amp; Paving</option>
        </select>
        </li>
<li>
<label for="7">Landscaping</label>
<select id="7" name="7" class="select">
    <option value="0"<?php if ($_POST['7'] == 0) {echo "selected=\"selected\"";} ?>>Level Soil</option>
<option value="0.011"<?php if ($_POST['7'] == 0.011) {echo "selected=\"selected\"";} ?>>General Grassing</option>
<option value="0.022"<?php if ($_POST['7'] == 0.022) {echo "selected=\"selected\"";} ?>>Soft Landscaping</option>
        </select>
        </li>
        </ol>
        </fieldset>

<fieldset>
<legend>Internal</legend>
<ol>
    <li>
        <label for="20">Walls, Floor &amp; Roof Energy Rating</label>
        <select id="20" name="20" class="select">
            <option value="-0.06"<?php if ($_POST['20'] == -0.06) {echo "selected=\"selected\"";} ?>>C1</option>
        <option value="-0.03"<?php if ($_POST['20'] == -0.03) {echo "selected=\"selected\"";} ?>>B2</option>
    <option value="0.0"<?php if ($_POST['20'] == 0.0 || !isset($_POST['20'])) {echo "selected=\"selected\"";} ?>>A3</option>
</select><br />
        </li>
<li>
<label for="8">Heating Type</label>
<select id="8" name="8" class="select">
    <option value="0"<?php if ($_POST['8'] == 0) {echo "selected=\"selected\"";} ?>>Radiators</option>
<option value="0.0155"<?php if ($_POST['8'] == 0.0155) {echo "selected=\"selected\"";} ?>>Underfloor</option>
        </select>
        </li>
<li>
<label for="9">Heating Source</label>
<select id="9" name="9" class="select">
    <option value="-0.055"<?php if ($_POST['9'] == -0.055) {echo "selected=\"selected\"";} ?>>Oil</option>
<option value="-0.02"<?php if ($_POST['9'] == -0.02) {echo "selected=\"selected\"";} ?>>Wood Pellet</option>
<option value="0.0"<?php if ($_POST['9'] == 0.0 || !isset($_POST['9'])) {echo "selected=\"selected\"";} ?>>Geothermal</option>
        </select>
        </li>
<li>
<label for="17">Solar Panels</label>
<select id="17" name="17" class="select">
    <option value="-0.022"<?php if ($_POST['17'] == -0.022) {echo "selected=\"selected\"";} ?>>No</option>
<option value="0.0"<?php if ($_POST['17'] == 0.0 || !isset($_POST['17'])) {echo "selected=\"selected\"";} ?>>Yes</option>
        </select>
        </li>
<li>
<label for="10">Electrical</label>
<select id="10" name="10" class="select">
    <option value="0"<?php if ($_POST['10'] == 0) {echo "selected=\"selected\"";} ?>>Quality Spec</option>
<option value="0.011"<?php if ($_POST['10'] == 0.011) {echo "selected=\"selected\"";} ?>>High Spec</option>
<option value="0.022"<?php if ($_POST['10'] == 0.022) {echo "selected=\"selected\"";} ?>>Exclusive</option>
        </select>
        </li>
<li>
<label for="18">Smarthome Technology</label>
<select id="18" name="18" class="select">
    <option value="0"<?php if ($_POST['18'] == 0) {echo "selected=\"selected\"";} ?>>No</option>
<option value="0.033"<?php if ($_POST['18'] == 0.033) {echo "selected=\"selected\"";} ?>>Yes - Gold Plan</option>
        </select><br />
        </li>
<li>
<label for='21'>BEAM Central Vacuum System</label>
<select id='21' name='21' class='select'>
    <option value='0'<?php if ($_POST['21'] == 0) {echo "selected=\"selected\"";} ?>>No</option>
<option value=<?php echo $beam; ?> <?php if ($_POST['21'] == $beam) {echo "selected=\"selected\"";} ?>>Yes</option>
        </select><br />
        </li>
<li>
<label for='22'>BEAM HRV Ventilation System</label>
<select id='22' name='22' class='select'>
    <option value='-0.04'<?php if ($_POST['22'] == -0.04) {echo "selected=\"selected\"";} ?>>No</option>
<option value='0.0' <?php if ($_POST['22'] == 0.0 || !isset($_POST['22'])) {echo "selected=\"selected\"";} ?>>Yes</option>
        </select><br />
        </li>
<li>
<label for="11">Internal Joinery</label>
<select id="11" name="11" class="select">
    <option value="0"<?php if ($_POST['11'] == 0) {echo "selected=\"selected\"";} ?>>Panel Door / Deal Trims</option>
<option value="0.0195"<?php if ($_POST['11'] == 0.0195) {echo "selected=\"selected\"";} ?>>Mid Range Hardwood</option>
<option value="0.0235"<?php if ($_POST['11'] == 0.0235) {echo "selected=\"selected\"";} ?>>High Spec Hardwood</option>
        </select>
        </li>
<li>
<label for="12">Kitchen / Utility Units</label>
<select id="12" name="12" class="select">
    <option value="0"<?php if ($_POST['12'] == 0) {echo "selected=\"selected\"";} ?>>None</option>
<option value="0.05"<?php if ($_POST['12'] == 0.05) {echo "selected=\"selected\"";} ?>>Mid Range</option>
<option value="0.0775"<?php if ($_POST['12'] == 0.0775) {echo "selected=\"selected\"";} ?>>High Range</option>
        </select>
        </li>
<li>
<label for="13">Sanitary Ware</label>
<select id="13" name="13" class="select">
    <option value="0"<?php if ($_POST['13'] == 0) {echo "selected=\"selected\"";} ?>>None</option>
<option value="0.021"<?php if ($_POST['13'] == 0.021) {echo "selected=\"selected\"";} ?>>Standard Spec</option>
<option value="0.033"<?php if ($_POST['13'] == 0.033) {echo "selected=\"selected\"";} ?>>High Spec</option>
        </select>
        </li>
<li>
<label for="19">Decoration</label>
<select id="19" name="19" class="select">
    <option value="0"<?php if ($_POST['19'] == 0) {echo "selected=\"selected\"";} ?>>None</option>
<option value="0.0245"<?php if ($_POST['19'] == 0.0245) {echo "selected=\"selected\"";} ?>>Internal</option>
<option value="0.037"<?php if ($_POST['19'] == 0.037) {echo "selected=\"selected\"";} ?>>Internal/External</option>
        </select>
        </li>
<li>
<label for="14">Timber Floors</label>
<select id="14" name="14" class="select">
    <option value="0"<?php if ($_POST['14'] == 0) {echo "selected=\"selected\"";} ?>>None</option>
<option value="0.0195"<?php if ($_POST['14'] == 0.0195) {echo "selected=\"selected\"";} ?>>Living Areas</option>
<option value="0.0275"<?php if ($_POST['14'] == 0.0275) {echo "selected=\"selected\"";} ?>>Living Areas + Hallways</option>
<option value="0.049"<?php if ($_POST['14'] == 0.049) {echo "selected=\"selected\"";} ?>>Living Areas, Hallways + Others</option>
        </select>
        </li>
<li>
<label for="15">Wet Area Ceramics</label>
<select id="15" name="15" class="select">
    <option value="0"<?php if ($_POST['15'] == 0) {echo "selected=\"selected\"";} ?>>None</option>
<option value="0.0055"<?php if ($_POST['15'] == 0.0055) {echo "selected=\"selected\"";} ?>>Kitchens Only</option>
<option value="0.011"<?php if ($_POST['15'] == 0.011) {echo "selected=\"selected\"";} ?>>All Wet Areas</option>
        </select>
        </li>
<li>
<label for="16">Wall Tiling</label>
<select id="16" name="16" class="select">
    <option value="0"<?php if ($_POST['16'] == 0) {echo "selected=\"selected\"";} ?>>None</option>
<option value="0.0137"<?php if ($_POST['16'] == 0.0137) {echo "selected=\"selected\"";} ?>>Wet Areas: 50%</option>
<option value="0.029"<?php if ($_POST['16'] == 0.029) {echo "selected=\"selected\"";} ?>>Wet Areas: 100%</option>
        </select>
        </li>
        </ol>
        </fieldset>
<fieldset class="submit">
<input type="submit" class="submit" value="Calculate Cost" />
</fieldset>

        </form>
        </div>