<?php
// Incluir arquivo de conexão
include('php/connect.php');
session_start(); // Certifique-se de que a sessão é iniciada aqui

// Se o usuário estiver autenticado, redirecione para index.php
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Dashboard Lite</title>

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="css/application.min.css">
</head>
<body>

<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
            <div class="mdl-card__supporting-text color--dark-gray">
                <div class="mdl-grid">
                    <form action="php/autenticar.php" method="POST">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="mdl-card__title-text text-color--smooth-gray">DARKBOARD</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="login-name text-color--white">Sign in</span>
                            <span class="login-secondary-text text-color--smoke">Enter fields to sign in to DARKBOARD</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" id="email" name="email" required>
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>
                            <div class="flex-align-center">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size" style="flex: 1;">
                                    <input class="mdl-textfield__input" type="password" id="password" name="senha" required>
                                    <label class="mdl-textfield__label" for="password">Password</label>
                                </div>
                                <label class="mdl-icon-toggle mdl-js-icon-toggle mdl-js-ripple-effect icon-toggle--colored-light-blue" for="icon-toggle-2" style="margin-left: 8px;">
                                    <input type="checkbox" id="icon-toggle-2" class="mdl-icon-toggle__input" onclick="togglePassword()">
                                    <span id="password-visibility"><i class="mdl-icon-toggle__label material-icons">visibility_off</i></span>
                                </label>
                            </div>


                            <!-- Exibir a mensagem de erro, se existir -->
                            <?php
                            if (isset($_SESSION['erro'])) {
                                echo "<p style='color:red;'>" . $_SESSION['erro'] . "</p>";
                                unset($_SESSION['erro']); // Limpar a mensagem de erro da sessão
                            }?>
                            <a href="forgot-password.html" class="login-link">Forgot password?</a>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                            <a href="sign-up.html" class="login-link">Don't have account?</a>
                            <div class="mdl-layout-spacer"></div>
                            <button class="mdl-button mdl-js-button mdl-button--raised color--light-blue" type="submit">
                                SIGN IN
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="js/password-visibility.js"></script>
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

</body>
</html>
