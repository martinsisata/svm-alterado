<?php include_once 'validarsessao.php';

error_reporting(0);
?>
<!doctype html>
<html lang="pt">
    <head>
        <link rel="icon" href="../imagens/icon.png" type="image/png" />
        <meta charset="utf-8" />
        <meta name="Description" content="home - Sistema de gestão farmacéutica" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
           <script type="text/javascript">
            
            function excluir(id){
                if(confirm('Deseja realmente excluir Este Produto ?')){
                    //redirecionamento EM JAVASCRIPT
                    location.href = "apagar-produto.php?id="+id;
                }
            }

            function editar(id){
                if(confirm('Deseja realmente editar Este Produto ?')){
                    //redirecionamento EM JAVASCRIPT
                    location.href = "editar-produto.php?id="+id;
                }
            }
            
        </script>
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
                <label><a href="home.php">home </a>-> <a href="configuracoes.php">Configura&ccedil;&otilde;es</a> -> Manuten&ccedil;&atilde;o de produtos</label>
            </div>
            
           
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Manuten&ccedil;&atilde;o de produtos</h1>
                    <br />
                    <br />
                    
                    <!--Formulario de pesquisa-->
                    <form name="formNovaVenda" method="get" action="#">
                        <table class="centralizarDiv">
                            <tr>
                                <!--Primeiro filtro-->
                   
                                
                                <!--Segundo filtro-->
     
                                
                                <!--Terceiro filtro-->

                            </tr>
                        </table>
                    </form>
                    <br />
                        <table class="table centralizarDiv">

                            <!--Cabecalho da listagem-->
                              <tr class="tableHeader">
                                <td>
                                    NOME DO PRODUTO
                                </td>
                                <td>
                                    PREÇO
                                </td>
                                <td>
                                    TIPO
                                </td>
                                <td>
                                    QUANTIDADE
                                </td>
                                <td>
                                    AC&Ccedil;&Atilde;O
                                </td>
                            </tr>

<?php
include_once 'fontes/conexao.php';
$sql = "SELECT * FROM getMedicamentos nome order by nome"; 
$result = mysql_query($sql,$conn);

#while ($linha=mysql_fetch_array($result)) 
$row=mysql_num_rows($result);

     for($i=0; $i<$row; $i++){
        $linha=mysql_fetch_array($result);
        $n = $i%2;
        if($n == 1)
        {
            $estilo = 'tableRowBrancoBrilho';
        }
        else
        {
            $estilo = 'tableRowBrancoFosco';
            } ?>

               <tr class='<?php echo $estilo; ?>'>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['preco']; ?> Kz</td>
                        <td><?php echo $linha['tipo']; ?></td>
                        <td><?php echo $linha['qtd']; ?></td>
                        <td>
                        <a href="#" onclick="editar(<?php echo $linha ['id'];?>);">Editar</a> | <a href="#" onclick="excluir(<?php echo $linha ['id'];?>);">Apagar</a>
                        </td>
               </tr>
                        
                            <?php
                                }
                            ?>
                        </table>
                        <br />
                        <br />
                        <div class="caixa">
                            <div class="caixa">
                                <a href="#" class="bntAzul"><label>Baixar PDF</label></a>
                            </div>
                            <div class="caixa">
                                <a href="#" class="bntVermelho"><labe>Imprimir</labe></a>
                            </div>
                        </div>
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