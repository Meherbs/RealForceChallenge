<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 01/09/2021
 * Time: 01:48
 */
?>

<style>
    .error-container {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100% !important;
        overflow: hidden !important;
        /*background-color: rgba(255, 130, 45, 0.85);*/
        font-family: 'Montserrat', sans-serif !important;
        color: #fff !important
    }

    .mainbox {
        margin: auto !important;
        height: 600px !important;
        width: 100% !important;
        position: relative !important;
        color: crimson !important;
    }

    .err {
        font-family: 'Nunito Sans', sans-serif !important;
        font-size: 11rem !important;
        position:absolute !important;
        left: 20% !important;
        top: 8% !important;
    }

    .far {
        position: absolute !important;
        font-size: 8.5rem !important;
        left: 42% !important;
        top: 15% !important;
    }

    .err2 {
        font-family: 'Nunito Sans', sans-serif !important;
        font-size: 11rem !important;
        position:absolute !important;
        left: 68% !important;
        top: 8% !important;
    }

    .msg {
        text-align: center !important;
        font-family: 'Nunito Sans', sans-serif !important;
        font-size: 1.6rem !important;
        position:absolute !important;
        left: 16% !important;
        top: 45% !important;
        width: 75% !important;
    }

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
<div class="error-container">
    <div class="mainbox">
        <div class="err">4</div>
        <i style="font-family: 'Font Awesome 5 Free' !important;" class="far fa-question-circle fa-spin"></i>
        <div class="err2">4</div>
        <div class="msg"> Unreachable data searched ?
            Your data searched is not found ?  <p>
                Never existed ? Try again .</p></div>
    </div>
</div>
