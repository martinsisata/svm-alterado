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
            
           
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Flora & Filhos</h1>
                    <br />
                    <br />
                   
                   <!--Elementos do DashBoard-->
                   <center>
                   <!--Conteiner do DashBoard-->
                   <div id="conteinerDashBoard">
                       <!--Primeiro elemento-->
                       <div class="conteinerElementoDashBoard"> 
                           <div class="elementoDashBoard">
                                <a href="venda.php">
                                    <img src="imagens/carrinho.png" alt="Imagem fazer venda">
                                </a>
                           </div>
                            <p>
                                <a href="venda.php">
                                    Fazer Venda
                                </a>
                            </p>
                       </div><!--Fim primeiro elemento-->


                        <!--Segundo elemento-->
                        <div class="conteinerElementoDashBoard"> 
                           <div class="elementoDashBoard">
                                <a href="vendasFeitas.php">
                                    <img src="imagens/grafico.png" alt="Imagem Visualizar vendas">
                                </a>
                           </div>
                            <p>
                                <a href="vendasFeitas.php">
                                    Visualizar Vendas
                                </a>
                            </p>
                        </div><!--Segundo primeiro elemento-->


                        <!--Terceiro elemento-->
                        <div class="conteinerElementoDashBoard"> 
                           <div class="elementoDashBoard">
                                <a href="ver-produtos.php">
                                    <img src="imagens/caixas.png" alt="Imagem Visualizar produtos">
                                </a>
                           </div>
                            <p>
                                <a href="ver-produtos.php">
                                    Visualizar Produtos
                                </a>
                            </p>
                        </div><!--Terceiro primeiro elemento-->


                        <!--Quarto elemento-->
                        <div class="conteinerElementoDashBoard"> 
                           <div class="elementoDashBoard">
                                <a href="nova-Password.php">
                                    <img src="imagens/chave.png" alt="Imagem Alterar Senha">
                                </a>
                           </div>
                            <p>
                                <a href="nova-Password.php">
                                    Alterar Senha
                                </a>
                            </p>
                        </div><!--Quarto elemento-->
                    </div><!--Fim do conteinerDashBoard-->
                    </center>

                    <!--Corrigir Problema de flutuacao-->
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

