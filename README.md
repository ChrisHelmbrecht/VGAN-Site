# VGAN website — install guide

Plain PHP, no framework, no build step. Runs on any host with PHP 7.4+
(PHP 8 recommended). MySQL is optional.

## Pages
- `index.php` — homepage (hero, 8 bars, manifesto, sustainability teaser, ambassadors, store-finder teaser)
- `story.php` — the VGAN story
- `environment.php` — sustainability / footprint page (**this is your QR target**)
- `where-to-buy.php` — store finder (243 stockists)


## Brand
The site is now **FRYND** (consumer brand). The legal entity in the footer
stays **VGAN Inc.** Everything brand-facing reads from `config.php` (`$BRAND`).
Product image filenames are still the VGAN packshots — replace the files
in `assets/img/` with the FRYND packs (same names) when ready.

## Ingredients & nutrition popup
Clicking any bar (or its "Ingredients & Info" button) opens a popup with that
bar's ingredients, allergens and nutrition, from `data/nutrition.php`.
Two things to know:
- **Ingredients were reconstructed** from the master sheet's numeric codes
  (the sheet has no plain-text list). Please verify each against the pack
  before launch — especially salt/caramel items and the declaration order.
- **Matcha & Lemon and White have no US nutritionals** in the master sheet,
  so their popup shows ingredients + "full nutrition coming soon". Ask Sturle
  to fill articles 100214 and 100218 and I'll drop the numbers in.


## This build = the VGAN site (lovevgan.com)
Branded VGAN, old packaging, no FRYND mention. The FRYND site is a separate
package. Shared data (stores, nutrition, sustainability) is kept identical
between the two.

### Extra images this version expects (assets/img/)
| Where | File |
|---|---|
| B-Corp badge (sustainability) | `bcorp.png` |
| New package designs (bars banner) | `newdesign-1.png`, `newdesign-2.png`, `newdesign-3.png` |

### Store finder
Now loaded from the **July 2026 master** (578 stockists: UNFI + KeHE +
Hy-Vee + WHSmith). ~134 rows are marked "estimated/not yet verified" in the
source — tell me if you want those hidden or tagged.

### To confirm before launch
- **CO2 figure** (`config.php` → `$SUSTAIN['co2']`): report says ~1.2 kg
  (Apr 2024, target <1). Set the confirmed current number + scope.
- **B-Corp** (`$BCORP['certified']`): only leave `true` if certification is
  active; drop `bcorp.png` in.
- **Sustainability report download** (`$SUSTAIN['report_file']`): leave blank
  until a *consumer-facing* report exists — do NOT use the Innovation Norway
  funder report (it contains confidential financials).


### New this version (VGAN site, round 2)
- **CO2 figure is now 1.2 kg** (`config.php` -> `$SUSTAIN['co2']`), sourced to CarbonCloud, with a "working toward <1" line. The 4-13 kg comparison should also get a source to stay fully watertight.
- **Trust bar** under the hero — drop your badge PNGs in: `trust-organic.png`, `trust-vegan.png`, `trust-glutenfree.png`, `trust-nongmo.png`, `trust-dairyfree.png`, `trust-bcorp.png` (edit the set in `$TRUSTBAR`).
- **Social proof** — 6 curated Social Nature reviews in `data/reviews.php`; aggregate (4.3*, 277, 72%) in `$RATING`.
- **Retailer strip** — placeholders; drop logos in as `retailer-hyvee.png`, `retailer-sprouts.png`, `retailer-giant.png`, `retailer-raleys.png`, `retailer-whsmith.png`, `retailer-woodmans.png`, `retailer-amazon.png` (edit `$RETAILERS`).
- **Thomas videos (9:16)** — drop `video-1.mp4 … video-4.mp4` (+ optional `video-N.jpg` posters) in `assets/img/`; until then each shows a play-button placeholder. Edit titles in `$VIDEOS`.
- **Tasting notes** now show in each bar's Ingredients & Info popup (edit the `taste` field per SKU in `config.php`).
- **B-Corp**: certificate received (signed 14 Aug 2026) — band stays on; still just needs `bcorp.png`.
- Sustainability report is reflected as on-page text only (no public download), as requested.

## 1. Upload
Copy the `vgan/` folder to your web root. It runs immediately — the store
finder works from `data/stores.json` out of the box.

## 2. Drop in the images  (assets/img/, using your Drive filenames)

| Where | File |
|---|---|
| **Logo (header + footer)** | `vgan-logo-white.png` |
| Hero / Story hero | `Lifestyle-NorwayWinter.jpg` |
| Manifesto background | `MANIFESTO_VGAN-Mold.jpg` |
| Ambassador — Jamie | `AMBASSADOR-JamieAnderson_NewZealand2025.jpg` |
| Ambassador — Terje | `AMBASSADOR-TERJE-HAAKONSEN.jpg` |
| Ambassador — Pump for Peace | `AMBASSADOR-PumpForPeace3.jpg` |
| Sustainability hero | `INGREDIENTS-AfricaCacaoPlantage.jpg` |
| Gallery (8) | `INGREDIENTS-AfricaCacaoFarming.jpg`, `...WhereitcomesfromBeans`, `...Beans.jpg`, `...Plantage.jpg`, `...BeansProcesing.jpg`, `...Farming5.jpg`, `...Beans3.jpg`, `...AfricaCacao3.jpg` |
| The 8 bars | `SKU-CreamyMelt.png`, `SKU-pinklove.png`, `SKU-saltalmonds.png`, `SKU-SaltyCaramel.png`, `SKU-Dark.png`, `SKU-MatchaJamie.png`, `SKU_white.png`, `SKU_Coffee.png` |

Missing files show a tidy branded placeholder naming the file to drop in —
nothing looks broken. The exact gallery filenames live in `config.php`
(`$GALLERY`) if you want to swap them.

## 3. (Optional) MySQL
`mysql -u USER -p < install.sql`, then set `USE_DB=true` + creds in
`config.php`. Falls back to the JSON file automatically if the DB is down.

## Editing
Almost everything is in **`config.php`**: brand, logo, Amazon + Instagram
links, US company address, the 8 bars, the 3 ambassadors, the gallery.
Page copy (hero lines, manifesto, sustainability, story) is in the page
files. All external links already open in a new tab.

## FRYND switch (September)
In `config.php`: `name` → FRYND, `logo` → frynd logo file, `wordmark`
fallback, keep/adjust `accent`. Swap SKU images. No layout work.

## Notes
- Store pins are ZIP-level. Sprouts isn't in the KeHE list yet — add rows
  to `data/stores.json` (or the DB) when you have them.
- Sustainability facts are sourced from Tradin Organic + your own data.
  Please confirm the **certifying body for the 0.7 kg CO₂ figure** so we
  can name it on the page for full transparency.
- Fonts + map tiles load from free CDNs. No API keys, no running costs.
