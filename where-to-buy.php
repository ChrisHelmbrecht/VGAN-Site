<?php $pageTitle='Where to buy'; $pageDesc='Find VGAN dairy-free chocolate near you — in US natural and grocery stores including Sprouts and Hy-Vee, plus Amazon and Instacart.'; $page='wtb';
require __DIR__.'/lib.php';
$stores=get_stores();
foreach($stores as $k=>$s){ $stores[$k]['id']=substr(md5($s['n'].'|'.$s['a'].'|'.$s['z']),0,6); }
$fArea   = trim($_GET['area'] ?? $_GET['q'] ?? '');
$fState  = trim($_GET['state'] ?? $_GET['st'] ?? '');
$fStores = array_values(array_filter(array_map('trim', explode(',', $_GET['stores'] ?? ''))));
if($fArea!==''){
  $pageTitle = 'VGAN in '.$fArea;
  $pageDesc  = 'Find VGAN dairy-free chocolate in '.$fArea.'. See the stores near you and get directions.';
}
include __DIR__.'/partials/header.php';
?>
<section class="wrap finder-head">
  <div class="eyebrow accent">STORE FINDER</div>
  <h1><?php if($fArea!==''): ?>FIND US IN <span class="mag"><?= e($fArea) ?></span><?php else: ?>FIND US <span class="mag">NEAR YOU</span><?php endif; ?></h1>
  <p><span id="count"><?= count($stores) ?></span> <?= tv('wtb_intro','stores across the US — and growing. Search by city or ZIP, filter by state, or let us find the ones nearest you.') ?></p>
  <div class="controls">
    <button class="btn-loc" id="locBtn">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
      Use my location
    </button>
    <div class="field"><label>Search city / ZIP / store</label><input id="q" type="search" placeholder="e.g. Brooklyn, 90210, Raley's" autocomplete="off"></div>
    <div class="field"><label>State</label><select id="st"><option value="">All states</option></select></div>
    <button class="btn-loc" id="pickBtn" type="button">Build ad link</button>
  </div>
</section>

<div class="wrap">
  <div class="finder">
    <div class="list">
      <div class="list-head" id="listHead"><?= tv('wtb_all','All stores') ?></div>
      <div id="results"></div>
    </div>
    <div id="map"></div>
  </div>
  <p class="finder-note">Pins are shown at ZIP-code level. Map &copy; <a href="https://www.openstreetmap.org/copyright" target="_blank" rel="noopener">OpenStreetMap</a> &amp; <a href="https://carto.com/attributions" target="_blank" rel="noopener">CARTO</a>.</p>
</div>

<div class="pickbar" id="pickbar" hidden>
  <span id="pickCount">0 stores selected</span>
  <input id="pickUrl" readonly value="" onclick="this.select()">
  <button class="btn" id="pickCopy" type="button">Copy link</button>
  <button class="btn ghost" id="pickClear" type="button">Clear</button>
</div>

<script>window.STORES = <?= json_encode($stores, JSON_UNESCAPED_UNICODE) ?>;
window.STORE_FILTER = <?= json_encode(['q'=>$fArea,'state'=>$fState,'stores'=>$fStores], JSON_UNESCAPED_UNICODE) ?>;</script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="assets/js/storefinder.js?v=6"></script>

<?php include __DIR__.'/partials/footer.php'; ?>
