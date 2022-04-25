<?php
include_once 'templates/header.php';
?>


<!---Menu Lateral Esquerda-->

<div class="menu-lateral justify-content-between">
    <div class="linha-horizontal">
        <ul>
            <li class="text-later"><a><img src="<?=$BASE_URL ?>img/painel.svg" alt="">
                        Painel</a></li>
            <li class="text-later"><a><img src="<?=$BASE_URL ?>img/produtos.svg" alt="">
                        Produtos</a></li>
            <li class="text-later"><a><img src="<?=$BASE_URL ?>img/Clientes.svg" alt="">
                        Clientes</a></li>
            <li class="text-later"><a><img src="<?=$BASE_URL ?>img/vendas.svg" alt="">
                        Vendas</a></li>
            <li class="text-later"><a><img src="<?=$BASE_URL ?>img/apoio-suporte.svg"
                            alt="" style="width: 30px;height:30px; margin-right:10px;">Suporte</a></li>
            <li class="text-later"><a><img src="<?=$BASE_URL ?>img/user.svg" alt="">
                        Usuário</a></li>
            <li class="text-later"><a><img src="<?=$BASE_URL ?>img/sair.svg" alt=""> Sair</a></li>
        </ul>
    </div>
</div>

<!-- Informações do banco -->

<?php include_once("templates/backbtn.html"); ?>
<div class="container" id="view-contact-container">
    <h1 id="main-title"><?= $cliente["NomeRazaoSocial"] ?></h1>
    <p class="info-bd"><b>Email:</b> <?= $cliente["Email"] ?></p>
    <p class="info-bd"><b>Ie/Rg:</b> <?= $cliente["IeRg"] ?></p>
    <p class="info-bd"><b>CPF/CNPJ:</b> <?= $cliente["CpfCnpj"] ?></p>
    <p class="info-bd"><b>Telefone:</b> <?= $cliente["Telefone"] ?></p>
    <p class="info-bd"><b>Rua:</b> <?= $cliente["Rua"] ?></p>
    <p class="info-bd"><b>Bairro:</b> <?= $cliente["Bairro"] ?></p>
    <p class="info-bd"><b>Cidade:</b> <?= $cliente["Cidade"] ?></p>
    <p class="info-bd"><b>Estado:</b> <?= $cliente["Estado"] ?></p>
    <p class="info-bd"><b>CEP:</b> <?= $cliente["Cep"] ?></p>
    <p class="info-bd"><b>Observações:</b> <?= $cliente["Observacoes"] ?></p>
</div>

<?php 
include_once 'templates/footer.php';
?>