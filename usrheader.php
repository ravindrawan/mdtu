<div class="usr-header-wrapper">
  <div class="usr-top-banner">
    <div class="banner-crest">
      <img src="images/national crest.gif" alt="National Crest" />
    </div>
    <div class="banner-titles">
      <h1 class="main-heading">කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය</h1>
      <h2 class="sub-heading">වයඹ පළාත් සභාව &bull; Management Development &amp; Training Unit</h2>
    </div>
    <div class="banner-flag">
      <img src="images/pflag.PNG" alt="Wayamba Provincial Flag" />
    </div>
  </div>

  <div class="usr-nav-bar">
    <?php include('cmenu.php'); ?>
  </div>

  <div class="usr-notice-strip">
    <?php require_once("specialmsgs.php"); ?>
  </div>
</div>

<style>
.usr-header-wrapper {
  width: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
  margin-bottom: 20px;
}

.usr-top-banner {
  background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
  color: #ffffff;
  padding: 18px 24px;
  border-radius: 16px 16px 0 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
}

.banner-crest img {
  max-height: 70px;
  width: auto;
  filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
}

.banner-titles {
  flex: 1;
  text-align: center;
}

.banner-titles .main-heading {
  font-size: 1.6rem;
  font-weight: 700;
  color: #ffffff;
  margin: 0;
  line-height: 1.3;
}

.banner-titles .sub-heading {
  font-size: 0.95rem;
  font-weight: 400;
  color: #93c5fd;
  margin: 4px 0 0 0;
}

.banner-flag img {
  max-height: 48px;
  width: auto;
  border-radius: 4px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

.usr-nav-bar {
  background: #172554;
  padding: 4px 8px;
}

.usr-notice-strip {
  background: #fef3c7;
  border-bottom: 1px solid #fde68a;
  border-radius: 0 0 16px 16px;
  padding: 10px 18px;
}

@media (max-width: 768px) {
  .usr-top-banner {
    flex-direction: column;
    text-align: center;
    padding: 14px;
  }
  .banner-titles .main-heading {
    font-size: 1.25rem;
  }
  .banner-titles .sub-heading {
    font-size: 0.8rem;
  }
  .banner-crest img {
    max-height: 55px;
  }
  .banner-flag img {
    max-height: 40px;
  }
}
</style>