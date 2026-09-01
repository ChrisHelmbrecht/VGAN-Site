<?php $pageTitle='Sustainability — from soil to shelf'; $pageDesc='How VGAN makes chocolate that\'s lighter on the planet: certified-organic, traceable cocoa, about 0.7 kg CO2e per kilo, B Corp certified — and no greenwashing.'; $page='env';
require __DIR__.'/lib.php';
include __DIR__.'/partials/header.php';
?>
<section class="sub-hero">
  <div class="sub-hero-bg"><?= img_or_placeholder('INGREDIENTS-AfricaCacaoPlantage.jpg','Cocoa agroforestry','','#0a0a0a','#FF1493') ?></div>
  <div class="wrap sub-hero-inner">
    <div class="eyebrow accent"><?= tv('sustain_eyebrow','FROM SOIL TO SHELF') ?></div>
    <h1><?= tv('env_hero_h1','THE VGAN<br><span class="mag">FOOTPRINT</span>') ?></h1>
    <p><?= tv('env_hero_p','Where our cocoa comes from, who grows it, and why dairy-free is better for the planet — openly and honestly, with none of the green spin.') ?></p>
  </div>
</section>

<!-- CO2 STAT -->
<section class="section co2-band">
  <div class="wrap co2-band-grid">
    <div class="co2-big"><div class="co2-num xl"><?= e($SUSTAIN['co2']) ?><span>kg</span></div><p><?= tv('env_co2_label','CO<sub>2</sub>e per 1&nbsp;kg of VGAN chocolate, at the factory') ?></p></div>
    <div class="co2-text">
      <h2><?= tv('env_co2_h2','DAIRY-FREE<br>DOES THE HEAVY LIFTING') ?></h2>
      <p><?= tv('env_co2_p','Skipping milk is one of the most effective things we can do to cut chocolate\'s carbon footprint. Ours comes in at about <strong>0.7 kg CO<sub>2</sub>e per kilo at the factory, before logistics</strong> (measured with CarbonCloud) — against <strong>4–13 kg CO<sub>2</sub>e</strong> for conventional milk chocolate. Same indulgence. A fraction of the impact. And we keep working to bring it lower.') ?>
      <?php if(!empty($SUSTAIN['report_file']) && is_file(__DIR__.'/assets/img/'.$SUSTAIN['report_file'])): ?>
        <a class="btn" href="assets/img/<?= e($SUSTAIN['report_file']) ?>" download><?= tv('env_dl','Download our sustainability report') ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- SOURCING STORY -->
<section class="section prose-sec">
  <div class="wrap prose">
    <div class="eyebrow accent"><?= tv('env_cocoa_eyebrow','OUR COCOA') ?></div>
    <h2><?= tv('env_cocoa_h2','THE SAME REGIONS,<br>LASTING RELATIONSHIPS') ?></h2>
    <p><?= tv('env_cocoa_p1','Our cocoa comes from Sierra Leone and the Democratic Republic of the Congo, through our long-standing partner <a href="https://www.tradinorganic.com" target="_blank" rel="noopener">Tradin Organic</a> in the Netherlands. We buy from established cooperatives and growing communities in the same regions over time. The cocoa is traceable through the supply chain and processed at Tradin\'s own facility in the Netherlands — so we have real control over where it comes from, right from the start.') ?></p>
    <p><?= tv('env_cocoa_p2','But traceability is about more than knowing where the beans come from. Through Tradin\'s programmes, farmers are paid above the local market level, with a premium for organic cocoa. There is systematic work to prevent and detect child and forced labour, while local savings groups help build more financial security between harvests. No big words — just long-term relationships, traceability and better conditions, season after season.') ?></p>

    <div class="feature-row">
      <div class="feature">
        <h3><?= tv('env_c1_h','Certified organic') ?></h3>
        <p><?= tv('env_c1_p','Grown to certified-organic standards, without synthetic pesticides or fertilisers. Our bars are USDA Organic — organic all the way through.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_c2_h','Low in heavy metals') ?></h3>
        <p><?= tv('env_c2_p','Cocoa from Sierra Leone naturally has low cadmium levels compared with cocoa from many other origins. We test it regularly for both cadmium and lead, so we can follow the levels from raw bean to finished bar.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_c3_h','Forest kept standing') ?></h3>
        <p><?= tv('env_c3_p','Cocoa is grown in agroforestry systems, where cocoa trees grow alongside other trees and plants. That makes better use of existing farmland and helps ease pressure on the forest around the Gola Rainforest, while Tradin\'s programmes support restoration and replanting.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_c4_h','Villages, not just farms') ?></h3>
        <p><?= tv('env_c4_p','Responsible cocoa growing is about more than the farm itself. Through local programmes, Tradin supports training, education and community development around cocoa production — so the value created reaches more people, not just the harvest.') ?></p>
      </div>
    </div>
    <p class="prose-note"><?= tv('env_cocoa_note','Want the detail behind any of this? Our partner publishes their sourcing and sustainability work in full at <a href="https://www.tradinorganic.com/sourcing/own-projects/sierra-leone-organic-cocoa-beans" target="_blank" rel="noopener">tradinorganic.com</a>.') ?></p>
  </div>
