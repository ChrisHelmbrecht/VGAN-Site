<?php $pageTitle='Premium dairy-free chocolate'; $pageDesc='VGAN makes premium organic, dairy-free chocolate — six plant-based bars crafted taste-first. Vegan, USDA Organic, gluten-free and non-GMO. Find us in US stores and on Amazon.'; $page='home';
require __DIR__.'/lib.php';
/* first-visit redirect to the browser's language (only if no choice made yet) */
if(!isset($_GET['lang']) && !isset($_COOKIE['lang'])){
  $al=strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '');
  $pick = preg_match('/(?:^|,)\s*(?:nb|nn|no)\b/',$al) ? 'no'
        : (preg_match('/(?:^|,)\s*es\b/',$al) ? 'es' : '');
  if($pick){ header('Location: index.php?lang='.$pick); exit; }
}
$stores=get_stores(); $storeCount=count($stores);
$states=count(array_unique(array_column($stores,'s')));
$NUTRITION=get_nutrition();
$REVIEWS=get_reviews();
include __DIR__.'/partials/header.php';
?>

<!-- ============ HERO ============ -->
<section class="hero">
  <div class="hero-bg"><?= img_or_placeholder('Lifestyle-NorwayWinter.jpg','Norway winter lifestyle','HERO IMAGE','#101010','#FF1493') ?></div>
  <div class="hero-inner wrap">
    <div class="eyebrow accent"><?= tv('hero_eyebrow','PREMIUM · ORGANIC · PLANT-BASED') ?></div>
    <h1><?= tv('hero_h1_l1','TREAT YOURSELF,') ?><br><span class="mag"><?= tv('hero_h1_l2','LOUDLY.') ?></span></h1>
    <p><?= tv('hero_sub','Six seriously good chocolate bars. No dairy, no compromise, all joy.') ?></p>
    <div class="hero-cta">
      <a class="btn" <?= ext(shop_link()) ?>><?= tv('hero_cta1','Shop the bars') ?></a>
      <a class="btn ghost" href="where-to-buy.php"><?= tv('hero_cta2','Find a store') ?></a>
    </div>
  </div>
</section>

<!-- ============ TRUST BAR ============ -->
<section class="trustbar">
  <div class="wrap trustbar-inner">
    <div class="norway-item">
      <span><?= tv('trust_norway','Designed and<br>Developed in<br>Norway') ?></span>
      <?= img_or_placeholder('Flag_of_Norway.png','Norway','NO','#17264a','#fff') ?>
    </div>
    <?php foreach($TRUSTBAR as $b): ?>
      <div class="trust-item" title="<?= e($b['label']) ?>">
        <?= img_or_placeholder($b['img'],$b['label'],e($b['label']),'transparent','#FF1493') ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<!-- ============ THE 8 BARS ============ -->
<section id="bars" class="section">
  <div class="wrap">
    <div class="sec-head">
      <div class="eyebrow"><?= tv('range_eyebrow','THE RANGE') ?></div>
      <h2><?= tv('range_h2_l1','SIX WAYS') ?><br><?= tv('range_h2_l2','TO REBEL') ?></h2>
    </div>

    <div class="newdesign">
      <div class="newdesign-copy">
        <div class="eyebrow accent"><?= tv('newlook_eyebrow','NEW LOOK, INCOMING') ?></div>
        <h3><?= tv('nd_headline',$NEWDESIGNS['headline']) ?></h3>
        <p><?= tv('nd_intro',$NEWDESIGNS['intro']) ?></p>
      </div>
      <div class="newdesign-imgs">
        <?php foreach($NEWDESIGNS['images'] as $ni): ?>
          <div class="nd-img"><?= img_or_placeholder($ni,'New package design','NEW DESIGN','#1a1a1a','#FF1493') ?></div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="bars">
      <?php foreach($SKUS as $s): ?>
      <article class="bar" style="--c:<?= e($s['color']) ?>" data-sku="<?= e($s['name']) ?>" tabindex="0" role="button" aria-label="<?= e($s['name']) ?> — ingredients &amp; nutrition">
        <div class="bar-img"><?= img_or_placeholder($s['img'],$s['name'],e($s['name']),'#151515',$s['color']) ?></div>
        <div class="bar-body">
          <h3><?= e($s['name']) ?></h3>
          <p class="bar-desc"><?= tv('desc:'.$s['name'],$s['desc']) ?></p>
          <span class="bar-cocoa"><?= (int)$s['cocoa'] ?>% <?= tv('cocoa_word','cocoa') ?></span>
          <button class="bar-info" type="button"><?= tv('bar_info_btn','Ingredients &amp; Info') ?></button>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ SOCIAL PROOF ============ -->
