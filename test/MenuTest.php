<?php
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase{
    
    public function testSimpleMenuBuildOneItem(){
        $menu = new Menu();

        $menu_simple_array=array("HOME"=>"artigos/index.php",);

        $proc = $menu->buildMenuFromArray($menu_simple_array);

        $this->assertEquals(
            '<li class="selected"><a href="artigos/index.php">HOME</a></li>',
            $proc);

    }

    public function testSimpleMenuBuildFiveItems(){
        $menu = new Menu();

        $menu_array=array(
            "HOME"=>"artigos/index.php",
            "TUTORIAIS"=>"artigos/index.php",
            "CURSOS"=>"artigos/index.php",
            "PROGRAMAS"=>"artigos/index.php",
            "JOGOS"=>"artigos/index.php"
        );

        $proc = $menu->buildMenuFromArray($menu_array);

        $this->assertEquals(
            '<li class="selected"><a href="artigos/index.php">HOME</a></li>'
            .'<li class="selected"><a href="artigos/index.php">TUTORIAIS</a></li>'
            .'<li class="selected"><a href="artigos/index.php">CURSOS</a></li>'
            .'<li class="selected"><a href="artigos/index.php">PROGRAMAS</a></li>'
            .'<li class="selected"><a href="artigos/index.php">JOGOS</a></li>',
            $proc);

    }
}
?>