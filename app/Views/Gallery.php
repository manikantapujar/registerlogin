<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
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
                    <li><a href="<?= base_url();?>/SigninController/welcome1"> Home <span class="glyphicon glyphicon-home"></span></a></li>
                    <li class="active "><a href="<?= base_url();?>/SigninController/gallery">Gallery <span class="glyphicon glyphicon-picture"></span></a></li>
                    <li><a href="<?= base_url();?>/SigninController/contact">Contact <span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href="<?= base_url();?>/SigninController/logout">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
                    <li><a href="<?= base_url();?>/SendmailController/email">Mail <span class="glyphicon glyphicon-envelope"></span></a></li>
                </ul>

            </div>
        </nav>
    </header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/1.jpg" alt="" style="width: 100%; height: 500px;">
                <div class="carousel-caption">
                    <h2>BCCI Logo</h2>
                </div>
            </div>

            <div class="item">
                <img src="images/2.jpg" alt="" style="width:100%; height: 500px;">
                <div class="carousel-caption">
                    <h2>Team India</h2>
                </div>
            </div>

            <div class="item">
                <img src="images/3.jpg" alt=" " style="width:100%; height: 500px;">
                <div class="carousel-caption">
                    <h2>India theme</h2>
                </div>
            </div>
        </div>


        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <form style="width: 50%;">
        <h3> Any Suggestion Drop Here</h3>
        <div class="form-group">
            <label>Text Box</label>
            <textarea class="form-control" placeholder="Suggest the image type " name="" id="" rows="10"></textarea>
            <!-- <input type="textarea" class="form-control" placeholder="Suggest the image type "> -->
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group">
            <label>Number of images</label>
            <input type="number" class="form-control">
        </div>

        <button type="submit " class="btn btn-primary ">Submit</button>
    </form>


    <footer>
        <nav class="navbar navbar-inverse  d-flex justify-content-center">
            <div class="container-fluid ">

                <ul class="nav navbar-nav justify-content-end ">
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