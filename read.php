
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h1 class=text-center>PHP OOP CRUD</h1>
                <hr style="height: 1px; color: black; background-color: black">
                <?php include 'nav.php';?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <?php 
                    include 'model.php';
                    $model = new Model();
                    $id = $_REQUEST['id'];
                    $row = $model->fetch_single($id);
                    // var_dump($row);
                    if(!empty($row)){
                ?>
                <div class="card">
                    <div class="card-header">Single Record</div>
                    <div class="card-body">
                        <p><b>Name:</b> <?php echo $row['name']; ?></p>
                        <p><b>Email:</b> <?php echo $row['email']; ?></p>
                        <p><b>Mobile:</b> <?php echo $row['mobile']; ?></p>
                        <p><b>Address: </b> <?php echo $row['address']; ?></p>
                    </div>
                </div>
                <?php 
                    } else{
                        echo "No Data Availbale";
                    }
                ?>
            </div>
        <div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>