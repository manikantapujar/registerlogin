<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-12">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        iframe {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header ">

                    <a class="navbar-brand " href="https://www.bcci.tv/" target="_blank"> BCCI</a>

                </div>
                <ul class="nav navbar-nav ">
                    <li><a href="<?= base_url();?>/SigninController/welcome1">Home  <span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="<?= base_url();?>/SigninController/gallery">Gallery <span class="glyphicon glyphicon-picture"></span></a></li>
                    <li class="active "><a href="<?= base_url();?>/SigninController/contact" t>Contact <span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href="<?= base_url();?>/SigninController/logout">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
                    <li><a href="<?= base_url();?>/SendmailController/email">Mail <span class="glyphicon glyphicon-envelope"></span></a></li>
                </ul>
        </nav>
    </header>



    <div class="container">
        <h1 class="text-center">Contact Address</h1>
        <hr>
        <div class="row">
            <div class="col-lg-8">
                <!-- <div id="map-container-google-12" class="z-depth-1-half map-container-10" style="height:100% width=100%"> -->
                <iframe src="https://maps.google.com/maps?q=oldhubli/hubli=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- </div> -->
            </div>

            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Address Location</div>
                    <div class="panel-body">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select City
                            <span class="caret"></span> Default Location</button>
                            <ul class="dropdown-menu">
                                <li><a href="Contact.html">Default</a></li>
                                <li><a href="hublilocation.html">Hubli</a></li>
                                <li><a href="dharwadlocation.html">Dharwad</a></li>
                            </ul>
                        </div>

                        <!-- 
                        <select class="form-select">
                                <option selected>Select City</option>
                                <option value="1">Default Location</option>
                                <a href="hublilocation.html">Hubli Location</a>
                                <option value="2"> <a href="hublilocation.html">Hubli Location</a> </option>
                                <option value="3">Dharwad Location</option>
                              </select> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
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