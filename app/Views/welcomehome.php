<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <style>
        body {
            height: 100vh;
        }
    </style> -->
</head>



<body>
    <header>
        <nav class="navbar navbar-inverse ">
            <div class="container-fluid ">
                <div class="navbar-header ">
                    <a class="navbar-brand " href="https://www.bcci.tv/" target="_blank"> BCCI</a>
                </div>
                <ul class="nav navbar-nav ">
                    <li class="active "><a href="<?= base_url();?>/SigninController/welcome1">Home  <span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="<?= base_url();?>/SigninController/gallery">Gallery <span class="glyphicon glyphicon-picture"></span></a></li>
                    <li><a href="<?= base_url();?>/SigninController/contact">Contact <span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href="<?= base_url();?>/SigninController/logout">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
                    <li><a href="<?= base_url();?>/SendmailController/email">Mail <span class="glyphicon glyphicon-envelope"></span></a></li>

                </ul>
            </div>
        </nav>
    </header>
    <div class="row  h-100">
        <div class="col-lg-6">
            <div class="table-responsive">
                <h1>Table of WorldCup</h1>
                <table class="table table-striped  table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sl.no</th>
                            <th scope="col">Year</th>
                            <th scope="col">Host</th>
                            <th scope="col">Venue</th>
                            <th scope="col">Winner</th>
                            <th scope="col">Opponent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1.</th>
                            <td>2007</td>
                            <td>West Indies</td>
                            <td>Bridgetown</td>
                            <td>Australia</td>
                            <td>Sri Lanka</td>
                        </tr>
                        <tr>
                            <th scope="row">2.</th>
                            <td>2011</td>
                            <td>India</td>
                            <td>Mumbai</td>
                            <td>India</td>
                            <td>Sri Lanka</td>

                        </tr>
                        <tr>
                            <th scope="row">3.</th>
                            <td>2015</td>
                            <td>Australia</td>
                            <td>Melbourne</td>
                            <td>Australia</td>
                            <td>New Zealand</td>
                        </tr>
                        <tr>
                            <th scope="row">4.</th>
                            <td>2019</td>
                            <td>England</td>
                            <td>Lords</td>
                            <td>England</td>
                            <td>New Zealand </td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <a href="https://en.wikipedia.org/wiki/India">  India</a> won the tournament, defeating Sri Lanka by 6 wickets in the final at Wankhede Stadium in Mumbai, thus becoming the first country to win the Cricket World Cup final on home soil.India's
                    <a href="https://en.wikipedia.org/wiki/Yuvraj_Singh"> Yuvraj Singh</a> was declared the man of the tournament. This was the first time in World Cup history that two Asian teams had appeared in the final. It was also the first time
                    since the 1992 World Cup that the final match did not feature Australia.
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-center">
                <img src="images/wc.webp" class="img-fluid " alt="Responsive image" width="100%">
                <h5 class="caption ">Team India 2007 Winning WorldCup</h5>
            </div>
        </div>
    </div>

    <footer>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <ul class="nav navbar-nav ">
                    <li><a> Copy Rights</a></li>
                    <li><a target="_blank" href="https://www.wikipedia.org/">wikipedia</a></li>
                    <li><a target="_blank" href="https://www.w3schools.com/">W3school</a></li>
                    <li><a target="_blank" href="https://www.google.com/">Others</a></li>
                </ul>
            </div>
        </nav>
    </footer>
</body>

</html>