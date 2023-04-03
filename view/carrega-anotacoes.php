<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script><?php include("../js/fontawesome.min.js")?></script>
    <link rel="stylesheet" href="../styles/style.css">
    <title>Anotações</title>
</head>
<body>
<a href="topicos-materia.php" title="Voltar" class="voltar"><i class="fa-solid fa-arrow-left"></i></a>  
    <div class="wrapper">
        <div class="anotacoes">
                <h1 class="anotacoes__title"></h1>
                <p class="anotacoes__content"></p>
        </div>
    </div>
</body>
</html>

<script>
var ajax = new XMLHttpRequest();
var title = document.querySelector(".anotacoes__title");
var anotacoes = document.querySelector(".anotacoes__content");
ajax.onreadystatechange = ()=>{
    if(ajax.readyState == 4 && ajax.status == 200){
        var json = JSON.parse(ajax.responseText);
        
        json.forEach((index)=>{
            let storage =localStorage.getItem("id");
            let splitedStringOcurrence = storage.split("id=")[1].split("&")[0];
            if(splitedStringOcurrence == index.id_materia){     
                title.innerHTML = index.assunto_anotacoes;          
                anotacoes.innerHTML = index.anotacoes;
            }
        })
    }
}
var urlCatch = window.location.href;
var urlSplit = urlCatch.split("/");
var url= urlSplit[3]
ajax.open("POST","http://localhost/"+url+"/model/cria-json-anotacoes.php",true);
ajax.send();
</script>

