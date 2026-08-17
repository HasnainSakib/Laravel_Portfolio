<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasnain Sakib — SEO Analyst &amp; Digital Marketing Manager</title>
<link rel="icon" type="assets/favicon.png" href="favicon.png">
<meta name="description" content="Hasnain Sakib — SEO Analyst & Digital Marketing Manager. 4+ years growing organic reach for brands across Bangladesh, UK, USA & Malaysia.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Dancing+Script:wght@600;700&family=Alex+Brush&family=Allura&family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
/* ============ TOKENS ============ */
:root{
  --navy-950:#030712;
  --navy-900:#050c21;
  --navy-800:#0a173d;
  --navy-700:#102256;
  --green:#38edf8;
  --green-dim:#135b75;
  --gold:#60a5fa;
  --ink-100:#ffffff;
  --ink-300:#e2e8f0;
  --ink-400:#94a3b8;
  --ink-600:#64748b;
  --line:rgba(244,246,252,0.09);
  --line-strong:rgba(244,246,252,0.16);
  --glass:rgba(16,26,56,0.55);
  --radius:14px;
  --display:'Inter',sans-serif;
  --body:'Inter',sans-serif;
  --mono:'Inter',sans-serif;
  --maxw:1200px;
}
*,*::before,*::after,body,button,input,textarea,select,h1,h2,h3,h4,a,span,p,li,b,strong,small,div{
  box-sizing:border-box;
  font-family:'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
}
html{scroll-behavior:smooth;}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto;}*{animation-duration:0.001ms !important;animation-iteration-count:1 !important;transition-duration:0.001ms !important;}}
html{max-width:100%;overflow-x:hidden;}
body{
  background:var(--navy-900);
  color:var(--ink-300);
  line-height:1.6;
  overflow-x:hidden;
  max-width:100%;
}
img{max-width:100%;display:block;}
a{color:inherit;text-decoration:none;}
ul{list-style:none;}
button{font:inherit;cursor:pointer;}
:focus-visible{outline:2px solid var(--green);outline-offset:3px;}

.wrap{max-width:var(--maxw);margin:0 auto;padding:0 32px;}
section{position:relative;padding:120px 0;}
@media (max-width:768px){section{padding:80px 0;}.wrap{padding:0 20px;}}

.eyebrow{
  font-family:var(--mono);
  font-size:12.5px;
  letter-spacing:.14em;
  text-transform:uppercase;
  color:var(--green);
  display:block;
  width:100%;
  position:relative;
  padding-left:32px;
  margin-bottom:18px;
}
.eyebrow::before{content:"";position:absolute;left:0;top:.65em;width:22px;height:1px;background:var(--green);}

h1,h2,h3,h4{font-family:var(--display);color:var(--ink-100);font-weight:600;line-height:1.08;letter-spacing:-.01em;}
h2{font-size:clamp(30px,4vw,46px);margin-bottom:16px;}
.section-head{max-width:640px;margin-bottom:56px;}
.section-head p{color:var(--ink-400);font-size:16.5px;}

