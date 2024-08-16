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

            <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Simple table</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table">
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">#</th>
                                    <th class="mdl-data-table__cell--non-numeric">Book title</th>
                                    <th class="mdl-data-table__cell--non-numeric">Author</th>
                                    <th class="mdl-data-table__cell--non-numeric">First published</th>
                                    <th class="mdl-data-table__cell--non-numeric">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">1</td>
                                    <td class="mdl-data-table__cell--non-numeric">To Kill a Mockingbird</td>
                                    <td class="mdl-data-table__cell--non-numeric">Harper Lee</td>
                                    <td class="mdl-data-table__cell--non-numeric">1960</td>
                                    <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Read</span> </td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">2</td>
                                    <td class="mdl-data-table__cell--non-numeric">Pride and Prejudice</td>
                                    <td class="mdl-data-table__cell--non-numeric">Jane Austen</td>
                                    <td class="mdl-data-table__cell--non-numeric">1813</td>
                                    <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--secondary">Unread</span> </td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">3</td>
                                    <td class="mdl-data-table__cell--non-numeric">The Great Gatsby</td>
                                    <td class="mdl-data-table__cell--non-numeric">F. Scott Fitzgerald</td>
                                    <td class="mdl-data-table__cell--non-numeric">1925</td>
                                    <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Read</span> </td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">4</td>
                                    <td class="mdl-data-table__cell--non-numeric">Crime and Punishment</td>
                                    <td class="mdl-data-table__cell--non-numeric">Fyodor Dostoyevsky</td>
                                    <td class="mdl-data-table__cell--non-numeric">1866</td>
                                    <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Read</span> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Bordered table</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table bordered-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">Book title</th>
                                <th class="mdl-data-table__cell--non-numeric">Author</th>
                                <th class="mdl-data-table__cell--non-numeric">First published</th>
                                <th class="mdl-data-table__cell--non-numeric">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">23</td>
                                <td class="mdl-data-table__cell--non-numeric">Gone with the Wind</td>
                                <td class="mdl-data-table__cell--non-numeric">Margaret Mitchell</td>
                                <td class="mdl-data-table__cell--non-numeric">1936</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--secondary">Unread</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">24</td>
                                <td class="mdl-data-table__cell--non-numeric">The Count of Monte Cristo</td>
                                <td class="mdl-data-table__cell--non-numeric">Alexandre Dumas</td>
                                <td class="mdl-data-table__cell--non-numeric">1845</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--secondary">Unread</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">25</td>
                                <td class="mdl-data-table__cell--non-numeric">Lolita</td>
                                <td class="mdl-data-table__cell--non-numeric">Vladimir Nabokov</td>
                                <td class="mdl-data-table__cell--non-numeric">1955</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Read</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">26</td>
                                <td class="mdl-data-table__cell--non-numeric">The Hobbit</td>
                                <td class="mdl-data-table__cell--non-numeric">J.R.R. Tolkien</td>
                                <td class="mdl-data-table__cell--non-numeric">1937</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--secondary">Unread</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Stripped table</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table stripped-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">Book title</th>
                                <th class="mdl-data-table__cell--non-numeric">Author</th>
                                <th class="mdl-data-table__cell--non-numeric">First published</th>
                                <th class="mdl-data-table__cell--non-numeric">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">54</td>
                                <td class="mdl-data-table__cell--non-numeric">The Hitchhiker's Guide to th...</td>
                                <td class="mdl-data-table__cell--non-numeric">Douglas Adams</td>
                                <td class="mdl-data-table__cell--non-numeric">1979</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--orange">Unavailable</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">55</td>
                                <td class="mdl-data-table__cell--non-numeric">Madame Bovary</td>
                                <td class="mdl-data-table__cell--non-numeric">Gustave Flaubert</td>
                                <td class="mdl-data-table__cell--non-numeric">1856</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Available</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">56</td>
                                <td class="mdl-data-table__cell--non-numeric">David Copperfield</td>
                                <td class="mdl-data-table__cell--non-numeric">Charles Dickens</td>
                                <td class="mdl-data-table__cell--non-numeric">1850</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Available</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">57</td>
                                <td class="mdl-data-table__cell--non-numeric">War and Peace</td>
                                <td class="mdl-data-table__cell--non-numeric">Leo Tolstoy</td>
                                <td class="mdl-data-table__cell--non-numeric">1869</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Available</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Borderless table</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table borderless-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">#</th>
                                <th class="mdl-data-table__cell--non-numeric">Book title</th>
                                <th class="mdl-data-table__cell--non-numeric">Author</th>
                                <th class="mdl-data-table__cell--non-numeric">First published</th>
                                <th class="mdl-data-table__cell--non-numeric">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">31</td>
                                <td class="mdl-data-table__cell--non-numeric">The Little Prince</td>
                                <td class="mdl-data-table__cell--non-numeric">Antoine de Saint-Exupery</td>
                                <td class="mdl-data-table__cell--non-numeric">1943</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Available</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">32</td>
                                <td class="mdl-data-table__cell--non-numeric">Les Miserables</td>
                                <td class="mdl-data-table__cell--non-numeric">Victor Hugo</td>
                                <td class="mdl-data-table__cell--non-numeric">1862</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--orange">Unavailable</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">33</td>
                                <td class="mdl-data-table__cell--non-numeric">Alice in Wonderland</td>
                                <td class="mdl-data-table__cell--non-numeric">Lewis Carroll</td>
                                <td class="mdl-data-table__cell--non-numeric">1865</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Available</span> </td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">34</td>
                                <td class="mdl-data-table__cell--non-numeric">Anne of Green Gables</td>
                                <td class="mdl-data-table__cell--non-numeric">L.M. Montgomery</td>
                                <td class="mdl-data-table__cell--non-numeric">1908</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini background-color--primary">Available</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Advanced table</h1>
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