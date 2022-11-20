<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style1.css">
    <<link rel="stylesheet" href="css/styles.css">
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
    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transactions";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

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
    </footer>
</body>