.btn{
  display:inline-flex;align-items:center;gap:10px;
  font-family:var(--mono);font-size:13.5px;letter-spacing:.03em;
  padding:15px 26px;border-radius:999px;border:1px solid var(--line-strong);
  transition:all .25s ease;white-space:nowrap;
}
.btn-solid{background:var(--green);color:#03150d;border-color:var(--green);font-weight:600;}
.btn-solid:hover{background:#5cf0ac;transform:translateY(-2px);box-shadow:0 10px 30px -8px rgba(57,224,151,.55);}
.btn-ghost{color:var(--ink-100);}
.btn-ghost:hover{border-color:var(--green);color:var(--green);}

/* ============ BACKDROP ============ */
#bg-canvas {
  position: fixed;
  inset: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  pointer-events: none;
  animation: floatMesh 7s ease-in-out infinite;
}
@keyframes floatMesh {
  0%, 100% {
    transform: translateY(0px) scale(1);
  }
  50% {
    transform: translateY(-8px) scale(1.015);
  }
}
.bg-grid {
  position: fixed;
  inset: 0;
  z-index: -2;
  pointer-events: none;
  background: 
    radial-gradient(ellipse 900px 700px at 85% 45%, rgba(14, 116, 244, 0.32), transparent 65%),
    radial-gradient(ellipse 800px 600px at 20% 20%, rgba(10, 30, 85, 0.85), transparent 70%),
    radial-gradient(ellipse 700px 500px at 50% 85%, rgba(8, 24, 66, 0.7), transparent 60%),
    linear-gradient(180deg, #030717 0%, #061133 50%, #030717 100%);
}

/* ============ NAV ============ */
header{
  position:fixed;top:0;left:0;right:0;z-index:100;
  padding:18px 0;
  transition:background .3s ease, border-color .3s ease, padding .3s ease;
  border-bottom:1px solid transparent;
}
header.scrolled{background:rgba(6,9,20,.78);backdrop-filter:blur(14px);border-color:var(--line);padding:12px 0;}
header .wrap{display:flex;align-items:center;justify-content:space-between;}
.logo{font-family:var(--display);font-weight:700;font-size:19px;color:var(--ink-100);letter-spacing:-.01em;}
.logo span{color:var(--green);}
nav.primary-nav ul{display:flex;gap:34px;}
nav.primary-nav a{
  font-family:var(--mono);font-size:12.5px;letter-spacing:.06em;text-transform:uppercase;
  color:var(--ink-400);position:relative;padding-bottom:4px;transition:color .2s;
}
nav.primary-nav a::after{content:"";position:absolute;left:0;bottom:0;width:0;height:1px;background:var(--green);transition:width .25s ease;}
nav.primary-nav a:hover,nav.primary-nav a.active{color:var(--ink-100);}
nav.primary-nav a:hover::after,nav.primary-nav a.active::after{width:100%;}
.nav-cta{display:flex;align-items:center;gap:18px;}
.nav-cta .btn{padding:11px 20px;font-size:12.5px;}
.burger{display:none;width:38px;height:38px;border-radius:8px;border:1px solid var(--line-strong);align-items:center;justify-content:center;background:none;}
.burger span,.burger span::before,.burger span::after{content:"";display:block;width:16px;height:1.5px;background:var(--ink-100);position:relative;transition:.25s;}
.burger span::before{position:absolute;top:-5px;}
.burger span::after{position:absolute;top:5px;}

@media (max-width:900px){
  nav.primary-nav{position:fixed;inset:64px 0 0 0;background:var(--navy-950);padding:40px 24px;transform:translateY(-110%);transition:transform .35s ease;overflow-y:auto;}
  nav.primary-nav.open{transform:translateY(0);}
  nav.primary-nav ul{flex-direction:column;gap:6px;}
  nav.primary-nav a{display:block;padding:16px 4px;font-size:15px;border-bottom:1px solid var(--line);}
  .nav-cta .btn-ghost{display:none;}
  .burger{display:flex;}
}

/* ============ HERO ============ */
.hero{padding:168px 0 100px;}
.hero .wrap{display:grid;grid-template-columns:1.15fr .85fr;gap:56px;align-items:start;}
.hero .wrap > *{min-width:0;}
@media (max-width:960px){.hero .wrap{grid-template-columns:1fr;}.hero{padding:140px 0 60px;}}

.hero h1{font-size:clamp(38px,5.4vw,68px);margin-bottom:22px;}
.hero h1 em{font-style:normal;color:var(--green);}
.hero-lede{font-size:17.5px;color:var(--ink-400);max-width:520px;margin-bottom:36px;}
.hero-ctas{display:flex;gap:16px;flex-wrap:wrap;margin-bottom:52px;}

.serp{
  font-family:var(--mono);font-size:13px;
  border:1px solid var(--line-strong);border-radius:12px;
  background:linear-gradient(180deg,rgba(255,255,255,.03),transparent);
  padding:16px 18px;max-width:480px;width:100%;box-sizing:border-box;overflow:hidden;
}
.serp-bar{display:flex;flex-wrap:wrap;align-items:center;gap:10px;color:var(--ink-400);border-bottom:1px solid var(--line);padding-bottom:12px;margin-bottom:12px;min-width:0;}
.serp-bar .dot{width:7px;height:7px;border-radius:50%;background:var(--ink-600);flex-shrink:0;}
.serp-typed::after{content:"";display:inline-block;width:7px;height:14px;background:var(--green);margin-left:2px;vertical-align:middle;animation:blink 1s step-end infinite;}
@keyframes blink{50%{opacity:0;}}
.serp-row{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:6px 12px;color:var(--ink-300);min-width:0;}
.serp-rank{color:var(--green);font-weight:600;display:flex;align-items:center;gap:6px;white-space:nowrap;}

.hero-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:8px 12px;margin-top:44px;border-top:1px solid var(--line);padding-top:28px;}
.hero-stats div{padding-right:8px;min-width:0;}
.hero-stats b{display:block;font-family:var(--display);font-size:28px;color:var(--ink-100);font-weight:700;}
.hero-stats span{font-family:var(--mono);font-size:11.5px;color:var(--ink-400);letter-spacing:.03em;text-transform:uppercase;}

.hero-photo{position:relative;justify-self:center;width:100%;max-width:460px;display:flex;flex-direction:column;align-items:center;}
.photo-frame{
  position:relative;width:100%;max-width:400px;
  background:transparent;
  border:none;
  box-shadow:none;
  display:flex;
  justify-content:center;
  align-items:center;
}
.photo-frame img{
  width:100%;height:auto;max-height:500px;
  object-fit:contain;
  object-position:center top;
  filter:drop-shadow(0 15px 35px rgba(56, 237, 248, 0.25)) saturate(1.05) contrast(1.03);
}
.photo-frame::after{
  display:none;
}
.photo-caption{
  margin-top:18px;text-align:center;
  font-family:var(--mono);font-size:13px;letter-spacing:.06em;text-transform:uppercase;
  color:var(--ink-100);
}
.photo-caption b{color:var(--green);font-family:var(--display);font-weight:600;letter-spacing:0;text-transform:none;}
@media (max-width:960px){.hero-photo{display:flex;flex-direction:column;align-items:center;margin:0 auto;}}

/* ============ TICKER ============ */
.ticker-strip{border-top:1px solid var(--line);border-bottom:1px solid var(--line);padding:22px 0;overflow:hidden;}
.ticker-track{display:flex;gap:48px;white-space:nowrap;width:max-content;animation:scroll-left 28s linear infinite;}
@keyframes scroll-left{from{transform:translateX(0);}to{transform:translateX(-50%);}}
.ticker-track span{font-family:var(--mono);font-size:13px;letter-spacing:.08em;text-transform:uppercase;color:var(--ink-600);}
.ticker-track span b{color:var(--ink-300);font-weight:500;}

/* ============ ABOUT ============ */
.about .wrap{display:grid;grid-template-columns:.9fr 1.1fr;gap:64px;}
@media (max-width:900px){.about .wrap{grid-template-columns:1fr;gap:36px;}}
.about-copy p{margin-bottom:16px;color:var(--ink-300);font-size:15.5px;}
.about-copy p:last-child{margin-bottom:0;}
.focus-list{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:8px;}
.focus-list li{
  font-family:var(--mono);font-size:12.5px;color:var(--ink-300);
  border:1px solid var(--line);border-radius:10px;padding:12px 14px;
  display:flex;align-items:center;gap:10px;
}
.focus-list li::before{content:"→";color:var(--green);}

/* ============ SERVICES ============ */
.services-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--line);border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;}
@media (max-width:900px){.services-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:600px){.services-grid{grid-template-columns:1fr;}}
.service-card{background:var(--navy-900);padding:34px 28px;transition:background .25s ease;}
.service-card:hover{background:var(--navy-800);}
.service-num{font-family:var(--mono);font-size:12px;color:var(--green);margin-bottom:22px;display:block;}
.service-card h3{font-size:19px;margin-bottom:10px;}
.service-card p{font-size:14px;color:var(--ink-400);}

