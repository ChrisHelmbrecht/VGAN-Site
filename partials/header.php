<?php require_once __DIR__.'/../lib.php'; $page=$page??''; ?><!DOCTYPE html>
<html lang="<?= current_lang() ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
  $BASE='https://lovevgan.com/';
  $self=basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
  $pth=($self==='index.php')?'':$self;
  $cur=current_lang();
  $canon=$BASE.$pth.($cur!=='en'?'?lang='.$cur:'');
  $ogimg=$BASE.'assets/img/newdesign-saltyalmonds.png';
  $metaDesc=$pageDesc ?? ('Six seriously good, plant-based chocolate bars. '.$BRAND['tagline'].'.');
  $ogLoc=['en'=>'en_US','no'=>'nb_NO','es'=>'es_ES'];
  $fullTitle=$BRAND['name'].' — '.($pageTitle??'Premium dairy-free chocolate');
?>
<title><?= e($fullTitle) ?></title>
<meta name="description" content="<?= e($metaDesc) ?>">
<meta name="robots" content="index,follow,max-image-preview:large">
<link rel="canonical" href="<?= e($canon) ?>">
<link rel="alternate" hreflang="en" href="<?= e($BASE.$pth) ?>">
<link rel="alternate" hreflang="no" href="<?= e($BASE.$pth.'?lang=no') ?>">
<link rel="alternate" hreflang="es" href="<?= e($BASE.$pth.'?lang=es') ?>">
<link rel="alternate" hreflang="x-default" href="<?= e($BASE.$pth) ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="VGAN">
<meta property="og:title" content="<?= e($fullTitle) ?>">
<meta property="og:description" content="<?= e($metaDesc) ?>">
<meta property="og:url" content="<?= e($canon) ?>">
<meta property="og:image" content="<?= e($ogimg) ?>">
<meta property="og:locale" content="<?= e($ogLoc[$cur]??'en_US') ?>">
<?php foreach($ogLoc as $lc=>$og){ if($lc!==$cur) echo '<meta property="og:locale:alternate" content="'.$og.'">'; } ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($fullTitle) ?>">
<meta name="twitter:description" content="<?= e($metaDesc) ?>">
<meta name="twitter:image" content="<?= e($ogimg) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php if($page==='wtb'): ?><link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/><?php endif; ?>
<link rel="icon" href="assets/img/favicon.ico" sizes="any">
<link rel="shortcut icon" href="assets/img/favicon.ico">
<link rel="stylesheet" href="assets/css/style.css">
<style>:root{--accent:<?= e($BRAND['accent']) ?>;--ink:<?= e($BRAND['ink']) ?>}</style>
<script type="application/ld+json"><?= json_encode([
 '@context'=>'https://schema.org','@type'=>'Organization','@id'=>$BASE.'#organization',
 'name'=>'VGAN','legalName'=>$COMPANY['name'],'url'=>$BASE,
 'logo'=>$BASE.'assets/img/'.$BRAND['logo'],'image'=>$ogimg,
 'description'=>'Premium organic, dairy-free (vegan) chocolate \u2014 six plant-based bars crafted taste-first.',
 'slogan'=>$BRAND['tagline'],'email'=>$COMPANY['email'],
 'address'=>['@type'=>'PostalAddress','streetAddress'=>$COMPANY['addr'][0],'addressLocality'=>'New York','addressRegion'=>'NY','postalCode'=>'10017','addressCountry'=>'US'],
 'sameAs'=>[$BRAND['instagram'],$BRAND['amazon']],
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<script type="application/ld+json"><?= json_encode([
 '@context'=>'https://schema.org','@type'=>'WebSite','@id'=>$BASE.'#website',
 'url'=>$BASE,'name'=>'VGAN','publisher'=>['@id'=>$BASE.'#organization'],'inLanguage'=>['en','no','es'],
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>
<header class="topbar"><div class="wrap">
  <a class="brand" href="index.php"><?= logo_html() ?></a>
  <button class="navtoggle" id="navtoggle" aria-label="Menu" aria-expanded="false"><span></span><span></span><span></span></button>
  <span class="eyebrow"><?= strtoupper(e($BRAND['tagline'])) ?></span>
  <?= lang_switcher() ?>
  <nav class="nav" id="nav">
    <a href="index.php#bars"><?= tv('nav_bars','Bars') ?></a>
    <a href="story.php"><?= tv('nav_story','Story') ?></a>
    <a href="environment.php"><?= tv('nav_sustainability','Sustainability') ?></a>
    <a href="where-to-buy.php"><?= tv('nav_wtb','Where to buy') ?></a>
    <a class="nav-cta" <?= ext(shop_link()) ?>><?= tv('nav_shop','Shop') ?></a>
  </nav>
</div></header>
<script>(function(){var b=document.getElementById('navtoggle'),n=document.getElementById('nav');if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.classList.toggle('open',o);b.setAttribute('aria-expanded',o);});})();</script>
