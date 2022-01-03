<!DOCTYPE html>
<html lang="en">

<?php

//Include Page Header and Navigation

$page = "passive";
include "includes/pages/header.php";
include "includes/pages/navigation.php";

////////////////////////////////////////
////     Sections                    ///
////////////////////////////////////////

// Sections to include
$sections = [];
$sections_location = "includes/sections/";

foreach($sections as $section)
{
    if (file_exists($sections_location.$section.".php"))
    {
        include $sections_location.$section.".php";
    }
}

?>

<section class="pt-5 no-carousel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="rt-text-purple">The Massive Passive Wealth Builder Course</h3>
                <hr class="rt-head-line">
                <p class="rt-text-purple rt-text-bold">Includes Workbook & 6 CDs</p>
                <p>This amazing course is the key to building and maintaining a highly profitable portfolio of investment properties. This is a complete A-Z course finding, buying, and maintaining buy and hold properties. With the know how in this course your golden years can truly be golden!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="rt-text-purple rt-text-bold">Topics:</p>
                <ul class="rt-list-style">
                    <li><span class='mdi mdi-check rt-check'></span>The Cash Equation vs. The Equity Equation</li>
                    <li><span class='mdi mdi-check rt-check'></span>Property Evaluation</li>
                    <li><span class='mdi mdi-check rt-check'></span>Making Multiple Offers</li>
                    <li><span class='mdi mdi-check rt-check'></span>Marketing to Attract the Best Keeper Properties</li>
                    <li><span class='mdi mdi-check rt-check'></span>The Art of Selecting Good Tenants</li>
                    <li><span class='mdi mdi-check rt-check'></span>The Iron Clad Residential Lease Agreement</li>
                    <li><span class='mdi mdi-check rt-check'></span>The 6 Lease Addendums to Cover Your Butt</li>
                    <li><span class='mdi mdi-check rt-check'></span>The 7 Strategies to Reduce Vacancy</li>
                </ul>
                <p class="rt-text-bold rt-text-purple mb-0">Includes The Following Bonus Products:</p>
                <ul class="rt-list-style">
                    <li>
                        <span class='mdi mdi-check rt-check'></span>Every Landlord's Legal Guide Book
                    </li>
                    <li>
                        <span class='mdi mdi-check rt-check'></span><span class="rt-text-purple rt-text-bold">4 Bonus CDs</span>
                        <ul class="rt-list-style text-muted">
                            <li>Negotiating Like A Pro (2 CDs)</li>
                            <li>Property Management 101</li>
                            <li>Baby Steps To Financial Freedom</li>
                        </ul>
                    </li>
                </ul>
                </ul>
            </div>
            <div class="col-md-6">
                <img class="rt-renovate-img" src="images/MassivePassiveStrike-300x248.png" alt="">
            </div>
        </div>
    </div>
</section>


<section class="pt-5 no-carousel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="rt-text-purple">Every Landlord's Legal Guide</h3>
                <hr class="rt-head-line">
                <p class="rt-text-purple rt-text-bold">451 page book with downloadable forms</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Every landlord and property manager needs to know the laws in their state in order to run a successful business, stay out of legal trouble with tenants, and minimize lawyer fees. This book provides comprehensive state-specific information and dozens of legal forms that the millions of U.S. landords and property managers need―all for the price of less than 30 minutes of a typical lawyer’s time.</p>
            </div>
            <div class="col-md-6">
                <img class="rt-passive-img" src="images/Landlord-Guide-Book-231x300.jpg" alt="">
            </div>
        </div>
    </div>
</section>


