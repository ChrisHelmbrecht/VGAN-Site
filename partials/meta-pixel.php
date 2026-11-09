<?php
/* Meta Pixel — Dataset "VGAN US Web" (1144841104908899), Werbekonto VGAN AS.
   Angelegt 05.11.2026 für die US-Instagram-Kampagnen.

   Der Loader wird immer definiert, ausgeführt aber nur nach Einwilligung
   (cookie_consent=yes). footer.php ruft vganPixelStart() direkt beim Klick
   auf "Accept all" auf, damit der Landing-Aufruf einer Anzeige nicht
   verloren geht, nur weil die Einwilligung erst auf dieser Seite erfolgt.

   Auf where-to-buy.php ($page==='wtb') kommen zwei Events dazu:
   - StoreLocatorView: trennt bezahlten von organischem Traffic und hängt
     die Creative-Variante aus den UTM-Parametern an.
   - FindLocation: Meta-Standardevent, nur wenn die Seite mit einer
     Store-Vorauswahl aufgerufen wurde. Darauf können Kampagnen optimieren. */

$PIXEL_ID     = '1144841104908899';
$pixelConsent = (($_COOKIE['cookie_consent'] ?? '') === 'yes');
?>
<script>
window.vganPixelStart = (function(){
  var started = false;
  return function(){
    if (started) return; started = true;

    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '<?= $PIXEL_ID ?>');
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
src="https://www.facebook.com/tr?id=<?= $PIXEL_ID ?>&ev=PageView&noscript=1"></noscript>
<?php endif; ?>
