<!--Barra de menus-->
<nav id="conteinerNavBar">
                
    
    <div class="botaoFuncao flutuar">
        <div class="caixa">
            <a href="home.php">
                <img src="imagens/home.png" alt="Inicio" title="Inicio" />
            </a>
        </div>
        <div class="caixa">
            <label>
                <a href="home.php">
                    In&iacute;cio
                </a>
            </label>
        </div>
    </div>
    
    
                
                
    <!--Botao Vendas-->
    <div class="botaoFuncao flutuar">
        <div class="caixa">
            <a href="venda.php">
                <img src="imagens/icon-dinheiro.png" alt="Vendas" title="Vendas" />
            </a>
        </div>
        <div class="caixa">
            <label>
                <a href="venda.php">
                    Vendas
                </a>
            </label>
        </div>
    </div><!--Fim do Botao Vendas-->
               
                
                
    <!--Botao Novo produto-->
    <div class="botaoFuncao flutuar">
        <div class="caixa">
            <a href="novoproduto.php">
                <img src="imagens/icon-novo-produto.png" alt="Novo produto" title="Novo produto" />
            </a>
        </div>
        <div class="caixa">
            <label>
                <a href="novo-produto.php">
                    Novo produto
                </a>
            </label>
        </div>
    </div><!--Fim do Botao Novo produto-->
                
                
    <!--Botao Relatorios-->
    <div class="botaoFuncao flutuar">
        <div class="caixa">
            <a href="relatorios.php">
                <img src="imagens/icon-relatorio.png" alt="Relactórios" title="Relactórios" />
            </a>
        </div>
        <div class="caixa">
            <label>
                <a href="relatorios.php">
                    Relat&oacute;rios
                </a>
            </label>
        </div>
    </div><!--Fim do Botao Relatorios-->
    
    
    <?php
        // o botao abaixo só aparece se o administrador estiver logado
    ?>
   <?php 
if ($_SESSION["perfil"] == 1) {?>
        <div class="botaoFuncao flutuar">
        <div class="caixa">
            <a href="configuracoes.php">
                <img src="imagens/icon-configuracoes.png" alt="Relactórios" title="Relactórios" />
            </a>
        </div>
        <div class="caixa">
            <label>
                <a href="configuracoes.php">
                    Configura&ccedil;&otilde;es
                </a>
            </label>
        </div>
    </div><?php
} else {
    # code...
}

    ?>
<!--Fim do Botao Configuracoes-->
    
        
    <!--Corrigir flutuacao-->
    <div class="corrigirFlutuacao"></div>
</nav>