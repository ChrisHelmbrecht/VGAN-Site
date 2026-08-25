<?php $pageTitle='Terms of Use'; $pageDesc='The terms of use for the VGAN website, lovevgan.com.'; $page='terms';
require __DIR__.'/lib.php';
include __DIR__.'/partials/header.php';
?>
<section class="sub-hero short">
  <div class="wrap sub-hero-inner">
    <div class="eyebrow accent"><?= tv('legal_eyebrow','THE FINE PRINT') ?></div>
    <h1><?= tv('terms_h1','TERMS<br><span class="mag">OF USE</span>') ?></h1>
  </div>
</section>

<section class="section legal">
  <div class="wrap legal-body">
    <p class="legal-updated"><?= tv('legal_updated','Last updated: August 2026') ?></p>
    <p><?= tv('terms_intro_a','Welcome to lovevgan.com (the "Site"), operated by ') ?><?= e($COMPANY['name']) ?><?= tv('terms_intro_b',' ("VGAN", "we", "us"). By using the Site you agree to these Terms of Use. If you don\'t agree, please don\'t use the Site.') ?></p>
    <h2><?= tv('terms_s1','An informational site, not a shop') ?></h2>
    <p><?= tv('terms_s1_p','This Site presents information about VGAN and our products. We do not sell or ship products directly through it. Any purchase you make happens through independent retailers or marketplaces (for example your local store or Amazon), and is governed by that seller\'s own terms, pricing and policies &mdash; not ours.') ?></p>
    <h2><?= tv('terms_s2','Using the Site') ?></h2>
    <p><?= tv('terms_s2_p','You may use the Site for your own personal, non-commercial use. You agree not to misuse it &mdash; for example by attempting to break its security, scrape or harvest data, upload malicious code, or use it for any unlawful purpose.') ?></p>
    <h2><?= tv('terms_s3','Our content') ?></h2>
    <p><?= tv('terms_s3_p','All content on the Site &mdash; including the VGAN name and logo, text, images, packaging artwork and design &mdash; belongs to VGAN or its licensors and is protected by intellectual-property laws. You may not copy, reproduce or reuse it without our written permission.') ?></p>
    <h2><?= tv('terms_s4','Product information') ?></h2>
    <p><?= tv('terms_s4_p','We work hard to keep product information accurate, but details such as ingredients, nutrition and cocoa content can change. <strong>The information printed on the physical pack is always the authoritative source</strong> &mdash; please read the label, especially if you have allergies. Images are for illustration and colours may vary.') ?></p>
    <h2><?= tv('terms_s5','Third-party links') ?></h2>
    <p><?= tv('terms_s5_p','The Site may link to third-party websites (retailers, partners, social media). We don\'t control those sites and aren\'t responsible for their content, products or policies.') ?></p>
    <h2><?= tv('terms_s6','Disclaimers &amp; limitation of liability') ?></h2>
    <p><?= tv('terms_s6_p','The Site is provided "as is" and "as available", without warranties of any kind. To the fullest extent permitted by law, VGAN is not liable for any indirect, incidental or consequential damages arising from your use of, or inability to use, the Site.') ?></p>
    <h2><?= tv('terms_changes','Changes') ?></h2>
    <p><?= tv('terms_changes_p','We may update these Terms from time to time by posting a new version here; continued use of the Site means you accept the changes.') ?></p>
    <h2><?= tv('terms_law','Governing law') ?></h2>
    <p><?= tv('terms_law_p','These Terms are governed by the laws of the State of New York, United States, without regard to its conflict-of-laws rules.') ?></p>
    <h2><?= tv('terms_contact','Contact') ?></h2>
    <p><?= tv('terms_contact_p','Questions about these Terms? Email ') ?><a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>.</p>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>
