<?php
@include_once "db.php";

$slides = [];
if (isset($con) && $con && !$con->connect_error) {
    $sql = "SELECT * FROM cp_slideshowimgs WHERE slp_status='ඔව්' ORDER BY slp_id";
    $rs = @mysqli_query($con, $sql);
    if ($rs && mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            if (!empty($row["slp_photo"])) {
                $slides[] = "slideshow/" . $row["slp_photo"];
            }
        }
    }
}

// Fallback to local files if DB yielded no slides
if (empty($slides)) {
    $fallbackFiles = [
        "slideshow/1372917975_121213.jpg",
        "slideshow/1375309527_121212.jpg",
        "slideshow/879600295_121213.jpg"
    ];
    foreach ($fallbackFiles as $f) {
        if (file_exists(__DIR__ . "/" . $f)) {
            $slides[] = $f;
        }
    }
    // If still empty, placeholder
    if (empty($slides)) {
        $slides[] = "images/wayamba.jpg";
    }
}
?>

<div class="custom-carousel-container" id="mainBannerCarousel">
  <div class="carousel-track">
    <?php foreach ($slides as $idx => $slideImg): ?>
      <div class="carousel-slide <?php echo $idx === 0 ? 'active' : ''; ?>">
        <img src="<?php echo htmlspecialchars($slideImg); ?>" alt="MDTU Activities Slide <?php echo $idx + 1; ?>" />
        <div class="carousel-overlay">
          <span class="carousel-badge">MDTU NWP</span>
          <span class="carousel-tagline">දැනුමෙන් සන්නද්ධ කාර්යක්ෂම රාජ්‍ය සේවයක් උදෙසා</span>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <?php if (count($slides) > 1): ?>
    <button class="carousel-arrow prev" onclick="moveSlide(-1)" aria-label="Previous Slide">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
    </button>
    <button class="carousel-arrow next" onclick="moveSlide(1)" aria-label="Next Slide">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
    </button>

    <div class="carousel-dots">
      <?php foreach ($slides as $idx => $slideImg): ?>
        <span class="carousel-dot <?php echo $idx === 0 ? 'active' : ''; ?>" onclick="goToSlide(<?php echo $idx; ?>)"></span>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>

<style>
.custom-carousel-container {
  position: relative;
  width: 100%;
  height: 100%;
  min-height: 280px;
  max-height: 420px;
  border-radius: 20px;
  overflow: hidden;
  background: #0f172a;
}

.carousel-track {
  position: relative;
  width: 100%;
  height: 100%;
}

.carousel-slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.7s ease-in-out, transform 0.7s ease-in-out;
  transform: scale(1.02);
  pointer-events: none;
}

.carousel-slide.active {
  opacity: 1;
  transform: scale(1);
  pointer-events: auto;
}

.carousel-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.carousel-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 30px 24px 20px 24px;
  background: linear-gradient(to top, rgba(15, 23, 42, 0.85) 0%, rgba(15, 23, 42, 0) 100%);
  display: flex;
  flex-direction: column;
  gap: 6px;
  color: #ffffff;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
}

.carousel-badge {
  display: inline-block;
  align-self: flex-start;
  background: #3b82f6;
  color: #ffffff;
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  padding: 4px 10px;
  border-radius: 6px;
  letter-spacing: 0.5px;
}

.carousel-tagline {
  font-size: 1rem;
  font-weight: 600;
  text-shadow: 0 2px 4px rgba(0,0,0,0.4);
}

.carousel-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(15, 23, 42, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: #ffffff;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.25s ease;
  backdrop-filter: blur(4px);
  z-index: 10;
}

.carousel-arrow:hover {
  background: rgba(59, 130, 246, 0.85);
  transform: translateY(-50%) scale(1.08);
}

.carousel-arrow.prev { left: 16px; }
.carousel-arrow.next { right: 16px; }

.carousel-dots {
  position: absolute;
  bottom: 16px;
  right: 20px;
  display: flex;
  gap: 8px;
  z-index: 10;
}

.carousel-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.4);
  cursor: pointer;
  transition: all 0.3s ease;
}

.carousel-dot.active {
  background: #3b82f6;
  width: 26px;
  border-radius: 12px;
}

@media (max-width: 768px) {
  .custom-carousel-container {
    min-height: 220px;
    max-height: 260px;
    border-radius: 16px;
  }
  .carousel-arrow {
    width: 36px;
    height: 36px;
  }
  .carousel-tagline {
    font-size: 0.85rem;
  }
}
</style>

<script>
(function() {
  var currentSlide = 0;
  var slides = document.querySelectorAll('#mainBannerCarousel .carousel-slide');
  var dots = document.querySelectorAll('#mainBannerCarousel .carousel-dot');
  var timer = null;

  function showSlide(index) {
    if (!slides.length) return;
    if (index >= slides.length) index = 0;
    if (index < 0) index = slides.length - 1;
    
    slides.forEach(function(s, i) {
      s.classList.toggle('active', i === index);
    });
    dots.forEach(function(d, i) {
      d.classList.toggle('active', i === index);
    });
    currentSlide = index;
  }

  window.moveSlide = function(step) {
    resetTimer();
    showSlide(currentSlide + step);
  };

  window.goToSlide = function(idx) {
    resetTimer();
    showSlide(idx);
  };

  function startTimer() {
    timer = setInterval(function() {
      showSlide(currentSlide + 1);
    }, 4500);
  }

  function resetTimer() {
    clearInterval(timer);
    startTimer();
  }

  var container = document.getElementById('mainBannerCarousel');
  if (container) {
    container.addEventListener('mouseenter', function() { clearInterval(timer); });
    container.addEventListener('mouseleave', function() { startTimer(); });
  }

  startTimer();
})();
</script>