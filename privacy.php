<?php $pageTitle='Privacy Policy'; $page='privacy';
require __DIR__.'/lib.php';
include __DIR__.'/partials/header.php';
?>
<section class="sub-hero short">
  <div class="wrap sub-hero-inner">
    <div class="eyebrow accent"><?= tv('legal_eyebrow','THE FINE PRINT') ?></div>
    <h1><?= tv('priv_h1','PRIVACY<br><span class="mag">POLICY</span>') ?></h1>
  </div>
</section>

<section class="section legal">
  <div class="wrap legal-body">
    <p class="legal-updated"><?= tv('legal_updated','Last updated: August 2026') ?></p>
    <p><?= tv('priv_intro_a','This Privacy Policy explains how ') ?><?= e($COMPANY['name']) ?><?= tv('priv_intro_b',' ("VGAN", "we", "us") collects, uses and protects information when you visit lovevgan.com (the "Site"). This Site is informational &mdash; we don\'t sell products directly through it. When you buy our chocolate, you do so through independent retailers or marketplaces, each of which handles your information under its own privacy policy.') ?></p>
    <h2><?= tv('priv_who','Who we are') ?></h2>
    <p><?= e($COMPANY['name']) ?><br>
    <?php foreach($COMPANY['addr'] as $l): ?><?= e($l) ?><br><?php endforeach; ?><?= tv('country_us','United States') ?><br>
    <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a></p>
    <h2><?= tv('priv_collect','What we collect') ?></h2>
    <p><?= tv('priv_collect_p1','<strong>Usage &amp; device information.</strong> When you visit the Site, we automatically collect standard technical information &mdash; such as your browser type, device, IP address, pages viewed and how you interact with the Site &mdash; through cookies and similar technologies. We use this to load the Site correctly and to understand and improve how it\'s used.') ?></p>
    <p><?= tv('priv_collect_p2','<strong>Information you give us.</strong> If you email us (for example a wholesale request or a question), we receive the contact details and content you choose to send, and use them only to respond to you.') ?></p>
    <p><?= tv('priv_collect_p3','We do not process payments, take orders or collect payment-card information on this Site.') ?></p>
    <h2><?= tv('priv_use','How we use information') ?></h2>
    <p><?= tv('priv_use_p','To operate and secure the Site, to analyse and improve it, to respond to your enquiries, and to comply with our legal obligations.') ?></p>
    <h2><?= tv('priv_cookies','Cookies &amp; analytics') ?></h2>
    <p><?= tv('priv_cookies_p','We use cookies for basic functionality and for analytics (for example, to count visits and see which pages are popular). Most browsers let you block or delete cookies in their settings; note that parts of the Site may not work as well if you do.') ?></p>
    <h2><?= tv('priv_share','Sharing') ?></h2>
    <p><?= tv('priv_share_p','We don\'t sell your personal information. We may share limited information with service providers who help us run and analyse the Site, and where required to comply with the law or protect our rights.') ?></p>
    <h2><?= tv('priv_rights','Your rights') ?></h2>
    <p><?= tv('priv_rights_p','Depending on where you live (for example under the EU/UK GDPR or the California CCPA), you may have the right to access, correct, delete or port the information we hold about you, and to object to certain processing. To make a request, email us at ') ?><a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>.</p>
    <h2><?= tv('priv_children','Children') ?></h2>
    <p><?= tv('priv_children_p','This Site is not directed to children, and we don\'t knowingly collect personal information from anyone under 18. If you believe a child has provided us information, contact us and we\'ll delete it.') ?></p>
    <h2><?= tv('priv_changes','Changes') ?></h2>
    <p><?= tv('priv_changes_p','We may update this policy from time to time; the "last updated" date above will change accordingly.') ?></p>
    <h2><?= tv('priv_contact','Contact') ?></h2>
    <p><?= tv('priv_contact_p1','Questions or complaints? Email ') ?><a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a><?= tv('priv_contact_p2',' or write to us at the address above.') ?></p>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>
