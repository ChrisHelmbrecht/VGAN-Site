<?php
/* ============================================================
   VGAN / FRYND — central configuration
   Everything you'll want to change for the FRYND switch or a
   content edit lives in THIS file. Nothing else needs touching.
   ============================================================ */

/* ---- BRAND ------------------------------------------------ */
$BRAND = [
  'name'      => 'VGAN',
  'wordmark'  => 'V<b>GAN</b>',
  'logo'      => 'vgan-logo-white.png',
  'tagline'   => 'Joyful Rebellion',
  'accent'    => '#FF1493',           // hot magenta (comms colour)
  'ink'       => '#0a0a0a',           // matte black ground
  'amazon'    => 'https://www.amazon.com/stores/VGAN/page/B69B733E-90B8-4152-998D-F2212C7F20DA?lp_asin=B0FCMXJ66Z&ref_=cm_sw_r_ud_ast_store_X2A5ZBWQWAHBKNDBG59W&store_ref=bl_ast_dp_brandlogo_sto&bl_grd_status=override',
  'instagram' => 'https://www.instagram.com/vganchocolate/',
];

/* ---- US COMPANY (footer) ---------------------------------- */
$COMPANY = [
  'name'  => 'VGAN Inc.',
  'addr'  => ['205 East 42nd Street, Suite 1900', 'New York, NY 10017'],
  'email' => 'contact@eatvgan.com',
];

/* ---- DATABASE (optional) ---------------------------------- */
define('USE_DB', false);
define('DB_HOST', 'localhost');
define('DB_NAME', 'vgan_site');
define('DB_USER', '');
define('DB_PASS', '');

/* ---- THE 8 BARS ------------------------------------------- */
$SKUS = [
  ['name'=>'Creamy Melt',   'desc'=>'Smooth m*lk-style, almonds', 'cocoa'=>44, 'img'=>'newdesign-creamymelt.png',  'color'=>'#F5C542', 'taste'=>'Velvety and mellow — a slow, milky melt with soft cocoa warmth and a whisper of roasted almond.'],
  ['name'=>'Pink Love',     'desc'=>'Almonds & raspberry',        'cocoa'=>35, 'img'=>'newdesign-pinklove.png',    'color'=>'#E6337F', 'taste'=>'Bright and playful — creamy white cocoa butter lifted by tart raspberry and a crunch of almond.'],
  ['name'=>'Salty Almonds', 'desc'=>'Roasted almonds, sea salt',  'cocoa'=>44, 'img'=>'newdesign-saltyalmonds.png', 'color'=>'#6FB7E6', 'taste'=>'Sweet-and-salty done right — roasted almonds and flaky sea salt against a smooth, creamy melt.'],
  ['name'=>'Salty Caramel', 'desc'=>'Almonds & salty caramel',    'cocoa'=>33, 'img'=>'SKU-SaltyCaramel.png','color'=>'#D2691E', 'taste'=>'Golden and indulgent — buttery caramel, a pinch of sea salt and toasted almond over a silky base.'],
  ['name'=>'Dark',          'desc'=>'Deep & intense',             'cocoa'=>70, 'img'=>'SKU-Dark.png',        'color'=>'#3A2318', 'taste'=>'Deep and grown-up — rich roasted cocoa with a gentle bitter edge and a long, clean finish.'],
  ['name'=>'Matcha & Lemon','desc'=>'Jamie Anderson signature',   'cocoa'=>36, 'img'=>'SKU-MatchaJamie.png', 'color'=>'#8FB43A', 'taste'=>'Fresh and unexpected — grassy matcha and a citrus lift over a creamy white base.'],
  ['name'=>'White',         'desc'=>'Creamy white, vanilla',      'cocoa'=>36, 'img'=>'SKU_white.png',       'color'=>'#EDE3D0', 'taste'=>'Smooth and comforting — buttery cocoa butter, soft vanilla and a clean, sweet finish.'],
  ['name'=>'Coffee Beans',  'desc'=>'Crunchy roasted coffee',     'cocoa'=>44, 'img'=>'SKU_Coffee.png',      'color'=>'#6F4E37', 'taste'=>'For the coffee lover — crunchy roasted coffee beans and a malty, chocolatey warmth.'],
];

