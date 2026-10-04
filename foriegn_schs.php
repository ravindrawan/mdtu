<?php
@include_once "db.php";
$td = date("Y-m-d");

$scholarships = [];
if (isset($con) && $con && !$con->connect_error) {
    $sql = "SELECT * FROM cp_foreignschols WHERE fs_closingdate >= '$td' ORDER BY fs_closingdate ASC";
    $rs = @mysqli_query($con, $sql);
    if ($rs && mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $scholarships[] = $row;
        }
    }
}
?>

<div class="foreign-sch-container">
  <?php if (!empty($scholarships)): ?>
    <div class="sch-scroll-list">
      <?php foreach ($scholarships as $item): ?>
        <a href="foriegnschols/<?php echo htmlspecialchars($item["fs_file"]); ?>" target="_blank" class="sch-card-link">
          <div class="sch-top">
            <span class="country-badge"><?php echo htmlspecialchars($item["fs_country"]); ?></span>
            <span class="closing-badge">අවසාන දිනය: <?php echo htmlspecialchars($item["fs_closingdate"]); ?></span>
          </div>
          <div class="sch-title"><?php echo htmlspecialchars($item["fs_name"]); ?></div>
          <div class="sch-download-hint">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
            <span>විස්තර බාගත කරන්න</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="sch-empty">
      <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
      <p>දැනට විවෘත විදේශ ශිෂ්‍යත්ව නොමැත.</p>
    </div>
  <?php endif; ?>
</div>

<style>
.foreign-sch-container {
  width: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
}

.sch-scroll-list {
  max-height: 220px;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding-right: 4px;
}

.sch-scroll-list::-webkit-scrollbar {
  width: 5px;
}
.sch-scroll-list::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 4px;
}

.sch-card-link {
  display: block;
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 12px 14px;
  text-decoration: none !important;
  transition: all 0.2s ease;
}

.sch-card-link:hover {
  background: #ffffff;
  border-color: #3b82f6;
  box-shadow: 0 4px 12px rgba(59, 130, 246, 0.08);
  transform: translateY(-2px);
}

.sch-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  margin-bottom: 6px;
  flex-wrap: wrap;
}

.country-badge {
  background: #fef3c7;
  color: #92400e;
  font-size: 0.75rem;
  font-weight: 700;
  padding: 2px 8px;
  border-radius: 6px;
}

.closing-badge {
  font-size: 0.75rem;
  color: #ef4444;
  font-weight: 600;
}

.sch-title {
  font-size: 0.9rem;
  font-weight: 600;
  color: #1e293b;
  line-height: 1.4;
  margin-bottom: 6px;
}

.sch-download-hint {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.75rem;
  color: #3b82f6;
  font-weight: 600;
}

.sch-empty {
  text-align: center;
  padding: 30px 10px;
  color: #64748b;
  background: #f8fafc;
  border-radius: 12px;
  border: 1px dashed #cbd5e1;
}

.sch-empty p {
  margin: 8px 0 0 0;
  font-size: 0.85rem;
}
</style>