<section class="pt-5 no-carousel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="rt-text-purple">The Massive Passive Bootcamp</h3>
                <hr class="rt-head-line">
                <p class="rt-text-purple rt-text-bold">3 Day Intensive Boot Camp Covering Everything You Need to Know to Build Your Buy & Hold Portfolio</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <p class="rt-text-purple rt-text-bold">Topics:</p>
                <ul class="rt-list-style">
                    <li><span class='mdi mdi-check rt-check'></span>How to Locate the Best Properties to Maximize Equity Accumulation</li>
                    <li><span class='mdi mdi-check rt-check'></span>How to Build Massive Wealth with Active Income and Passive Income</li>
                    <li><span class='mdi mdi-check rt-check'></span>How to Pick the Best Properties to Maximize Cash Flow</li>
                    <li><span class='mdi mdi-check rt-check'></span>How to Overcome the Fear of High Rent Properties</li>
                    <li><span class='mdi mdi-check rt-check'></span>How to Estimate Repairs Differently Based on Keeping Properties and Not Flipping Them</li>
                    <li><span class='mdi mdi-check rt-check'></span>The 6 Multiple Offer Strategies</li>
                    <li><span class='mdi mdi-check rt-check'></span>The Mechanics of Seller Financing, Notes, Mortgages, Disclosures, and Escalation Clauses</li>
                    <li><span class='mdi mdi-check rt-check'></span>How to Pre-Screeen & Locate High Quality Tenants the Pay</li>
                    <li><span class='mdi mdi-check rt-check'></span>How to Self Manage Your Properties by Using a Part Time Employee</li>
                    <li><span class='mdi mdi-check rt-check'></span>How to Write an Iron Clad Lease Agreement</li>
                    <li><span class='mdi mdi-check rt-check'></span>Training Tenants Firmly so They Respect Your Business and Take Good Care of Your Property</li>
                    <li><span class='mdi mdi-check rt-check'></span>How to Use the Templates and Spreadsheets Provided to You at the Boot Camp to Track Your Investments</li>
                    <li class="rt-text-purple rt-text-bold"><span class='mdi mdi-check rt-check'></span>Purchasers have the right to repeat the bootcamp at ANY time, just let us know you're coming!</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="rt-text-purple">Get The Massive Passive Wealth Builder Course Today</h3>
                <hr class="rt-head-line">
            </div>
        </div>
    </div>
</section>
<section class="mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="price-box p-5 bg-light text-center mt-4 rt-90-height">
                    <div class="plan-price">
                        <h2><sup>$</sup>497</h2>
                    </div>
                    <div class="plan-name mt-4">
                        <h6 class="rt-text-purple rt-text-bold">Includes: </h6>
                    </div>
                    <div class="plan-desc mt-4">
                        <ul class="rt-list-style text-left">
                            <li>The Massive Passive Wealth Builder Course</li>
                            <li>Every Landlord's Legal Guide</li>
                            <li>4 Bonus CDs</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <a href="https://uma86337.infusionsoft.com/app/orderForms/Massive-Passive-Builder" target="_blank" class="btn btn-rt-primary">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="price-box p-5 bg-light text-center mt-4">
                    <div class="plan-price">
                        <h2><sup>$</sup>1,497</h2>
                    </div>
                    <div class="plan-name mt-4">
                        <h6 class="rt-text-purple rt-text-bold">Includes:</h6>
                    </div>
                    <div class="plan-desc mt-4">
                        <ul class="rt-list-style text-left">
                            <li>The Massive Passive Wealth Builder Course</li>
                            <li>Every Landlord's Legal Guide</li>
                            <li>4 Bonus CDs</li>
                            <li class="rt-text-purple rt-text-bold">1 Ticket to The Massive Passive Boot Camp</li>
                        </ul>
                    </div>
                    <div class="mt-0">
                        <a href="https://uma86337.infusionsoft.com/app/orderForms/Massive-Passive-Wealth-Builder-and-Bootcamp" target="_blank" class="btn btn-rt-primary">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- START CONTACT/FOOTER -->
        <section class="pt-5 bg-dark" id="contact">
            <div class="container">

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
        </section>
        <!-- END CONTACT/FOOTER -->

<?php
    include "includes/pages/scripts.php";
?>

