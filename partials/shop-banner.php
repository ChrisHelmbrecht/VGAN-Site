<?php /* Shop banner — "can't find a store near you? buy on Amazon / MENY". $bannerBoxed=true for a rounded, in-column variant. */ ?>
<a class="shopbanner<?= !empty($bannerBoxed)?' shopbanner--boxed':'' ?>" <?= ext(shop_link()) ?>>
  <div class="shopbanner-text">
    <span class="shopbanner-line"><?= tv('banner_line','Can&rsquo;t find a store near you?') ?></span>
    <span class="shopbanner-cta"><?= tv('banner_cta','Shop on Amazon') ?> <span class="arr">&rarr;</span></span>
  </div>
</a>
<?php $bannerBoxed=false; ?>