<section class="reviews section">
  <div class="wrap">
    <div class="reviews-head">
      <div>
        <div class="eyebrow accent"><?= tv('reviews_eyebrow',"DON'T TAKE OUR WORD FOR IT") ?></div>
        <h2><?= tv('reviews_h2','LOVED OUT LOUD') ?></h2>
      </div>
      <div class="reviews-score">
        <div class="rscore"><?= e($RATING['stars']) ?><span>/5</span></div>
        <div class="rmeta"><?= (int)$RATING['count'] ?> <?= tv('reviews_word','reviews') ?> · <?= (int)$RATING['intent'] ?>% <?= tv('reviews_buy','would buy again') ?></div>
      </div>
    </div>
    <div class="review-grid">
      <?php foreach($REVIEWS as $r): ?>
      <figure class="review">
        <div class="rstars">★★★★★</div>
        <blockquote>"<?= e($r['text']) ?>"</blockquote>
        <figcaption><strong><?= e($r['name']) ?></strong> · <?= e($r['flavour']) ?></figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
    <p class="reviews-src"><?= tv('reviews_src','Verified reviews via Social Nature.') ?></p>
  </div>
</section>

<!-- ============ MANIFESTO / STORY ============ -->
<section id="story" class="manifesto">
  <div class="manifesto-bg"><?= img_or_placeholder('MANIFESTO_VGAN-Mold.jpg','Chocolate mould texture','','#0a0a0a','#FF1493') ?></div>
  <div class="wrap manifesto-inner">
    <div class="eyebrow accent">JOYFUL REBELLION</div>
    <p class="manifesto-lead"><?= tv('manifesto_lead',"We didn't set out to make <em>vegan</em> chocolate.<br>We set out to make chocolate so good you'd never ask what's <em>not</em> in it.") ?></p>
    <p class="manifesto-body"><?= tv('manifesto_body','Born in Norway. Made without dairy. Premium organic cocoa, clean ingredients and plenty of character. Everything you want from seriously good chocolate — just without the milk.') ?></p>
    <a class="link-arrow" href="story.php"><?= tv('manifesto_link','Our story &rarr;') ?></a>
  </div>
</section>

<!-- ============ VIDEOS (Thomas 9:16) ============ -->
<section class="videos section">
  <div class="wrap">
    <div class="sec-head">
      <div class="eyebrow accent"><?= tv('videos_eyebrow','STRAIGHT FROM THE SOURCE') ?></div>
      <h2><?= tv('videos_h2_l1','HEAR IT') ?><br><?= tv('videos_h2_l2','FROM THOMAS') ?></h2>
    </div>
    <div class="video-grid v3">
      <?php $viddir='assets/vids/'; foreach($VIDEOS as $i=>$v):
        $has=is_file(__DIR__.'/'.$viddir.$v['file']);
        $poster=''; $pbase=pathinfo($v['file'],PATHINFO_FILENAME);
        foreach(['assets/vids/','assets/img/'] as $pd){
          if(!empty($v['poster']) && is_file(__DIR__.'/'.$pd.$v['poster'])){ $poster=$pd.$v['poster']; break; }
          foreach(['png','jpg','jpeg','webp'] as $px){ if(is_file(__DIR__.'/'.$pd.$pbase.'.'.$px)){ $poster=$pd.$pbase.'.'.$px; break 2; } }
        } ?>
      <figure class="vid">
        <?php if($has): ?>
          <div class="vid-wrap">
            <video id="vid<?= $i ?>" preload="metadata" playsinline<?= $poster?' poster="'.e($poster).'"':'' ?>>
              <source src="<?= $viddir.e($v['file']) ?><?= $poster?'':'#t=0.1' ?>" type="video/mp4">
            </video>
            <button class="vid-play" type="button" data-target="vid<?= $i ?>" aria-label="Play video"></button>
          </div>
        <?php else: ?>
          <div class="vid-ph"><span class="play">&#9654;</span><em>coming soon</em></div>
        <?php endif; ?>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<script>
