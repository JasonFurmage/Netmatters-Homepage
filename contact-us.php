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
                <div class="contact_form">
                    <form action="#" method="POST" accept-charset="UTF-8">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("inc/newsletter.php"); ?>
<?php include("inc/footer.php"); ?>