/* ============ CASE STUDIES ============ */
.case-list{display:flex;flex-direction:column;border-top:1px solid var(--line);}
.case-row{
  display:grid;grid-template-columns:2fr 1.4fr 1fr;gap:24px;align-items:center;
  padding:30px 0;border-bottom:1px solid var(--line);
}
@media (max-width:800px){.case-row{grid-template-columns:1fr;gap:14px;}}
.case-info .tag{font-family:var(--mono);font-size:11px;color:var(--gold);text-transform:uppercase;letter-spacing:.06em;margin-bottom:8px;display:block;}
.case-info h3{font-size:20px;margin-bottom:6px;}
.case-info p{font-size:14px;color:var(--ink-400);}
.rank-shift{display:flex;align-items:center;gap:14px;font-family:var(--mono);}
.rank-box{text-align:center;}
.rank-box b{display:block;font-family:var(--display);font-size:24px;color:var(--ink-100);}
.rank-box span{font-size:10.5px;color:var(--ink-600);text-transform:uppercase;}
.rank-arrow{color:var(--green);font-size:18px;}
.case-metric{text-align:right;}
.case-metric b{font-family:var(--display);font-size:26px;color:var(--green);display:block;}
.case-metric span{font-family:var(--mono);font-size:11px;color:var(--ink-400);text-transform:uppercase;}
@media (max-width:800px){.case-metric{text-align:left;}}
.case-note{
  margin-top:24px;font-family:var(--mono);font-size:12px;color:var(--ink-600);
  border:1px dashed var(--line-strong);border-radius:10px;padding:14px 16px;
}

/* ============ WORKS ============ */
.works-filter{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:32px;}
.works-filter button{
  font-family:var(--mono);font-size:12px;letter-spacing:.04em;text-transform:uppercase;
  padding:9px 16px;border-radius:999px;border:1px solid var(--line-strong);background:none;color:var(--ink-400);
  transition:.2s;
}
.works-filter button:hover,.works-filter button.active{border-color:var(--green);color:var(--green);}
.works-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;}
@media (max-width:900px){.works-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:600px){.works-grid{grid-template-columns:1fr;}}
.work-card{
  border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;background:var(--navy-800);
  transition:transform .3s ease,border-color .3s ease;
}
.work-card:hover{transform:translateY(-6px);border-color:var(--line-strong);}
.work-thumb{aspect-ratio:4/3;position:relative;overflow:hidden;}
.work-thumb .swatch{position:absolute;inset:0;}
.work-thumb::after{content:"";position:absolute;inset:0;background:linear-gradient(160deg,rgba(5,7,15,0) 40%,rgba(5,7,15,.75));}
.work-thumb span{position:absolute;bottom:12px;left:14px;font-family:var(--mono);font-size:11px;color:var(--ink-100);letter-spacing:.05em;text-transform:uppercase;z-index:1;}
.work-body{padding:18px 20px;}
.work-body h4{font-size:16px;margin-bottom:4px;}
.work-body p{font-size:13px;color:var(--ink-400);}

/* ============ CLIENTS ============ */
.clients-grid{display:grid;grid-template-columns:repeat(4,1fr);border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;}
@media (max-width:800px){.clients-grid{grid-template-columns:repeat(2,1fr);}}
.client-cell{
  padding:26px 20px;border-right:1px solid var(--line);border-bottom:1px solid var(--line);
  font-family:var(--mono);font-size:13px;color:var(--ink-300);display:flex;flex-direction:column;gap:6px;
}
.client-cell small{color:var(--ink-600);font-size:10.5px;letter-spacing:.06em;text-transform:uppercase;}
.regions{display:flex;gap:14px;margin-top:34px;flex-wrap:wrap;}
.region-pill{
  font-family:var(--mono);font-size:12px;letter-spacing:.04em;text-transform:uppercase;
  border:1px solid var(--line-strong);border-radius:999px;padding:9px 18px;color:var(--ink-300);
  display:flex;align-items:center;gap:8px;
}
.region-pill::before{content:"";width:6px;height:6px;border-radius:50%;background:var(--green);}

/* ============ CERTIFICATIONS ============ */
.cert-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
@media (max-width:800px){.cert-grid{grid-template-columns:1fr 1fr;}}
@media (max-width:520px){.cert-grid{grid-template-columns:1fr;}}
.cert-card{
  border:1px solid var(--line);border-radius:var(--radius);padding:24px;
  display:flex;flex-direction:column;gap:14px;
}
.cert-badge{
  width:44px;height:44px;border-radius:10px;background:rgba(57,224,151,.12);
  color:var(--green);display:flex;align-items:center;justify-content:center;
  font-family:var(--display);font-weight:700;font-size:16px;border:1px solid rgba(57,224,151,.3);
}
.cert-card h4{font-size:15.5px;}
.cert-card span{font-family:var(--mono);font-size:11.5px;color:var(--ink-600);text-transform:uppercase;letter-spacing:.04em;}