document.querySelectorAll('.vid-play').forEach(function(btn){
  var v=document.getElementById(btn.getAttribute('data-target')); if(!v) return;
  btn.addEventListener('click',function(){ v.setAttribute('controls',''); v.play(); btn.classList.add('hide'); });
  v.addEventListener('play',function(){ btn.classList.add('hide'); });
  v.addEventListener('pause',function(){ if(!v.ended) btn.classList.remove('hide'); });
  v.addEventListener('ended',function(){ btn.classList.remove('hide'); v.removeAttribute('controls'); try{v.currentTime=0.1;}catch(e){} });
});
</script>

<!-- ============ SUSTAINABILITY TEASER ============ -->
<section class="sustain-teaser">
  <div class="wrap sustain-inner">
    <div class="sustain-copy">
      <div class="eyebrow accent"><?= tv('sustain_eyebrow','FROM SOIL TO SHELF') ?></div>
      <h2><?= tv('sustain_h2_l1','GOOD CHOCOLATE') ?><br><?= tv('sustain_h2_l2',"SHOULDN'T COST") ?><br><?= tv('sustain_h2_l3','THE EARTH') ?></h2>
      <p><?= tv('sustain_p','Certified-organic cocoa from the same farming families in Sierra Leone and the Congo, sourced through our partner Tradin Organic — fully traceable, fairly paid, grown without cutting the rainforest down.') ?></p>
      <a class="btn" href="environment.php"><?= tv('sustain_cta',"See how it's made") ?></a>
    </div>
    <div class="co2-card">
      <div class="co2-num"><?= e($SUSTAIN['co2']) ?><span>kg</span></div>
      <p class="co2-label"><?= tv('co2_label','CO<sub>2</sub>e per 1&nbsp;kg, at the factory') ?></p>
      <div class="co2-vs">vs <strong><?= e($SUSTAIN['co2_vs']) ?>&nbsp;kg</strong> <?= tv('co2_vs_post','for most milk chocolate') ?></div>
    </div>
  </div>
</section>

<!-- ============ AMBASSADORS ============ -->
<section class="amb section">
  <div class="wrap">
    <div class="sec-head">
      <div class="eyebrow"><?= tv('amb_eyebrow','AMBASSADORS') ?></div>
      <h2><?= tv('amb_h2','OUR PEOPLE') ?></h2>
    </div>
    <div class="amb-grid">
      <?php foreach($AMBASSADORS as $a): ?>
      <article class="amb-card">
        <div class="amb-img"><?= img_or_placeholder($a['img'],$a['name'],e($a['name']),'#151515','#FF1493') ?></div>
        <div class="amb-body">
          <div class="amb-role"><?= tv('amb_role:'.$a['name'], $a['role']) ?></div>
          <h3><?= e($a['name']) ?></h3>
          <p><?= tv('amb_line:'.$a['name'], $a['line']) ?></p>
          <?php if($a['url']): ?><a class="link-arrow" <?= ext($a['url']) ?>><?= tv('amb_more','More &rarr;') ?></a><?php endif; ?>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ RETAILERS ============ -->
<section class="retailers">
  <div class="wrap">
    <div class="retailers-head"><div class="eyebrow accent"><?= tv('retail_eyebrow','STOCKED AT') ?></div><h2><?= tv('retail_h2','FIND US AT') ?></h2></div>
    <div class="retailer-row">
      <?php foreach($RETAILERS as $r): ?>
        <div class="retailer" title="<?= e($r['name']) ?>">
          <?= img_or_placeholder($r['img'],$r['name'],e($r['name']),'transparent','#9a9a9a') ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ WHERE TO BUY TEASER ============ -->
