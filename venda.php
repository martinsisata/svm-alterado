<?php include_once 'validarsessao.php';?>

<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="home - Sistema de gestão farmacéutica" />
        <script type="text/javascript" src="ajax.js"></script>

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
                <label><a href="home.php">home </a> -> Vendas</label>
            </div>
            
           
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Nova venda</h1>
                    <br />
                    <br />
                    
                    <!--Formulario da nova venda-->
                    <form name="formNovaVenda" method="get" action="#">
                        <table class="centralizarDiv">
                            <tr>
                                <td>
                                    <input type="text" name="q" onkeyup="MostrarFuncionarios()" id="buscar" class="textBoxNormal" />
                                </td>

                            </tr>
                        </table>
                    </form>
                    <br />
                    
                    <!--
                        A tabela abaixo so aparece depois
                        do usuario clicar em submit
                    -->
                    
                        <table class="table centralizarDiv">
                            <tr>
                                <td style="padding:6px 0px 24px 0px; color:#fff">
                                    Resultados da pesquisa:
                                </td>
                            </tr>
                            <!--Estilo dinamico para as linhas das tabelas-->

                            
                            <!--Conteudo-->
        <tbody id="conteudo">

         </tbody>  
                            
                        </table>
                    <br />
                    
                    <br />
                    <br />
                    
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