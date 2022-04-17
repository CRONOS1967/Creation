 <?php 
                            require './assets/Backend.php';
                            $obj = new Backend;
                            $conn = $obj->connection();
                            $sql = "SELECT * FROM vacancy";
                            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTACT</title>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Comfortaa:700"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="./assets/dist/css/style.css" />
  </head>
  <body class="css-selector"> 
    <hr />
    <h1>Vacancy</h1>
    <hr />
    <div class="container">
      <div class="row justify-content d-inline-flex">
                            <?php
                         while ($res = mysqli_fetch_assoc($query)) : ?>  
                                            
        <div class="col align-self-end zoom img-div dropdown" id="<?php echo $res['v_id']; ?>">
           <span></span>
          <a tel=""
            ><img
              src="./assets/img/job.svg"
              alt="..."
              class="zoom img rounded-circle mx-auto d-block"
          /></a>
          <div class="centered text-black"><?php echo $res['j_name']?>
            
          </div>
          <span>posted on: <?php echo $res['date_of_post'];?></span>
          <div class="dropdown-content">
           <span>
                <?php echo $res['description'];?>    
           </span>
          </div>
        </div>
<?php endwhile; ?>

      <div class="col align-self-end mt-5 zoom img-div">
        <a href="./index.html"
          ><img
            src="./assets/img/arrow.svg"
            alt="..."
            class="zoom img rounded-circle mx-auto d-block"
        /></a>
        <div class="centered text-black">
          <h6>back to home</h6>
        </div>
      </div>
    </div>
  </body>

  <script src="./assets/dist/js/particles.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/dist/js/app.js"></script>
</html>
