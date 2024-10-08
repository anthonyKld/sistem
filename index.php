
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
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
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <!-- endinject -->

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <?php include('components/header.php'); ?>

    <main class="mdl-layout__content">

        <div class="mdl-grid mdl-grid--no-spacing dashboard">

            <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

                <!-- Pie chart-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp pie-chart">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">My Day</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="pie-chart__container">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Weather widget-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp weather">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Now</h2>

                            <div class="mdl-layout-spacer"></div>
                            <div class="mdl-card__subtitle-text">
                                <i class="material-icons">room</i>
                                Minsk, Belarus
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text mdl-card--expand">
                            <p class="weather-temperature">-11<sup>&deg;</sup></p>

                            <p class="weather-description">
                                Cloudy and snow
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Trending widget-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp trending">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Trending</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <ul class="mdl-list">
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content list__item-text">UX</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">1 %</span>
                                </li>
                                <li class="mdl-list__item list__item--border-top">
                                    <span class="mdl-list__item-primary-content list__item-text">PHP</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-down" role="presentation">&#xE5C5</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">2 %</span>
                                </li>
                                <li class="mdl-list__item list__item--border-top">
                                    <span class="mdl-list__item-primary-content list__item-text ">Big Data</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">5 %</span>
                                </li>
                                <li class="mdl-list__item list__item--border-top">
                                    <span class="mdl-list__item-primary-content list__item-text">Material Design</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">18 %</span>
                                </li>
                                <li class="mdl-list__item list__item--border-top">
                                    <span class="mdl-list__item-primary-content">JavaScript</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">17 %</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Cotoneaster card-->
                <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp cotoneaster">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">Cotoneaster</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                Cotoneaster is a genus of flowering plants in the rose family, Roseaceae, netive to the
                                Palaearctic region, with a strong concentration of diversity in the genus in the
                                mountains
                                of southwestern China and the Himalayas.
                            </div>
                            <a href="https://en.wikipedia.org/wiki/Cotoneaster" target="_blank">Wikipedia</a>
                        </div>
                    </div>
                </div>
                <!-- Line chart-->
                <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp line-chart">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Startup Financing Cycle</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="line-chart__container">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table-->
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone ">
                    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp projects-table">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Project</th>
                            <th class="mdl-data-table__cell--non-numeric">Responsible</th>
                            <th class="mdl-data-table__cell--non-numeric">Client contact</th>
                            <th class="mdl-data-table__cell--non-numeric">Deadline</th>
                            <th class="mdl-data-table__cell--non-numeric">Progress</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">iEstampa</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini color--light-blue">Alex</span>
                                <span class="label label--mini background-color--primary">Dina</span>
                                <span class="label label--mini color--orange">Misha</span>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><?php echo ($_SESSION['usuario']); ?></td>
                            <td class="mdl-data-table__cell--non-numeric">Jun 15</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <div id="task1" class="mdl-progress mdl-js-progress"></div>
                                <div class="mdl-tooltip" for="task1">
                                    44%
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Big financial app</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini color--orange">Vlada</span>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Boss@financial.com</td>
                            <td class="mdl-data-table__cell--non-numeric">Mar 1</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <div id="task2" class="mdl-progress mdl-js-progress"></div>
                                <div class="mdl-tooltip" for="task2">
                                    14%
                                </div>
                            </td>
                        </tr>
                        <tr class="is-selected">
                            <td class="mdl-data-table__cell--non-numeric">New Year office decoration</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini background-color--primary">Dina</span>
                                <span class="label label--mini color--orange">Vlada</span>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">info@creativeit.io</td>
                            <td class="mdl-data-table__cell--non-numeric">Dec 25</td>
                            <td class="mdl-data-table__cell--non-numeric task-done">
                                <i id="task3" class="material-icons">done</i>
                                <span>Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Don't worry, be happy!!!</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <span class="label label--mini background-color--secondary">Everybody</span>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Contact@happyness.com</td>
                            <td class="mdl-data-table__cell--non-numeric">Yesterday</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <div id="task4" class="mdl-progress mdl-js-progress"></div>
                                <div class="mdl-tooltip" for="task4">
                                    31%
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mdl-grid mdl-cell mdl-cell--3-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
                <!-- Robot card-->
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp robot">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">BB-8</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                A skittish but loyal astromech, BB-8 accompanied Poe Dameron on many missions for the
                                Resistance helping keep his X-wing in working order.
                            </div>
                            <a href="http://www.starwars.com/databank/bb-8" target="_blank">Star Wars Databank</a>
                        </div>
                    </div>
                </div>
                <!-- ToDo_widget-->
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp todo">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">To-do list</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <ul class="mdl-list">

                            </ul>
                        </div>
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect">remove selected</button>
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab mdl-shadow--8dp mdl-button--colored ">
                                <i class="material-icons mdl-js-ripple-effect">add</i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

</div>

<!-- inject:js -->
<script src="js/d3.min.js"></script>
<script src="js/getmdl-select.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/nv.d3.min.js"></script>
<script src="js/layout/layout.min.js"></script>
<script src="js/scroll/scroll.min.js"></script>
<script src="js/widgets/charts/discreteBarChart.min.js"></script>
<script src="js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="js/widgets/charts/stackedBarChart.min.js"></script>
<script src="js/widgets/employer-form/employer-form.min.js"></script>
<script src="js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="js/widgets/map/maps.min.js"></script>
<script src="js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="js/widgets/table/table.min.js"></script>
<script src="js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

</body>
</html>
