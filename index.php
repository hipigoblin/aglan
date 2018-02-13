<?php include "header.php"; ?>
<body id="home">

<!-- nav sectin -->
<?php include "nav.php"; ?>
<section id="aboutUs"class="py-5 bg-white">
  <div class="background">
<div class="container">
  <div class="row">
    <?php
    if(isset($_GET['source'])){
    $source = $_GET['source'];

  }else{
$source = '';

  }

    switch($source) {

      case 'why_us';
      include "sections/why_us.php";
      break;


      case '35';
      echo "nicein";
      break;

      case '36';
      echo "niceas";
      break;

      default:
    include "sections/about-us.php";
      break;
      header("location: index.php");
    }


     ?>
</div>
</div>
</div>
</section>

<?php include "footer.php"; ?>
