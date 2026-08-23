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
  </div>
</section>


<section class="section prose-sec">
  <div class="wrap prose">
    <div class="eyebrow accent">WHAT WE WON'T BUDGE ON</div>
    <h2>THREE NON-<br>NEGOTIABLES</h2>
    <div class="feature-row">
      <div class="feature">
        <h3>Taste first, always</h3>
        <p>We didn't set out to make "good vegan chocolate." We set out to make chocolate so good the dairy-free part is a footnote &mdash; premium, organic, and ready to go head-to-head with anything on the shelf.</p>
      </div>
      <div class="feature">
        <h3>Not just for vegans</h3>
        <p>Our bars aren't aimed at a diet. They're for anyone who cares what they put in their mouth and what it costs the planet. Dairy-free is how we go lighter on the world; taste is why you come back.</p>
      </div>
      <div class="feature">
        <h3>Sourced better, proven better</h3>
        <p>The same farmers season after season, organic and traceable, with a footprint we actually measure &mdash; not a sticker we slapped on. The proof lives on our <a href="environment.php">sustainability page</a>.</p>
      </div>
    </div>
  </div>
</section>

<section class="story-cta">
  <div class="wrap">
    <h2>EAT BETTER<br>CHOCOLATE.<br><span class="mag">KEEP PLAYING.</span></h2>
    <p>Born in the north, wired to do things our own way. Superior taste, exceptional quality, and a following far beyond the vegan aisle &mdash; that's the whole idea, and we're only getting started.</p>
    <div class="cta-btns">
      <a class="btn" href="index.php#bars">See the bars</a>
      <a class="btn ghost" href="where-to-buy.php">Find a store</a>
    </div>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>
