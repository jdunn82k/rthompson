<!DOCTYPE html>
<html lang="en">

<?php

include "includes/classes/Database.php";

$events = rt\Database::getUpcomingEvents();

//Include Page Header and Navigation

$page = "event";
include "includes/pages/header.php";
include "includes/pages/navigation.php";

?>

<section class="pt-5 no-carousel events-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-5">
                    <h3 class="section-title rt-text-purple">Upcoming Events</h3>
                </div>
                <?php

                $current_month_year = "";
                if (count($events) == 0 || !$events)
                {
                    echo "<h3 class='rt-text-purple rt-text-bold text-center'>No scheduled events</h3>";

                }
                else
                {
                    foreach($events as $event){
                        $start_date = new DateTime($event->start_date);
                        $event_date = new DateTime($event->end_date);
                        $end_month_year = $event_date->format("Y-m");
                        if ($current_month_year != $end_month_year)
                        {
                            $current_month_year = $end_month_year;
                            echo "<h3 class='rt-text-purple rt-text-bold text-center'>".$event_date->format("F Y")."</h3>";
                            echo "<hr class='rt-head-line'>";
                        }

                        echo "<h4 class='rt-text-purple rt-text-bold'>".$event->event_name."</h4>";
                        echo "<p class='rt-text-purple rt-text-bold'>".$start_date->format("F d, Y")." - ".$event_date->format("F d, Y")."</p>";
                        echo "<p>".substr($event->description, 0, 300)."...</p>";
                        echo "<p><a href='event.php?event=".$event->id."'>More Details</a>";

                    }
                }
                 ?>
            </div>
        </div>
    </div>
</section>

        <!-- START CONTACT/FOOTER -->
        <section class="pt-5 bg-dark" id="contact">
            <div class="container">
                <div class="row">
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
        </section>
        <!-- END CONTACT/FOOTER -->

<?php
    include "includes/pages/scripts.php";
?>

