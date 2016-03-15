<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" type="image/png" href="favicon.jpg"/>
        <title>Ifta's Index</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <link rel="stylesheet" href="css/ifta.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script>
            $(function () {
                var pageUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
            });
        </script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            function  loadCalcSS()
            {
                document.getElementById("sc").innerHTML = "<h4>Screen shots</h4>\n\
                                        <img src='img/calc/main.JPG'>\n\
                                        <img src='img/calc/main-small.JPG'>\n\
                                        <img src='img/calc/help.JPG'>\n\
                                        <img src='img/calc/about.JPG'>";
            }
            function loadRiceRocksSS()
            {
                document.getElementById("rr").innerHTML = "<h4>Screen shots</h4>\n\
                                        <img src='img/rr/rr1.jpg'>\n\
                                        <img src='img/rr/rr2.jpg'>";
            }
            function loadKidelSS()
            {
                document.getElementById("kidel").innerHTML = "<h4>Screen shots</h4>\n\
                                        <img src='img/kidel/interface.jpg'>\n\
                                        <img src='img/kidel/addition.jpg'>\n\
                                        <img src='img/kidel/color.jpg'>\n\
                                        <img src='img/kidel/firstletter.jpg'>\n\
                                        <img src='img/kidel/how-many.jpg'>\n\
                                        <img src='img/kidel/this-is.jpg'>";
            }
            function loadTheMuslimShowSS()
            {
                document.getElementById("tms").innerHTML = "<h4>Screen shots</h4>\n\
                                    <img src='img/tms/list.jpg'>\n\
                                    <img src='img/tms/destination.jpg'>\n\
                                    <img src='img/tms/mother.jpg' style='width:98%;'>\n\
                                    <img src='img/tms/reversible.jpg' style='width:98%;'>";
            }
            function loadUnbeatableTicTacToeSS(){
                document.getElementById("uttt").innerHTML = "<h4>Screen shots</h4>\n\
                                    <img src='img/ttt/good.jpg'>\n\
                                    <img src='img/ttt/main.jpg'>\n\
                                    <img src='img/ttt/ai-won.jpg'>\n\
                                    <img src='img/ttt/blank.jpg'>";
            }
            function loadTajMahalSS()
            {
                document.getElementById("taj").innerHTML = "<h4>Screen shots</h4>\n\
                                    <img src='img/taj/front.jpg' alt='front viwe'>\n\
                                    <img src='img/taj/main.jpg' alt='main view'>\n\
                                    <img src='img/taj/small.jpg' alt='small red building'>\n\
                                    <img src='img/taj/side.jpg' alt='side view'>";
            }
            function loadRayTracerSS(){
                document.getElementById("ray").innerHTML = "<h4>Screen shots</h4>\n\
                                    <img src='img/ray/output.jpg' alt='output 1'>\n\
                                    <img src='img/ray/output1.jpg' alt='output 2'>\n\
                                    <img src='img/ray/output3.jpg' alt='output 3'>\n\
                                    <img src='img/ray/output4.jpg' alt='output 4'>";
            }
        </script>

    </head>
    <body>
        <div id="wrapper">
            <?php require_once './navbar.php'; ?>
            <div id="page-content-wrapper">
                <div class="container-fluid">