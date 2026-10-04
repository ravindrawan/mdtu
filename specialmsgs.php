<?php
@include_once "db.php";

$messages = [];
if (isset($con) && $con && !$con->connect_error) {
    $sql = "SELECT * FROM cp_messeges WHERE msg_status='ඔව්' ORDER BY msg_date DESC";
    $rs = @mysqli_query($con, $sql);
    if ($rs && mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $messages[] = $row['msg_message'];
        }
    }
}
?>

<div class="inner-special-msgs-bar">
  <span class="inner-msg-tag">&#128226; විශේෂ නිවේදන:</span>
  <span class="inner-msg-body" id="innerMsgDisplay">
    <?php echo !empty($messages) ? $messages[0] : 'විශේෂ නිවේදන කිසිවක් නොමැත.'; ?>
  </span>
</div>

<style>
.inner-special-msgs-bar {
  display: flex;
  align-items: center;
  gap: 12px;
  width: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
  font-size: 14px;
  overflow: hidden;
  color: #1e293b;
}

.inner-msg-tag {
  font-weight: 700;
  color: #b45309;
  white-space: nowrap;
}

.inner-msg-body {
  flex: 1;
  font-weight: 500;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

@media (max-width: 768px) {
  .inner-special-msgs-bar {
    flex-direction: column;
    align-items: flex-start;
    gap: 4px;
  }
  .inner-msg-body {
    white-space: normal;
  }
}
</style>

<?php if (count($messages) > 1): ?>
<script>
(function() {
  var msgs = <?php echo json_encode($messages); ?>;
  var idx = 0;
  var el = document.getElementById('innerMsgDisplay');
  if (!el || msgs.length <= 1) return;

  setInterval(function() {
    idx = (idx + 1) % msgs.length;
    el.style.opacity = 0;
    setTimeout(function() {
      el.innerHTML = msgs[idx];
      el.style.opacity = 1;
    }, 300);
  }, 6000);
})();
</script>
<?php endif; ?>