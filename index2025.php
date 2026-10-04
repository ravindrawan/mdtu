<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- Bootstrap CSS for responsive design -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    /* Custom styles for a cool, light-colored, and modern look */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }

    .header, .footer {
      background-color: #0047AB;
      color: #007bff;
      padding: 15px;
      text-align: center;
      font-weight: bold;
    }

    .content-box {
      margin: 20px 0;
      padding: 20px;
      background-color: #0096FF;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .content-box h2 {
      color: #f2ff00;
    }

    .navbar {
      background-color: #007bff !important;
    }

    .navbar a {
      color: white !important;
    }

    .footer a {
      color: #007bff;
    }
  </style>
</head>
<body>

  <!-- Header Section -->
  <div class="header">
    <?php include('homeheader.php'); ?>
  </div>

  <!-- Main Content Section -->
<div class="container">

    <div class="row">
      <div class="col-md-3">
        <div class="content-box">
          <h2>Menu</h2>
          <?php include('menu.php'); ?>
        </div>
      </div>
      <div class="col-md-9">
        <div class="content-box">
		
         <?php include('slideshow.php'); ?>
        </div>
      </div>

    </div>



    <div class="row">
      <div class="col-md-6">
        <div class="content-box">
          <h2>Upcoming Training</h2>
          <?php include('mdtutrainings.php'); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="content-box">
          <h2>Login</h2>
          <?php include('logform.php'); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="content-box">
          <h2>Training Calendar</h2>
          <?php include('calnder.php'); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content-box">
          <h2>Foreign Schools</h2>
          <?php include('foreignsch.php'); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content-box">
          <h2>Other Trainings</h2>
          <?php include('othertrainings.php'); ?>
        </div>
      </div>
    </div>



    <div class="row">
	
      <div class="col-md-6">
        <div class="content-box">
          <h2>Birthdays</h2>
          <?php include('bdayhome.php'); ?>
        </div>
      </div>
    
      <div class="col-md-6">
        <div class="content-box">
          <h2>Notice</h2>
          <?php include('newsbar.php'); ?>
        </div>
      </div>
    </div>
</div>

  <!-- Footer Section -->
  <div class="footer">
    <?php include('footer.php'); ?>
  </div>

  <!-- Bootstrap JS and Dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
