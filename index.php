<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
//Include Page Header and Navigation
$page = "index";

include "includes/pages/header.php";
include "includes/pages/navigation.php";

////////////////////////////////////////
////     Sections                    ///
////////////////////////////////////////

// Sections to include
$sections = ["carousel", "downloads", "intro", "courses"];
$sections_location = "includes/sections/";

foreach($sections as $section)
{
    if (file_exists($sections_location.$section.".php"))
    {
        include $sections_location.$section.".php";
    }
}


if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token = $_SESSION['token'];


?>


        <!-- START CONTACT/FOOTER -->
        <section class="pt-5 bg-dark" id="contact">
            <div class="container">
                <div class="row justify-content-center pt-5">
                    <div class="col-md-8">
                        <div class="text-center">
                            <div class="title-icon">
                                <i class="mdi mdi-lock-open-outline"></i>
                            </div>
                            <h3 class="section-title text-white pt-5">Contact us</h3>
                            <p class="section-subtitle pt-3 text-whte">Have a comment or suggestion? Email or call us, or use the form below. We would love to hear from you!</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div class="single-contact text-center text-white"> 
                                    <i class="mdi mdi-cellphone"></i>
                                    <h4>Phone</h4>
                                    <p>1-352-351-8061</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="single-contact text-center text-white"> 
                                    <i class="mdi mdi-email-outline"></i>
                                    <h4>Email</h4>
                                    <p><a href="mailto:queenofrehab@gmail.com">queenofrehab@gmail.com</a></p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="single-contact text-center text-white">
                                    <i class="mdi mdi-map-marker"></i>
                                    <h4>Address</h4>
                                    <p>9250 NW 145th Avenue Rd</p>
                                    <p>Morriston, FL 32668</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-8 bg-white p-5 mt-4 rounded">
                        <form accept-charset="UTF-8" action="https://uma86337.infusionsoft.com/app/form/process/9bdd3b572acd7aea96f3015c07766d2e" class="infusion-form" id="inf_form_9bdd3b572acd7aea96f3015c07766d2e" method="POST">
                            <input name="inf_form_xid" type="hidden" value="9bdd3b572acd7aea96f3015c07766d2e" />
                            <input name="inf_form_name" type="hidden" value="Web Form submitted" />
                            <input name="infusionsoft_version" type="hidden" value="1.69.0.7" />
                            <div class="row">
                                <div class="col-lg-6 mt-3">
                                    <input class="infusion-field-input-container form-control" id="inf_field_FirstName2" name="inf_field_FirstName" placeholder="First Name *" type="text" required/>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <input class="infusion-field-input-container form-control" id="inf_field_LastName2" name="inf_field_LastName" placeholder="Last Name *" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-3">
                                    <input class="infusion-field-input-container form-control" id="inf_field_Email2" name="inf_field_Email" placeholder="Email *" type="text" required />
                                </div>
                            </div>
                            <div class="infusion-submit">
                                <button class="infusion-recaptcha" style="display:none;" id="recaptcha_9bdd3b572acd7aea96f3015c07766d2e" type="submit">Submit</button>
                            </div>


                            <div class="row">
                                <div class="col-lg-12 mt-3">
                                    <input type="text" class="form-control" name="inf_misc_Subject" id="inf_misc_Subject2" placeholder="Your Subject.. *" required/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mt-3">
                                    <textarea id="inf_misc_Message2" name="inf_misc_Message" rows="6" class="form-control" placeholder="Your message... *" required></textarea>
                                </div>
                            </div>
                        </form>
                        <input type="hidden" id="csrf_token" value="<?=$token?>">
                        <div class="mt-4 text-center">
                           <button class="btn btn-rt-primary" id="submit-contact">Send Message</button>
                        </div>


                    </div>
                </div>
                <div class="row mt-5 pt-5 pb-2">
                    <div class="col-md-12">
                        <div class="text-white footer-alt">
                            <div class="float-left">
                                <p class="copyright-desc pb-0"><?=date("Y")?> © Robyn Thompson. All Rights Reserved</p>
                            </div>
                            <div class="float-right">
                                <ul class="list-inline social pb-0">
                                    <li class="list-inline-item pl-2"><a href="https://www.facebook.com/Robyn-Thompson-Queen-Of-Rehab-315012378524022" class="text-white"><i class="mdi mdi-facebook"></i></a></li>
                                    <li class="list-inline-item pl-2"><a href="https://twitter.com/QueenOfRehab" class="text-white"><i class="mdi mdi-twitter"></i></a></li>
                                    <li class="list-inline-item pl-2"><a href="https://www.linkedin.com/in/robyn-thompson-39030038" class="text-white"><i class="mdi mdi-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src="https://uma86337.infusionsoft.com/app/timezone/timezoneInputJs?xid=9bdd3b572acd7aea96f3015c07766d2e"></script>
        </section>
        <!-- END CONTACT/FOOTER -->

<?php
    include "includes/pages/scripts.php";
?>

<script>
    var Contact = {

        init: function() {
            $("#submit-contact").on("click", Contact.submitForm);
        },

        submitForm: function(){
            var name = $("#inf_field_FirstName2").val()+" "+$("#inf_field_LastName2").val();
            var email = $("#inf_field_Email2").val();
            var subject = $("#inf_misc_Subject2").val();
            var message = $("#inf_misc_Message2").val();
            var token = $("#csrf_token").val();

            if (name.length === 0 || email.length === 0 || subject.length === 0 || message.length === 0){
                alert("All fields required");
                return false;
            }

            $.ajax({
                url: "ajax/contact-form-handler.php",
                type: "post",
                data: {name: name, email: email, subject: subject, message: message, token: token}
            }).done(function(data){

                $("#inf_form_9bdd3b572acd7aea96f3015c07766d2e").submit();

            });
        }
    };
    $(document).ready(Contact.init);
</script>

