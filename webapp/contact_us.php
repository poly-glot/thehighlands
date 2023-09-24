<?php
    require_once __DIR__ . '/inc/functions.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require_once __DIR__ . '/inc/head.php'; ?>

<body class="contact_us">
    <?php require_once __DIR__ . '/inc/header.php'; ?>

    <!-- start of main body object -->
    <div class="wrapper2">
        <div class="short-body">

            <!-- two columns body -->
            <div class="leftcolumn">
                <img src="/images/heading_contact_us.png" class="pngheading" alt="Contact Us"/>

                <form method="post" action="form_emailer.php">
                    <input type="hidden" name="form_type" value="contact"/>
                    <ul class="form">

                        <li>
                            <div class="label"><label for="contact_name">Name</label></div>
                            <div class="field"><input type="text" name="contact_name" id="contact_name" value="" class="textbox"/></div>
                        </li>

                        <li>
                            <div class="label"><label for="contact_surname">Surname</label></div>
                            <div class="field"><input type="text" name="contact_surname" id="contact_surname" value="" class="textbox"/></div>
                        </li>

                        <li>
                            <div class="label"><label for="contact_email">Email</label></div>
                            <div class="field"><input type="text" name="contact_email" id="contact_email" value="" class="textbox"/></div>
                        </li>

                        <li>
                            <div class="label"><label for="contact_fax">Fax</label></div>
                            <div class="field"><input type="text" name="contact_fax" id="contact_fax" value="" class="textbox"/></div>
                        </li>

                        <li>
                            <div class="label"><label for="contact_cell">Cell</label></div>
                            <div class="field"><input type="text" name="contact_cell" id="contact_cell" value="" class="textbox"/></div>
                        </li>

                        <li>
                            <div class="label"><label for="contact_city">City</label></div>
                            <div class="field"><input type="text" name="contact_city" id="contact_city" value="" class="textbox"/></div>
                        </li>

                        <li>
                            <div class="label"><label for="contact_country">Country</label></div>
                            <div class="field"><input type="text" name="contact_country" id="contact_country" value="" class="textbox"/></div>
                        </li>

                        <li>
                            <div class="label"><label for="contact_verification">Verification code</label></div>
                            <div class="field">
                                <img src="/capatcha.php" title="Security Code" class="imginput securityimg"/>
                                <input type="text" name="contact_verification" id="contact_verification" value="" class="textbox"/>
                                <div><label style="font-weight:normal;font-size:11px"><input type="checkbox" name="contact_newsletter" id="contact_newsletter" value="Yes" class="checkbox"/> Subscribe to Newsletter</label></div>
                            </div>
                        </li>

                        <li>
                            <div class="label"></div>
                            <div class="field" style="padding-right:80px"><input type="submit" name="submit" value="submit" class="submitbox"/></div>
                        </li>
                    </ul>

                    <div class="t_msgbox">
                        <label for="contact_message">Message:</label>
                        <textarea name="contact_message" id="contact_message" style="width:180px;height:140px"></textarea>
                    </div>
                </form>
            </div>
            <div class="rightcolumn">
                <img src="/images/heading_contact_details.png" class="pngheading" alt="Contact Details"/>

                <ul class="form">

                    <li>
                        <div class="label"><label>Address:</label></div>
                        <div class="field">Meggar Property Brokers<br/>137 Voortrekker Road, Maitland</div>
                        <div class="clear"></div>
                    </li>

                    <li>
                        <div class="label"><label>Email:</label></div>
                        <div class="field"><a href="mailto:info@meggar.co.za">info@meggar.co.za</a></div>
                    </li>

                    <li>
                        <div class="label"><label>Tel:</label></div>
                        <div class="field">021-510-3690</div>
                    </li>

                    <li style="border:none">
                        <div class="label"><label>Fax:</label></div>
                        <div class="field">021-510-4513</div>
                    </li>
                </ul>
            </div>
            <!-- end of two columns body -->
        </div>
    </div>
    <!-- end of main body object -->

    <?php require_once __DIR__ . '/inc/footer-gallery.php'; ?>

    <?php require_once __DIR__ . '/inc/footer.php'; ?>
</body>
</html>
