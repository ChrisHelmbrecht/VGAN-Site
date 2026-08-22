<?php require_once __DIR__.'/../lib.php'; $page=$page??''; ?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($BRAND['name']) ?> — <?= e($pageTitle??'Premium dairy-free chocolate') ?></title>
<meta name="description" content="Eight seriously good, plant-based chocolate bars. <?= e($BRAND['tagline']) ?>.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php if($page==='wtb'): ?><link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/><?php endif; ?>
<link rel="stylesheet" href="assets/css/style.css">
<style>:root{--accent:<?= e($BRAND['accent']) ?>;--ink:<?= e($BRAND['ink']) ?>}</style>
</head>
<body>
<header class="topbar"><div class="wrap">
  <a class="brand" href="index.php"><?= logo_html() ?></a>
  <button class="navtoggle" id="navtoggle" aria-label="Menu" aria-expanded="false"><span></span><span></span><span></span></button>
  <span class="eyebrow"><?= strtoupper(e($BRAND['tagline'])) ?></span>
  <nav class="nav" id="nav">
    <a href="index.php#bars">Bars</a>
    <a href="story.php">Story</a>
    <a href="environment.php">Sustainability</a>
    <a href="where-to-buy.php">Where to buy</a>
    <a class="nav-cta" <?= ext($BRAND['amazon']) ?>>Shop</a>
  </nav>
</div></header>
<script>(function(){var b=document.getElementById('navtoggle'),n=document.getElementById('nav');if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.classList.toggle('open',o);b.setAttribute('aria-expanded',o);});})();</script>
