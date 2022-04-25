<?php
include_once 'templates/header.php'; 
?>
<div class="container">
<a href="<?=$BASE_URL ?>create.php" id="back-link">
<button type="button" class="adic-cliente">Adicionar Cliente</button>
</a>
<!-- Tabela de dados -->
<?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg?></p>
    <?php endif?>
    <?php if(count($clientes) > 0 ):?>
        <table class="table" id="cliente-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome/RazaoSocial</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ie/RG</th>
                    <th scope="col">CPF/CNPJ</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">CEP</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $cliente): ?>
                    <tr>
                        <td scope="row" class="col"><?= $cliente["ClienteId"] ?></td>
                        <td scope="row"><?= $cliente["NomeRazaoSocial"] ?></td>
                        <td scope="row"><?= $cliente["Email"] ?></td>
                        <td scope="row"><?= $cliente["IeRg"] ?></td>
                        <td scope="row"><?= $cliente["CpfCnpj"] ?></td>
                        <td scope="row"><?= $cliente["Telefone"] ?></td>
                        <td scope="row"><?= $cliente["Rua"] ?></td>
                        <td scope="row"><?= $cliente["Bairro"] ?></td>
                        <td scope="row"><?= $cliente["Cidade"] ?></td>
                        <td scope="row"><?= $cliente["Estado"] ?></td>
                        <td scope="row"><?= $cliente["Cep"] ?></td>
                        <td class="actions">
                            <a href="<?= $BASE_URL ?>show.php?id=<?= $cliente["ClienteId"] ?>"><i class="fas fa-eye check-eye" title="Exibir"></i></a>
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $cliente["ClienteId"] ?>"><i class="far fa-edit edit-icon" title="Editar"></i></a>
                            <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="ClienteId" value="<?= $cliente["ClienteId"] ?>">
                                <button class="delete-btn" type="submit"><i class="fas fa-times delete-icon" title="Excluir"></i></button>
                            </form>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">Não há cllientes adicionados, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
    <?php endif;?>
</div>

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

<?php 
include_once 'templates/footer.php';
?>