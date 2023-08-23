<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Table</title>
</head>
<body>
  
<div class="container text-left">
<table class="table" width="70%">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Zip code</th>
    </tr>
</thead>
<tbody>
  <?php
   include("config.php");
										$query2 = "SELECT * FROM info ";
										$query_run2 = mysqli_query($db, $query2);

										if(mysqli_num_rows($query_run2) > 0)
										{
											$sn=1;
											foreach($query_run2 as $student2)
											{
  ?>

                          <tr>
                         <td><?php echo $sn;?></td>
												<<td><?= $student2['fname'] ?></td>
												 <td><?= $student2['lname'] ?></td>
                         <td><?= $student2['city'] ?></td>
                         <td><?= $student2['state'] ?></td>
                         <td><?= $student2['pincode'] ?></td>
                        </tr>
                        <?php $sn=$sn+1;}
                    }
                      /*  $query3="DELETE from info where state='Kerala'" ;//ATTER THE TABLE
                        $query_run3=mysqli_query($db,$query3);
                        if ($query_run3) {
                          echo "<script>alert('Deleted successfully');</script>";
                        } else {
                          echo "<script>alert('Not deleted');</script>";
                        }*/

              $query4="UPDATE  info set city='BANGLORE' WHERE state='Tamilnadu'";
              $query_r4=mysqli_query($db,$query4);
              if($query_r4)
              {
                $sn1=1;
                foreach($query_run2 as $student2)
                {
        ?>

                    <tr>
                   <td><?php echo $sn;?></td>
                   <td><?= $student2['fname'] ?></td>
                   <td><?= $student2['lname'] ?></td>
                   <td><?= $student2['city'] ?></td>
                   <td><?= $student2['state'] ?></td>
                   <td><?= $student2['pincode'] ?></td>
                  </tr>
                  <?php $sn1=$sn1+1;}
              }
    ?>


  </tbody>
                        </table>
                          </div>


</body>
</html>