/* ============ CONTACT ============ */
.contact .wrap{display:grid;grid-template-columns:1fr 1fr;gap:64px;}
@media (max-width:900px){.contact .wrap{grid-template-columns:1fr;gap:40px;}}
.contact-info .info-row{display:flex;flex-direction:column;gap:4px;padding:18px 0;border-bottom:1px solid var(--line);}
.contact-info .info-row:first-child{padding-top:0;}
.contact-info label{font-family:var(--mono);font-size:11px;color:var(--ink-600);text-transform:uppercase;letter-spacing:.06em;}
.contact-info a,.contact-info div.val{font-family:var(--display);font-size:19px;color:var(--ink-100);}
.contact-info a:hover{color:var(--green);}
.socials{display:flex;gap:12px;margin-top:24px;}
.socials a{
  width:42px;height:42px;border-radius:10px;border:1px solid var(--line-strong);
  display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-size:11px;
  color:var(--ink-300);transition:.2s;
}
.socials a:hover{border-color:var(--green);color:var(--green);}

.form-group{margin-bottom:18px;}
.form-group label{display:block;font-family:var(--mono);font-size:11px;color:var(--ink-600);text-transform:uppercase;letter-spacing:.06em;margin-bottom:8px;}
.form-group input,.form-group textarea{
  width:100%;background:var(--navy-800);border:1px solid var(--line-strong);border-radius:10px;
  padding:14px 16px;color:var(--ink-100);font-family:var(--body);font-size:14.5px;transition:border-color .2s;
}
.form-group input:focus,.form-group textarea:focus{border-color:var(--green);outline:none;}
.form-group textarea{resize:vertical;min-height:110px;}
.form-note{font-family:var(--mono);font-size:11.5px;color:var(--ink-600);margin-top:14px;}

/* ============ FOOTER ============ */
footer{border-top:1px solid var(--line);padding:40px 0;}
footer .wrap{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:14px;}
footer p{font-family:var(--mono);font-size:12px;color:var(--ink-600);}
.back-top{font-family:var(--mono);font-size:12px;color:var(--ink-400);border:1px solid var(--line-strong);border-radius:999px;padding:8px 16px;}
.back-top:hover{color:var(--green);border-color:var(--green);}

.reveal{opacity:0;transform:translateY(24px);transition:opacity .7s ease,transform .7s ease;}
.reveal.in{opacity:1;transform:translateY(0);}
</style>


<style>
.animated-name {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-family: 'Great Vibes', 'Dancing Script', 'Alex Brush', 'Allura', cursive !important;
    font-size: clamp(48px, 7.5vw, 92px);
    font-weight: 700;
    margin-bottom: 20px;
    min-height: 1.3em;
    letter-spacing: 0.02em;
}

.animated-name .hasnain {
    color: #60a5fa;
    font-family: 'Great Vibes', 'Dancing Script', 'Alex Brush', cursive !important;
}

.animated-name .sakib {
    color: #38edf8;
    font-family: 'Great Vibes', 'Dancing Script', 'Alex Brush', cursive !important;
}

.animated-name .type-cursor {
    display: inline-block;
    color: var(--green);
    font-weight: 300;
    margin-left: 2px;
    font-family: var(--body) !important;
    animation: blink-cursor 0.8s infinite;
}

