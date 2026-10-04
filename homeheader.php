<div class="home-brand-container">
  <div class="brand-crest">
    <img src="images/national crest.gif" alt="National Crest of Sri Lanka" />
  </div>
  <div class="brand-titles">
    <h1 class="main-title">කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය</h1>
    <h2 class="sub-title">වයඹ පළාත් සභාව &bull; Management Development &amp; Training Unit (NWP)</h2>
  </div>
  <div class="brand-flag">
    <img src="images/pflag.PNG" alt="Wayamba Provincial Flag" />
  </div>
</div>

<style>
.home-brand-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  gap: 20px;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
}

.brand-crest img {
  max-height: 75px;
  width: auto;
  object-fit: contain;
  filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
}

.brand-titles {
  text-align: center;
  flex: 1;
}

.brand-titles .main-title {
  font-size: 1.65rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0;
  line-height: 1.3;
  letter-spacing: -0.3px;
}

.brand-titles .sub-title {
  font-size: 0.95rem;
  font-weight: 500;
  color: #475569;
  margin: 6px 0 0 0;
}

.brand-flag img {
  max-height: 52px;
  width: auto;
  object-fit: contain;
  border-radius: 4px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.12);
}

@media (max-width: 991px) {
  .home-brand-container {
    flex-wrap: wrap;
    justify-content: center;
    text-align: center;
    gap: 12px;
  }
  .brand-titles .main-title {
    font-size: 1.3rem;
  }
  .brand-titles .sub-title {
    font-size: 0.85rem;
  }
  .brand-crest img {
    max-height: 60px;
  }
  .brand-flag img {
    max-height: 42px;
  }
}

@media (max-width: 576px) {
  .home-brand-container {
    flex-direction: column;
    gap: 10px;
  }
  .brand-titles .main-title {
    font-size: 1.15rem;
  }
  .brand-titles .sub-title {
    font-size: 0.75rem;
  }
}
</style>