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
                <label><a href="home.php">home </a>-> <a href="relatorios.php">Relact&oacute;rios</a> -> Vendas Efectuadas</label>
            </div>
            
           
            <!--Zona de conteudo-->
            <session id="" class="centralizarDiv">
                <div id="zonaConteudo">
                    <h1>Vendas Efectuadas</h1>
                    <br />
                    <br />
                    
                    <!--Formulario de pesquisa-->
                    <form name="formNovaVenda" method="get" action="#">
                        <table class="centralizarDiv">
                            <tr>

<td>
<select name="dia" class="comboBoxNormal" required>
                                    <option value="">Dia</option>
                                    <?php for ($i=1; $i < 32 ; $i++) { 
                                       ?>
                                       <option><?php  echo $i; ?></option>
                                       <?php
                                    } 
                                    ?>
                                    <option value="todos">T</option>

</select>
<select name="mes" class="comboBoxNormal" required>
                                    <option value="">M&ecirc;s</option>
                                    <?php for ($i=1; $i < 13 ; $i++) { 
                                       ?>
                                       <option><?php  echo $i; ?></option>
                                       <?php
                                    } 
                                    ?>
                                    <option value="todos">T</option>

</select>
<select name="ano" class="comboBoxNormal" required>
                                    <option value="">Ano</option>
                                    <?php for ($i=2014; $i < 2016 ; $i++) { 
                                       ?>
                                       <option><?php  echo $i; ?></option>
                                       <?php
                                    } 
                                    ?>
                                    <option value="todos">T</option>

</select>
                                </td>
                                
                                <td>
                                    <input type="submit"  value="Pesquisar" class="bntVermelho" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br />
                        <?php 

if (isset($_GET [dia])) {
    #Inicio Busca com filtro
    ?>
<table class="table centralizarDiv">

                            <!--Cabecalho da listagem-->
                              <tr class="tableHeader">
                                <td>
                                    Nº
                                </td>
                                <td>
                                    NOME
                                </td>
                                <td>
                                    PRE&Ccedil;O
                                </td>
                                  </td>

                                  </td>
                                <td>
                                    QTD
                                </td>
                                
                                <td>
                                    TOTAL
                                </td>
                                  
                                <td>
                                    DATA E HORA
                                </td>
                                <td>
                                    FUNCION&Aacute;RIO
                                </td>                                  
                            </tr>

<?php

include_once 'fontes/conexao.php';
if ($_GET ['dia'] = "todos") {
    $sql = "SELECT * FROM vendasFiltradas
where mes = ".$_GET['mes']." and ano = ".$_GET['ano'].""; 
}elseif ($_GET ['mes'] = "todos") {
    $sql = "SELECT * FROM vendasFiltradas
where ano = ".$_GET['ano'].""; 
}elseif ($_GET ['ano'] = "todos") {
    $sql = "SELECT * FROM vendasFiltradas
where dia = ".$_GET['dia']." and mes = ".$_GET['mes'].""; 
}
else 
{
    $sql = "SELECT * FROM vendasFiltradas
where dia = ".$_GET ['dia']." and  mes = ".$_GET['mes']." and ano = ".$_GET['ano'].""; 
}
$result = mysql_query($sql,$conn);

#while ($linha=mysql_fetch_array($result)) 
$row=mysql_num_rows($result);
if ($row > 0) {
    
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
            }
            
            ?>


               <tr class='<?php echo $estilo; ?>'>
                        <td><?php echo $linha['0']; ?></td>
                        <td><?php echo $linha['nome']; ?> </td>
                        <td><?php echo $linha['preco']; ?> Kz</td>
                        <td><?php echo $linha['qtd']; ?></td>
                        <td><?php echo $linha['total']; ?>Kz</td>
                        <td><?php echo $linha['dataVendida']; ?></td>
                        <td><?php echo $linha['func']; ?></td>
                        
               </tr>
                        
                            <?php
                                }
                            ?>
                        </table>
<?php 
}else
{
echo "<h1>Não encontrado Nenhum dado Referente a data selecionada</h1></table>";
    }?>
    <?php
    #Fim Busca com filtro
}else
{?>
    <table class="table centralizarDiv">

                            <!--Cabecalho da listagem-->
                              <tr class="tableHeader">
                                <td>
                                    Nº
                                </td>
                                <td>
                                    NOME
                                </td>
                                <td>
                                    PRE&Ccedil;O
                                </td>
                                  </td>

                                  </td>
                                <td>
                                    QTD
                                </td>
                                
                                <td>
                                    TOTAL
                                </td>
                                  
                                <td>
                                    DATA E HORA
                                </td>
                                <td>
                                    FUNCION&Aacute;RIO
                                </td>                                  
                            </tr>

<?php

include_once 'fontes/conexao.php';
$sql = "SELECT * FROM vendasFiltradas  order by dataVendida"; 
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
            }
            
            ?>


               <tr class='<?php echo $estilo; ?>'>
                        <td><?php echo $linha['0']; ?></td>
                        <td><?php echo $linha['nome']; ?> </td>
                        <td><?php echo $linha['preco']; ?> Kz</td>
                        <td><?php echo $linha['qtd']; ?></td>
                        <td><?php echo $linha['total']; ?>Kz</td>
                        <td><?php echo $linha['dataVendida']; ?></td>
                        <td><?php echo $linha['func']; ?></td>
                        
               </tr>
                        
                            <?php
                                }
                            ?>
                        </table>
<?php
}
                         ?>
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