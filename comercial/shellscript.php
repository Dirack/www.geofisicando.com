<?php
/*  

    Página Principal do site do Geofisicando
    
    Objetivo: Site para a divulgação científica e blog de
    programação aplicada à geofísica.
    
    Autor: Rodolfo A. C. Neves (Dirack) 15/03/2018
	
    Email (Manutenção): rodolfo_profissional@hotmail.com
*/
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);
$CSS_PATH="../login.css";
$ICON_PATH="../icon.ico";
?>

<?php include '../includes/header.php'; ?>

	<div id="banner-comercial">
	<!--<h1 style="color:white;" >Curso Shell Script profissional: Do básico ao avançado</h1>-->
	<h3>Chegou o Momento de Finalmente</h3><br>
	<h1 style="color: #ff0; text-shadow: 1px 1px 0px rgba(0,0,0,0.5);">Aprender Shell Script profissional: Do básico ao avançado</h1><br>
	<h1>e Trabalhar Como Programador <u>Shell Script</u></h1><br>
	<p>(Automatizando processos, Testes, Sistemas Web ou oque Você Conseguir Imaginar)</p><br><br>

	<iframe width="860" height="410" src="https://www.youtube.com/embed/u0Dzc0wKmzA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<br><br>
	<p>Acesso Vitalício aos módulos do curso de R$ 27,50 por apenas 1x de R$ 10,00 (cada módulo)</p>


	<a href="shellscript.html#title-bar-text"><b>Faça a sua inscrição agora!</b></a>
	<p><b>Dúvidas?</b> rodolfo_profissional@hotmail.com</p>

	</div>

	<div id="bar-grey" style="background-color: #dcdcdc;"></div>

	<div id="bar-text" style="background-color: white;">
		<h1 id="title-bar-text">Escolha o módulo de acordo com o seu nível:</h1>
		<div id="cursos-img">

			<!-- Curso Shell Script profissional - Módulo 1 -->
			<div id="img-1" class="cursos">
				<div class="img-curso">
					<img src="../images/tux1.png" >
				</div>
				<div class="title-curso">
					<h3>Shell Script Profissional</h3>
					<p>Módulo 1 - Comandos básicos do Shell</p>
				</div>
				<div class="text-curso">
				<p>Existem centenas de comandos no shell e cada um deles com mais uma dezena de opções. Porém, alguns comandos são utilizados com muito mais frequência do que outros, de modo que conhecendo apenas uma parte dos comandos disponíveis, você pode realizar a grande maioria das tarefas no seu sistema linux.</p>
				</div>
				<div class="preco-curso">
					<div class="preco-curso-de"><p>De:</p><h3><s>R$27,50</s></h3></div>
					<div class="preco-curso-para"><p>Por Apenas:</p><h2>R$10,00</h2></div>
				</div>
				<div class="assine-curso">
					<a target="_blank" href="https://alunos.workover.com.br/courses/141">ASSINE</a>
				</div>

			</div>

			<!-- Curso Shell Script profissional - Módulo 2 -->
			<div id="img-2" class="cursos">
				<div class="img-curso">
					<img src="../images/tux2.png" >
				</div>
				<div class="title-curso">
					<h3>Shell Script Profissional</h3>
					<p>Módulo 2 - Introdução ao Shell Script</p>
				</div>
				<div class="text-curso">
				<p>O interpretador de comandos do linux permite a execução de sequências de comandos inseridos diretamente na linha de comandos ("prompt") ou ainda lidos de arquivos de scripts executáveis escritos na linguagem de programação shell script.</p>
				</div>
				<div class="preco-curso">
					<div class="preco-curso-de"><p>De:</p><h3><s>R$27,50</s></h3></div>
					<div class="preco-curso-para"><p>Por Apenas:</p><h2>R$10,00</h2></div>
				</div>
				<div class="assine-curso">
					<a target="_blank" href="https://alunos.workover.com.br/courses/143">ASSINE</a>
				</div>
			</div>

			<!-- Curso Shell Script profissional - Módulo 3 -->
			<div id="img-3" class="cursos">
				<div class="img-curso">
					<img src="../images/tux3.png" >
				</div>
				<div class="title-curso">
					<h3>Shell Script Profissional</h3>
						<p>Módulo 3 - Depuração e criação de programas profissionais</p>
				</div>
				<div id="mod3-curso" class="text-curso">
				<p>A depuração (debug) é a etapa de desenvolvimento de software que serve para encontrar e reduzir defeitos (bugs) ou resultados inesperados de um programa ou aplicativo. Também serve para dar confiança ao usuário de que o programa foi testado e está funcionando corretamente.</p>
				</div>
				<div class="preco-curso">
					<div class="preco-curso-de"><p>De:</p><h3><s>R$27,50</s></h3></div>
					<div class="preco-curso-para"><p>Por Apenas:</p><h2>R$10,00</h2></div>
				</div>
				<div class="assine-curso">
					<a target="_blank" href="https://alunos.workover.com.br/sales/course-294">ASSINE</a>
				</div>

			</div>
		</div>
	</div>

<!-- Rodapé da Página -->
<div id="rodape">
	<div id="img-rodape"></div>

	<div id="links-rodape">
		<div id="links-rodape-ajuda">
			<h2>Suporte</h2>
			<ul>
				<li>
					<a href="https://github.com/Geofisicando">Geofisicando</a>
				</li>
				<li>
					<a href="https://github.com/gpgeof" title="Grupo de programação aplicada à Geofísica (GPGEOF)">GPGEOF</a>
				</li>
				<li>Perguntas frequentes</li>
				<li>
					<a target="_blank" href="https://www.gnu.org/licenses/quick-guide-gplv3.pt-br.html">Licença de uso (GPL 3)</a>
				</li>
			</ul>
	</div>
	<div id="links-rodape-sobre">
		<h2>Sobre</h2>
			<ul>
				<li>
					<a href="about/contato.html">Quem somos</a>
				</li>
				<li>
					<a href="about/biografia.html#canvas">O Autor</a>
				</li>
				<li>
					<a target="_blank" href="https://apoia.se/geofisicando">Seja membro (APOIASE)</a>
				</li>
			</ul>
	</div>
	<div id="links-rodape-redes-sociais">
		<h2>Redes Sociais</h2>

			<ul id="img-redes-sociais">
				<li>
					<a target="_blank" href="https://www.youtube.com/c/Geofisicando" title="Geofisicando no Youtube">
						<img src="../images/youtube.png">
					</a>
				</li>
				<li>
					<a target="_blank" href="https://www.linkedin.com/in/rodolfo-andr%C3%A9-cardoso-neves-49a0778b/" title="Linkedin">
						<img src="../images/linkedin.png">
					</a>
				</li>
				<li>
					<a taget="_blank" href="https://twitter.com/RodolfoDirack" title="Twitter">
						<img src="../images/twitter.png">
					</a>
				</li>
				<li>
					<a target="_blank" href="https://www.instagram.com/rodolfodirack/?hl=pt-br" title="Instagram">
						<img src="../images/instagram.png">
					</a>
				</li>
				<li>
					<a target="_blank" href="https://www.facebook.com/geofisicando" title="Facebook">
						<img src="../images/face.png">
					</a>
				</li>
			</ul>

	</div>
</div>
&copy; 2018, Rodolfo Dirack. Todos os direitos reservados.
</div>

</body>
</html>