<section class="wtb-teaser">
  <div class="wrap wtb-inner">
    <div>
      <div class="eyebrow accent"><?= tv('store_eyebrow','STORES') ?></div>
      <h2><?= tv('store_h2_l1','FIND US IN') ?><br><span class="big-num"><?= $storeCount ?></span> <?= tv('store_h2_l2','STORES') ?></h2>
      <p><?= tv('store_p_pre','Across') ?> <?= $states ?> <?= tv('store_p_post','states — and growing. Track down your nearest bar.') ?></p>
      <a class="btn" href="where-to-buy.php"><?= tv('store_cta','Open the store finder') ?></a>
    </div>
  </div>
</section>

<!-- ============ NUTRITION / INGREDIENTS MODAL ============ -->
<div class="modal" id="skuModal" hidden>
  <div class="modal-panel" role="dialog" aria-modal="true" aria-labelledby="mkTitle">
    <button class="modal-close" id="mkClose" aria-label="Close">&times;</button>
    <div class="mk-head">
      <div class="mk-eyebrow" id="mkFlavour"></div>
      <h3 id="mkTitle"></h3>
      <span class="mk-cocoa" id="mkCocoa"></span>
      <p class="mk-taste" id="mkTaste"></p>
    </div>
    <div class="mk-body">
      <div class="mk-block">
        <h4><?= tv('mk_ingredients','Ingredients') ?></h4>
        <p id="mkIngredients"></p>
        <p class="mk-allergen"><strong><?= tv('mk_maycontain','May contain traces of:') ?></strong> <span id="mkAllergens"></span></p>
      </div>
      <div class="mk-block">
        <h4><?= tv('mk_nutrition','Nutrition') ?></h4>
        <div id="mkNutriWrap">
          <div class="mk-serving" id="mkServing"></div>
          <table class="mk-nutri" id="mkNutri"></table>
        </div>
        <p class="mk-soon" id="mkSoon" hidden><?= tv('mk_soon','Full nutrition details coming soon.') ?></p>
      </div>
    </div>
  </div>
</div>

<script><?php foreach($NUTRITION as $k=>&$row){ if(!empty($row['ingredients']))$row['ingredients']=tv('ing:'.$k,$row['ingredients']); if(!empty($row['allergens']))$row['allergens']=tv('allergens_all',$row['allergens']); } unset($row); ?>window.NUTRI = <?= json_encode($NUTRITION, JSON_UNESCAPED_UNICODE) ?>;
<?php $skm=array_column($SKUS,null,'name'); foreach($skm as $sn=>&$sm){ if(!empty($sm['taste'])) $sm['taste']=tv('taste:'.$sn,$sm['taste']); } unset($sm); ?>window.SKUMETA = <?= json_encode($skm, JSON_UNESCAPED_UNICODE) ?>;</script>
<script>
(function(){
  const modal=document.getElementById('skuModal');
  const rows=<?= json_encode([['energy',tv('nut_energy','Calories')],['fat',tv('nut_fat','Total fat')],['sat',tv('nut_sat','Saturated fat')],['sodium',tv('nut_sodium','Sodium')],['carbs',tv('nut_carbs','Total carbohydrate')],['sugars',tv('nut_sugars','Total sugars')],['added',tv('nut_added','Added sugars')],['fiber',tv('nut_fiber','Dietary fiber')],['protein',tv('nut_protein','Protein')],['calcium',tv('nut_calcium','Calcium')],['iron',tv('nut_iron','Iron')],['potassium',tv('nut_potassium','Potassium')],['caffeine',tv('nut_caffeine','Caffeine')]], JSON_UNESCAPED_UNICODE) ?>;
  function open(sku){
    const n=window.NUTRI[sku], m=window.SKUMETA[sku]||{};
    if(!n)return;
    document.getElementById('mkTitle').textContent=sku;
    document.getElementById('mkFlavour').textContent=(m.desc||'');
    document.getElementById('mkCocoa').textContent=(m.cocoa? m.cocoa+'% '+<?= json_encode(tv('cocoa_word','cocoa')) ?>:'');
    document.getElementById('mkTaste').textContent=(m.taste||'');
    document.getElementById('mkIngredients').textContent=n.ingredients||'';
    document.getElementById('mkAllergens').textContent=n.allergens||'';
    const wrap=document.getElementById('mkNutriWrap'), soon=document.getElementById('mkSoon');
    if(n.available){
      wrap.style.display=''; soon.hidden=true;
      document.getElementById('mkServing').textContent=n.serving||'';
      document.getElementById('mkNutri').innerHTML=rows.filter(r=>n[r[0]]).map(r=>
        '<tr><td>'+r[1]+'</td><td>'+n[r[0]]+'</td></tr>').join('');
    }else{
      wrap.style.display='none'; soon.hidden=false;
    }
    modal.hidden=false; document.body.style.overflow='hidden';
    document.getElementById('mkClose').focus();
  }
  function close(){modal.hidden=true; document.body.style.overflow='';}
  document.querySelectorAll('.bar').forEach(b=>{
    const go=e=>{ if(e.type==='keydown' && !(e.key==='Enter'||e.key===' '))return; e.preventDefault(); open(b.dataset.sku); };
    b.addEventListener('click',go); b.addEventListener('keydown',go);
  });
  document.getElementById('mkClose').addEventListener('click',close);
  modal.addEventListener('click',e=>{if(e.target===modal)close();});
  document.addEventListener('keydown',e=>{if(e.key==='Escape'&&!modal.hidden)close();});
})();
</script>


