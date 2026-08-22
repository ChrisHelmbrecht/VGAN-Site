<?php $pageTitle='Premium dairy-free chocolate'; $page='home';
require __DIR__.'/lib.php';
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
    <div class="eyebrow accent">PREMIUM · ORGANIC · PLANT-BASED</div>
    <h1>TREAT YOURSELF,<br><span class="mag">LOUDLY.</span></h1>
    <p>Eight seriously good chocolate bars. No dairy, no compromise, all joy.</p>
    <div class="hero-cta">
      <a class="btn" <?= ext($BRAND['amazon']) ?>>Shop the bars</a>
      <a class="btn ghost" href="where-to-buy.php">Find a store</a>
    </div>
  </div>
</section>

<!-- ============ TRUST BAR ============ -->
<section class="trustbar">
  <div class="wrap trustbar-inner">
    <?php foreach($TRUSTBAR as $b): ?>
      <div class="trust-item" title="<?= e($b['label']) ?>">
        <?= img_or_placeholder($b['img'],$b['label'],e($b['label']),'transparent','#FF1493') ?>
        <span><?= e($b['label']) ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ============ DESIGNED IN NORWAY ============ -->
<section class="norway-cred">
  <div class="wrap">
    <div class="norway-badge">
      <span>Designed and<br>Developed in<br>Norway</span>
      <?= img_or_placeholder('Flag_of_Norway.png','Norway','NORWAY','#17264a','#fff') ?>
    </div>
  </div>
</section>

<!-- ============ THE 8 BARS ============ -->
<section id="bars" class="section">
  <div class="wrap">
    <div class="sec-head">
      <div class="eyebrow">THE RANGE</div>
      <h2>EIGHT WAYS<br>TO REBEL</h2>
    </div>

    <div class="newdesign">
      <div class="newdesign-copy">
        <div class="eyebrow accent">NEW LOOK, INCOMING</div>
        <h3><?= e($NEWDESIGNS['headline']) ?></h3>
        <p><?= e($NEWDESIGNS['intro']) ?></p>
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
          <p class="bar-desc"><?= e($s['desc']) ?></p>
          <span class="bar-cocoa"><?= (int)$s['cocoa'] ?>% cocoa</span>
          <button class="bar-info" type="button">Ingredients &amp; Info</button>
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
        <div class="eyebrow accent">DON'T TAKE OUR WORD FOR IT</div>
        <h2>LOVED OUT LOUD</h2>
      </div>
      <div class="reviews-score">
        <div class="rscore"><?= e($RATING['stars']) ?><span>/5</span></div>
        <div class="rmeta"><?= (int)$RATING['count'] ?> reviews · <?= (int)$RATING['intent'] ?>% would buy again</div>
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
    <p class="reviews-src">Verified reviews via Social Nature.</p>
  </div>
</section>

<!-- ============ MANIFESTO / STORY ============ -->
<section id="story" class="manifesto">
  <div class="manifesto-bg"><?= img_or_placeholder('MANIFESTO_VGAN-Mold.jpg','Chocolate mould texture','','#0a0a0a','#FF1493') ?></div>
  <div class="wrap manifesto-inner">
    <div class="eyebrow accent">JOYFUL REBELLION</div>
    <p class="manifesto-lead">We didn't set out to make <em>vegan</em> chocolate.<br>
    We set out to make chocolate so good you'd never ask what's <em>not</em> in it.</p>
    <p class="manifesto-body">Born in Norway, made without dairy, built for people who treat themselves on purpose. Premium organic cocoa, clean ingredients, and a bit of an attitude — indulgence without the guilt trip, and none of the beige.</p>
    <a class="link-arrow" href="story.php">Our story &rarr;</a>
  </div>
</section>

<!-- ============ VIDEOS (Thomas 9:16) ============ -->
<section class="videos section">
  <div class="wrap">
    <div class="sec-head">
      <div class="eyebrow accent">STRAIGHT FROM THE SOURCE</div>
      <h2>HEAR IT<br>FROM THOMAS</h2>
    </div>
    <div class="video-grid">
      <?php foreach($VIDEOS as $v): ?>
      <figure class="vid">
        <?php if(is_file(__DIR__.'/assets/img/'.$v['file'])): ?>
          <video controls preload="none" playsinline
            <?php if(is_file(__DIR__.'/assets/img/'.$v['poster'])): ?>poster="assets/img/<?= e($v['poster']) ?>"<?php endif; ?>>
            <source src="assets/img/<?= e($v['file']) ?>" type="video/mp4">
          </video>
        <?php else: ?>
          <div class="vid-ph">
            <?php if(is_file(__DIR__.'/assets/img/'.$v['poster'])): ?>
              <img src="assets/img/<?= e($v['poster']) ?>" alt="<?= e($v['title']) ?>">
            <?php endif; ?>
            <span class="play">▶</span>
            <em>drop <?= e($v['file']) ?> into assets/img/</em>
          </div>
        <?php endif; ?>
        <figcaption><?= e($v['title']) ?></figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ SUSTAINABILITY TEASER ============ -->
