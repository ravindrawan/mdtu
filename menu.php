<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="sidebar-menu-nav">
  <ul class="nav-list">
    <li class="nav-item">
      <a href="index.php" class="nav-link <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>">
        <span class="nav-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        </span>
        <span class="nav-text">මුල් පිටුව</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="trainingprogramms.php" class="nav-link <?php echo ($currentPage == 'trainingprogramms.php') ? 'active' : ''; ?>">
        <span class="nav-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/></svg>
        </span>
        <span class="nav-text">පුහුණු වැඩසටහන්</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="privatetrainings.php" class="nav-link <?php echo ($currentPage == 'privatetrainings.php') ? 'active' : ''; ?>">
        <span class="nav-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
        </span>
        <span class="nav-text">බාහිර පුහුණු පාඨමාලා</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="staffprofile.php" class="nav-link <?php echo ($currentPage == 'staffprofile.php') ? 'active' : ''; ?>">
        <span class="nav-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </span>
        <span class="nav-text">කාර්යමණ්ඩලය</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="usrdownloads.php" class="nav-link <?php echo ($currentPage == 'usrdownloads.php') ? 'active' : ''; ?>">
        <span class="nav-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
        </span>
        <span class="nav-text">බාගත කිරීම්</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="contactus.php" class="nav-link <?php echo ($currentPage == 'contactus.php') ? 'active' : ''; ?>">
        <span class="nav-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </span>
        <span class="nav-text">අමතන්න</span>
      </a>
    </li>
  </ul>
</nav>

<style>
.sidebar-menu-nav {
  width: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
}

.sidebar-menu-nav .nav-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.sidebar-menu-nav .nav-link {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 12px 16px;
  color: #94a3b8 !important;
  border-radius: 12px;
  text-decoration: none !important;
  font-size: 0.95rem;
  font-weight: 500;
  transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  border: 1px solid transparent;
}

.sidebar-menu-nav .nav-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #64748b;
  transition: color 0.2s ease, transform 0.2s ease;
}

.sidebar-menu-nav .nav-link:hover {
  background: rgba(255, 255, 255, 0.08);
  color: #ffffff !important;
  padding-left: 20px;
}

.sidebar-menu-nav .nav-link:hover .nav-icon {
  color: #38bdf8;
  transform: scale(1.1);
}

.sidebar-menu-nav .nav-link.active {
  background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(37, 99, 235, 0.1) 100%);
  color: #ffffff !important;
  border-color: rgba(59, 130, 246, 0.4);
  font-weight: 600;
}

.sidebar-menu-nav .nav-link.active .nav-icon {
  color: #60a5fa;
}
</style>