<?php //include('../php/verificador.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Dashboard Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="../css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="../css/application.min.css">
    <!-- endinject -->
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <?php include('../components/header.php'); ?>

    <main class="mdl-layout__content ">

        <div class="mdl-grid ui-tables">
            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Vendedores</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">Book title</th>
                                <th class="mdl-data-table__cell--non-numeric">Author</th>
                                <th class="mdl-data-table__cell--non-numeric">Genre</th>
                                <th class="mdl-data-table__cell--non-numeric">Year</th>
                                <th class="mdl-data-table__cell--non-numeric">Originally published</th>
                                <th class="mdl-data-table__cell--non-numeric">Language</th>
                                <th class="mdl-data-table__cell--non-numeric">Original Language</th>
                                <th class="mdl-data-table__cell--non-numeric">Availability</th>
                                <th class="mdl-data-table__cell--non-numeric"> </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">5</td>
                                    <td class="mdl-data-table__cell--non-numeric">Life of Pi</td>
                                    <td class="mdl-data-table__cell--non-numeric">Yann Martel</td>
                                    <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--green">Fiction</span> </td>
                                    <td class="mdl-data-table__cell--non-numeric">2016</td>
                                    <td class="mdl-data-table__cell--non-numeric">2001</td>
                                    <td class="mdl-data-table__cell--non-numeric">English</td>
                                    <td class="mdl-data-table__cell--non-numeric">English</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <span class="label label--mini label__availability background-color--primary"></span>
                                        <span class="label label--mini label__availability background-color--primary"></span>
                                        <span class="label label--mini label__availability background-color--primary"></span>
                                        <span class="label label--mini label__availability background-color--primary"></span>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">Add to cart</button></td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">6</td>
                                    <td class="mdl-data-table__cell--non-numeric">The secret Garden</td>
                                    <td class="mdl-data-table__cell--non-numeric">Frances Hodgson Burnett</td>
                                    <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--orange">Childeren's literature</span> </td>
                                    <td class="mdl-data-table__cell--non-numeric">2017</td>
                                    <td class="mdl-data-table__cell--non-numeric">1911</td>
                                    <td class="mdl-data-table__cell--non-numeric">English</td>
                                    <td class="mdl-data-table__cell--non-numeric">English</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <span class="label label--mini label__availability background-color--secondary"></span>
                                        <span class="label label--mini label__availability "></span>
                                        <span class="label label--mini label__availability "></span>
                                        <span class="label label--mini label__availability "></span>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">Add to cart</button></td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">7</td>
                                    <td class="mdl-data-table__cell--non-numeric">Rebecca</td>
                                    <td class="mdl-data-table__cell--non-numeric">Daphne du Maurier</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <span class="label label--mini color--purple">Gothic fiction</span>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">2016</td>
                                    <td class="mdl-data-table__cell--non-numeric">1938</td>
                                    <td class="mdl-data-table__cell--non-numeric">English</td>
                                    <td class="mdl-data-table__cell--non-numeric">English</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <span class="label label--mini label__availability color--orange"></span>
                                        <span class="label label--mini label__availability color--orange"></span>
                                        <span class="label label--mini label__availability"></span>
                                        <span class="label label--mini label__availability"></span>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">Add to cart</button></td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">8</td>
                                    <td class="mdl-data-table__cell--non-numeric">Dracula</td>
                                    <td class="mdl-data-table__cell--non-numeric">Bram Stoker</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <span class="label label--mini color--purple">Gothic fiction</span>
                                        <span class="label label--mini color--dark-gray">Horror fiction</span>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">2015</td>
                                    <td class="mdl-data-table__cell--non-numeric">1897</td>
                                    <td class="mdl-data-table__cell--non-numeric">English</td>
                                    <td class="mdl-data-table__cell--non-numeric">English</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <span class="label label--mini label__availability"></span>
                                        <span class="label label--mini label__availability"></span>
                                        <span class="label label--mini label__availability"></span>
                                        <span class="label label--mini label__availability"></span>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">Add to cart</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<!-- inject:js -->
<script src="../js/d3.min.js"></script>
<script src="../js/getmdl-select.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/nv.d3.min.js"></script>
<script src="../js/layout/layout.min.js"></script>
<script src="../js/scroll/scroll.min.js"></script>
<script src="../js/widgets/charts/discreteBarChart.min.js"></script>
<script src="../js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="../js/widgets/charts/stackedBarChart.min.js"></script>
<script src="../js/widgets/employer-form/employer-form.min.js"></script>
<script src="../js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="../js/widgets/map/maps.min.js"></script>
<script src="../js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="../js/widgets/table/table.min.js"></script>
<script src="../js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

</body>
</html>