@keyframes blink-cursor {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

/* ============ FULL RESPONSIVE MEDIA QUERIES ============ */
@media (max-width: 600px) {
    .wrap { padding: 0 16px; }
    section { padding: 60px 0; }
    .hero { padding: 120px 0 40px; }
    .hero-stats { grid-template-columns: repeat(3, 1fr); gap: 6px; padding-top: 18px; margin-top: 28px; }
    .hero-stats b { font-size: 20px; }
    .hero-stats span { font-size: 9.5px; }
    .focus-list { grid-template-columns: 1fr; }
    .hero-ctas { flex-direction: column; width: 100%; }
    .hero-ctas .btn { width: 100%; justify-content: center; }
    .serp { padding: 12px 14px; }
    .photo-frame { max-width: 300px; background: transparent; border: none; }
}
</style>

</head>
<body>

<canvas id="bg-canvas"></canvas>
<div class="bg-grid"></div>

<header id="site-header">
  <div class="wrap">
    
    <a href="#top" class="logo"><img src="assets/1.png" alt="logo of Hasnain Sakib, SEO Analyst and Digital Marketing Manager"><span></span></a>
    <nav class="primary-nav" id="primary-nav">
      <ul>
        <li><a href="#about"><h3>About</h3></a></li>
        <li><a href="#services"><h3>Services</h3></a></li>
        <li><a href="#case-studies"><h3>Case Studies</h3></a></li>
        <li><a href="#works"><h3>Works</h3></a></li>
        <li><a href="#clients"><h3>Clients</h3></a></li>
        <li><a href="#certifications"><h3>Certifications</h3></a></li>
        <li><a href="#contact"><h3>Contact</h3></a></li>
      </ul>
    </nav>
    <div class="nav-cta">
      <a href="#contact" class="btn btn-ghost"><h3>Let's talk</h3></a>
      <button class="burger" id="burger" aria-label="Toggle menu" aria-expanded="false"><span></span></button>
    </div>
  </div>
</header>

<!-- ============ HERO ============ -->
<section class="hero" id="top">
  <div class="wrap">
    <div class="hero-copy">
      <!-- <div class="eyebrow">SEO Analyst · Digital Marketing Manager</div> -->
    
    
    <h2 style="
    font-size: clamp(48px, 7.5vw, 84px);
    font-weight: 800;
    letter-spacing: 0.1em;
    margin-bottom: 12px;
    background: linear-gradient(90deg, #60a5fa, #38edf8, #34d399, #c084fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
">
    PORTFOLIO
</h2>


       <!-- <h1><span style="color: #7b85f1;">Hasnain</span> <span style="color: #279dcf;">Sakib</span></h1> -->
       <h1 class="animated-name" style="margin-bottom: 4px;">
    <span class="hasnain" id="type-hasnain"></span>
    <span class="sakib" id="type-sakib"></span>
    <span class="type-cursor">|</span>
</h1>
       <h3 style="margin-top: -6px; margin-bottom: 28px;"><span style="color: #38edf8; text-shadow: 0 0 10px rgba(56, 237, 248, 0.4);">SEO Analyst & Digital Marketing Manager.</span></h3>
      <h2>Ranking brands<br>on page one, <br>Based on purpose.</h2>
      <p class="hero-lede"><h3>Hello, This is Hasnain Sakib </h3>4+ years turning search data into growth for food, fashion, toys, gaming, software and ecommerce brands across Bangladesh, the UK, USA and Malaysia.</p>
      <div class="hero-ctas">
        <a href="#contact" class="btn btn-solid">Hire Me →</a>
        <a href="#case-studies" class="btn btn-ghost">View Case Studies</a>
      </div>
      <div class="serp" aria-hidden="true">
        <div class="serp-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span>&nbsp;google.com/search</div>
        <div class="serp-row" style="margin-bottom:10px;">
          <span>🔍&nbsp; <span id="serp-typed" class="serp-typed"></span></span>
        </div>
        <div class="serp-row"><span><h3>hasnainsakibnfs@gmail.com</h3></span><span class="serp-rank">▲ Position #1</span></div>
      </div>
      <div class="hero-stats">
        <div><b>4+</b><span>Years Experience</span></div>
        <div><b>3</b><span>Companies</span></div>
        <div><b>UK · US · MYS</b><span>Intl. Clients</span></div>
      </div>
    </div>
    <div class="hero-photo">
      <div class="photo-frame">
        <img src="assets/pro.png" alt="Portrait of Hasnain Sakib, SEO Analyst and Digital Marketing Manager">
      </div>
      <div class="photo-caption"><b>Hasnain Sakib</b> · Digital Marketing Manager</div>
    </div>
  </div>
</section>

<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span><b>Food</b> · Fashion · Toys · Games · Software · Ecommerce · <b>Food</b> · Fashion · Toys · Games · Software · Ecommerce ·</span>
    <span><b>Food</b> · Fashion · Toys · Games · Software · Ecommerce · <b>Food</b> · Fashion · Toys · Games · Software · Ecommerce ·</span>
  </div>
</div>

<!-- ============ ABOUT ============ -->
<section class="about" id="about">
  <div class="wrap">
    <div>
      <div class="eyebrow">01 · About</div>
      <h2>Strategy first.<br>Rankings follow.</h2>
    </div>
    <div class="about-copy reveal">
      <p>This is Hasnain Sakib, a Digital Marketing Manager and SEO Analyst with 4+ years of hands-on experience growing organic visibility for multi-niche brands — from food and fashion to toys, gaming, software and ecommerce.</p>
      <p>I currently lead digital marketing at <strong style="color:var(--ink-100)">DOER Services PLC</strong>, a renowned software company, where I manage SEO strategy, campaign performance and organic growth. Across my career I've worked with 3 companies and delivered results for international clients based in the <strong style="color:var(--ink-100)">UK, USA and Malaysia</strong>.</p>
      <p>My approach blends technical SEO, content strategy and data analysis — I don't just chase rankings, I build the systems that keep brands on page one.</p>
      <ul class="focus-list">
        <li>Technical &amp; On-Page SEO</li>
        <li>Keyword &amp; Competitor Research</li>
        <li>Content &amp; Digital Strategy</li>
        <li>Analytics &amp; Reporting</li>
        <li>Multi-niche Campaign Management</li>
        <li>International Client Delivery</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section id="services">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">02 · Services</div>
      <h2>What I bring to the table</h2>
      <p>End-to-end digital marketing built around measurable search performance.</p>
    </div>
    <div class="services-grid">
      <div class="service-card"><span class="service-num">01</span><h3>SEO Strategy</h3><p>Technical audits, on-page optimization and link-building roadmaps built to move rankings, not vanity metrics.</p></div>
      <div class="service-card"><span class="service-num">02</span><h3>Keyword Research</h3><p>Deep competitor and intent analysis to find the keywords that actually convert for your niche.</p></div>
      <div class="service-card"><span class="service-num">03</span><h3>Content Marketing</h3><p>Search-first content calendars and briefs that satisfy both readers and ranking algorithms.</p></div>
      <div class="service-card"><span class="service-num">04</span><h3>Campaign Management</h3><p>Running multi-channel digital campaigns across paid, organic and social for measurable ROI.</p></div>
      <div class="service-card"><span class="service-num">05</span><h3>Analytics &amp; Reporting</h3><p>Clear, decision-ready reporting on traffic, rankings and conversions — no jargon, just insight.</p></div>
      <div class="service-card"><span class="service-num">06</span><h3>Ecommerce &amp; Multi-niche SEO</h3><p>Proven across food, fashion, toys, gaming, software and ecommerce catalogues at scale.</p></div>
    </div>
  </div>
</section>

<!-- ============ CASE STUDIES ============ -->
<section id="case-studies">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">03 · Case Studies</div>
      <h2>Search performance, before &amp; after</h2>
      <p>A snapshot of ranking and traffic movement across recent engagements.</p>
    </div>
    <div class="case-list">
      <div class="case-row">
        <div class="case-info"><span class="tag">Ecommerce · UK Client</span><h3>Organic checkout traffic recovery</h3><p>Rebuilt technical SEO foundation and content structure for a UK ecommerce catalogue.</p></div>
        <div class="rank-shift"><div class="rank-box"><b>#42</b><span>Before</span></div><div class="rank-arrow">→</div><div class="rank-box"><b>#3</b><span>After</span></div></div>
        <div class="case-metric"><b>+180%</b><span>Organic Traffic</span></div>
      </div>
      <div class="case-row">
        <div class="case-info"><span class="tag">Software · USA Client</span><h3>SaaS keyword footprint expansion</h3><p>Grew ranking keyword coverage for a US-based software product across core markets.</p></div>
        <div class="rank-shift"><div class="rank-box"><b>#28</b><span>Before</span></div><div class="rank-arrow">→</div><div class="rank-box"><b>#1</b><span>After</span></div></div>
        <div class="case-metric"><b>3.4x</b><span>Keyword Growth</span></div>
      </div>
      <div class="case-row">
        <div class="case-info"><span class="tag">Fashion · Malaysia Client</span><h3>Regional organic visibility push</h3><p>Localized SEO strategy for a Malaysian fashion retailer targeting regional search intent.</p></div>
        <div class="rank-shift"><div class="rank-box"><b>#35</b><span>Before</span></div><div class="rank-arrow">→</div><div class="rank-box"><b>#5</b><span>After</span></div></div>
        <div class="case-metric"><b>+96%</b><span>Organic Leads</span></div>
      </div>
      <div class="case-row">
        <div class="case-info"><span class="tag">Toys &amp; Games · Multi-market</span><h3>Seasonal campaign SEO support</h3><p>Aligned content and technical SEO with peak-season campaigns for a toys &amp; games brand.</p></div>
        <div class="rank-shift"><div class="rank-box"><b>#50+</b><span>Before</span></div><div class="rank-arrow">→</div><div class="rank-box"><b>#8</b><span>After</span></div></div>
        <div class="case-metric"><b>+140%</b><span>Impressions</span></div>
      </div>
    </div>
    <p class="case-note">These figures are placeholder examples matching your niches — swap in your real campaign numbers and client names before publishing.</p>
  </div>
</section>

<!-- ============ WORKS ============ -->
<section id="works">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">04 · Works</div>
      <h2>Selected work</h2>
      <p>A cross-section of niches I've driven organic growth for.</p>
    </div>
    <div class="works-filter">
      <button class="active" data-filter="all">All</button>
      <button data-filter="food">Food</button>
      <button data-filter="fashion">Fashion</button>
      <button data-filter="toys">Toys &amp; Games</button>
      <button data-filter="software">Software</button>
      <button data-filter="ecom">Ecommerce</button>
    </div>
    <div class="works-grid">
      <div class="work-card" data-cat="food"><div class="work-thumb"><div class="swatch" style="background:linear-gradient(135deg,#1e6b4c,#0a0f22);"></div><span>Food &amp; Beverage</span></div><div class="work-body"><h4>Regional Food Delivery SEO</h4><p>On-page &amp; local SEO overhaul</p></div></div>
      <div class="work-card" data-cat="fashion"><div class="work-thumb"><div class="swatch" style="background:linear-gradient(135deg,#f2b84b,#101a38);"></div><span>Fashion</span></div><div class="work-body"><h4>Apparel Ecommerce Growth</h4><p>Keyword strategy &amp; content plan</p></div></div>
      <div class="work-card" data-cat="toys"><div class="work-thumb"><div class="swatch" style="background:linear-gradient(135deg,#182450,#39e097);"></div><span>Toys &amp; Games</span></div><div class="work-body"><h4>Seasonal Toy Campaign</h4><p>Search demand &amp; content calendar</p></div></div>
      <div class="work-card" data-cat="software"><div class="work-thumb"><div class="swatch" style="background:linear-gradient(135deg,#0a0f22,#39e097);"></div><span>Software</span></div><div class="work-body"><h4>SaaS Organic Acquisition</h4><p>Technical SEO &amp; link strategy</p></div></div>
      <div class="work-card" data-cat="ecom"><div class="work-thumb"><div class="swatch" style="background:linear-gradient(135deg,#1e6b4c,#f2b84b);"></div><span>Ecommerce</span></div><div class="work-body"><h4>Multi-category Storefront SEO</h4><p>Sitewide architecture &amp; audits</p></div></div>
      <div class="work-card" data-cat="software"><div class="work-thumb"><div class="swatch" style="background:linear-gradient(135deg,#101a38,#182450);"></div><span>Software</span></div><div class="work-body"><h4>DOER Services Growth</h4><p>Ongoing SEO &amp; marketing management</p></div></div>
    </div>
  </div>
</section>

<!-- ============ CLIENTS ============ -->
<section id="clients">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">05 · Clients</div>
      <h2>Trusted across borders</h2>
      <p>Working with brands across multiple niches and countries.</p>
    </div>
    <div class="clients-grid">
      <div class="client-cell"><small>Niche</small>Food &amp; Beverage</div>
      <div class="client-cell"><small>Niche</small>Fashion &amp; Apparel</div>
      <div class="client-cell"><small>Niche</small>Toys &amp; Games</div>
      <div class="client-cell"><small>Niche</small>Software &amp; SaaS</div>
      <div class="client-cell"><small>Niche</small>Ecommerce</div>
      <div class="client-cell"><small>Region</small>United Kingdom</div>
      <div class="client-cell"><small>Region</small>United States</div>
      <div class="client-cell"><small>Region</small>Malaysia</div>
    </div>
    <div class="regions">
      <div class="region-pill">🇬🇧 United Kingdom</div>
      <div class="region-pill">🇺🇸 United States</div>
      <div class="region-pill">🇲🇾 Malaysia</div>
    </div>
  </div>
</section>

<!-- ============ CERTIFICATIONS ============ -->
<section id="certifications">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">06 · Certifications</div>
      <h2>Credentials &amp; training</h2>
      <p>Certifications, training and specialized skill validations.</p>
    </div>
    <div class="cert-grid">
      @forelse($certifications as $cert)
        <div class="cert-card" @if($cert->credential_url) onclick="window.open('{{ $cert->credential_url }}', '_blank')" style="cursor:pointer;" @endif>
          @if($cert->image_path)
            <img src="{{ asset($cert->image_path) }}" alt="{{ $cert->title }}" class="cert-img">
          @else
            <div class="cert-badge">{{ $cert->badge_text ?? 'CERT' }}</div>
          @endif
          <h4>{{ $cert->title }}</h4>
          <span>{{ $cert->issuer ?? '' }} @if($cert->issuer && $cert->year) · @endif {{ $cert->year ?? '' }}</span>
        </div>
      @empty
        <p style="color:var(--ink-400);">No certifications listed yet.</p>
      @endforelse
    </div>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section id="contact">
  <div class="wrap">
    <div class="contact-info">
      <div class="eyebrow">07 · Contact</div>
      <h2>Let's grow your rankings</h2>
      <p style="margin-bottom:8px;">Open to full-time roles, consulting and international SEO projects.</p>
      <div class="info-row"><label>Email</label><a href="mailto:hasnainsakibnfs@gmail.com">hasnainsakibnfs@gmail.com</a></div>
      <div class="info-row"><label>Phone</label><a href="tel:+8801791806727">+8801791806727</a></div>
            <div class="info-row"><label>WhatsApp></label><a href="tel:+8801791806727">+8801791806727</a></div>
      <div class="info-row"><label>Location</label><div class="val">Dhaka, Bangladesh</div></div>
      <div class="info-row"><label>Current Role</label><div class="val">Digital Marketing Manager, DOER Services PLC.</div></div>
      <div class="socials">
        <a href="https://www.linkedin.com/in/hasnain-sakib-702bbb142/" aria-label="LinkedIn">in</a>
        <a href="#" aria-label="Twitter / X">X</a>
        <a href="#" aria-label="Behance">Be</a>
        <a href="01791806727" aria-label="WhatsApp">WA</a>
      </div>
    </div>
    <form id="contact-form" novalidate>
      <div class="form-group"><label for="name">Name</label><input id="name" name="name" type="text" required placeholder="Your full name"></div>
      <div class="form-group"><label for="email">Email</label><input id="email" name="email" type="email" required placeholder="you@company.com"></div>
      <div class="form-group"><label for="message">Message</label><textarea id="message" name="message" required placeholder="Tell me about your project..."></textarea></div>
      <button type="submit" class="btn btn-solid" style="width:100%;justify-content:center;">Send Message →</button>
      <p class="form-note">This form is front-end only — connect it to an email service (e.g. Formspree) or backend to receive submissions.</p>
    </form>
  </div>
</section>

<footer>
  <div class="wrap">
    <p>© <span id="year"></span> Hasnain Sakib. All rights reserved.</p>
    <a href="#top" class="back-top">Back to top ↑</a>
  </div>
</footer>

<script>
document.getElementById('year').textContent = new Date().getFullYear();

// header scroll state
const header = document.getElementById('site-header');
window.addEventListener('scroll', ()=>{ header.classList.toggle('scrolled', window.scrollY > 20); });

// mobile nav
const burger = document.getElementById('burger');
const nav = document.getElementById('primary-nav');
burger.addEventListener('click', ()=>{
  const open = nav.classList.toggle('open');
  burger.setAttribute('aria-expanded', open);
});
nav.querySelectorAll('a').forEach(a=>a.addEventListener('click', ()=>{
  nav.classList.remove('open'); burger.setAttribute('aria-expanded','false');
}));

// active link on scroll
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('nav.primary-nav a');
const io = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      navLinks.forEach(l=>l.classList.remove('active'));
      const link = document.querySelector('nav.primary-nav a[href="#'+entry.target.id+'"]');
      if(link) link.classList.add('active');
    }
  });
}, {rootMargin:'-45% 0px -50% 0px'});
sections.forEach(s=>io.observe(s));