</section>

<!-- B-CORP + COMMITMENTS -->
<?php if(!empty($BCORP['certified'])): ?>
<section class="bcorp-band">
  <div class="wrap bcorp-inner">
    <div class="bcorp-badge"><?= img_or_placeholder($BCORP['badge'],'Certified B Corporation','B CORP','#0d0d0d','#FF1493') ?></div>
    <div class="bcorp-copy">
      <div class="eyebrow accent"><?= tv('env_bcorp_eyebrow','CERTIFIED B CORPORATION') ?></div>
      <h2><?= tv('env_bcorp_h2','WE PUT IT<br>IN WRITING') ?></h2>
      <p><?= tv('env_bcorp_p','B Corp certification means our work is assessed against independent standards for how we affect people and the planet — not just what we say, but what we can actually document. We carry that same thinking through the whole supply chain.') ?></p>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="section prose-sec">
  <div class="wrap prose">
    <div class="eyebrow accent"><?= tv('env_proof_eyebrow','PROOF, NOT PROMISES') ?></div>
    <h2><?= tv('env_proof_h2','WHAT WE STAND BEHIND') ?></h2>
    <p><?= tv('env_proof_p','We\'ve signed Norway\'s <strong>Guide Against Greenwashing</strong> (SKIFT), committing us to be concrete, transparent and accountable when we talk about sustainability. Here\'s some of what we can document.') ?></p>
    <div class="feature-row">
      <div class="feature">
        <h3><?= tv('env_p1_h','Certified organic &amp; vegan') ?></h3>
        <p><?= tv('env_p1_p','Our bars are certified organic and vegan — USDA Organic in the US and EU Organic in Europe, and always dairy-free.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_p2_h','Better conditions for cocoa farmers') ?></h3>
        <p><?= tv('env_p2_p','Through Tradin Organic and our work with <a href="https://fairfood.org" target="_blank" rel="noopener">Fairfood</a>, we work toward greater traceability in the cocoa chain and better economic conditions for the people who grow our cocoa.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_p3_h','Less plastic. More recyclable.') ?></h3>
        <p><?= tv('env_p3_p','We\'re systematically reducing plastic and making our packaging easier to recycle. The goal is packaging that protects the chocolate well, with as little unnecessary material as possible.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_p4_h','Measured, not guessed') ?></h3>
        <p><?= tv('env_p4_p','We use <a href="https://carboncloud.com" target="_blank" rel="noopener">CarbonCloud</a> to calculate our chocolate\'s carbon footprint — based on the ingredients and the supply chain behind the product. That gives us a documented baseline to measure, compare and reduce the footprint over time.') ?></p>
      </div>
    </div>
  </div>
</section>

<!-- GALLERY -->
<!-- CONCRETE ACTIONS -->
<section class="statement-band">
  <div class="wrap">
    <div class="eyebrow accent"><?= tv('env_ch_eyebrow','NO GREENWASHING') ?></div>
    <h2><?= tv('env_ch_h2','REAL CHANGE,<br>NOT NEW WRAPPING') ?></h2>
    <p><?= tv('env_ch_p','Anyone can print a leaf on a wrapper. We started somewhere else — with the ingredients, the recipe, the supply chain and the numbers. A lower footprint is about how the chocolate is actually made, not how the wrapper looks.') ?></p>
  </div>
</section>

<section class="section gallery-sec">
  <div class="wrap">
    <div class="eyebrow accent"><?= tv('env_gal_eyebrow','ON THE GROUND') ?></div>
    <h2 class="gallery-h"><?= tv('env_gal_h','WHERE IT GROWS') ?></h2>
    <div class="gallery" id="gallery">
      <?php foreach($GALLERY as $i=>$g): ?>
      <button class="gitem" data-full="assets/img/<?= e($g) ?>" aria-label="Enlarge photo <?= $i+1 ?>">
        <?= img_or_placeholder($g,'Cocoa sourcing photo','PHOTO','#151515','#FF1493') ?>
      </button>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="lightbox" id="lightbox" hidden><button class="lb-close" aria-label="Close">&times;</button><img id="lbimg" src="" alt=""></div>

<script>
(function(){
  const lb=document.getElementById('lightbox'),img=document.getElementById('lbimg');
  document.getElementById('gallery').addEventListener('click',e=>{
    const b=e.target.closest('.gitem'); if(!b)return;
    const t=b.querySelector('img'); if(!t)return; // skip placeholders
    img.src=b.dataset.full; lb.hidden=false;
  });
  const close=()=>{lb.hidden=true;img.src='';};
  lb.addEventListener('click',close);
  document.addEventListener('keydown',e=>{if(e.key==='Escape')close();});
})();
</script>

<?php include __DIR__.'/partials/footer.php'; ?>
