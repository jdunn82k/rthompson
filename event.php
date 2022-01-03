<?php

if (!isset($_GET['event']))
{
    header("Location: events.php");
    exit;
}


include "includes/classes/Database.php";

$event = rt\Database::getEventById($_GET['event']);

$page = "event";
include "includes/pages/header.php";
include "includes/pages/navigation.php";



?>
<!DOCTYPE html>
<html lang="en">

<section class="pt-5 no-carousel events-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="mb-5">
                    <?php
                        if (count($event) == 0 || !$event)
                        {
                            echo "<h3 class='rt-text-purple rt-text-bold text-center'>Event ID Not Found</h3>";
                        }
                        else
                        {
                            $start_date = new DateTime($event->start_date);
                            $event_date = new DateTime($event->end_date);
                            $venue = rt\Database::getVenueById($event->venue);
                            $address_string = $venue->address.'+'.$venue->city.'+'.$venue->state.'+'.$venue->zip;


                            echo "<h3 class='rt-text-purple rt-text-bold'>".$event->event_name."</h3>";
                            echo "<hr class='rt-head-line'>";
                            echo "<p class='rt-text-purple rt-text-bold'>".$start_date->format("F d, Y")." - ".$event_date->format("F d, Y")."</p>";
                            echo "<p>".$event->description."</p>";

                            switch ($event->category)
                            {
                                case 1:
                                    echo "<p><a href='renovate.php'>Get Tickets</a>";
                                    break;
                                case 2:
                                    echo "<p><a href='massive.php'>Get Tickets</a>";
                            }
                            echo "<h3 class='rt-text-purple rt-text-bold'>Event Details</h3>";
                            echo "<hr class='rt-head-line'>";
                            echo "<p class='mb-0'><span class='rt-text-purple rt-text-bold'>Start Date: </span> ".$start_date->format("F d, Y")."</p>";
                            echo "<p class='mb-0'><span class='rt-text-purple rt-text-bold'>End Date: </span> ".$event_date->format("F d, Y")."</p>";
                            echo "<p><span class='rt-text-purple rt-text-bold'>Organizer: </span> ".$event->organizer."</p>";
                            echo "<form id='export-ical' action='ical.php' method='POST'>";
                            echo '<input type="hidden" name="date_start" value="'.$start_date->format("Y-m-d").'">';
                            echo '<input type="hidden" name="date_end" value="'.$event_date->format("Y-m-d").'">';
                            echo '<input type="hidden" name="location" value="'.$address_string.'">';
                            echo '<input type="hidden" name="description" value="'.$event->description.'">';
                            echo '<input type="hidden" name="summary" value="'.$event->event_name.'">';
                            echo '<input type="hidden" name="url" value="https://www.robynthompson.com/event.php?event='.$event->id.'">';
                            echo "<div class='d-inline-flex'>";
                            echo "<button class='btn btn-google-cal btn-rt-primary'>Add to Google Calendar</button>";
                            echo "<button class='btn btn-google-cal btn-rt-primary ml-4' type='submit'>Export iCal</button>";
                            echo "</div>";
                            echo "</form>";

                            echo "<h3 class='rt-text-purple rt-text-bold mt-5'>Venue Details</h3>";
                            echo "<hr class='rt-head-line'>";
                            echo "<div class='row'>";
                            echo "<div class='col-md-6'>";
                            echo "<p><span class='rt-text-purple rt-text-bold'>Location:</span></p>";
                            echo "<p class='mb-0'>".$venue->name."</p>";
                            echo "<p class='mb-0'>".$venue->address."</p>";
                            echo "<p class='mb-0'>".$venue->city.", ".$venue->state." ".$venue->zip."</p>";

                            if ($event->website)
                            {
                                echo "<p class='mb-0'><a href='".$event->website."'>Website</a>";
                            }

                            $phone = preg_replace( '/[^0-9]/', '', $venue->phone );
                            if (strlen($phone) == 10)
                            {
                                $phone = "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone, 6, 4);
                            }
                            echo "<p class='rt-text-purple rt-text-bold mb-0 mt-2'>Phone:</p>";
                            echo "<p class='mt-0'>".$phone."</p>";


                            echo "<p class='mb-0'><a href='https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=".urlencode($address_string)."' target='_blank'>View On Google Maps</a>";
                            echo "</div>";
                            echo "<div class='col-md-6'>";
                            echo "<div id='map'></div>";
                            echo "</div>";
                            echo "</div>";


                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "includes/pages/scripts.php";
?>
<script>
    var iCal = {
        init: function(){

        }
    };
    $(document).ready(iCal.init);
</script>
<script>
    var geocoder;
    var map;
    var address ="<?=$address_string?>";
    function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var myOptions = {
            zoom: 17,
            center: latlng,
            mapTypeControl: true,
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
            navigationControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"), myOptions);
        if (geocoder) {
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                        map.setCenter(results[0].geometry.location);

                        var infowindow = new google.maps.InfoWindow(
                            { content: '<b>'+address+'</b>',
                                size: new google.maps.Size(150,50)
                            });

                        var marker = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map,
                            title:address
                        });
                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.open(map,marker);
                        });

                    } else {
                        alert("No results found");
                    }
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
        }
    }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnPQ9EYzW4VOMj9iOUqPSbZ87_w0sC5s0&callback=initialize"
        async defer></script>