// reveal on scroll
const reveals = document.querySelectorAll('.reveal');
const ro = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); ro.unobserve(e.target);} });
}, {threshold:.15});
reveals.forEach(el=>ro.observe(el));

// works filter
const filterBtns = document.querySelectorAll('.works-filter button');
const workCards = document.querySelectorAll('.work-card');
filterBtns.forEach(btn=>{
  btn.addEventListener('click', ()=>{
    filterBtns.forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    const f = btn.dataset.filter;
    workCards.forEach(card=>{
      card.style.display = (f==='all' || card.dataset.cat===f) ? '' : 'none';
    });
  });
});

// hero SERP typing animation
  const phrases = ['Targeted Keywords in First Page','Bringing Organic Growth','Working Multiple Niches'];
const typedEl = document.getElementById('serp-typed');
if(typedEl){
  let pIndex=0, cIndex=0, deleting=false;
  function tick(){
    const phrase = phrases[pIndex];
    if(!deleting){
      cIndex++;
      typedEl.textContent = phrase.slice(0,cIndex);
      if(cIndex===phrase.length){ deleting=true; setTimeout(tick,1400); return; }
    } else {
      cIndex--;
      typedEl.textContent = phrase.slice(0,cIndex);
      if(cIndex===0){ deleting=false; pIndex=(pIndex+1)%phrases.length; }
    }
    setTimeout(tick, deleting?35:60);
  }
  tick();
}

