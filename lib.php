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

/* ---- i18n / language ---- */
function current_lang(){
  static $l=null; if($l!==null) return $l;
  $ok=['en','no','es'];
  if(isset($_GET['lang'])&&in_array($_GET['lang'],$ok,true)){ $l=$_GET['lang']; @setcookie('lang',$l,time()+31536000,'/'); }
  elseif(isset($_COOKIE['lang'])&&in_array($_COOKIE['lang'],$ok,true)){ $l=$_COOKIE['lang']; }
  else { $l='en'; }
  return $l;
}
function load_lang(){
  static $d=null; if($d!==null) return $d;
  $cur=current_lang();
  $d = ($cur!=='en' && is_file(__DIR__.'/lang/'.$cur.'.php')) ? include __DIR__.'/lang/'.$cur.'.php' : [];
  if(!is_array($d)) $d=[]; return $d;
}
/* translated value or English default */
function tv($k,$def=''){ $d=load_lang(); return array_key_exists($k,$d)?$d[$k]:$def; }
function lang_url($lang){
  $path=strtok($_SERVER['REQUEST_URI']??'index.php','?');
  $q=$_GET; $q['lang']=$lang;
  return $path.'?'.http_build_query($q);
}
function lang_switcher($cls='langsw'){
  $cur=current_lang(); $o='<div class="'.$cls.'">';
  foreach(['en'=>'EN','no'=>'NO','es'=>'ES'] as $c=>$lbl){
    $o.='<a href="'.htmlspecialchars(lang_url($c)).'"'.($cur===$c?' class="on"':'').'>'.$lbl.'</a>';
  }
  return $o.'</div>';
}
function company_name(){ global $COMPANY; return e(tv('company_name', $COMPANY['name'])); }
function company_addr_html(){ global $COMPANY; return tv('company_addr', e($COMPANY['addr'][0]).'<br>'.e($COMPANY['addr'][1]).'<br>United States'); }
function shop_link(){ global $BRAND; return current_lang()==='no' ? 'https://meny.no/sok?query=vgan&expanded=products' : $BRAND['amazon']; }
current_lang(); // resolve + set cookie before any output
