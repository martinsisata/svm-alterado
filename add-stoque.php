<?php include_once 'validarsessao.php';?>
<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <br />
        <div id="conteinerPrincipal">
            
            <?php
                //topo do sistema
                require_once('template/topo.inc');

                //imagem decoratiba - barra topo
                print "<img src=\"imagens/linhaDecor.png\" width=\"100%\" />";

                //barra de menus
                require_once('template/barra-menus.inc');
            ?>


            <!--Mapa de navegacao-->
            <div id="conteinerMapa">
                <hr/>
                <label><a href="home.php">home </a>-> <a href="configuracoes.php">Configura&ccedil;&otilde;es</a> -> Adicionar Medicantos</label>
            </div>
    
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Adicionar Medicantos</h1>
                    <br />
                    <br />
                    <!--Formulario de login-->
                    <form name="formLogin" method="post" action="addestoque.php">
                        <table class="centralizarDiv">
                            <tr>
                            <td>
                                    <label>Nome</label>
                                    <br />
                            <!--Buscar da base de dados os produtos -->
                                    <select name="id" class="comboBoxNormal" required>
                                    <option value="">Seleciona</option>
<?php
include_once 'fontes/conexao.php';
$tipoMedicamento= "select * from medicamento";
$resulta= mysql_query($tipoMedicamento,$conn);
while ($linha = mysql_fetch_array($resulta)) {
    

    ?>
        <option value="<?php echo $linha ['0'];?>"><?php echo $linha ['1'];?></option>
        <?php
    }
        ?>
                                    </select>
                                    <br />
                                    <br />
                                </td>
                                <td>
                                    <label>Quantidade</label>
                                    <br />
                                    <input type="number" name="qtd" value="" class="textBoxNormal" />
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <br />
                                    <center>
                                        <input type="submit" name="bntSubmit" value="Adicionar" class="bntVermelho" />
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
                    <br />
                    <br />
                </div><!--Fim zonaConteudo-->
                
            </session>
           
            
            <!--Espaçamento parao rodape-->
            <br />
            <br />
            <br />
            <!--Rodape padrao-->
            <footer id="rodape">
                <p>Todos direitos reservados.2014</p>
            </footer>
        </div><!--Fim conteinerPrincipal-->
        <br />
    </body>
    
</html>