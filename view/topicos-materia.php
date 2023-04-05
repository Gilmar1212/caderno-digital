<?php
 $id = filter_input(INPUT_GET, "id");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <script><?php include("../js/fontawesome.min.js") ?></script>
    <title>Assunto das matérias</title>
</head>
<body>  
    <a href="../index.php" title="Voltar" class="voltar"><i class="fa-solid fa-arrow-left"></i></a>  
    <h1></h1>
    <form method="POST" action="../model/cria-anotacoes.php?id=<?=$id?>">
    <input type="text" name="assunto-materia" placeholder="ASSUNTO DA MATÉRIA EX: ARTE É LEGAL..." required>
    <textarea name="anotacoes" id="anotacoes" cols="120" rows="20" value="anotacoes" placeholder="DIGITE O CORPO DO ASSUNTO AQUI!" required></textarea>
    <input type="submit">
    </form>
    <h2>Acesse as suas anotações abaixo:</h2>
    <div class="anotacoes--content"></div>
</body>
</html>
<script>
var ajax = new XMLHttpRequest();
var anotacoes = document.querySelector(".anotacoes--content");
var title = document.querySelector("h1");
let storageName =localStorage.getItem("id");
let titleName = storageName.split("id=")[1].split("&")[1].split("=")[1];
title.innerHTML ="Materia: "+titleName;

ajax.onreadystatechange = ()=>{
    if(ajax.readyState == 4 && ajax.status == 200){
        var json = JSON.parse(ajax.responseText);
        json.forEach((index)=>{     
            
            let storage =localStorage.getItem("id");
            let splitedStringOcurrence = storage.split("id=")[1].split("&")[0];
            if(splitedStringOcurrence == index.id_materia){       
                let deletar = document.createElement("a");
            deletar.setAttribute("href","#");
            deletar.setAttribute("title","Deletar");
            deletar.addEventListener("click",(e)=>{
               let confirm = window.confirm("você deseja realmente deletar ?");
               if(confirm == true){
                    window.location.href ="../model/deleta-anotacao?id="+index.id_anotacoes;
                    console.log(splitedStringOcurrence);
                    alert("Materia apagada com sucesso");
               }
            })
            let i = document.createElement("i");
            
            i.setAttribute("class", "fa-solid fa-trash");            
                let topic = document.createElement("a");
                topic.setAttribute("href", "carrega-anotacoes.php?id="+index.id_anotacoes);
                topic.addEventListener("click",(e)=>{
                    e.preventDefault;
                    let id = topic.getAttribute("href").split("?")[1].split("=")[1];
                    console.log(id);
                   localStorage.setItem("id_anotacoes",id);
                })
                topic.innerHTML = index.assunto_anotacoes;
                deletar.append(i);
                topic.classList.add("materias-flex");
            topic.append(deletar);
                anotacoes.appendChild(topic);
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

