function MostrarFuncionarios() {

 var url = "medicamentos.php?busca="+ document.getElementById("buscar").value;
 ajax = window.XMLHttpRequest ? 
 new XMLHttpRequest() : new ActiveXObject(
   "Microsoft.XMLHTTP");
 if (ajax.overrideMimeType)
  ajax.overrideMimeType("text/xml");
 ajax.open('GET', url, true);
 ajax.onreadystatechange = function() {
  if (ajax.readyState == 4 && ajax.status == 200) {
   document.getElementById("conteudo").innerHTML = ajax.responseText;
  //alert(ajax.responseText);
  }
 };
 
 ajax.send(null);
}
