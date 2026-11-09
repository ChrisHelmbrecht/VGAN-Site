<?php
/* Meta Pixel — Dataset "VGAN US Web", Werbekonto VGAN AS.
   ID steht in config.php ($META_PIXEL_ID); leer = Pixel aus.

   Es gibt zwei Sperren, und beide müssen offen sein:

   1. Einwilligung. cookie_consent=yes muss gesetzt sein. Ohne das wird
      der Loader zwar definiert, aber nicht ausgeführt. footer.php ruft
      vganPixelStart() direkt beim Klick auf "Accept all" auf, damit der
      Landing-Aufruf einer Anzeige nicht verloren geht.
      (Norwegen: ekomloven § 3-15, seit 1.1.2025 echtes Opt-in.)

   2. Global Privacy Control. Sendet der Browser Sec-GPC: 1, gilt das in
      zwölf US-Bundesstaaten seit 1.1.2026 als wirksamer Widerspruch gegen
      Targeted Advertising. Wir prüfen den Header serverseitig und das
      navigator-Flag noch einmal im Browser — ein zwischenzeitlich
      gesetztes Consent-Cookie darf das nicht aushebeln.

   Auf where-to-buy.php ($page==='wtb') kommen zwei Events dazu:
   - StoreLocatorView: trennt bezahlten von organischem Traffic und hängt
     die Creative-Variante aus den UTM-Parametern an.
   - FindLocation: Meta-Standardevent, nur wenn die Seite mit einer
     Store-Vorauswahl aufgerufen wurde. Darauf können Kampagnen optimieren. */

$pixelId      = $META_PIXEL_ID ?? '';
$pixelGpc     = (($_SERVER['HTTP_SEC_GPC'] ?? '') === '1');
$pixelConsent = (!$pixelGpc && ($_COOKIE['cookie_consent'] ?? '') === 'yes');

if ($pixelId !== '' && !$pixelGpc):
?>
<script>
window.vganPixelStart = (function(){
  var started = false;
  return function(){
    if (started) return;
    /* Global Privacy Control — zählt als Widerspruch, schlägt Consent */
    if (navigator.globalPrivacyControl === true) return;
    started = true;

    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '<?= e($pixelId) ?>');
    fbq('track', 'PageView');
<?php if (($page ?? '') === 'wtb'): ?>

    var p  = new URLSearchParams(window.location.search);
    var st = (p.get('stores') || '').split(',').filter(Boolean);

    fbq('trackCustom', 'StoreLocatorView', {
      source:   p.get('utm_source')   || 'direct',
      campaign: p.get('utm_campaign') || 'organic',
      variant:  p.get('utm_content')  || '',
      stores:   st.length
    });

    if (st.length > 0) {
      fbq('track', 'FindLocation', {
        content_name: p.get('utm_campaign') || 'organic',
        content_type: 'store_locator'
      });
    }
<?php endif; ?>
  };
})();
<?php if ($pixelConsent): ?>
window.vganPixelStart();
<?php endif; ?>
</script>
<?php if ($pixelConsent): ?>
<noscript><img height="1" width="1" style="display:none" alt=""
src="https://www.facebook.com/tr?id=<?= e($pixelId) ?>&ev=PageView&noscript=1"></noscript>
<?php endif; ?>
<?php endif; ?>
