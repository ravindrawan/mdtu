<div class="site-footer-container">
  <div class="footer-content">
    <p class="copyright-text">
      &copy; <?php echo date("Y"); ?> <strong>කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය (MDTU)</strong> &bull; වයඹ පළාත් සභාව - සියළුම හිමිකම් ඇවිරිණි.
    </p>
    <div class="footer-links">
      <a href="index.php">මුල් පිටුව</a> &bull;
      <a href="trainingprogramms.php">පුහුණු වැඩසටහන්</a> &bull;
      <a href="staffprofile.php">කාර්යමණ්ඩලය</a> &bull;
      <a href="usrdownloads.php">බාගත කිරීම්</a> &bull;
      <a href="contactus.php">අමතන්න</a>
    </div>
  </div>
</div>

<style>
.site-footer-container {
  width: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
  color: #64748b;
  font-size: 0.88rem;
  line-height: 1.6;
  padding: 10px 0;
}

.site-footer-container .footer-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 8px;
  text-align: center;
}

.site-footer-container .copyright-text {
  margin: 0;
  color: #475569;
}

.site-footer-container .copyright-text strong {
  color: #1e293b;
}

.site-footer-container .footer-links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 8px;
  font-size: 0.82rem;
}

.site-footer-container .footer-links a {
  color: #3b82f6;
  text-decoration: none;
  transition: color 0.2s ease;
}

.site-footer-container .footer-links a:hover {
  color: #1d4ed8;
  text-decoration: underline;
}

@media (max-width: 768px) {
  .site-footer-container {
    font-size: 0.8rem;
  }
}
</style>