// contact form (front-end only)
const form = document.getElementById('contact-form');
form.addEventListener('submit', function(e){
  e.preventDefault();
  const btn = form.querySelector('button[type="submit"]');
  const original = btn.textContent;
  btn.textContent = 'Message ready — connect a backend to send ✓';
  btn.disabled = true;
  setTimeout(()=>{ btn.textContent = original; btn.disabled = false; form.reset(); }, 3200);
});

// Name Typewriter Animation (Hasnain Sakib)
(function() {
  const word1 = "Hasnain";
  const word2 = "Sakib";
  const havenEl = document.getElementById('type-hasnain');
  const sakibEl = document.getElementById('type-sakib');

  if (!havenEl || !sakibEl) return;

  let state = 'typing1';
  let i = 0;

  function typeLoop() {
    if (state === 'typing1') {
      havenEl.textContent = word1.slice(0, i + 1);
      i++;
      if (i === word1.length) {
        state = 'typing2';
        i = 0;
        setTimeout(typeLoop, 200);
        return;
      }
      setTimeout(typeLoop, 120);
    } else if (state === 'typing2') {
      sakibEl.textContent = word2.slice(0, i + 1);
      i++;
      if (i === word2.length) {
        state = 'hold';
        setTimeout(typeLoop, 3000); // Wait 3 seconds after full name is typed
        return;
      }
      setTimeout(typeLoop, 120);
    } else if (state === 'hold') {
      state = 'deleting2';
      i = word2.length;
      setTimeout(typeLoop, 50);
    } else if (state === 'deleting2') {
      sakibEl.textContent = word2.slice(0, i - 1);
      i--;
      if (i === 0) {
        state = 'deleting1';
        i = word1.length;
        setTimeout(typeLoop, 50);
        return;
      }
      setTimeout(typeLoop, 40);
    } else if (state === 'deleting1') {
      havenEl.textContent = word1.slice(0, i - 1);
      i--;
      if (i === 0) {
        state = 'typing1';
        i = 0;
        setTimeout(typeLoop, 400);
        return;
      }
      setTimeout(typeLoop, 40);
    }
  }

  typeLoop();
})();

