<?php
class Menu{

    public function buildMenuFromArray(&$MENU_ARRAY){
        $menu='';
        foreach($MENU_ARRAY as $key => $value){
            $menu = $menu.'<li class="selected">';
            $menu = $menu.'<a href="'.$value.'">'.$key.'</a>';
            $menu = $menu.'</li>';
        }
        return $menu;
    }
}
?>