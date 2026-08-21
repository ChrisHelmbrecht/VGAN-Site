<?php $pageTitle='Our story'; $page='story';
require __DIR__.'/lib.php';
include __DIR__.'/partials/header.php';
?>
<section class="sub-hero">
  <div class="sub-hero-bg"><?= img_or_placeholder('Lifestyle-NorwayWinter.jpg','Norway','','#0a0a0a','#FF1493') ?></div>
  <div class="wrap sub-hero-inner">
    <div class="eyebrow accent">SINCE NORWAY</div>
    <h1>A LITTLE<br><span class="mag">REBELLION</span></h1>
    <p>Premium chocolate that happens to be dairy-free — born in the north, built for people who treat themselves on purpose.</p>
  </div>
</section>

<section class="section prose-sec">
  <div class="wrap prose">
    <p class="lede">VGAN started in Norway with a stubborn idea: that plant-based chocolate didn't have to apologise for itself. Not "good, for vegan chocolate." Just good chocolate — premium, organic, and made without a drop of dairy.</p>
    <p>We come from a world of snow, boards and open air, where doing things your own way is the whole point. That free-thinking spirit is baked into everything we make: bright, saturated, a little loud, and unmistakably ours. We call it <strong>Joyful Rebellion</strong> — indulgence without the guilt trip, and none of the beige.</p>
    <p>Today our bars are moving from Norway into the US, landing on shelves across the country and picking up a following far beyond the vegan aisle — with people who simply want better chocolate, sourced better. That's the whole idea, and we're only getting started.</p>
    <a class="btn" <?= ext('https://vganchocolate.com/pages/about-vgan') ?>>Read the full story</a>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>
