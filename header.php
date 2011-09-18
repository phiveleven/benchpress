<?
  header('Content-Type: text/html; charset=utf-8');
  header('X-UA-Compatible: IE=edge,chrome=1');

  $title = is_home()? bloginfo('title') : wp_title('', true);
  $description = bloginfo('description');
  $keywords = '';
  $webfonts = '';
  $stylesheet = bloginfo('stylesheet_url');
  $template_url = bloginfo('template_url');
  $atom_url = bloginfo('atom_url');
  $rss_url = bloginfo('rss2_url');

  $logo_url = "$template_url/img/logo-main.png";

?><!DOCTYPE html>
<title><?= $title ?></title>
<meta name=description content="<?= $description  ?>" />
<meta name=keywords content="<?= $keywords ?>" />

<link href="http://fonts.googleapis.com/css?family=<?= $webfonts ?>" rel=stylesheet />
<link rel="stylesheet" type="text/css" media="all" href="<?= $stylesheet ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]><script src="<? $template_url ?>/js/html5shim.js"></script><![endif]-->

<link rel=alternate href="<?= $atom_url ?>" type="application/atom+xml" title="Atom feed" />
<link rel=alternate href="<?= $rss_url ?>" type="application/rss+xml" title="RSS 2.0" />

<? wp_head() ?>
<body><a name=top id=top></a>
<header>
  <img id=logo alt="<? bloginfo('title') ?>" src="<?= $logo_url ?>" />
  <nav><? array_map(function($page){
    echo "<a href=\"{$page->post_name}\">$page->post_title</a>";
  }, get_pages()) ?></nav>
</header>
<section id=main>