<!-- ============ FAQ (SEO/AEO) ============ -->
<?php $FAQ=[
  [tv('faq_q1','Is VGAN chocolate vegan and dairy-free?'), tv('faq_a1','Yes. Every VGAN bar is 100% plant-based and made without any dairy — no milk, and no hidden animal ingredients.')],
  [tv('faq_q2','Is it organic?'), tv('faq_a2','Yes. We use certified-organic cocoa and our bars are USDA Organic.')],
  [tv('faq_q3','Is it gluten-free and non-GMO?'), tv('faq_a3','Yes. All six bars are gluten-free and made without GMO ingredients.')],
  [tv('faq_q4','What flavours are there?'), tv('faq_a4','Six: Creamy Melt, Pink Love, Salty Almonds, Salty Caramel, Dark, and Coffee Beans.')],
  [tv('faq_q5','Where can I buy VGAN?'), tv('faq_a5','In US natural and grocery stores including Sprouts and Hy-Vee, and online via Amazon and Instacart. Use our store finder to find a shop near you.')],
]; ?>
<section class="section faq-sec">
  <div class="wrap">
    <div class="sec-head"><div class="eyebrow accent"><?= tv('faq_eyebrow','GOOD TO KNOW') ?></div><h2><?= tv('faq_h','QUESTIONS?') ?></h2></div>
    <div class="faq">
      <?php foreach($FAQ as $qa): ?>
      <div class="faq-item"><h3><?= $qa[0] ?></h3><p><?= $qa[1] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Product structured data -->
<?php foreach($SKUS as $s): ?>
<script type="application/ld+json"><?= json_encode([
 '@context'=>'https://schema.org','@type'=>'Product',
 'name'=>'VGAN '.$s['name'],
 'description'=>strip_tags(tv('taste:'.$s['name'],$s['taste'])),
 'image'=>$BASE.'assets/img/'.$s['img'],
 'brand'=>['@type'=>'Brand','name'=>'VGAN'],
 'category'=>'Chocolate bar',
 'additionalProperty'=>[
   ['@type'=>'PropertyValue','name'=>'Cocoa','value'=>$s['cocoa'].'%'],
   ['@type'=>'PropertyValue','name'=>'Dietary','value'=>'Vegan, dairy-free, organic, gluten-free, non-GMO'],
 ],
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<?php endforeach; ?>
<!-- FAQ structured data -->
<script type="application/ld+json"><?= json_encode([
 '@context'=>'https://schema.org','@type'=>'FAQPage',
 'mainEntity'=>array_map(function($qa){return ['@type'=>'Question','name'=>strip_tags($qa[0]),'acceptedAnswer'=>['@type'=>'Answer','text'=>strip_tags($qa[1])]];},$FAQ),
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>

<?php include __DIR__.'/partials/footer.php'; ?>
