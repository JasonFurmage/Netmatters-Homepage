<?php 

$pageTitle = "Contact Us | Netmatters";

include("inc/connection.php");
include("inc/header.php");
 
?>

<div class="contact">
    <div class="container">
        <div class="contact_wrapper">
            <div class="contact_section">
                <div class="contact_info">
                    <div class=contact_info-hours>
                            <p><strong>Email us on:</strong><br></p>
                            <p><strong><a href="mailto:sales@netmatters.com">sales@netmatters.com</a></strong></p>
                            <p><strong>Business hours:</strong></p>
                            <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                    </div>    
                    <div class=contact_info-accordion>
                        <h4 id="js-accordion"><a href="#"><p>Out of Hours IT Support <span class="fa fa-chevron-down rotate down"></span></p></a></h4>
                        <div class="accordion-panel" id="js-panel">
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
                <form action="#" method="POST" id="contact-form" class="contact_form" accept-charset="UTF-8">
                    <div class="contact_form-inputs-wrapper">
                        <div class="contact_form-input">
                            <div class="contact_form-group">
                                <label for="contact-name" class="required">Your Name</label>
                                <input class="contact-textfield" id="contact-name" name="name" type="text">
                            </div>
                        </div>
                        <div class="contact_form-input">
                            <div class="contact_form-group">
                                <label for="contact-email" class="required">Company Name</label>
                                <input class="contact-textfield" id="contact-company" name="company" type="text">
                            </div>
                        </div>
                        <div class="contact_form-input">
                                <div class="contact_form-group">
                                    <label for="contact-name" class="required">Your Email</label>
                                    <input class="contact-textfield" id="contact-email" name="email" type="text">
                                </div>
                            </div>
                            <div class="contact_form-input">
                                <div class="contact_form-group">
                                    <label for="contact-name" class="required">Your Telephone Number</label>
                                    <input class="contact-textfield" id="contact-telephone" name="telephone" type="text">
                                </div>
                        </div>
                    </div>
                    <div class="contact_form-group">
                        <label for="contact-email" class="required">Message</label>
                        <textarea class="contact-textarea" id="message" name="message" cols="50" rows="10">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                    </div>
                    <div class="contact_form-group">
                        <label class="contact_form-marketing">
                            <input type="checkbox" class="contact-checkbox">
                            <span class="contact_form-checkbox-wrapper">
                            </span>
                            <span class="contact_form-text-wrapper">
                                Please tick this box if you wish to receive marketing information from us.
                                Please see our <a href="#" target="_blank" rel="noopener noreferrer">Privacy Policy</a> for more information on how we keep your data safe.
                            </span>
                        </label>
                    </div>
                    <div class="contact_form-recaptcha-wrapper">
                        <span>This site is protected by reCAPTCHA and the Google <a href="#" target="_blank"><u>Privacy Policy</u></a> and <a href="#" target="_blank" rel="noopener noreferrer"><u>Terms of Service</u></a> apply.</span>
                    </div>
                    <div class=contact_form-button-wrapper>
                        <button name="submit" class="contact-subscribe-button">Send Enquiry</button>
                        <small><span>*</span> Fields Required</small>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


<?php include("inc/newsletter.php"); ?>
<?php include("inc/footer.php"); ?>
