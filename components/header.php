<?php
session_start();
// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: /../src/login.php");
    exit();
}
?>
<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>

        <div class="avatar-dropdown" id="icon">
            <span><?php echo($_SESSION['nomeUsuario']); ?></span>
            <img src="../src/images/Icon_header.png">
        </div>
        <!-- Account dropdawn-->
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                    <span class="material-icons mdl-list__item-avatar"></span>
                    <span><?php echo ($_SESSION['nomeUsuario']); ?></span>
                    <span class="mdl-list__item-sub-title"><?php echo ($_SESSION['usuario']); ?></span>
                </span>
            </li>
            <li class="list__item--border-top"></li>
            <a href="/../src/minha-conta.php">
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">account_circle</i>
                        Minha conta
                    </span>
                </li>
            </a>
            <li class="list__item--border-top"></li>
            <a href="/../src/php/logout.php">
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                        Sair
                    </span>
                </li>
            </a>
        </ul>

        <button id="more"
                class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">more_vert</i>
        </button>

        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
            for="more">
            <li class="mdl-menu__item">
                Settings
            </li>
            <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                Support
            </a>
            <li class="mdl-menu__item">
                F.A.Q.
            </li>
        </ul>
    </div>
</header>

<div class="mdl-layout__drawer">
    <header>iEstampa</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="/../src/index.php">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Dashboard
                    </a>

                    <!-- USUARIOS -->
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">account_circle</i>
                            Pedidos
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href='/../src/pages/vendedores.php'>
                                Vendedores
                            </a>
                            <a class="mdl-navigation__link" href='/../src/pages/historico-pedidos.php'>
                                Histórico 
                            </a>
                        </div>
                    </div>

                    <!-- PRODUTOS -->
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">shopping_cart</i>
                            Produtos
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="/../src/pages/editar-produtos.php">
                                Editar produtos
                            </a>
                        </div>
                    </div>

                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">view_comfy</i>
                                Produção
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="/../src/pages/setores.php">
                                Setores
                            </a>
                        </div>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="/../src/pages/esteira.php">
                                Esteira
                            </a>
                        </div>
                    </div>

                    <!-- CHAVE DE ACESSOS -->
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">vpn_key</i>
                            Chaves de acesso
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="/../src/pages/api-bling.php">
                                API Bling
                            </a>
                            <a class="mdl-navigation__link" href="/../src/pages/variaveis.php">
                                Variáveis
                            </a>
                        </div>
                    </div>

                    <div class="mdl-layout-spacer"></div>
                    <hr>
                    <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                        <i class="material-icons" role="presentation">link</i>
                        Tutoriais
                    </a>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>
