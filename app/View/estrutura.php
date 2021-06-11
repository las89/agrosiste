<html>

<head>
	<title>Sagro</title>
	<meta charset="utf-8">
<!--
<style>
	*{
    margin: 0;
    padding: 0;
}
body{
	background: #d2d2c1 url('imagens/fundo.png');
	font: 20px Arial, Helvetica, sans-serif;
}

#principal {
	width: 1120px;
    margin: 0 auto;
}
#corpo{
    
    padding: 5px 5px;
    margin: 5px auto;
   box-sizing: border-box;

}
#Lateral{
    padding: 5px 5px;
    margin: 5px auto;
    height: 100%;
    width: 23%;
   box-sizing: border-box;
   border: 2px solid red;
   position: relative;
   float:left;

}
#conteudo{
    padding: 5px 5px;
    margin: 5px auto;
    height: 100%;
    width: 76%;
    box-sizing: border-box;
   border: 2px solid yellowgreen;
   position: relative;
   float:right;
}
header{
    background:#51c76a;
    padding: 5px 5px;
    margin: 5px 5px;
   box-sizing: border-box;
   height: 170px;
}
header h1{
   text-align:  inherit;
    font-size: 100px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
header h1 span{
    color:#FFF;
}
footer{
    background: tomato;
    padding: 5px 5px;
    margin: 5px 5px;
   box-sizing: border-box;
    clear: both;
    height: 120px;
}

    /*Menu*/
    :root {
        --cor-principal: rgb(46, 62, 77);
        --cor-secundaria: rgb(222, 228, 235);
    }
    
    nav {
       
        width: 100%;
        background-color: aquamarine;
        
    }
    
    nav ul {
        list-style-type: none;
        padding: 0;
    }
    
    nav ul li{
        border-bottom: 1px solid var(--cor-secundaria);
    }
    
    nav ul li a {
        background-color: var(--cor-principal);
        color: #FFF;
        padding: 10px;
        display: block;
        text-decoration: none;
        transition: background .3s;
        text-transform: uppercase;
    }
    
    nav ul li a:hover {
        background-color: var(--cor-secundaria);
        color: var(--cor-principal);
    }
    nav li ul{
        position:absolute;
        width: 100%;
        padding: 5px;
        display:none;
        left: 0;
        box-sizing: border-box;
        
        

    }
    nav li:hover ul, nav li.over ul{
        display:block;
        color: rgb(211, 81, 194);
    }
    nav li ul li{
         display:block;
        }
</style>
-->
<link rel="stylesheet" type="text/css" href="/css/folha.css"/>


</head>

<body>

	<div id="principal">
		<header>
			<H1><span>S</span>AGRO</H1>
		</header>
		<div id="corpo">
			<div id="Lateral">
				<nav>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Romaneio</a></li>
						<li><a href="#">Área</a></li>
						<li><a href="">Produto</a></li>
						<li><a href="">Parceiros</a></li>
						<li><a href="">Operacional</a></li>
					</ul>
				</nav>
			</div>
			<div id="conteudo">
				{{Area_Dinamica}}
			</div>
		</div>

		<footer>
			siqueira
		</footer>
	</div>

</body>

</html>