<section class="sustain-teaser">
  <div class="wrap sustain-inner">
    <div class="sustain-copy">
      <div class="eyebrow accent">FROM SOIL TO SHELF</div>
      <h2>GOOD CHOCOLATE<br>SHOULDN'T COST<br>THE EARTH</h2>
      <p>Certified-organic cocoa from the same farming families in Sierra Leone and the Congo, sourced through our partner Tradin Organic — fully traceable, fairly paid, grown without cutting the rainforest down.</p>
      <a class="btn" href="environment.php">See how it's made</a>
    </div>
    <div class="co2-card">
      <div class="co2-num"><?= e($SUSTAIN['co2']) ?><span>kg</span></div>
      <p class="co2-label">CO<sub>2</sub> per 1&nbsp;kg of our chocolate</p>
      <div class="co2-vs">vs <strong><?= e($SUSTAIN['co2_vs']) ?>&nbsp;kg</strong> for most milk chocolate</div>
    </div>
  </div>
</section>

<!-- ============ AMBASSADORS ============ -->
<section class="amb section">
  <div class="wrap">
    <div class="sec-head">
      <div class="eyebrow">AMBASSADORS</div>
      <h2>OUR PEOPLE</h2>
    </div>
    <div class="amb-grid">
      <?php foreach($AMBASSADORS as $a): ?>
      <article class="amb-card">
        <div class="amb-img"><?= img_or_placeholder($a['img'],$a['name'],e($a['name']),'#151515','#FF1493') ?></div>
        <div class="amb-body">
          <div class="amb-role"><?= e($a['role']) ?></div>
          <h3><?= e($a['name']) ?></h3>
          <p><?= e($a['line']) ?></p>
          <?php if($a['url']): ?><a class="link-arrow" <?= ext($a['url']) ?>>More &rarr;</a><?php endif; ?>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ RETAILERS ============ -->
<section class="retailers">
  <div class="wrap">
    <div class="eyebrow accent" style="text-align:center">FIND US AT</div>
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
      <div class="eyebrow accent">STOCKISTS</div>
      <h2>FIND US IN<br><span class="big-num"><?= $storeCount ?></span> STORES</h2>
      <p>Across <?= $states ?> states — and growing. Track down your nearest bar.</p>
      <a class="btn" href="where-to-buy.php">Open the store finder</a>
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
        <h4>Ingredients</h4>
        <p id="mkIngredients"></p>
        <p class="mk-allergen"><strong>May contain:</strong> <span id="mkAllergens"></span></p>
      </div>
      <div class="mk-block">
        <h4>Nutrition</h4>
        <div id="mkNutriWrap">
          <div class="mk-serving" id="mkServing"></div>
          <table class="mk-nutri" id="mkNutri"></table>
        </div>
        <p class="mk-soon" id="mkSoon" hidden>Full nutrition details coming soon.</p>
      </div>
    </div>
  </div>
</div>

<script>window.NUTRI = <?= json_encode($NUTRITION, JSON_UNESCAPED_UNICODE) ?>;
window.SKUMETA = <?= json_encode(array_column($SKUS,null,'name'), JSON_UNESCAPED_UNICODE) ?>;</script>
<script>
(function(){
  const modal=document.getElementById('skuModal');
  const rows=[['energy','Calories'],['fat','Total fat'],['sat','Saturated fat'],['sodium','Sodium'],
    ['carbs','Total carbohydrate'],['sugars','Total sugars'],['added','Added sugars'],['fiber','Dietary fiber'],
    ['protein','Protein'],['calcium','Calcium'],['iron','Iron'],['potassium','Potassium'],['caffeine','Caffeine']];
  function open(sku){
    const n=window.NUTRI[sku], m=window.SKUMETA[sku]||{};
    if(!n)return;
    document.getElementById('mkTitle').textContent=sku;
    document.getElementById('mkFlavour').textContent=(m.desc||'');
    document.getElementById('mkCocoa').textContent=(m.cocoa? m.cocoa+'% cocoa':'');
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

<?php include __DIR__.'/partials/footer.php'; ?>
