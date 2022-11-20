<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 
    <div class="header">
      <div class="topHeader">

        <img src="./images/yo.png" alt="Sparks banking logo">

        <nav class="navigation">
          <ul>
            <li><a class="navLink active" href="index.php">Home</a></li>
          <li><a class="navLink" href="contact.php">Contact Us</a></li>
          
          </ul>
        </nav>
          
          </ul>
        </nav>
        </div>
      </div>
    </nav>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
    ?>
    <div class="container" >
        <h2 class="text-center pt-4" style="color : black;">Our Customers</h2>
        <br>
        <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:white;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Account no.</th>
                            <th scope="col" class="text-center py-2">Account holder name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Account Balance(in Rs.)</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : #black;">
                        <td class="py-2"><?php echo $rows['Account_no'] ?></td>
                        <td class="py-2"><?php echo $rows['Name']?></td>
                        <td class="py-2"><?php echo $rows['Email']?></td>
                        <td class="py-2"><?php echo $rows['Balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['Account_no'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transfer money</button></a></td> 
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
    <footer class="probootstrap-footer probootstrap-bg-dark">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-5 order-md-2 order-1">
          <div class="probootstrap-footer-widget mb-4">
              <ul class="probootstrap-footer-social list-unstyled float-md-right float-left">
                <li><a href="https://twitter.com/sparksofficial"><span class="icon-twitter"></span></a></li>
                <li><a href="hhttps://www.facebook.com/thesparksfoundation.info/"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.instagram.com/thesparksfoundation.info/?hl=en"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-7 order-md-1 order-2">
            <p>&copy; Present 2022. All Rights Reserved. <br> Made with <span class="icon-heart"></span> by <a href="https://www.instagram.com/_khuuussiii._/?hl=en">Aparna Panda</a></p>
          </div>
        </div>
      </div>
    </footer>
</body>