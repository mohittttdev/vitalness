<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Why Choose Us</title>
<style>
  :root{
    --purple: #7B5FE0;
    --purple-dark: #5A3FC0;
    --teal: #16B8B0;
    --teal-dark: #0E8F8E;
    --ink: #1F2430;
    --gray-text: #3C4150;
    --card-gray-start: #F2F2F4;
    --card-gray-end: #E3E4E8;
  }
  *{box-sizing:border-box; margin:0; padding:0;}
  html,body{
    width:1280px;
    height:720px;
    font-family:'Segoe UI', Arial, sans-serif;
    background:#ffffff;
    overflow:hidden;
  }
  .slide{
    position:relative;
    width:1280px;
    height:720px;
    background:#ffffff;
  }

  /* ---------- Right-side photo panel ---------- */
  .photo-panel{
    position:absolute;
    top:0; right:0;
    width:520px;
    height:720px;
    overflow:hidden;
    background:
      linear-gradient(135deg, #9c8fc9 0%, #b9b3d6 40%, #d7d3e6 100%);
  }
  .photo-panel::before{
    /* faint window-blind lines to suggest an office background */
    content:"";
    position:absolute;
    inset:0;
    background-image: repeating-linear-gradient(
      90deg,
      rgba(255,255,255,0.15) 0 2px,
      transparent 2px 60px
    );
  }
  .photo-panel .silhouette{
    position:absolute;
    bottom:0;
    left:50%;
    transform:translateX(-50%);
    width:380px;
    height:520px;
    background:
      radial-gradient(circle at 50% 22%, #cfc9e5 0 78px, transparent 79px),
      linear-gradient(180deg, #8f82c4 0%, #7264b0 100%);
    border-radius:190px 190px 0 0;
    opacity:0.85;
  }

  /* purple circular gradient overlay (the signature shape) */
  .circle-overlay{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-58%, -50%);
    width:760px;
    height:760px;
    border-radius:50%;
    background:linear-gradient(135deg, var(--purple) 0%, var(--purple-dark) 60%, #4a35a8 100%);
    mix-blend-mode:normal;
    opacity:0.55;
  }

  /* ---------- Left content ---------- */
  .content{
    position:absolute;
    top:0; left:0;
    width:800px;
    height:720px;
    padding:70px 60px 0 76px;
  }

  .eyebrow-arrow{
    position:absolute;
    top:118px;
    left:500px;
    width:70px;
    height:2px;
    background:#B9BAC2;
  }
  .eyebrow-arrow::after{
    content:"";
    position:absolute;
    right:-2px;
    top:-6px;
    width:14px;
    height:14px;
    border-top:2px solid #B9BAC2;
    border-right:2px solid #B9BAC2;
    transform:rotate(45deg);
  }

  h1{
    font-size:46px;
    line-height:1.12;
    font-weight:800;
    color:var(--purple);
    letter-spacing:0.5px;
  }

  .lead{
    margin-top:26px;
    max-width:400px;
    font-size:17px;
    line-height:1.55;
    color:var(--gray-text);
  }

  .stats{
    display:flex;
    gap:70px;
    margin-top:44px;
  }
  .stat .num{
    font-size:52px;
    font-weight:800;
    color:var(--purple);
    line-height:1;
  }
  .stat .label{
    margin-top:12px;
    font-size:15px;
    color:var(--gray-text);
    line-height:1.4;
    max-width:150px;
  }

  .cards{
    display:flex;
    gap:20px;
    margin-top:60px;
    width:1140px;
  }
  .card{
    flex:1;
    border-radius:16px;
    padding:28px 26px 30px;
    color:#ffffff;
  }
  .card h3{
    font-size:20px;
    font-weight:700;
    margin-bottom:14px;
  }
  .card p{
    font-size:14.5px;
    line-height:1.5;
    opacity:0.92;
  }
  .card.purple{
    background:linear-gradient(135deg, var(--purple) 0%, var(--purple-dark) 100%);
  }
  .card.teal{
    background:linear-gradient(135deg, var(--teal) 0%, var(--teal-dark) 100%);
  }
  .card.gray{
    background:linear-gradient(135deg, var(--card-gray-start) 0%, var(--card-gray-end) 100%);
    color:var(--ink);
  }
  .card.gray p{ color:#4A4E5A; opacity:1; }
</style>
</head>
<body>
  <div class="slide">

    <div class="photo-panel">
      <div class="silhouette"></div>
      <div class="circle-overlay"></div>
    </div>

    <div class="content">
      <h1>WHY<br>CHOOSE US</h1>
      <div class="eyebrow-arrow"></div>

      <p class="lead">This is a sample text. Insert your desired text here. This is a sample text.</p>

      <div class="stats">
        <div class="stat">
          <div class="num">95%</div>
          <div class="label">Insert your desired text here.</div>
        </div>
        <div class="stat">
          <div class="num">$109+</div>
          <div class="label">Insert your desired text here.</div>
        </div>
      </div>

      <div class="cards">
        <div class="card purple">
          <h3>Placeholder</h3>
          <p>This is a sample text. Insert your desired text here.</p>
        </div>
        <div class="card teal">
          <h3>Placeholder</h3>
          <p>This is a sample text. Insert your desired text here.</p>
        </div>
        <div class="card gray">
          <h3>Placeholder</h3>
          <p>This is a sample text. Insert your desired text here.</p>
        </div>
      </div>
    </div>

  </div>
</body>
</html>