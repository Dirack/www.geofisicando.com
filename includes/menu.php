<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

include "includes/Menu.php";
?>
	<nav id="menu">
		<div id="menu-center">
			<ul id="homebotao">
				<?php
					$menu = new Menu();
					$menu_array=array(
						"HOME"=>"artigos/index.php",
						"TUTORIAIS"=>"artigos/index.php",
						"CURSOS"=>"artigos/index.php",
						"PROGRAMAS"=>"artigos/index.php",
						"JOGOS"=>"artigos/index.php"
					);
					echo $menu->buildMenuFromArray($menu_array);
				?>
			</ul>
		</div>
	</nav>

