var ajax = new XMLHttpRequest();
var teste = document.querySelector(".materias");

ajax.onreadystatechange = ()=>{
    if(ajax.readyState == 4 && ajax.status == 200){
        let json = JSON.parse(ajax.responseText);
        json.forEach((index)=>{
            let a = document.createElement("a");
            let deletar = document.createElement("a");
            deletar.setAttribute("href","#");
            deletar.setAttribute("title","Deletar");
            deletar.addEventListener("click",(e)=>{
               let confirm = window.confirm("você deseja realmente deletar ?");
               if(confirm == true){
                    window.location.href ="model/deleta-materia-anotacao?id="+index.id_materia;
                    alert("Materia apagada com sucesso");
               }
            })
            let i = document.createElement("i");
            
            i.setAttribute("class", "fa-solid fa-trash");
           
            a.setAttribute("href","view/topicos-materia.php?id="+index.id_materia+"&materia="+index.materias);
            a.addEventListener("click",(e)=>{
                localStorage.setItem("id",a.getAttribute("href"));
                localStorage.getItem("id");
            })
            // localStorage.setItem("id",a.getA )
            a.classList.add("materias-flex");
            a.innerHTML = index.materias;
            deletar.append(i);
            a.append(deletar);
            teste.appendChild(a);
        })
    }
}
var urlCatch = window.location.href;
var urlSplit = urlCatch.split("/");
var url= urlSplit[3]
ajax.open("POST","http://localhost/"+url+"/model/cria-json-materias.php",true);
ajax.send();