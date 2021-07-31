<?php

/**
 * Custom Menu Walker Class for `Header Menu`
 * 
*/
class Header_Menu_Walker extends Walker_Nav_Menu {
	
	function start_lvl(&$output, $depth=0, $args=[]) {
		$output .= "<ul>";
	}

	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		if(!$args->walker->has_children) {
			$output .= "<li>";
		} else {
			$output .= "<li class='dropdown'>";
		}

		if ($item->url) {
			if(!$args->walker->has_children && $depth == 0) {
				$output .= '<a class="nav-link scrollto" href="' . $item->url . '">';
			} else {
				$output .= '<a href="' . $item->url . '"><span>';
			}
		} else {
			$output .= '<span>';
		}

		$output .= $item->title;

		if ($item->url) {
			if(!$args->walker->has_children) {
				$output .= '</a>';
			} elseif ($args->walker->has_children && $depth ==0) {
				$output .= '</span><i class="bi bi-chevron-down"></i></a>';
			} else {
				$output .= '</span><i class="bi bi-chevron-right"></i></a>';
			}
		} else {
			$output .= '</span>';
		}
	}

	function end_lvl(&$output, $depth=0, $args=null) {
		$output .= '</ul>';
	}

}

class Footer_Menu_Walker extends Walker_Nav_Menu {

	function start_lvl(&$output, $depth=0, $args=[]) {
		$output .= "";
	}

	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
		if($depth == 0) {
			$output .= '<li>';
		} else {
			$output .= '';
		}

		if ($item->url) {
			if($depth == 0) {
				$output .= '<i class="bx bx-chevron-right"></i><a href="' . $item->url . '">';
			} else {
				$output .= '';
			}
		} else {
			$output .= '<i class="bx bx-chevron-right"><span>';
		}

		if ($depth == 0) {
			$output .= $item->title;
		}

		if ($item->url) {
			if($depth == 0) {
				$output .= '</a>';
			} else {
				$output .= '';
			}
		} else {
			$output .= '</span>';
		}

	}

	function end_lvl(&$output, $depth=0, $args=null) {
		$output .= '';
	}

}