<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 01/09/2021
 * Time: 12:37
 */

include 'src/services/DataReader.php';

$service = new DataReader();
$data = $service->getDataFromFile($search);
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
        <meta name="author" content="Codericks">
        <meta name="description" content="Challlenge Meher Ben Salah">
        <meta name="keywords" content="challenge-Meher">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RealForce Tech Challenge </title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
        <style>
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
                    height: fit-content;
                }
                .info-block .right{
                    text-align: right !important;
                }
                .right{
                    width: 67% !important;
                }
            }

            @media screen and (max-width: 1111px) {
                .left{
                    width: 33.33% !important;
                }
                .info-block{
                    height: fit-content;
                    width: 45% !important;
                }
                .info-block .right{
                    text-align: right !important;
                }
                .right{
                    width: 60.67% !important;
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
                    height: fit-content;
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
                    height: fit-content;
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
                    height: fit-content;
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
    </head>
    <body>

<?php
if(count($data) !== 0){
    $item = array_slice($data, 0, 1)[0];
    ?>
    <div class="container">
        <div class="line">
            <div class="left">
                <div><h2> <?php echo $item["name"];  ?> </h2></div>
                <div>
                    <img src="<?php echo $item["image"];  ?>" />
                </div>
            </div>
            <div class="right" style="padding-top: 7%">
                <p> <?php echo $item["bio"];  ?> </p>
            </div>
        </div>
        <div class="line" style="padding-left: 3%;padding-bottom: 1%">
            <div class="info-block">
                <div class="left"> <span> Id : </span> </div>
                <div class="right"> <span> <?php echo $item["id"];  ?> </span> </div>
            </div>
            <div class="info-block">
                <div class="left"> <span> Nationality : </span> </div>
                <div class="right"> <span> <?php echo $item["nationality"];  ?> </span> </div>
            </div>
            <div class="info-block">
                <div class="left"> <span> Birth Day : </span> </div>
                <div class="right"> <span> <?php echo $item["birthdate"];  ?> </span> </div>
            </div>
        </div>
    </div>

<?php } else {
    ?> <div class="container">
        <?php include 'views/404.php'; ?>
    </div>
<?php
}
?>
    </body>
    </html>

