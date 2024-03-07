<?php 

$pageTitle = "Contact Us | Netmatters";

include("inc/offices.php");
include("inc/validation.php");
include("inc/header.php");
 
?>

<!-- Breadcrumb -->

<div class="breadcrumb sm-lg-only">
    <div class="container">
        <ul class="breadcrumb-wrapper">
            <li><a href="index.php">Home</a></li>
            <li>Our Offices</li>
        </ul>
    </div>
</div>

<!-- Offices -->

<div class="offices">
    <div class="offices_heading">
        <div class="offices_heading-wrapper">
            <div class="container">
                <h1>Our Offices</h1>
            </div>
        </div>
    </div>
    <div class="offices_items">
        <div class="container">
            <div class="offices_items-wrapper">
                <div class="offices_items-row">

                    <?php insertOffices($offices) ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="contact_wrapper">
            <div class="contact_section">
                <div class="contact_info">
                    <div class=contact_info-hours>
                            <p><strong>Email us on:</strong><br></p>
                            <p><strong><a href="#">sales@netmatters.com</a></strong></p>
                            <p><strong>Business hours:</strong></p>
                            <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                    </div>    
                    <div class=contact_info-accordion>
                        <h4 id="js-accordion"><a href="#"><p>Out of Hours IT Support <span class="fa fa-chevron-down rotate down"></span></p></a></h4>
                        <div class="panel" id="js-panel">
                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <p><strong>Monday - Friday 18:00 - 22:00 </strong><strong>Saturday 08:00 - 16:00 </strong><br><strong>Sunday 10:00 - 18:00</strong></p>
                            <p>
                                To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. 
                                A technician will contact you on the number provided within 45 minutes of your call.&nbsp;
                            </p>
                        </div>
                    </div>      
                </div>
            </div>
            <div class="contact_section">
                <div class="contact_form" id="form">
                    <form action="#form" method="POST" id="js-form" class="form" accept-charset="UTF-8">

                        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { insertFormMessages($errors); } ?>

                        <div class="form_inputs-wrapper">
                            <div class="form_input">
                                <div class="form_group">
                                    <label for="name" class="required">Your Name</label>
                                    <input class="form-textfield" name="name" type="text" value="<?= htmlspecialchars($name ?? "") ?>">
                                </div>
                            </div>
                            <div class="form_input">
                                <div class="form_group">
                                    <label for="company">Company Name</label>
                                    <input class="form-textfield" name="company" type="text" value="<?= htmlspecialchars($company ?? "") ?>">
                                </div>
                            </div>
                            <div class="form_input">
                                    <div class="form_group">
                                        <label for="email" class="required">Your Email</label>
                                        <input class="form-textfield" name="email" type="text" value="<?= htmlspecialchars($email ?? "") ?>">
                                    </div>
                                </div>
                                <div class="form_input">
                                    <div class="form_group">
                                        <label for="telephone" class="required">Your Telephone Number</label>
                                        <input class="form-textfield" name="telephone" type="text" value="<?= htmlspecialchars($telephone ?? "") ?>">
                                    </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <label for="message" class="required">Message</label>
                            <textarea class="form-textarea" name="message" cols="50" rows="10"><?= htmlspecialchars($message ?? "Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?") ?></textarea>
                        </div>
                        <div class="form_group">
                            <label class="form_marketing">
                                <input class="form-checkbox" name="marketing" type="checkbox" <?php if (htmlspecialchars($marketing ?? "off") == 'on') echo 'checked'; ?>>
                                <span class="form_checkbox-wrapper">
                                </span>
                                <span class="form_text-wrapper">
                                    Please tick this box if you wish to receive marketing information from us.
                                    Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we keep your data safe.
                                </span>
                            </label>
                        </div>
                        <div class="form_recaptcha">
                            <span>This site is protected by reCAPTCHA and the Google <a href="#" target="_blank"><u>Privacy Policy</u></a> and <a href="#" target="_blank"><u>Terms of Service</u></a> apply.</span>
                        </div>
                        <div class=form_button-wrapper>
                            <button name="submit" class="form-button">Send Enquiry</button>
                            <small><span>*</span> Fields Required</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("inc/newsletter.php"); ?>
<?php include("inc/footer.php"); ?>