// Floating Glowing Wave Ribbon Animation (Far Right Edge - Yellow Box Region Only)
(function() {
  const canvas = document.getElementById('bg-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  
  let width, height;
  let waveParticles = [];
  let time = 0;

  function resize() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    initWaveParticles();
  }

  function initWaveParticles() {
    waveParticles = [];
    const particleCount = 45;
    for (let i = 0; i < particleCount; i++) {
      waveParticles.push({
        y: Math.random() * height,
        waveOffset: Math.random() * Math.PI * 2,
        speed: 0.2 + Math.random() * 0.4,
        size: Math.random() * 2 + 0.8,
        alpha: Math.random() * 0.7 + 0.3,
        color: Math.random() > 0.4 ? '#38edf8' : '#60a5fa'
      });
    }
  }

  function drawRightWaveRibbon() {
    ctx.save();
    
    // Wave ribbon focused strictly on the far right edge (yellow box area)
    const rightEdge = width * 0.80;
    const waveLines = 14;

    for (let w = 0; w < waveLines; w++) {
      ctx.beginPath();
      const alpha = 0.08 + (w / waveLines) * 0.18;
      ctx.strokeStyle = w % 2 === 0 
        ? `rgba(56, 237, 248, ${alpha})` 
        : `rgba(0, 140, 255, ${alpha})`;
      ctx.lineWidth = 1.4;

      for (let y = -40; y < height + 40; y += 12) {
        const waveX = rightEdge 
          + Math.sin(time * 0.8 + y * 0.006 + w * 0.35) * 55 
          + Math.cos(time * 0.5 + y * 0.009 + w * 0.2) * 35 
          + (w * 18);
          
        if (y === -40) {
          ctx.moveTo(waveX, y);
        } else {
          ctx.lineTo(waveX, y);
        }
      }
      ctx.stroke();
    }

    // Micro glowing star specks inside the right wave ribbon flow
    for (let i = 0; i < waveParticles.length; i++) {
      let p = waveParticles[i];
      p.y -= p.speed;
      if (p.y < -20) p.y = height + 20;

      const pX = rightEdge 
        + Math.sin(time * 0.8 + p.y * 0.006 + p.waveOffset) * 55 
        + Math.cos(time * 0.5 + p.y * 0.009) * 35 
        + (p.waveOffset * 15);

      ctx.beginPath();
      ctx.arc(pX, p.y, p.size, 0, Math.PI * 2);
      ctx.fillStyle = p.color;
      ctx.shadowBlur = 8;
      ctx.shadowColor = '#38edf8';
      ctx.globalAlpha = p.alpha * (0.6 + Math.sin(time * 2 + p.waveOffset) * 0.4);
      ctx.fill();
      ctx.shadowBlur = 0;
      ctx.globalAlpha = 1.0;
    }

    ctx.restore();
  }

  function animate() {
    time += 0.016;
    ctx.clearRect(0, 0, width, height);

    // Draw only the right-side wave ribbon (Yellow box area)
    drawRightWaveRibbon();

    requestAnimationFrame(animate);
  }

  window.addEventListener('resize', resize);
  resize();
  animate();
})();
</script>
</body>
</html>
