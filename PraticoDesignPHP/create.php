<?php
include_once "templates/header.php"; ?>

<!---Menu Lateral Esquerda-->

<div class="menu-lateral justify-content-between">
        <div class="linha-horizontal">
            <ul>
                <li class="text-later"><a><img src="<?= $BASE_URL ?>img/painel.svg" alt="">
                        Painel</a></li>
                <li class="text-later"><a><img src="<?= $BASE_URL ?>img/produtos.svg" alt="">
                        Produtos</a></li>
                <li class="text-later"><a><img src="<?= $BASE_URL ?>img/Clientes.svg" alt="">
                        Clientes</a></li>
                <li class="text-later"><a><img src="<?= $BASE_URL ?>img/vendas.svg" alt="">
                        Vendas</a></li>
                <li class="text-later"><a><img src="<?= $BASE_URL ?>img/apoio-suporte.svg"
                            alt="" style="width: 30px;height:30px; margin-right:10px;">Suporte</a></li>
                <li class="text-later"><a><img src="<?= $BASE_URL ?>img/user.svg" alt="">
                        Usuário</a></li>
                <li class="text-later"><a><img src="<?= $BASE_URL ?>img/sair.svg" alt=""> Sair</a></li>
            </ul>
        </div>
</div>
<!-- Formulario adicionar Cliente -->
<div class="container">
        <div class="title-addcliente">
        <h4 id="main-title">Adicionar Cliente</h4>
        </div>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
                <input type="hidden" name="type" value="create">
                <div class="form-group">
                        <label for="NomeRazaoSocial"><b>Nome/Razão Social:</b></label>
                        <input type="text" class="form-control NomeRazaoSocial" id="NomeRazaoSocial" name="NomeRazaoSocial" placeholder="Digite o Nome/Razão Social" required>
                </div>
                <div class="form-group">
                        <label for="Email"><b>Email:</b></label>
                        <input type="text" class="form-control Email" id="Email" name="Email" placeholder="Digite o email" required>
                </div>
                <div class="form-group form-ierg">
                        <label for="IeRg"><b>Ie/Rg:</b></label>
                        <input type="text" class="form-control IeRg" id="IeRg" name="IeRg" placeholder="Digite o Ie/Rg" required>
                </div>
                <div class="form-group">
                        <label for="CpfCnpj"><b>CPF/CNPJ:</b></label>
                        <input type="text" class="form-control CpfCnpj" id="CpfCnpj" name="CpfCnpj" placeholder="Digite o CPF/CNPJ" required>
                </div>
                <div class="form-group form-telefone">
                        <label for="Telefone"><b>Telefone:</b></label>
                        <input type="text" class="form-control Telefone" id="Telefone" name="Telefone" placeholder="Digite o Telefone" required>
                </div>
                <div class="form-group">
                        <label for="Rua"><b>Rua:</b></label>
                        <input type="text" class="form-control Rua" id="Rua" name="Rua" placeholder="Digite a Rua" required>
                </div>
                <div class="form-group form-bairro">
                        <label for="Telefone"><b>Bairro:</b></label>
                        <input type="text" class="form-control Bairro" id="Bairro" name="Bairro" placeholder="Digite o Bairro" required>
                </div>
                <div class="form-group">
                        <label for="Cidade"><b>Cidade:</b></label>
                        <input type="text" class="form-control Cidade" id="Cidade" name="Cidade" placeholder="Digite a Cidade" required>
                </div>
                <div class="form-group form-estado">
                        <label for="Estado"><b>Estado:</b></label>
                        <input type="text" class="form-control Estado" id="Estado" name="Estado" placeholder="Digite o UF" required>
                </div>
                <div class="form-group form-cep">
                        <label for="Cep"><b>Cep:</b></label>
                        <input type="text" class="form-control Cep" id="Cep" name="Cep" placeholder="Digite o CEP" required>
                </div>
                <div class="form-group">
                        <label for="Observacoes"><b>Observação:</b></label>
                        <textarea type="text" class="form-control Observacoes" id="Observacoes" name="Observacoes" placeholder="Digite a Observação" rows="3"></textarea>
                </div>

                <button type="submit" class="btn-salvar">Adicionar</button>
        </form>
        <a href="<?=$BASE_URL ?>index.php" id="back-link">
        <button type="submit" class="btn-cancelar">Cancelar</button>
</div>          </a>

<?php
        include_once "templates/footer.php";
?>
