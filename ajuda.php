<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logoglobal.jpg" type="image/x-icon">
    <link rel="stylesheet" href="import.css">
    <title>Police | SSH</title>


    <style>
.accordion {
  
  
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.9s;
  color: rgb(182, 182, 182);
}

.active, .accordion:hover {
    background-color: rgb(0, 0, 0); 
    color: white;
  }
.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

body{
    background-color: rgb(58, 58, 58);
}
</style>

</head>
<body>
                    
                        
                             
                                     <h1>Central de Ajuda - Police | SSH</h1>
                            

                                

                        


<h2>Tópicos</h2>

<button class="accordion">Recuperar Senha</button>
<div class="panel">
  <p>Para recuperar sua senha, ou mudar você precisa chamar um superior, da patente Supremo/Dono.</p>
</div>

<button class="accordion">Como fazer parte da equipe > Desenvolvimento</button>
<div class="panel">
  <p>Para fazer parte da equipe você deve chamar o guilherme_neh21 no habbo ou no discord: guilherme_neh21#9214 .</p>
</div>

<button class="accordion">Bugs</button>
<div class="panel">
  <p>Caso encontre algum bug em nosso site por favor entrar em contato com algum Supremo/Dono da SSH.</p>
</div>

<!--<button class="accordion">Desenvolvimento</></button>
<div class="panel">
  <p>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
-->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>
</body>
</html>