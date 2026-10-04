<!DOCTYPE html>
<html lang="si">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය - වයඹ පළාත් සභාව | MDTU NWP</title>

  <!-- Google Fonts: Noto Sans Sinhala & Inter & Space Grotesk -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Noto+Sans+Sinhala:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cp.css">

  <style>
    :root {
      --bg-main: #f8fafc;
      --sidebar: #0f172a;
      --sidebar-hover: #1e293b;
      --accent-blue: #3b82f6;
      --card-white: #ffffff;
      --text-dark: #1e293b;
      --text-light: #64748b;
      --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.04);
      --shadow-md: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
      --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.03);
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Noto Sans Sinhala', 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      background-color: var(--bg-main);
      color: var(--text-dark);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    /* Fallback for obsolete font references */
    [style*="Malithi Web"], [style*='Malithi Web'] {
      font-family: 'Noto Sans Sinhala', 'Inter', sans-serif !important;
    }

    /* Mobile Navbar Header */
    .mobile-topbar {
      display: none;
      position: sticky;
      top: 0;
      left: 0;
      right: 0;
      height: 64px;
      background: var(--sidebar);
      color: #ffffff;
      padding: 0 20px;
      align-items: center;
      justify-content: space-between;
      z-index: 1050;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .mobile-brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: #ffffff;
      text-decoration: none !important;
    }

    .mobile-brand img {
      height: 36px;
      width: auto;
    }

    .mobile-toggle-btn {
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.2);
      color: #ffffff;
      width: 42px;
      height: 42px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    .mobile-toggle-btn:hover {
      background: rgba(255,255,255,0.2);
    }

    /* Sidebar Overlay (Mobile) */
    .sidebar-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(15, 23, 42, 0.6);
      backdrop-filter: blur(4px);
      z-index: 1090;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .sidebar-overlay.active {
      display: block;
      opacity: 1;
    }

    /* Sidebar */
    .sidebar {
      width: 270px;
      background: var(--sidebar);
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      color: #f1f5f9;
      padding: 30px 18px;
      z-index: 1100;
      overflow-y: auto;
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      flex-direction: column;
    }

    .sidebar::-webkit-scrollbar {
      width: 4px;
    }
    .sidebar::-webkit-scrollbar-thumb {
      background: #334155;
      border-radius: 4px;
    }

    .sidebar-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 30px;
      padding: 0 8px;
    }

    .sidebar-brand-title {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 1.45rem;
      font-weight: 700;
      letter-spacing: -0.5px;
      background: linear-gradient(135deg, #60a5fa 0%, #38bdf8 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin: 0;
    }

    .sidebar-close-btn {
      display: none;
      background: transparent;
      border: none;
      color: #94a3b8;
      cursor: pointer;
      padding: 4px;
    }

    .sidebar-close-btn:hover {
      color: #ffffff;
    }

    /* Main Content Wrapper */
    .main-wrapper {
      margin-left: 270px;
      padding: 30px 40px 50px 40px;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      transition: margin-left 0.3s ease;
    }

    /* Dashboard Top Header */
    .dashboard-header {
      background: var(--card-white);
      padding: 24px 32px;
      border-radius: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: var(--shadow-md);
      margin-bottom: 30px;
      border: 1px solid rgba(226, 232, 240, 0.8);
      position: relative;
    }

    .brand-info {
      flex: 1;
    }

    .status-badge {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 4px;
      padding-left: 20px;
      border-left: 1px solid #e2e8f0;
    }

    .badge-date-tag {
      font-size: 0.75rem;
      text-transform: uppercase;
      font-weight: 700;
      color: #3b82f6;
      background: #eff6ff;
      padding: 2px 8px;
      border-radius: 6px;
    }

    .badge-date-val {
      font-size: 0.95rem;
      font-weight: 600;
      color: #1e293b;
    }

    /* Dashboard Cards */
    .stat-card {
      background: var(--card-white);
      border-radius: 20px;
      padding: 26px;
      margin-bottom: 30px;
      box-shadow: var(--shadow-md);
      border: 1px solid rgba(226, 232, 240, 0.8);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      display: flex;
      flex-direction: column;
      height: calc(100% - 30px);
    }

    .stat-card:hover {
      box-shadow: var(--shadow-lg);
      border-color: #cbd5e1;
    }

    .stat-card-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
      padding-bottom: 12px;
      border-bottom: 1px solid #f1f5f9;
    }

    .stat-card h2 {
      font-family: 'Noto Sans Sinhala', 'Space Grotesk', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: #0f172a;
      margin: 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .card-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 34px;
      height: 34px;
      border-radius: 10px;
      background: #eff6ff;
      color: #3b82f6;
      font-size: 1rem;
    }

    .stat-card-body {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    /* Login Area */
    .login-container {
      background: linear-gradient(145deg, #1e293b 0%, #0f172a 100%);
      color: #ffffff;
      border-radius: 20px;
      padding: 30px;
      margin-bottom: 30px;
      box-shadow: var(--shadow-lg);
      border: 1px solid #334155;
      display: flex;
      flex-direction: column;
      height: calc(100% - 30px);
    }

    .login-container h2 {
      font-family: 'Noto Sans Sinhala', 'Space Grotesk', sans-serif;
      font-size: 1.2rem;
      font-weight: 700;
      color: #38bdf8;
      margin: 0 0 6px 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .login-desc {
      color: #94a3b8;
      font-size: 0.85rem;
      margin-bottom: 22px;
    }

    /* Responsive Media Queries */
    @media (max-width: 1024px) {
      .mobile-topbar {
        display: flex;
      }
      .sidebar {
        transform: translateX(-100%);
        box-shadow: none;
      }
      .sidebar.open {
        transform: translateX(0);
        box-shadow: 10px 0 30px rgba(0,0,0,0.3);
      }
      .sidebar-close-btn {
        display: block;
      }
      .main-wrapper {
        margin-left: 0;
        padding: 20px 16px 40px 16px;
      }
      .dashboard-header {
        padding: 18px 20px;
        flex-direction: column;
        gap: 16px;
        align-items: stretch;
      }
      .status-badge {
        align-items: center;
        border-left: none;
        border-top: 1px solid #e2e8f0;
        padding-left: 0;
        padding-top: 12px;
      }
    }

    @media (max-width: 768px) {
      .stat-card, .login-container {
        padding: 20px;
        margin-bottom: 20px;
        height: auto;
      }
      .main-wrapper {
        padding: 14px 12px 30px 12px;
      }
    }
  </style>
</head>
<body>

<!-- Mobile Sticky Top Bar -->
<div class="mobile-topbar">
  <a href="index.php" class="mobile-brand">
    <img src="images/national crest.gif" alt="Crest" />
    <span>MDTU NWP</span>
  </a>
  <button type="button" class="mobile-toggle-btn" id="sidebarToggleBtn" aria-label="Toggle navigation menu">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
  </button>
</div>

<!-- Mobile Sidebar Overlay Backdrop -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- Sidebar Navigation -->
<aside class="sidebar" id="mainSidebar">
  <div class="sidebar-header">
    <h2 class="sidebar-brand-title">MDTU-NWP</h2>
    <button type="button" class="sidebar-close-btn" id="sidebarCloseBtn" aria-label="Close menu">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <?php include('menu.php'); ?>
</aside>

<!-- Main Wrapper -->
<div class="main-wrapper">
  <!-- Top Header Section -->
  <header class="dashboard-header">
    <div class="brand-info">
      <?php include('homeheader.php'); ?>
    </div>
    <div class="status-badge">
      <span class="badge-date-tag">අද දිනය</span>
      <span class="badge-date-val"><?php echo date('d M Y'); ?></span>
    </div>
  </header>

  <!-- Row 1: Slideshow & News Bar -->
  <div class="row">
    <div class="col-lg-8">
      <div class="stat-card p-0" style="overflow: hidden; border: none;">
        <?php include('slideshow.php'); ?>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="stat-card">
        <div class="stat-card-header">
          <h2>
            <span class="card-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
            </span>
            <span>විශේෂ නිවේදන</span>
          </h2>
        </div>
        <div class="stat-card-body">
          <?php include('newsbar.php'); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Row 2: Active Trainings & Login Form -->
  <div class="row">
    <div class="col-lg-8">
      <div class="stat-card">
        <div class="stat-card-header">
          <h2>
            <span class="card-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/></svg>
            </span>
            <span>ක්‍රියාකාරී පුහුණු වැඩසටහන්</span>
          </h2>
        </div>
        <div class="stat-card-body">
          <?php include('mdtutrainings.php'); ?>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="login-container">
        <h2>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          <span>පද්ධතියට ඇතුල්වීම</span>
        </h2>
        <p class="login-desc">පරිපාලන පද්ධතිය වෙත පිවිසීමට ඔබගේ තොරතුරු ඇතුලත් කරන්න.</p>
        <?php include('logform.php'); ?>
      </div>
    </div>
  </div>

  <!-- Row 3: Calendar, Foreign Scholarships, External Courses -->
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="stat-card">
        <div class="stat-card-header">
          <h2>
            <span class="card-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
            </span>
            <span>පුහුණු දින දර්ශනය</span>
          </h2>
        </div>
        <div class="stat-card-body">
          <?php include('calnder.php'); ?>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="stat-card">
        <div class="stat-card-header">
          <h2>
            <span class="card-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
            </span>
            <span>විදේශ ශිෂ්‍යත්ව</span>
          </h2>
        </div>
        <div class="stat-card-body">
          <?php include('foreignsch.php'); ?>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12">
      <div class="stat-card">
        <div class="stat-card-header">
          <h2>
            <span class="card-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            </span>
            <span>බාහිර පුහුණු පාඨමාලා</span>
          </h2>
        </div>
        <div class="stat-card-body">
          <?php include('othertrainings.php'); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Row 4: Team Birthdays -->
  <div class="row">
    <div class="col-12">
      <div class="stat-card">
        <div class="stat-card-header">
          <h2>
            <span class="card-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-8a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8"/><path d="M4 16s.5-1 2-1 2.5 2 4 2 2.5-2 4-2 2.5 2 4 2 2-1 2-1"/><path d="M2 21h20"/><path d="M7 8v3"/><path d="M12 8v3"/><path d="M17 8v3"/><path d="M7 4h.01"/><path d="M12 4h.01"/><path d="M17 4h.01"/></svg>
            </span>
            <span>අද දින උපන්දිනය සමරන නිලධාරීන්</span>
          </h2>
        </div>
        <div class="stat-card-body">
          <?php include('bdayhome.php'); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer style="margin-top: auto; padding-top: 20px;">
    <?php include('footer.php'); ?>
  </footer>
</div>

<!-- Mobile Navigation Drawer Script -->
<script>
(function() {
  var toggleBtn = document.getElementById('sidebarToggleBtn');
  var closeBtn = document.getElementById('sidebarCloseBtn');
  var sidebar = document.getElementById('mainSidebar');
  var overlay = document.getElementById('sidebarOverlay');

  function openSidebar() {
    if (sidebar) sidebar.classList.add('open');
    if (overlay) overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeSidebar() {
    if (sidebar) sidebar.classList.remove('open');
    if (overlay) overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (toggleBtn) toggleBtn.addEventListener('click', openSidebar);
  if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
  if (overlay) overlay.addEventListener('click', closeSidebar);

  // Close sidebar on esc key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeSidebar();
  });
})();
</script>

</body>
</html>
