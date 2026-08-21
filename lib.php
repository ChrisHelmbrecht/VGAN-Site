<?php
require __DIR__.'/config.php';

/* ---- store data: from MySQL if enabled, else flat JSON ---- */
function get_stores(){
  if(USE_DB){
    try{
      $pdo=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASS,
        [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
      $rows=$pdo->query('SELECT name n,addr a,city c,state s,zip z,phone p,lat,lng FROM stores')->fetchAll(PDO::FETCH_ASSOC);
      foreach($rows as &$r){$r['lat']=(float)$r['lat'];$r['lng']=(float)$r['lng'];}
      return $rows;
    }catch(Throwable $e){ /* fall through to file */ }
  }
  $f=__DIR__.'/data/stores.json';
  return is_file($f)?json_decode(file_get_contents($f),true):[];
}

/* ---- per-SKU nutrition + ingredients ---------------------- */
function get_nutrition(){
  $f=__DIR__.'/data/nutrition.php';
  return is_file($f) ? include $f : [];
}
function get_reviews(){
  $f=__DIR__.'/data/reviews.php';
  return is_file($f) ? include $f : [];
}

/* ---- helpers ---------------------------------------------- */
function e($s){ return htmlspecialchars($s,ENT_QUOTES,'UTF-8'); }

/* every external link opens in a new tab, safely */
function ext($url){ return 'href="'.e($url).'" target="_blank" rel="noopener"'; }

/* logo image if present, else the text wordmark */
function logo_html($class=''){
  global $BRAND;
  $p=__DIR__.'/assets/img/'.$BRAND['logo'];
  if(is_file($p)) return '<img class="logo-img '.e($class).'" src="assets/img/'.e($BRAND['logo']).'" alt="'.e($BRAND['name']).'">';
  return '<span class="wordmark '.e($class).'">'.$BRAND['wordmark'].'</span>';
}

/* image tag that degrades to a branded placeholder if missing */
function img_or_placeholder($file,$alt,$label,$bg='#141414',$fg='#FF1493'){
  $path=__DIR__.'/assets/img/'.$file;
  if(is_file($path)){
    return '<img src="assets/img/'.e($file).'" alt="'.e($alt).'" loading="lazy">';
  }
  return '<div class="ph" style="--phbg:'.e($bg).';--phfg:'.e($fg).'"><span>'.e($label).'</span><em>drop '.e($file).' into assets/img/</em></div>';
}
