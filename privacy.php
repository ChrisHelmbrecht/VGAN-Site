<?php $pageTitle='Privacy Policy'; $pageDesc='How VGAN collects, uses and protects your information on lovevgan.com.'; $page='privacy';
require __DIR__.'/lib.php';
/* Controller depends on the market: VGAN chocolate AS for Norway/the EEA,
   VGAN Inc for the US. The Norwegian version of the site is served to
   Norwegian visitors, so that is the one that names the Norwegian entity. */
$isNO      = (current_lang()==='no');
$CTRL      = $isNO ? $COMPANY_NO : $COMPANY;
$ctrlCount = $isNO ? tv('country_no','Norway') : tv('country_us','United States');
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
    <p class="legal-updated"><?= tv('legal_updated_nov26','Last updated: November 2026') ?></p>
    <p><?= tv('priv_intro_a','This Privacy Policy explains how ') ?><?= e($CTRL['name']) ?><?= tv('priv_intro_b',' ("VGAN", "we", "us") collects, uses and protects information when you visit lovevgan.com (the "Site"). This Site is informational &mdash; we don\'t sell products directly through it. When you buy our chocolate, you do so through independent retailers or marketplaces, each of which handles your information under its own privacy policy.') ?></p>

    <h2><?= tv('priv_who','Who we are') ?></h2>
    <p><?= tv('priv_who_p','The company responsible for your information (the "data controller") depends on where you are. For visitors in Norway and the rest of the EEA that is VGAN chocolate AS; for visitors in the United States it is VGAN Inc. Either way you can reach us at the address below.') ?></p>
    <p><?= e($CTRL['name']) ?><br>
    <?php foreach($CTRL['addr'] as $l): ?><?= e($l) ?><br><?php endforeach; ?><?= e($ctrlCount) ?><br>
    <a href="mailto:<?= e($CTRL['email']) ?>"><?= e($CTRL['email']) ?></a></p>

    <h2><?= tv('priv_collect','What we collect') ?></h2>
    <p><?= tv('priv_collect_p1','<strong>Usage &amp; device information.</strong> When you visit the Site, we automatically collect standard technical information &mdash; such as your browser type, device, IP address, pages viewed and how you interact with the Site &mdash; through cookies and similar technologies. We use this to load the Site correctly and to understand and improve how it\'s used.') ?></p>
    <p><?= tv('priv_collect_p2','<strong>Information you give us.</strong> If you email us (for example a wholesale request or a question), we receive the contact details and content you choose to send, and use them only to respond to you.') ?></p>
    <p><?= tv('priv_collect_p4','<strong>Advertising information.</strong> If you consent, the Meta Pixel records that you visited the Site, which pages you looked at, and &mdash; if you arrived from one of our Instagram ads &mdash; which ad sent you. This is described in its own section below.') ?></p>
    <p><?= tv('priv_collect_p3','We do not process payments, take orders or collect payment-card information on this Site.') ?></p>

    <h2><?= tv('priv_use','How we use information') ?></h2>
    <p><?= tv('priv_use_p2','To operate and secure the Site, to analyse and improve it, to measure whether our advertising works and to show ads to people likely to be interested in our chocolate, to respond to your enquiries, and to comply with our legal obligations.') ?></p>

    <h2><?= tv('priv_basis','Legal basis (EEA and Norway)') ?></h2>
    <p><?= tv('priv_basis_p','If you are in Norway or elsewhere in the EEA, we rely on your <strong>consent</strong> for the Meta Pixel and any other non-essential cookie, on our <strong>legitimate interest</strong> in running and securing a working website for strictly necessary cookies and server logs, and on our <strong>legitimate interest</strong> in answering you when you write to us. You can withdraw consent at any time, and withdrawing it is as easy as giving it &mdash; see "Your choices" below.') ?></p>

    <h2><?= tv('priv_cookies','Cookies &amp; similar technologies') ?></h2>
    <p><?= tv('priv_cookies_p2','<strong>Strictly necessary.</strong> A small number of cookies are needed for the Site to work &mdash; remembering your language and remembering your cookie choice itself. These are set without consent because the Site cannot function without them.') ?></p>
    <p><?= tv('priv_cookies_p3','<strong>Advertising.</strong> The Meta Pixel is only loaded after you accept it. If you choose "Only essential", or simply ignore the banner, it is never loaded and no data goes to Meta. Norwegian law (the Electronic Communications Act section 3-15, in force since 1 January 2025) requires this kind of active, prior consent, and we apply the same standard to every visitor regardless of country.') ?></p>

    <h2><?= tv('priv_meta','Advertising and the Meta Pixel') ?></h2>
    <p><?= tv('priv_meta_p1','We advertise on Instagram. To see whether those ads actually bring anyone to our store finder, we use the <strong>Meta Pixel</strong>, a piece of code provided by Meta Platforms Ireland Limited (4 Grand Canal Square, Dublin 2, Ireland). With your consent it tells Meta that a browser visited our Site, which pages were viewed, and which ad &mdash; if any &mdash; the visit came from. Meta also receives your IP address and cookie identifiers, which can let Meta recognise you if you have a Meta account.') ?></p>
    <p><?= tv('priv_meta_p2','We use this to measure our advertising and to build audiences for future ads. We do not use it to build profiles about individual people, and we do not upload customer lists to Meta.') ?></p>
    <p><?= tv('priv_meta_p3','For the collection of this data and its transmission to Meta, we and Meta are <strong>joint controllers</strong>. What Meta does with the data afterwards is Meta\'s own responsibility, and is governed by Meta\'s privacy policy, which you can read at facebook.com/privacy/policy. You can also review and change what Meta does with your data in your Meta account settings.') ?></p>
    <p><?= tv('priv_meta_p4','If your browser sends a <strong>Global Privacy Control</strong> signal, we treat that as an objection to advertising tracking and the Pixel is not loaded at all, even if a consent cookie is present.') ?></p>

    <h2><?= tv('priv_share','Sharing') ?></h2>
    <p><?= tv('priv_share_p2','We do not sell your personal information for money. We do share limited information with Meta Platforms Ireland for the advertising purposes described above, and with service providers who host and help us run the Site, and where required to comply with the law or protect our rights.') ?></p>
    <p><?= tv('priv_share_p3','Several US state privacy laws define "sale" and "sharing" broadly enough that passing data to Meta for cross-context behavioural advertising falls within them. We therefore treat it as such, and you can opt out at any time without giving a reason &mdash; see "Your choices".') ?></p>

    <h2><?= tv('priv_transfer','International transfers') ?></h2>
    <p><?= tv('priv_transfer_p','Our Site is hosted in Europe. Information shared with Meta may be processed in the United States. Meta Platforms, Inc. is certified under the EU&ndash;US Data Privacy Framework, which the European Commission has recognised as providing an adequate level of protection, and Meta\'s terms additionally incorporate the European Commission\'s Standard Contractual Clauses as a fallback. You can ask us for more detail at the address above.') ?></p>

    <h2><?= tv('priv_retention','How long we keep information') ?></h2>
    <p><?= tv('priv_retention_p','Server logs are kept for up to 30 days. Your cookie choice is stored for 12 months, after which you are asked again. Emails you send us are kept for as long as needed to deal with your enquiry and our records, normally no more than three years. Data held by Meta is subject to Meta\'s own retention periods, which we do not control.') ?></p>

    <h2><?= tv('priv_choices','Your choices') ?></h2>
    <p><?= tv('priv_choices_p1','You can change or withdraw your cookie consent at any time using the <strong>Cookie settings</strong> link at the bottom of every page. Choosing "Only essential" there stops the Meta Pixel from loading and is also how you exercise the right to opt out of the sale or sharing of your personal information under US state privacy laws.') ?></p>
    <p><?= tv('priv_choices_p2','We also honour the <strong>Global Privacy Control</strong> browser signal automatically, so if you have it enabled you do not need to do anything. Most browsers additionally let you block or delete cookies in their settings; parts of the Site may not work as well if you do.') ?></p>
    <p><?= tv('priv_choices_p3','We will not treat you differently, or give you a worse experience, because you exercised any of these rights.') ?></p>

    <h2><?= tv('priv_rights','Your rights') ?></h2>
    <p><?= tv('priv_rights_eea','<strong>If you are in Norway or the EEA:</strong> you have the right to access the personal data we hold about you, to have it corrected or deleted, to restrict or object to our processing of it, to receive it in a portable form, and to withdraw consent at any time without affecting processing that already happened. If you think we have handled your data wrongly, you can complain to the Norwegian Data Protection Authority (Datatilsynet, datatilsynet.no) or to the authority in your country.') ?></p>
    <p><?= tv('priv_rights_us','<strong>If you are in the United States:</strong> depending on your state, you may have the right to know what personal information we collect and who receives it, to have it corrected or deleted, to receive a copy, and to opt out of its sale or sharing and of targeted advertising. See "Your choices" above for the opt-out, or write to us using the address below. We will verify a request by replying to the email address it came from, and we respond within the period your state\'s law requires.') ?></p>
    <p><?= tv('priv_rights_how','To make any request, email us at ') ?><a href="mailto:<?= e($CTRL['email']) ?>"><?= e($CTRL['email']) ?></a>.</p>

    <h2><?= tv('priv_children','Children') ?></h2>
    <p><?= tv('priv_children_p2','This Site is not directed to children, and we don\'t knowingly collect personal information from anyone under 18, or knowingly sell or share the information of anyone under 16. If you believe a child has provided us information, contact us and we\'ll delete it.') ?></p>

    <h2><?= tv('priv_changes','Changes') ?></h2>
    <p><?= tv('priv_changes_p','We may update this policy from time to time; the "last updated" date above will change accordingly.') ?></p>

    <h2><?= tv('priv_contact','Contact') ?></h2>
    <p><?= tv('priv_contact_p1','Questions or complaints? Email ') ?><a href="mailto:<?= e($CTRL['email']) ?>"><?= e($CTRL['email']) ?></a><?= tv('priv_contact_p2',' or write to us at the address above.') ?></p>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>
