<?php $pageTitle='Terms of Use'; $page='terms';
require __DIR__.'/lib.php';
include __DIR__.'/partials/header.php';
?>
<section class="sub-hero short">
  <div class="wrap sub-hero-inner">
    <div class="eyebrow accent">THE FINE PRINT</div>
    <h1>TERMS<br><span class="mag">OF USE</span></h1>
  </div>
</section>

<section class="section legal">
  <div class="wrap legal-body">
    <p class="legal-updated">Last updated: August 2026</p>
    <p>Welcome to lovevgan.com (the "Site"), operated by <?= e($COMPANY['name']) ?> ("VGAN", "we", "us"). By using the Site you agree to these Terms of Use. If you don't agree, please don't use the Site.</p>
    <h2>An informational site, not a shop</h2>
    <p>This Site presents information about VGAN and our products. We do not sell or ship products directly through it. Any purchase you make happens through independent retailers or marketplaces (for example your local store or Amazon), and is governed by that seller's own terms, pricing and policies &mdash; not ours.</p>
    <h2>Using the Site</h2>
    <p>You may use the Site for your own personal, non-commercial use. You agree not to misuse it &mdash; for example by attempting to break its security, scrape or harvest data, upload malicious code, or use it for any unlawful purpose.</p>
    <h2>Our content</h2>
    <p>All content on the Site &mdash; including the VGAN name and logo, text, images, packaging artwork and design &mdash; belongs to VGAN or its licensors and is protected by intellectual-property laws. You may not copy, reproduce or reuse it without our written permission.</p>
    <h2>Product information</h2>
    <p>We work hard to keep product information accurate, but details such as ingredients, nutrition and cocoa content can change. <strong>The information printed on the physical pack is always the authoritative source</strong> &mdash; please read the label, especially if you have allergies. Images are for illustration and colours may vary.</p>
    <h2>Third-party links</h2>
    <p>The Site may link to third-party websites (retailers, partners, social media). We don't control those sites and aren't responsible for their content, products or policies.</p>
    <h2>Disclaimers &amp; limitation of liability</h2>
    <p>The Site is provided "as is" and "as available", without warranties of any kind. To the fullest extent permitted by law, VGAN is not liable for any indirect, incidental or consequential damages arising from your use of, or inability to use, the Site.</p>
    <h2>Changes</h2>
    <p>We may update these Terms from time to time by posting a new version here; continued use of the Site means you accept the changes.</p>
    <h2>Governing law</h2>
    <p>These Terms are governed by the laws of the State of New York, United States, without regard to its conflict-of-laws rules.</p>
    <h2>Contact</h2>
    <p>Questions about these Terms? Email <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>.</p>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>
