<?php

switch ($page)
{
    case "renovate":
    case "passive":
    case "event":
        $url = "index.php";
        break;

    case "index":
    default:
        $url = "";
}
?>
<body>

        <!-- TAGLINE HEADER START-->
        <div class="topbar">
            <div class="container">
                <div class="float-left">
                    <div class="phone-topbar">
                        <span>
                            <i class="mdi mdi-cellphone"></i> <a class="no-color" href="tel:1-352-351-8061">1-352-351-8061</a>
                        </span>
                    </div>
                </div>
                <div class="float-right">
                    <ul class="list-inline social pb-0 pt-2">
                        <li class="list-inline-item pl-2"><a href="https://www.facebook.com/Robyn-Thompson-Queen-Of-Rehab-315012378524022" class="text-white"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item pl-2"><a href="https://twitter.com/QueenOfRehab" class="text-white"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item pl-2"><a href="https://www.linkedin.com/in/robyn-thompson-39030038" class="text-white"><i class="mdi mdi-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Static navbar -->



        <!-- Navigation Bar-->
        <header id="topnav" class="defaultscroll sticky fixed-top">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="index.php" class="logo">Robyn Thompson</a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras">

                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="<?=$url?>#freedownload">Free Downloads</a>
                        </li>

                        <li class="has-submenu">
                            <a href="<?=$url?>#courses">Courses</a>
                            <span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li>
                                    <a href="renovate.php">Renovating For Massive Profits</a>
                                </li>
                                <li>
                                    <a href="passive.php">Massive Passive Wealth Builder</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#events">Events</a>
                            <span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li>
                                    <a href="events.php">Live Events</a>
                                </li>
                                <li>
                                    <a class='no-scroll' href="#link" data-href="https://millionairemastermindconvention.com" target="_blank">Mastermind Event</a >
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#funding">Funding</a>
                            <span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li>
                                    <a href="funding.php">Get Your Rehab Funded</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu ">
                            <a href="<?=$url?>#introduction">About</a>
                        </li>

                        <li class="has-submenu">
                            <a href="<?=$url?>#contact">Contact</a>
                        </li>


                        <li class="has-submenu mobile-block">
                            <a class='no-scroll' href="#link" data-href="https://robynswealthsavvyclub.com" target="_blank">Log in</a>
                        </li>


                    </ul>
                    <ul class="navigation-menu menu-right">
                        <li class="mobile-none">
                            <a class='no-scroll' href="#link" data-href="https://robynswealthsavvyclub.com" target="_blank">Log in</a>
                        </li>
                    </ul>
                    <!-- End navigation menu-->
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->