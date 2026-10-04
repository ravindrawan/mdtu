<?php
@include_once "db.php";

$messages = [];
if (isset($con) && $con && !$con->connect_error) {
    $sql = "SELECT * FROM cp_messeges WHERE msg_status='ඔව්' ORDER BY msg_date DESC";
    $rs = @mysqli_query($con, $sql);
    if ($rs && mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $messages[] = [
                'text' => $row['msg_message'],
                'date' => isset($row['msg_date']) ? $row['msg_date'] : ''
            ];
        }
    }
}
?>

<div class="news-ticker-wrapper" id="noticeTickerBox">
  <div class="ticker-header-bar">
    <div class="pulse-indicator">
      <span class="pulse-dot"></span>
      <span class="pulse-ring"></span>
    </div>
    <span class="ticker-label">නවතම නිවේදන</span>
  </div>

  <div class="ticker-content-area">
    <?php if (!empty($messages)): ?>
      <div class="ticker-item active" id="currentTickerItem">
        <p class="ticker-msg-text" id="tickerMsgDisplay"><?php echo $messages[0]['text']; ?></p>
        <?php if (!empty($messages[0]['date'])): ?>
          <span class="ticker-msg-date" id="tickerDateDisplay"><?php echo htmlspecialchars($messages[0]['date']); ?></span>
        <?php endif; ?>
      </div>

      <div class="ticker-controls">
        <button type="button" class="btn-ticker-nav" onclick="stepTicker(-1)" title="Previous">&larr;</button>
        <span class="ticker-counter" id="tickerCounter">1 / <?php echo count($messages); ?></span>
        <button type="button" class="btn-ticker-nav" onclick="stepTicker(1)" title="Next">&rarr;</button>
      </div>
    <?php else: ?>
      <div class="ticker-empty-state">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        <p>දැනට විශේෂ නිවේදන නොමැත.</p>
        <small>නව තොරතුරු සඳහා රැඳී සිටින්න.</small>
      </div>
    <?php endif; ?>
  </div>
</div>

<style>
.news-ticker-wrapper {
  display: flex;
  flex-direction: column;
  height: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
}

.ticker-header-bar {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 15px;
}

.pulse-indicator {
  position: relative;
  width: 12px;
  height: 12px;
}

.pulse-dot {
  position: absolute;
  top: 2px;
  left: 2px;
  width: 8px;
  height: 8px;
  background-color: #ef4444;
  border-radius: 50%;
}

.pulse-ring {
  position: absolute;
  top: -2px;
  left: -2px;
  width: 16px;
  height: 16px;
  border: 2px solid #ef4444;
  border-radius: 50%;
  animation: pulseAnim 1.8s cubic-bezier(0.24, 0, 0.38, 1) infinite;
  opacity: 0.8;
}

@keyframes pulseAnim {
  0% { transform: scale(0.6); opacity: 1; }
  100% { transform: scale(1.6); opacity: 0; }
}

.ticker-label {
  font-size: 0.85rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  color: #ef4444;
}

.ticker-content-area {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 16px;
  padding: 18px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.02);
}

.ticker-item {
  animation: fadeInMsg 0.4s ease-in-out;
}

@keyframes fadeInMsg {
  from { opacity: 0; transform: translateY(6px); }
  to { opacity: 1; transform: translateY(0); }
}

.ticker-msg-text {
  font-size: 0.95rem;
  line-height: 1.6;
  color: #1e293b;
  margin: 0 0 12px 0;
  font-weight: 500;
}

.ticker-msg-date {
  display: inline-block;
  font-size: 0.75rem;
  color: #64748b;
  background: #f1f5f9;
  padding: 3px 8px;
  border-radius: 6px;
}

.ticker-controls {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 12px;
  padding-top: 12px;
  border-top: 1px solid #f1f5f9;
}

.btn-ticker-nav {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  color: #475569;
  border-radius: 8px;
  width: 32px;
  height: 32px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  transition: all 0.2s ease;
}

.btn-ticker-nav:hover {
  background: #3b82f6;
  color: #ffffff;
  border-color: #3b82f6;
}

.ticker-counter {
  font-size: 0.8rem;
  font-weight: 600;
  color: #64748b;
}

.ticker-empty-state {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 30px 10px;
  color: #64748b;
}

.ticker-empty-state p {
  margin: 10px 0 4px 0;
  font-weight: 600;
  color: #475569;
}
</style>

<?php if (!empty($messages)): ?>
<script>
(function() {
  var messages = <?php echo json_encode($messages); ?>;
  var currentIdx = 0;
  var tickerTimer = null;

  function renderMessage(idx) {
    if (!messages.length) return;
    if (idx >= messages.length) idx = 0;
    if (idx < 0) idx = messages.length - 1;
    currentIdx = idx;

    var textEl = document.getElementById('tickerMsgDisplay');
    var dateEl = document.getElementById('tickerDateDisplay');
    var countEl = document.getElementById('tickerCounter');

    if (textEl) textEl.innerHTML = messages[currentIdx].text;
    if (dateEl) dateEl.innerText = messages[currentIdx].date || '';
    if (countEl) countEl.innerText = (currentIdx + 1) + ' / ' + messages.length;
  }

  window.stepTicker = function(delta) {
    clearInterval(tickerTimer);
    renderMessage(currentIdx + delta);
    startTickerTimer();
  };

  function startTickerTimer() {
    tickerTimer = setInterval(function() {
      renderMessage(currentIdx + 1);
    }, 6000);
  }

  var box = document.getElementById('noticeTickerBox');
  if (box) {
    box.addEventListener('mouseenter', function() { clearInterval(tickerTimer); });
    box.addEventListener('mouseleave', function() { startTickerTimer(); });
  }

  startTickerTimer();
})();
</script>
<?php endif; ?>