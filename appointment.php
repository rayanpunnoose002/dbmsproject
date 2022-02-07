<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/appointment.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>

  <header id="header1" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">
          <h3>OXYMETRON APPOINTMENT BOOKING</h3>
        </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>


        </ul>
      </nav><!-- .nav-menu -->



    </div>
  </header>
  <section id="appointment" class="appointment section-bg" style="margin-top: 76px;">
    <div class="container">

      <div class="section-title">
        <h2>Make an Appointment</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <form action="appoint.php" method="post" role="form" class="php-email-form">
        <div class="form-row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone">
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4 form-group">
            <input type="datetime" name="date" class="date form-control" id="date" placeholder="Appointment Date in yyyy/mm/dd" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group">
            <input type="time" name="time" class="form-control" id="name" placeholder="time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group">
            <select name="district" id="department" class="form-control">
              <option value="">District</option>
              <option value="Alappuzha">Alappuzha</option>
              <option value="Ernakulam"> Ernakulam</option>
              <option value="Idukki">Idukki</option>
              <option value="Kannur">Kannur</option>
              <option value="Kasaragod"> Kasaragod</option>
              <option value="Kollam">Kollam</option>
              <option value="Kottayam">Kottayam </option>
              <option value="Kozhikode">Kozhikode</option>
              <option value="Malappuram">Malappuram</option>
              <option value="Palakkad"> Palakkad</option>
              <option value="Pathanamthitta"> Pathanamthitta</option>
              <option value="Thiruvananthapuram">Thiruvananthapuram</option>
              <option value="Thrissur"> Thrissur</option>
              <option value="Wayanad"> Wayanad</option>
            </select>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group">
            <select name="hospital" id="department" class="form-control">
              <option value="">Hospital</option>
              <option value="Medical college kottayam">Medical college kottayam</option>
              <option value="St Thomas Hospital chethipuzha">St Thomas Hospital chethipuzha</option>
              <option value="Caritas Hospital kottayam">Caritas Hospital kottayam</option>
              <option value="Medical centre kottayam">Medical centre kottayam</option>
            </select>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group">
            <select name="department" id="doctor" class="form-control">
              <option value="">Department</option>
              <option value="Anaesthesiology">Anaesthesiology</option>
              <option value="Cardio Thoracic and Vascular Surgery">Cardio Thoracic and Vascular Surgery</option>
              <option value="Cardiology">Cardiology</option>
              <option value="E N T">E N T</option>
              <option value="Neuro Surgery">Nephrology</option>
              <option value="Neuro Surgery">Neuro Surgery</option>
              <option value="Pediatrics">Pediatrics</option>

            </select>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group">
            <select name="doctor" id="doctor" class="form-control">
              <option value="">Select Doctor</option>
              <option value="Dr.P.Savida">Dr.P.Savida </option>
              <option value="Dr.N.Krisnan Namboothiri">Dr.N.Krisnan Namboothiri</option>
              <option value="Dr.K.M.Gopinadhan">Dr.K.M.Gopinadhan</option>
              <option value="Dr.Omana S">Dr.Omana S</option>
              <option value="Dr.C.Jayakumar">Dr.C.Jayakumar</option>
            </select>
            <div class="validate"></div>
          </div>
        </div>

        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" placeholder="Symptoms"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button name='submit' type="submit">Make an Appointment</button></div>
      </form>

    </div>
  </section>


  </script>
</body>

</html>