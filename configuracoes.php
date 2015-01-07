<?php include_once 'validarsessao.php';?>
<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="home - Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <br />
        <div id="conteinerPrincipal">
            <?php
                //Barra topo do sistema
                require_once('template/topo.inc');
                
                //imagem decoratiba - barra topo
                print "<img src=\"imagens/linhaDecor.png\" width=\"100%\" />";

                //Barra de menus
                require_once('template/barra-menus.inc');
            ?>


            <!--Mapa de navegacao-->
            <div id="conteinerMapa">
                <hr/>
                <label><a href="home.php">home </a> -> Configura&ccedil;&otilde;es</label>
            </div>
            
           
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Configura&ccedil;&otilde;es</h1>
                    <br />
                    <br />
                    
                    <!--Opcoes a configurar-->
                    <div class="caixa">
                        <a href="manutencao-produtos.php" class="bntVermelhoBig">Manuten&ccedil;&atilde;o de produtos</a>
                        <div class="corrigirFlutuacao"></div>
                        <br>
                        <br>
                        <br>
                        <a href="novo-tipo-produto.php" class="bntVermelhoBig">Adicionar Tipo de Medicamento</a>
                        <div class="corrigirFlutuacao"></div>
                        <br>
                        <br>
                        <br>
                        <a href="novo-funcionario.php" class="bntVermelhoBig">Adicionar Funcion&aacute;rio</a>
                        <br>
                        <br>
                        <br><br>
                        <a href="add-stoque.php" class="bntVermelhoBig">Adicionar Estoque</a>
                        <br>
                        <br>
                        <br><br>
    <!--
                        <a href="novo-funcionario.php" class="bntVermelhoBig">Adicionar Funcionário</a>
                        <br>
                        <br>
                        <br><br>
                        <a href="novo-funcionario.php" class="bntVermelhoBig">Adicionar Funcionário</a>
                        <br>
                        <br>
                        <br>
                        !-->
                    </div>
                    <div class="corrigirFlutuacao"></div>     
                </div><!--Fim zonaConteudo-->
                
            </session>

            <?php
                //Rodape do sistema
                require_once('template/footer.inc');
            ?>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>