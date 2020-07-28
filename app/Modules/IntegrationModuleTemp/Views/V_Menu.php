<?php

$menu = '';
switch (session()->get('roles')){
	case ROLE_ADMIN:
		$link = base_url('Users/manageUser');
		$active = (current_url() == $link) ? 'active':'';
		$menu .= '<li class="nav-item">';
		$menu .= '<a class="nav-link '.$active.'" href="'.$link.'" role="button" aria-expanded="false">Gestion des utilisateurs</a>';
		$menu .= '</li>';

		break;
}

echo $menu;
