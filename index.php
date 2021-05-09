<?php 
include("logic.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <!--Online CDN Files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!--Close-->

    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  
</head>
<body class="bg-dark">
  <h2 class="text-center text-warning">Covid-19 Tracker</h2>


<!--card start here-->
<div class="container">
  <h2 class="text-center text-danger">World Cases</h2>
            <div class="card-deck">
                <div class="card text-center border-warning">
                    <div class="card-block bg-warning" >
                        <h4 class="card-title mt-2" >Total Confirmed</h4>
                        
                    </div>
                    <div class="card-footer border-warning">
                        <h4 class="text-warning"><?php echo $total_confirmed; ?></h4>
                    </div>
                </div>

                <div class="card text-center border-success">
                    <div class="card-block bg-success">
                        <h4 class="card-title mt-2">Total Recovered</h4>
                        
                    </div>
                    <div class="card-footer border-success">
                        <h4 class="text-success"><?php echo $total_recovered; ?></h4>
                    </div>
                </div>

                <div class="card text-center border-danger">
                    <div class="card-block bg-danger">
                        <h4 class="card-title mt-2">Total Deaths</h4>
                       
                    </div>
                    <div class="card-footer border-danger">
                        <h4 class="text-danger"><?php echo $total_deaths; ?></h4>
                    </div>
                </div>
            </div>
    
</div>
<!--card ends here-->
<br>
<div class="container">
  <div class="row ">
    <div class="col-lg-12 mx-auto">
      <div class="card rounded shadow border-5">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive ">
            <table id="example" style="width:100%" class="table table-striped table-bordered ">
              <thead>
                <tr>
                  <th scope="col">Countries</th>
                  <th scope="col">Confirmed</th>
                  <th scope="col">Recovered</th>
                  <th scope="col">Deceased</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  foreach($data as $key => $value){
                    $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                ?>

                <tr>
                  <td><?php echo $key; ?></td>
                  <td><?php echo $value[$days_count]['confirmed']; ?>
                    <?php if($increase != 0){?>
                      <small class="text-danger pl-3"><i class="fa fa-arrow-up"></i><?php echo $increase; ?></small>
                    <?php }?> 
                    
                  </td>
                  <td><?php echo $value[$days_count]['recovered']; ?></td>
                  <td><?php echo $value[$days_count]['deaths']; ?></td>
                </tr>

                <?php 
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
  $(function() {
  $(document).ready(function() {
    $('#example').DataTable();
  });
});
</script>