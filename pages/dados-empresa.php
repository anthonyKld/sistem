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

    <main class="mdl-layout__content ui-form-components">

<div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">


    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h5 class="mdl-card__title-text text-color--white">PROFILE INFO</h5>
            </div>
            <div class="mdl-card__supporting-text">
                <form class="form form--basic">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--3-col-tablet mdl-cell--1-col-phone">
                            <div class="profile-image color--smooth-gray profile-image--round">
                                <img src="images/Bobby.PNG">
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone form__article">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" value="Bob" id="profile-floating-first-name">
                                <label class="mdl-textfield__label" for="profile-floating-first-name">First Name</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" value="Kelso" id="profile-floating-last-name">
                                <label class="mdl-textfield__label" for="profile-floating-last-name">Last Name</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" value="BobbyK@darkboard.io" id="profile-floating-e-mail">
                                <label class="mdl-textfield__label" for="floating-e-mail">Email</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select full-size">
                                <input class="mdl-textfield__input" type="text" id="location" readonly tabIndex="-1"/>

                                <label class="mdl-textfield__label" for="location">Location</label>

                                <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="location">
                                    <li class="mdl-menu__item">Minsk</li>
                                    <li class="mdl-menu__item">Berlin</li>
                                    <li class="mdl-menu__item">Moscow</li>
                                    <li class="mdl-menu__item">NYC</li>
                                </ul>

                                <label for="location">
                                    <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
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