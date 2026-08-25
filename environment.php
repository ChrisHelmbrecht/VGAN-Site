<?php $pageTitle='Sustainability — from soil to shelf'; $pageDesc='How VGAN makes chocolate that\'s lighter on the planet: certified-organic, traceable cocoa, about 1.2 kg CO2e per kilo, B Corp certified — and no greenwashing.'; $page='env';
require __DIR__.'/lib.php';
include __DIR__.'/partials/header.php';
?>
<section class="sub-hero">
  <div class="sub-hero-bg"><?= img_or_placeholder('INGREDIENTS-AfricaCacaoPlantage.jpg','Cocoa agroforestry','','#0a0a0a','#FF1493') ?></div>
  <div class="wrap sub-hero-inner">
    <div class="eyebrow accent"><?= tv('sustain_eyebrow','FROM SOIL TO SHELF') ?></div>
    <h1><?= tv('env_hero_h1','THE VGAN<br><span class="mag">FOOTPRINT</span>') ?></h1>
    <p><?= tv('env_hero_p','Where our cocoa comes from, who grows it, and why dairy-free is better for the planet — laid out as openly as we can.') ?></p>
  </div>
</section>

<!-- CO2 STAT -->
<section class="section co2-band">
  <div class="wrap co2-band-grid">
    <div class="co2-big"><div class="co2-num xl"><?= e($SUSTAIN['co2']) ?><span>kg</span></div><p><?= tv('env_co2_label','CO<sub>2</sub>e per 1&nbsp;kg of VGAN chocolate') ?></p></div>
    <div class="co2-text">
      <h2><?= tv('env_co2_h2','DAIRY-FREE<br>DOES THE HEAVY LIFTING') ?></h2>
      <p><?= tv('env_co2_a','Skipping milk is the single biggest thing chocolate can do for its carbon footprint. Ours comes in at about ') ?><strong><?= e($SUSTAIN['co2']) ?><?= tv('env_co2_unit','&nbsp;kg CO<sub>2</sub>e per kilo') ?></strong> (<?= e($SUSTAIN['co2_source']) ?>)<?= tv('env_co2_mid',' — against ') ?><strong><?= e($SUSTAIN['co2_vs']) ?>&nbsp;kg</strong><?= tv('env_co2_end',' for most conventional milk chocolate. Same indulgence, a fraction of the impact — and we\'re working to push it below&nbsp;1.') ?></p>
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
    <h2><?= tv('env_cocoa_h2','THE SAME FARMERS,<br>SEASON AFTER SEASON') ?></h2>
    <p><?= tv('env_cocoa_p1','Our cocoa comes from the same farming families in <strong>Sierra Leone</strong> and the <strong>Democratic Republic of the Congo</strong>, sourced through our trusted partner <a href="https://www.tradinorganic.com" target="_blank" rel="noopener">Tradin Organic</a> in the Netherlands. Every bag is registered and traceable back to the farmer who grew it, then processed at Tradin\'s own facility in Holland — so we always know exactly where our chocolate begins.') ?></p>
    <p><?= tv('env_cocoa_p2','Tradin doesn\'t just buy beans. Farmers are paid fairly, well above the local market, with an organic premium on top. A dedicated child-protection programme guards against child and forced labour, and farmer-run village savings groups keep growers out of debt between harvests. It isn\'t a Fairtrade label on our wrapper — it\'s a direct, long-term relationship that does the same job, and then some.') ?></p>

    <div class="feature-row">
      <div class="feature">
        <h3><?= tv('env_c1_h','Certified organic') ?></h3>
        <p><?= tv('env_c1_p','Grown without synthetic pesticides or fertilisers, to certified-organic and regenerative-organic standards. Our bars are USDA Organic — bio, through and through.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_c2_h','Low in heavy metals') ?></h3>
        <p><?= tv('env_c2_p','Sierra Leone\'s remote, unpolluted soils give some of the lowest cadmium levels of any cocoa on earth. We test the soil and the beans regularly for lead and cadmium — there\'s always a trace, but ours sits far below what you\'ll find in most mainstream chocolate.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_c3_h','Forest kept standing') ?></h3>
        <p><?= tv('env_c3_p','Cocoa is grown in agroforestry systems that lift yields <em>without</em> clearing new land — protecting the rainforest around the Gola Forest, with active reforestation replanting what was lost.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_c4_h','Villages, not just farms') ?></h3>
        <p><?= tv('env_c4_p','Tradin runs social projects in the communities around the farms — training, schooling and infrastructure — so the benefit reaches the whole village, not only the harvest.') ?></p>
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
      <p><?= tv('env_bcorp_p','B Corp certification means we\'re independently held to account on how we treat people and the planet — not just what we say, but what we can prove. It\'s the same standard we hold our whole supply chain to.') ?></p>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="section prose-sec">
  <div class="wrap prose">
    <div class="eyebrow accent"><?= tv('env_proof_eyebrow','PROOF, NOT PROMISES') ?></div>
    <h2><?= tv('env_proof_h2','WHAT WE STAND BEHIND') ?></h2>
    <p><?= tv('env_proof_p','We signed the Norwegian <strong>Guide Against Greenwashing</strong> (SKIFT) — so every claim here is one we can back up. Here\'s what that looks like.') ?></p>
    <div class="feature-row">
      <div class="feature">
        <h3><?= tv('env_p1_h','Certified organic &amp; vegan') ?></h3>
        <p><?= tv('env_p1_p','USDA Organic and EU Organic across the range — dairy-free, and made without GMO or harmful chemicals. Vegan-certified, always.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_p2_h','A living income for farmers') ?></h3>
        <p><?= tv('env_p2_p','We work with <a href="https://fairfood.org" target="_blank" rel="noopener">Fairfood</a> and Tradin Organic toward full farm-to-bar traceability and a genuine living income for the people who grow our cocoa.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_p3_h','Recyclable, plastic-free packaging') ?></h3>
        <p><?= tv('env_p3_p','Our packaging is 100% recyclable, and we\'re designing the plastic out of it — because a clean product deserves a clean wrapper.') ?></p>
      </div>
      <div class="feature">
        <h3><?= tv('env_p4_h','Measured, not guessed') ?></h3>
        <p><?= tv('env_p4_p','Our carbon footprint is calculated with <a href="https://carboncloud.com" target="_blank" rel="noopener">CarbonCloud</a>, mapping every ingredient from farm to bar — so the numbers we publish are real.') ?></p>
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
    <p><?= tv('env_ch_p','Anyone can print a leaf on a wrapper. We went the other way &mdash; rebuilding what\'s inside: the farming, the recipe, the shipping, the numbers. Lighter on the planet by design, not by decoration.') ?></p>
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
