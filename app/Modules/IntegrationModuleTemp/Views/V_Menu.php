<?php

$menu = '';

switch (session()->get('roles')){
	case ROLE_ADMIN:
		$link = base_url();
		$active = (current_url() !== $link.'/') ? '':'rf-menu-item-active';
		$menu .= '<a href="'.$link.'" class="rf-menu-item">';
		$menu .= '<div class="rf-menu-item-div '.$active.'">';
		$menu .= '<div class="rf-menu-item-logo"><i class="fas fa-home rf-menu-item-logo" ></i></div>';
		$menu .= '<span class="rf-menu-item-title">Accueil</span>';
		$menu .= '</div>';
		$menu .= '</a>';

		$link = base_url('Users/manage');
		$active = (strpos(current_url(),$link) === false) ? '':'rf-menu-item-active';
		$menu .= '<a href="'.$link.'" class="rf-menu-item">';
		$menu .= '<div class="rf-menu-item-div '.$active.'">';
		$menu .= '<div class="rf-menu-item-logo"><i class="fas fa-users-cog"></i></i></div>';
		$menu .= '<span class="rf-menu-item-title">Gestion des utilisateurs</span>';
		$menu .= '</div>';
		$menu .= '</a>';
}

echo $menu;
