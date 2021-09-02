<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 01/09/2021
 * Time: 12:37
 */

try {
    $c = intval($_GET['c']);
    $customers = json_decode(file_get_contents('src/ressources/customers.json'), true);
    $result = array_filter($customers["customers"], function($v) use ($c) {
        return ($v["id"] ===  $c);
    }, ARRAY_FILTER_USE_BOTH);
    if(count($result) > 0){
        $customer = array_slice($result, 0, 1)[0];
        $fontFamily =  $customer["fontFamily"];
        $color = $customer["color"];
        $size = $customer["size"];
    }else{
        $fontFamily =  "Times New Roman";
        $color = "black";
        $size = "14px";
    }
}catch (Exception $ex){
    $fontFamily =  "Times New Roman";
    $color = "black";
    $size = "14px";
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Meher Ben Salah">
        <meta name="description" content="Pick one film from list db">
        <meta name="keywords" content="challenge-Meher">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RealForce Tech Challenge </title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
        <style>
            .wrapper{
                position:absolute;
                top:50%;
                left:50%;
                transform:translate(-50%, -50%);
            }
            .wrapper h3 {
                margin-top: 43%;
            }
            .circle{
                display: inline-block;
                width: 15px;
                height: 15px;
                background-color: #fcdc29;
                border-radius: 50%;
                animation: loading 1.5s cubic-bezier(.8, .5, .2, 1.4) infinite;
                transform-origin: bottom center;
                position: relative;
            }
            @keyframes loading{
                0%{
                    transform: translateY(0px);
                    background-color: #fcdc29;
                }
                50%{
                    transform: translateY(50px);
                    background-color: #ef584a;
                }
                100%{
                    transform: translateY(0px);
                    background-color: #fcdc29;
                }
            }
            .circle-1{
                animation-delay: 0.1s;
            }
            .circle-2{
                animation-delay: 0.2s;
            }
            .circle-3{
                animation-delay: 0.3s;
            }
            .circle-4{
                animation-delay: 0.4s;
            }
            .circle-5{
                animation-delay: 0.5s;
            }
            .circle-6{
                animation-delay: 0.6s;
            }
            .circle-7{
                animation-delay: 0.7s;
            }
            .circle-8{
                animation-delay: 0.8s;
            }
            .left{
                padding: 1%;
                padding-left: 3%;
                padding-right: 3%;
            }

            body {
                background: lightgrey;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: <?php echo $fontFamily ?> !important;
                font-size:  <?php echo $size ?> !important;
                color:  <?php echo $color ?> !important;
            }

            .line {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
            }

            /* content */
            .line div.left, .line div.right {
                padding: 3%;
                padding-bottom: 1%;
                text-align: left;
                color: black;
                transition: background-color 1s;
            }

            /* viewport <= 1800px */
            @media screen and (max-width: 1800px) {
                .left{
                    width: 27% !important;
                }
                .info-block{
                    width: 45% !important;
                    height: 40px;
                }
                .info-block .right{
                    text-align: right !important;
                }
                .right{
                    width: 60% !important;
                }
            }

            @media screen and (max-width: 1111px) {
                .left{
                    width: 33.33% !important;
                }
                .info-block{
                    height: 40px;
                    width: 45% !important;
                }
                .info-block .right{
                    text-align: right !important;
                }
                .right{
                    width: 60% !important;
                }
            }

            @media screen and (max-width: 900px) {
                .left{
                    width: calc(100vh - 295px) !important ;
                }
                .right{
                    width: calc(100% - 286px) !important;
                }
                .info-block .left {
                    width: 45%;
                }
                .info-block .right{
                    width: 56% !important;
                    text-align: right !important;
                }
                .info-block{
                    width: 42% !important ;
                    height: 40px;
                }
            }

            /* viewport <= 630px */
            @media screen and (max-width: 630px) {
                .line div {
                    padding: 1.5%;
                }
                .left{
                    width: 90% !important;
                }

                .right{
                    width: 90% !important;
                }
                .info-block{
                    width: 90% !important;
                    height: 90px;
                }
                .info-block .right{
                    text-align: left !important;
                    width: 90% !important;
                }
                .left div {
                    justify-content: center;
                    display: flex;
                    align-items: center;
                    text-align: center;
                }

                .left img {
                    width: 400px !important;
                    height: 500px !important;
                }
            }

            /* viewport <= 500px */
            @media screen and (max-width: 500px) {
                .info-block{
                    width: 90% !important;
                    height: 90px;
                }
                .info-block .right{
                    text-align: left !important;
                    width: 90% !important;
                }
                .left img {
                    width: calc(100% - 144px);
                    height: calc(100% - 60px);
                }
                .left div {
                    justify-content: center;
                    display: flex;
                    align-items: center;
                    text-align: center;
                }

                .left{
                    width: 100% !important;
                }

                .right{
                    width: 100% !important;
                }
            }

            .left img {
                width: calc(100vh - 319px);
                height: calc(100vh - 221px);
                border: 1px solid;
                max-width: 290px;
                max-height: 325px;
            }
            .left h2 {
                padding-bottom: 3%;
                color: black;
            }

            body{
                background: lightgrey;
            }

            .container {
                background: white;
                border: 1px solid darkslategrey;
                width: 95%;
                margin: 2%;
                min-height: calc(100vh - 55px);
                height: fit-content;
            }
            .info-block{
                background: lightgrey;
                border: 1px solid black;
                margin: 4px;
                font-size: 14px;
                display: flex;
                flex-wrap: wrap;
            }
            .info-block .left{
                padding: 1% !important;
                font-weight: bold;
                padding-left: 2% !important;
                max-width: 40% !important;
                min-width: 19%;
                width: fit-content !important;
            }
            .info-block .right{
                padding: 1% !important;
            }
        </style>

        <script type="text/javascript">
            class HttpClient {
                get(url, callback){
                    var ahttpRequest = new XMLHttpRequest();
                    ahttpRequest.onreadystatechange = function () {
                        if(ahttpRequest.readyState == 4 && ahttpRequest.status == 200){
                            callback(ahttpRequest.responseText);
                        }
                    }

                    ahttpRequest.open("GET", url, true);
                    ahttpRequest.send(null);
                }
            }

            var url = "https://www.omdbapi.com/?s=<?php echo $search; ?>&apikey=59baca8f&page=1";
            var client = new HttpClient();
            client.get(url, function (response) {
                var jsonResponse = JSON.parse(response);
                console.log(jsonResponse);
                document.getElementById('loadingScreen').style.display = 'none';
                if(jsonResponse['Response'] === "True"){
                    var data = jsonResponse['Search'];
                    if(data.length > 0){
                        document.getElementsByClassName('line')[0].style.display = "flex";
                        document.getElementsByClassName('line')[1].style.display = "flex";
                        var item = data[0];
                        document.getElementById('title').innerText = item["Title"];
                        document.getElementById('image').src = item["Poster"];
                        document.getElementById('year').innerText = item["Year"];
                        document.getElementById('imdbID').innerText = item["imdbID"];
                        document.getElementById('type').innerText = item["Type"];
                    }else{
                        document.getElementsByClassName('line')[0].style.display = "none";
                        document.getElementsByClassName('line')[1].style.display = "none";
                        document.getElementById('404-page').style.display = "block";
                    }
                }else{
                    document.getElementsByClassName('line')[0].style.display = "none";
                    document.getElementsByClassName('line')[1].style.display = "none";
                    document.getElementById('404-page').style.display = "block";
                }
            });
        </script>
    </head>
    <body>
        <div id="container" class="container">
            <div class="line" style="display: none">
                <div class="left">
                    <div><h2 id="title"> <?php echo $item["Title"];  ?> </h2></div>
                    <div>
                        <img id="image" src="<?php echo $item["Poster"];  ?>" />
                    </div>
                </div>
                <div class="right" style="padding-top: 7%">
                    <p> </p>
                </div>
            </div>
            <div class="line" style="display:none; padding-left: 3%;padding-bottom: 1%">
                <div class="info-block">
                    <div class="left"> <span> Year : </span> </div>
                    <div class="right"> <span id="year"> <?php echo $item["Year"];  ?> </span> </div>
                </div>
                <div class="info-block">
                    <div class="left"> <span> imdbID : </span> </div>
                    <div class="right"> <span id="imdbID"> <?php echo $item["imdbID"];  ?> </span> </div>
                </div>
                <div class="info-block">
                    <div class="left"> <span> Type : </span> </div>
                    <div class="right"> <span id="type"> <?php echo $item["Type"];  ?> </span> </div>
                </div>
            </div>
            <div id="404-page" style="display: none">
                <?php include 'views/404.php'; ?>
            </div>
            <div id="loadingScreen" class="wrapper">
                <span class="circle circle-1"></span>
                <span class="circle circle-2"></span>
                <span class="circle circle-3"></span>
                <span class="circle circle-4"></span>
                <span class="circle circle-5"></span>
                <span class="circle circle-6"></span>
                <span class="circle circle-7"></span>
                <span class="circle circle-8"></span>
                <div>
                    <h3> Please wait ... </h3>
                </div>
            </div>
        </div>
    </body>
</html>
