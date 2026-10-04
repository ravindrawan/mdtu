<?php
@include_once "db.php";

$td = date("Y-m-d");
$trainings = [];

if (isset($con) && $con && !$con->connect_error) {
    $sql = "SELECT * FROM cp_atp WHERE (atp_lastdateapply >= '$td' AND atp_addhome='ඔව්') AND atp_trtype='MDTU පුහුණුවකි' ORDER BY atp_requestDate ASC";
    $rs = @mysqli_query($con, $sql);
    if ($rs && mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $trainings[] = $row;
        }
    }
}
?>

<div class="active-trainings-container">
  <?php if (!empty($trainings)): ?>
    <div class="trainings-scroll-area">
      <?php foreach ($trainings as $tr): ?>
        <div class="training-card-item">
          <div class="tr-badge-row">
            <span class="badge-location">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              <?php echo htmlspecialchars($tr["atp_location"]); ?>
            </span>
            <span class="badge-time">
              <?php echo htmlspecialchars($tr["atp_stime"]); ?> - <?php echo htmlspecialchars($tr["atp_etime"]); ?>
            </span>
          </div>

          <h3 class="tr-course-name"><?php echo htmlspecialchars($tr["atp_trname"]); ?></h3>

          <div class="tr-dates">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
            <span>
              <?php
                $dates = [];
                for ($d = 1; $d <= 10; $d++) {
                    $key = "atp_day" . $d;
                    if (!empty($tr[$key]) && $tr[$key] != "1111-11-11" && $tr[$key] != "0000-00-00") {
                        $dates[] = $tr[$key];
                    }
                }
                echo !empty($dates) ? implode(', ', $dates) : 'දිනයන් පසුව දැනුම් දෙනු ලැබේ';
              ?>
            </span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="trainings-empty-box">
      <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.5"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10"/><path d="M6 10h10"/></svg>
      <p>දැනට අයදුම්පත් කැඳවන පුහුණු වැඩසටහන් නොමැත.</p>
    </div>
  <?php endif; ?>

  <div class="trainings-footer-link">
    <a href="mdtutrngs.php" class="view-all-link">
      <span>පැවැත්වීමට නියමිත සියළුම පුහුණු වැඩසටහන්</span>
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
    </a>
  </div>
</div>

<style>
.active-trainings-container {
  width: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
  display: flex;
  flex-direction: column;
}

.trainings-scroll-area {
  max-height: 250px;
  overflow-y: auto;
  padding-right: 6px;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.trainings-scroll-area::-webkit-scrollbar {
  width: 6px;
}
.trainings-scroll-area::-webkit-scrollbar-track {
  background: #f1f5f9;
  border-radius: 4px;
}
.trainings-scroll-area::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 4px;
}
.trainings-scroll-area::-webkit-scrollbar-thumb:hover {
  background: #94a3b8;
}

.training-card-item {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  padding: 14px 18px;
  transition: all 0.2s ease;
}

.training-card-item:hover {
  border-color: #3b82f6;
  background: #ffffff;
  box-shadow: 0 4px 12px rgba(59, 130, 246, 0.08);
  transform: translateY(-2px);
}

.tr-badge-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: 8px;
}

.badge-location, .badge-time {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.75rem;
  font-weight: 600;
  padding: 3px 8px;
  border-radius: 6px;
}

.badge-location {
  background: #dbeafe;
  color: #1d4ed8;
}

.badge-time {
  background: #e2e8f0;
  color: #475569;
}

.tr-course-name {
  font-size: 1.05rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0 0 8px 0;
  line-height: 1.4;
}

.tr-dates {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.85rem;
  color: #64748b;
  font-weight: 500;
}

.trainings-empty-box {
  text-align: center;
  padding: 36px 16px;
  color: #64748b;
  background: #f8fafc;
  border-radius: 12px;
  border: 1px dashed #cbd5e1;
}

.trainings-empty-box p {
  margin: 10px 0 0 0;
  font-weight: 500;
}

.trainings-footer-link {
  margin-top: 14px;
  padding-top: 12px;
  border-top: 1px solid #f1f5f9;
  text-align: right;
}

.view-all-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  color: #3b82f6;
  text-decoration: none !important;
  font-size: 0.9rem;
  font-weight: 600;
  transition: color 0.2s ease, gap 0.2s ease;
}

.view-all-link:hover {
  color: #1d4ed8;
  gap: 10px;
}
</style>