/* ---- AMBASSADORS ------------------------------------------ */
$AMBASSADORS = [
  ['name'=>'Jamie Anderson','role'=>'Olympic snowboarder','img'=>'AMBASSADOR-JamieAnderson_NewZealand2025.jpg',
   'line'=>'Two-time Olympic gold medallist and the face of our Matcha & Lemon signature bar.',
   'url'=>'https://vganchocolate.com/pages/jamie-anderson'],
  ['name'=>'Terje Håkonsen','role'=>'Snowboarding legend','img'=>'AMBASSADOR-TERJE-HAAKONSEN.jpg',
   'line'=>'The Norwegian pioneer who rewrote the rules — and shares our free-thinking roots.',
   'url'=>'https://vganchocolate.com/pages/terje-haakonsen'],
  ['name'=>'Pump for Peace','role'=>'Rider development','img'=>'AMBASSADOR-PumpForPeace3.jpg',
   'line'=>'Giving young riders in Southern Africa a track, a bike and a shot.',
   'url'=>''],
];

/* ---- SUSTAINABILITY GALLERY (assets/img/) ----------------- */
$GALLERY = [
  'INGREDIENTS-AfricaCacaoFarming.jpg',
  'INGREDIENTS-AfricaCacaoBeansWhereitcomesfrom.jpg',
  'INGREDIENTS-AfricaCacaoBeans.jpg',
  'INGREDIENTS-AfricaCacaoPlantage.jpg',
  'INGREDIENTS-AfricaCacaoBeansProcesing.jpg',
  'INGREDIENTS-AfricaCacaoFarming5.jpg',
  'INGREDIENTS-AfricaCacaoBeans3.jpg',
  'INGREDIENTS-AfricaCacao3.jpg',
];

/* ---- SUSTAINABILITY FIGURES (edit here) ------------------- */
/* NOTE: CO2 figure needs confirmation — the Footprint report (Apr 2024,
   CarbonCloud) states ~1.2 kg/kg with a target below 1 kg. Set the
   confirmed current figure + scope (farm-to-bar vs farm-to-shelf) here. */
$SUSTAIN = [
  'co2'        => '1.2',                 // kg CO2e per kg (CarbonCloud, Footprint report)
  'co2_vs'     => '4–13',                // mainstream milk chocolate range
  'co2_source' => 'measured with CarbonCloud', // methodology (proof of claim)
  'report_file'=> '',                    // e.g. 'VGAN-Sustainability-2026.pdf' in assets/img/ — leave '' to hide download (do NOT use the Innovation Norway funder report)
];

/* ---- B-CORP ----------------------------------------------- */
/* Only shows if certified === true. Never display uncertified. */
$BCORP = [
  'certified' => true,       // CONFIRM certification is active
  'badge'     => 'Logo_bcorp.png', // badge/logo file in assets/img/
];

/* ---- NEW PACKAGE DESIGNS (banner in the bars section) ----- */
$NEWDESIGNS = [
  'headline' => 'SAME CHOCOLATE. BOLDER SKIN.',
  'intro'    => 'We never sit still. Our bars are slipping into fresh new packaging — same damn-delicious recipe inside, a little more joyful rebellion outside.',
  'images'   => ['newdesign-saltyalmonds.png','newdesign-pinklove.png','newdesign-creamymelt.png'],
];

/* ---- TRUST BAR (badges under hero; drop your PNGs in assets/img/) ---- */
$TRUSTBAR = [
  ['label'=>'USDA Organic',     'img'=>'Logo_USDA.png'],
  ['label'=>'Vegan',            'img'=>'Logo_TheVeganSociety.png'],
  ['label'=>'Dairy-Free',       'img'=>'Logo_dairyfree.png'],
  ['label'=>'Certified B Corp', 'img'=>'Logo_bcorp.png'],
];

/* ---- RETAILERS (logos you swap in as retailer-*.png) ------ */
$RETAILERS = [
  ['name'=>'Hy-Vee',  'img'=>'Retail_Hy-Vee.png'],
  ['name'=>'KeHE',    'img'=>'Retail_KeHE.png'],
  ['name'=>'UNFI',    'img'=>'Retail_UNFI.png'],
  ['name'=>'WHSmith', 'img'=>'Retailer_WHSmith_North_America_Logo_1.png'],
];

/* ---- SOCIAL PROOF (SocialNature campaign aggregate) ------- */
$RATING = ['stars'=>'4.3', 'count'=>277, 'intent'=>72];

/* ---- VIDEOS (9:16, Thomas). Drop video-N.mp4 + video-N.jpg poster in assets/img/ ---- */
$VIDEOS = [
  ['file'=>'video-1.mp4','poster'=>'video-1.jpg','title'=>'Meet VGAN'],
  ['file'=>'video-2.mp4','poster'=>'video-2.jpg','title'=>'Our ingredients'],
  ['file'=>'video-3.mp4','poster'=>'video-3.jpg','title'=>'Why dairy-free'],
  ['file'=>'video-4.mp4','poster'=>'video-4.jpg','title'=>'From Norway'],
];
