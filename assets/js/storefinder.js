/* VGAN store finder — reads window.STORES (injected by PHP) */
(function(){
  const STORES = window.STORES || [];
  function sid(s){var str=((s.n||'')+'|'+(s.a||'')+'|'+(s.z||'')).toLowerCase(),h=0x811c9dc5;for(var i=0;i<str.length;i++){h^=str.charCodeAt(i);h=(h*0x01000193)>>>0;}return h.toString(36);}
  var _URLP=new URLSearchParams(location.search);
  var initQ=(_URLP.get('area')||_URLP.get('q')||'').trim();
  var initState=(_URLP.get('state')||_URLP.get('st')||'').trim();
  var initStores=(_URLP.get('stores')||'').split(',').map(function(x){return x.trim();}).filter(Boolean);
  const map=L.map('map',{zoomControl:true,attributionControl:false}).setView([39.5,-98.35],4);
  L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png',{maxZoom:19,subdomains:'abcd'}).addTo(map);

  const pinIcon=L.divIcon({className:'',html:'<div class="pin"></div>',iconSize:[14,14],iconAnchor:[7,7]});
  const youIcon=L.divIcon({className:'',html:'<div class="you"></div>',iconSize:[16,16],iconAnchor:[8,8]});

  let userLoc=null;
  const resultsEl=document.getElementById('results');
  const headEl=document.getElementById('listHead');
  const stSel=document.getElementById('st');
  let picking=false; const picked=new Set();

  const gmaps=s=>'https://www.google.com/maps/dir/?api=1&destination='+encodeURIComponent(s.a+', '+s.c+', '+s.s+' '+s.z);
  function miles(a,b){const R=3958.8,dLat=(b.lat-a.lat)*Math.PI/180,dLng=(b.lng-a.lng)*Math.PI/180,la1=a.lat*Math.PI/180,la2=b.lat*Math.PI/180;const h=Math.sin(dLat/2)**2+Math.cos(la1)*Math.cos(la2)*Math.sin(dLng/2)**2;return R*2*Math.asin(Math.sqrt(h));}

  STORES.forEach((s,i)=>{
    const m=L.marker([s.lat,s.lng],{icon:pinIcon});
    m.bindPopup('<span class="pnm">'+s.n+'</span>'+s.a+'<br>'+s.c+', '+s.s+' '+s.z+(s.p?'<br>'+s.p:'')+'<br><a href="'+gmaps(s)+'" target="_blank" rel="noopener">Directions &rarr;</a>');
    s._m=m; s._i=i;
  });
  const layer=L.layerGroup(STORES.map(s=>s._m)).addTo(map);

  [...new Set(STORES.map(s=>s.s))].sort().forEach(st=>{
    const o=document.createElement('option');o.value=st;
    o.textContent=st+' ('+STORES.filter(s=>s.s===st).length+')';stSel.appendChild(o);
  });

  function filtered(){
    const q=document.getElementById('q').value.trim().toLowerCase(), st=stSel.value;
    let arr=STORES.filter(s=>{
      if(initStores.length&&initStores.indexOf(sid(s))===-1&&initStores.indexOf(s.id)===-1)return false;
      if(st&&s.s!==st)return false;
      if(q&&!(s.n+' '+s.a+' '+s.c+' '+s.s+' '+s.z).toLowerCase().includes(q))return false;
      return true;
    });
    if(userLoc)arr.forEach(s=>s._d=miles(userLoc,s));
    arr.sort(userLoc?(a,b)=>a._d-b._d:(a,b)=>a.s.localeCompare(b.s)||a.c.localeCompare(b.c)||a.n.localeCompare(b.n));
    return arr;
  }

  function render(){
    const arr=filtered();
    var _q=document.getElementById('q').value.trim();
    headEl.textContent=(userLoc?'Nearest first \u2014 ':'')+arr.length+' stockist'+(arr.length!==1?'s':'')+(stSel.value?' in '+stSel.value:(_q?' matching \u201c'+_q+'\u201d':''));
    layer.clearLayers(); arr.forEach(s=>layer.addLayer(s._m));
    if(!arr.length){resultsEl.innerHTML='<div class="empty">No stockists match that search.<br>Try a nearby city, a different state, or clear the filters.</div>';return;}
    const show=userLoc?arr.slice(0,40):arr;
    resultsEl.innerHTML=show.map(s=>{
      const d=userLoc?'<span class="dist">'+s._d.toFixed(1)+' mi</span>':'';
      return '<div class="card" data-i="'+s._i+'"><div class="nm">'+s.n+'</div>'
        +'<div class="ad">'+s.a+'<br>'+s.c+', '+s.s+' '+s.z+'</div>'
        +'<div class="meta">'+d+(s.p?'<a class="link" href="tel:'+s.p.replace(/[^0-9+]/g,'')+'">'+s.p+'</a>':'')
        +'<a class="link" href="'+gmaps(s)+'" target="_blank" rel="noopener">Directions</a></div></div>';
    }).join('');
    if(userLoc&&arr.length>40)resultsEl.innerHTML+='<div class="empty">Showing the 40 closest of '+arr.length+'. Filter by state to see more.</div>';
    [...resultsEl.querySelectorAll('.card')].forEach(c=>c.addEventListener('click',()=>{
      const s=STORES[+c.dataset.i];
      if(picking){ var _id=sid(s); if(picked.has(_id)){picked.delete(_id);c.classList.remove('picked');} else {picked.add(_id);c.classList.add('picked');} updatePick(); return; }
      map.setView([s.lat,s.lng],12,{animate:true}); s._m.openPopup();
      resultsEl.querySelectorAll('.card').forEach(x=>x.classList.remove('active')); c.classList.add('active');
    }));
  }
  function fit(){const arr=filtered();if(!arr.length)return;map.fitBounds(L.featureGroup(arr.map(s=>s._m)).getBounds().pad(.2),{maxZoom:userLoc?11:6});}

  let _qt;
  document.getElementById('q').addEventListener('input',function(){
    render(); syncURL();
    clearTimeout(_qt);
    _qt=setTimeout(function(){
      const q=document.getElementById('q').value.trim();
      const arr=filtered();
      if(q&&arr.length){
        map.fitBounds(L.featureGroup(arr.map(s=>s._m)).getBounds().pad(.3),{maxZoom:userLoc?12:13});
      } else if(!q&&!stSel.value){
        map.setView([39.5,-98.35],4);
      }
    },350);
  });
  stSel.addEventListener('change',()=>{render();fit();syncURL();});
  document.getElementById('locBtn').addEventListener('click',function(){
    const b=this;
    if(!navigator.geolocation){alert('Location isn\'t available here. Search by city or ZIP instead.');return;}
    b.textContent='Locating…';
    navigator.geolocation.getCurrentPosition(pos=>{
      userLoc={lat:pos.coords.latitude,lng:pos.coords.longitude};
      L.marker([userLoc.lat,userLoc.lng],{icon:youIcon,zIndexOffset:1000}).addTo(map);
      b.innerHTML='<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg> Located — nearest first';
      render();
      const near=filtered().slice(0,8).map(s=>s._m);
      if(near.length)map.fitBounds(L.featureGroup([...near,L.marker([userLoc.lat,userLoc.lng])]).getBounds().pad(.25),{maxZoom:11});
    },()=>{b.textContent='Use my location';alert('Couldn\'t get your location. Allow location access, or search by city or ZIP.');},
    {enableHighAccuracy:true,timeout:8000});
  });
  function updatePick(){
    var c=document.getElementById('pickCount'); if(!c)return;
    c.textContent=picked.size+' store'+(picked.size!==1?'s':'')+' selected';
    document.getElementById('pickUrl').value=picked.size?location.origin+location.pathname+'?stores='+[...picked].join(','):'';
  }
  var pickBtn=document.getElementById('pickBtn'), pickbar=document.getElementById('pickbar');
  if(pickBtn){
    pickBtn.addEventListener('click',function(){
      picking=!picking;
      document.querySelector('.finder').classList.toggle('picking',picking);
      pickbar.hidden=!picking; pickBtn.classList.toggle('on',picking);
      pickBtn.textContent=picking?'Done selecting':'Build ad link';
      updatePick(); render();
    });
    document.getElementById('pickClear').addEventListener('click',function(){ picked.clear(); updatePick(); render(); });
    document.getElementById('pickCopy').addEventListener('click',function(){
      var u=document.getElementById('pickUrl'); if(!u.value)return;
      u.focus(); u.select(); try{u.setSelectionRange(0,99999);}catch(e){}
      var ok=false; try{ok=document.execCommand('copy');}catch(e){}
      if(navigator.clipboard&&navigator.clipboard.writeText){navigator.clipboard.writeText(u.value).then(function(){},function(){});ok=true;}
      var b=this,t=b.textContent; b.textContent=ok?'Copied!':'Select & \u2318C'; setTimeout(function(){b.textContent=t;},1600);
    });
  }
  function syncURL(){
    var q=document.getElementById('q').value.trim(), st=stSel.value, p=new URLSearchParams();
    if(q)p.set('area',q); if(st)p.set('state',st);
    var qs=p.toString();
    if(window.history&&history.replaceState) history.replaceState(null,'',qs?location.pathname+'?'+qs:location.pathname);
  }
  (function initFromURL(){
    if(initQ)document.getElementById('q').value=initQ;
    if(initState){ if([...stSel.options].some(o=>o.value===initState)) stSel.value=initState; }
    render();
    if(initQ||initState||initStores.length){ var arr=filtered(); if(arr.length) map.fitBounds(L.featureGroup(arr.map(s=>s._m)).getBounds().pad(.3),{maxZoom:13}); }
  })();
})();
