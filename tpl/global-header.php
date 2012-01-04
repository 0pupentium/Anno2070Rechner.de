<?php

	$page->addContent(
		'<!doctype html>',
		'<html lang="'.i18n::getShort().'">',
		'<head>',
			'<base href="'.BASEURL.'" />',
			'<meta charset="UTF-8">',
			'<meta name="viewport" content="width=device-width, initial-scale=1.0">',
			'<title>'. $page->getTitle() .' &laquo; '. __($site->getTitle()) .'</title>',
			'<link rel="shortcut icon" href="'.BASEURL.'favicon.ico" />',
			'<link rel="stylesheet" href="css/base.css?v='.( $site->getOption('debug_mode') ? time() : $site->getOption('version') ).'" media="all" />',
			'<link rel="stylesheet" href="css/styles.css?v='.( $site->getOption('debug_mode') ? time() : $site->getOption('version') ).'" media="all" />',
 			'<script type="text/javascript" src="js/jquery-1.7.1'.( $site->getOption('debug_mode') ? '' : '-min' ).'.js"></script>',
 			'<script type="text/javascript" src="js/jquery-ui-1.8.16-min.js"></script>',
 			'<script type="text/javascript" src="js/jquery-ui-selectmenu.js"></script>',
			'<script type="text/javascript" src="js/script.js?v='.( $site->getOption('debug_mode') ? time() : $site->getOption('version') ).'"></script>',
		'</head>',
		'<body class="'.$page->getIdSanitized().' bg-eco">',
			'<div id="wrap">',
				'<header>',
					'<section>',
						'<a id="home-link" href="'.i18n::url(BASEURL).'" title="'. $site->getTitle() .' &raquo; '.__('Startseite').'"></a>',
						'<h1 id="site-title">'. $site->getTitle() .'</h1>',
						'<div id="user-info"'.( !User::isLoggedIn() ? ' class="hidden"' : '' ).'>'.( User::isLoggedIn() ? '<small>'.__('angemeldet als').'</small> '.User::_()->getLogin() : __('Du bist nicht angemeldet.') ).'</div>',
						'<ul id="user-menu" class="'.( User::isLoggedIn() ? 'logged-in' : '' ).'">',
							'<li class="save">',
								'<a href="'.i18n::url('saved-data').'" title="'.__('Gespeicherte Daten').'"></a>',
							'</li>',
							( User::isLoggedIn() ?
								'<li class="profile"><a href="'.i18n::url('account').'" title="'.__('Benutzerkonto').'"></a></li>'
								.'<li class="logout"><a href="'.i18n::url('logout').'" title="'.__('Abmelden').'"></a></li>'
							:
								'<li class="register"><a href="'.i18n::url('register').'" title="'.__('Registrieren').'"></a></li>'
								.'<li class="login"><a href="'.i18n::url('login').'" title="'.__('Anmelden').'"></a></li>'
							),
						'</ul>',
						'<ul id="menu">',
							'<li class="'.( $page->getID()=='population'?'current':'' ).'"><a href="'.i18n::url('population').'" title="">'.__('Bev&ouml;lkerung').'</a></li>',
							'<li class="'.( $page->getID()=='commoditychains'?'current':'' ).'"><a href="'.i18n::url('commoditychains').'" title="">'.__('Produktionsketten').'</a></li>',
							'<li class="'.( $page->getID()=='database'?'current':'' ).'"><a href="'.i18n::url('database').'" title="">'.__('Datenbank').'</a></li>',
							( User::isLoggedIn() && User::_()->hasRight('admin') ? '<li class="'.( $page->getID()=='rda-import'?'current':'' ).'"><a href="'.i18n::url('rda-import').'" title="">'.__('Daten importieren').'</a></li>' :''),
							'<li class="'.( $page->getID()=='info'?'info':'' ).'"><a href="'.i18n::url('info').'" title="">'.__('Info').'</a></li>',
						'</ul>',
						'<img id="under-development" src="img/under-development-small.png" alt="" title="Under Development" />',
					'</section>',
				'</header>',
				'<div id="content">',
					'<section>'
	);

?>
