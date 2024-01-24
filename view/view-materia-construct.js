	var ajax = new XMLHttpRequest();
    let storageName =localStorage.getItem("id");
	let titleName = storageName.split("id=")[1].split("&")[1].split("=")[1];
	var title = document.querySelector("h1");
	title.innerHTML ="Materia: "+titleName;
	

    ajax.onreadystatechange = ()=>{
        if(ajax.readyState == 4 && ajax.status == 200){
            var json = JSON.parse(ajax.responseText);
            json.forEach((index)=>{     
				

				let container_crud = document.createElement("div");
				container_crud.classList.add("materias-flex");
				var anotacoes = document.querySelector(".anotacoes--content");

				let loadTopic = document.createElement("a");
                loadTopic.classList.add("materias-link");
				let iDelete = document.createElement("i");
				let deleteAnotation = document.createElement("a");
				iDelete.setAttribute("class", "fa-solid fa-trash");  

				var title = document.querySelector("h1");
				let storage =localStorage.getItem("id");
				let splitedStringOcurrence = storage.split("id=")[1].split("&")[0];
				let storageName =localStorage.getItem("id");
				let titleName = storageName.split("id=")[1].split("&")[1].split("=")[1];

				let altTopic = document.createElement("a");
				let iAlt = document.createElement("i");
				
                if(splitedStringOcurrence == index.id_materia){       
                    
                    deleteAnotation.setAttribute("href","#");
                    deleteAnotation.setAttribute("title","Deletar");
					deleteAnotation.addEventListener("click",(e)=>{
                       let confirm = window.confirm("você deseja realmente deletar ?");
                       if(confirm == true){
                        window.location.href ="../model/deleta-anotacao.php?id="+index.id_anotacoes;
                        alert("Materia apagada com sucesso");
                    }else{}
                })
                   

                    loadTopic.setAttribute("href", "carrega-anotacoes.php?id="+index.id_anotacoes);
                    loadTopic.addEventListener("click",(e)=>{
                        e.preventDefault;
                        let id = loadTopic.getAttribute("href").split("?")[1].split("=")[1];
                        localStorage.setItem("id_anotacoes",id);
                    })

                    altTopic.setAttribute("href", "../model/altera-anotacoes.php?id="+index.id_anotacoes);
    
                    iAlt.setAttribute("class","fa-solid fa-pencil");
                    altTopic.append(iAlt);
                    loadTopic.innerHTML = index.assunto_anotacoes;
                    deleteAnotation.append(iDelete);

                    container_crud.append(loadTopic);
                    container_crud.append(deleteAnotation);
                    container_crud.append(altTopic);
                   
                    anotacoes.appendChild(container_crud);
                }
            })

        }
    }
    var urlCatch = window.location.href;
    var urlSplit = urlCatch.split("/");
    var url= urlSplit[3]
    ajax.open("POST","localhost/model/cria-json-anotacoes.php",true);
    ajax.send();


