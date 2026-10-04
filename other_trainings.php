<?php
@include_once "db.php";
$tdo = date("Y-m-d");

$otherTrainings = [];
if (isset($con) && $con && !$con->connect_error) {
    $sqlo = "SELECT * FROM cp_outsidetrcource WHERE ot_closingdate >= '$tdo' ORDER BY ot_closingdate ASC";
    $rso = @mysqli_query($con, $sqlo);
    if ($rso && mysqli_num_rows($rso) > 0) {
        while ($row = mysqli_fetch_assoc($rso)) {
            $otherTrainings[] = $row;
        }
    }
}
?>

<div class="other-trainings-container">
  <?php if (!empty($otherTrainings)): ?>
    <div class="other-scroll-list">
      <?php foreach ($otherTrainings as $item): ?>
        <a href="outsidetrainings/<?php echo htmlspecialchars($item["ot_file"]); ?>" target="_blank" class="ot-card-link">
          <div class="ot-top">
            <span class="inst-badge"><?php echo htmlspecialchars($item["ot_institute"]); ?></span>
            <span class="closing-badge">අවසාන දිනය: <?php echo htmlspecialchars($item["ot_closingdate"]); ?></span>
          </div>
          <div class="ot-title"><?php echo htmlspecialchars($item["ot_training"]); ?></div>
          <div class="ot-download-hint">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
            <span>අයදුම්පත්‍රය බාගත කරන්න</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="ot-empty">
      <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.5"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
      <p>දැනට බාහිර පුහුණු පාඨමාලා නොමැත.</p>
    </div>
  <?php endif; ?>
</div>

<style>
.other-trainings-container {
  width: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
}

.other-scroll-list {
  max-height: 220px;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding-right: 4px;
}

.other-scroll-list::-webkit-scrollbar {
  width: 5px;
}
.other-scroll-list::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 4px;
}

.ot-card-link {
  display: block;
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 12px 14px;
  text-decoration: none !important;
  transition: all 0.2s ease;
}

.ot-card-link:hover {
  background: #ffffff;
  border-color: #3b82f6;
  box-shadow: 0 4px 12px rgba(59, 130, 246, 0.08);
  transform: translateY(-2px);
}

.ot-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  margin-bottom: 6px;
  flex-wrap: wrap;
}

.inst-badge {
  background: #e0e7ff;
  color: #3730a3;
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

.ot-title {
  font-size: 0.9rem;
  font-weight: 600;
  color: #1e293b;
  line-height: 1.4;
  margin-bottom: 6px;
}

.ot-download-hint {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 0.75rem;
  color: #3b82f6;
  font-weight: 600;
}

.ot-empty {
  text-align: center;
  padding: 30px 10px;
  color: #64748b;
  background: #f8fafc;
  border-radius: 12px;
  border: 1px dashed #cbd5e1;
}

.ot-empty p {
  margin: 8px 0 0 0;
  font-size: 0.85rem;
}
</style>