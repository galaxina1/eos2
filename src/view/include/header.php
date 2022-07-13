<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
    <!-- Mon CSS -->
    <link rel="stylesheet" href="<?php if(isset($_COOKIE['theme']) && !empty($_COOKIE['theme'])) { echo 'src/public/style/'. $_COOKIE['theme'] ;} else { echo 'src/public/style/style.css';}?>" media="all"id="style1">
    <link rel="stylesheet" href="src/public/style/print.css" media="print">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/448b1e0479.js" crossorigin="anonymous"></script>
<!-- My Js -->
    <!-- <script src="src/public/js/displayAdmin.js"></script> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    </style>

    <title>eosConseil</title>
</head>

<body>