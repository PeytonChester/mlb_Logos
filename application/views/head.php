<DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link href="<?= config_item('base_uri') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="<?= config_item('base_uri') ?>/assets/css/styles.css" rel="stylesheet">
        <link href="<?= config_item('base_uri') ?>/assets/dist/css/lightbox.min.css" rel="stylesheet">
<!--        <link href="--><?//= config_item('base_uri') ?><!--/assets/css/styles.css" rel="stylesheet">-->
        <script src="<?= config_item('base_uri') ?>/assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?= config_item('base_uri') ?>/assets/dist/js/lightbox.min.js"></script>
        <script src="<?= config_item('base_uri') ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?= config_item('base_uri') ?>/assets/js/app.js"></script>
        <title>MLB Logos</title>

        <script>
            function orderByCity() {
                $.post("<?php echo base_url().'home/orderByCity' ?>",
                    {},
                    function(data){
                    //alert(data);
                        $(".teamsHolder").empty();
                        for(var i=0; i < data.length; i++) {

//                            alert(data[i].teamID);

                            var html = '<a href="<?php echo base_url().'home/teamDetails/';?>' + data[i].teamID + '"' +
                            '<div class="team">' +
                            '<div class="teamLogo">' +
                            '<img src="<?php echo config_item('base_uri');?>' + data[i].logoURL + '">' +
                            '</div>' +
                            '<div class="teamName">' + data[i].teamName + '</div>' +
                            '<div class="teamLocation">' + data[i].city + ', ' + data[i].state + '</div>' +
                            '</div>' +
                            '</a>';
//                            alert(html);
                            $(".teamsHolder").append(html);
                        }

                    },
                    "json"
                );
            }

            function orderByState() {
                $.post("<?php echo base_url().'home/orderByState' ?>",
                    {},
                    function(data){
                        //alert(data);
                        $(".teamsHolder").empty();
                        for(var i=0; i < data.length; i++) {

//                            alert(data[i].teamID);

                            var html = '<a href="<?php echo base_url().'home/teamDetails/';?>' + data[i].teamID + '"' +
                                '<div class="team">' +
                                '<div class="teamLogo">' +
                                '<img src="<?php echo config_item('base_uri');?>' + data[i].logoURL + '">' +
                                '</div>' +
                                '<div class="teamName">' + data[i].teamName + '</div>' +
                                '<div class="teamLocation">' + data[i].city + ', ' + data[i].state + '</div>' +
                                '</div>' +
                                '</a>';
//                            alert(html);
                            $(".teamsHolder").append(html);
                        }

                    },
                    "json"
                );
            }

            function orderByTeamName() {
                $.post("<?php echo base_url().'home/orderByState' ?>",
                    {},
                    function(data){
                        //alert(data);
                        $(".teamsHolder").empty();
                        for(var i=0; i < data.length; i++) {

//                            alert(data[i].teamID);

                            var html = '<a href="<?php echo base_url().'home/teamDetails/';?>' + data[i].teamID + '"' +
                                '<div class="team">' +
                                '<div class="teamLogo">' +
                                '<img src="<?php echo config_item('base_uri');?>' + data[i].logoURL + '">' +
                                '</div>' +
                                '<div class="teamName">' + data[i].teamName + '</div>' +
                                '<div class="teamLocation">' + data[i].city + ', ' + data[i].state + '</div>' +
                                '</div>' +
                                '</a>';
//                            alert(html);
                            $(".teamsHolder").append(html);
                        }

                    },
                    "json"
                );
            }

            $(document).ready(function(){
                $("#orderSelect").on("change", function (e) {
                    var id = $(this).val();
                    switch(id){
                        case "0": orderByCity(); break;
                        case "1": orderByState(); break;
                        case "2": orderByTeamName(); break;
                    }//switch
                });
            });
        </script>

    </head>
    
    <body>
    	<nav>
            <div class="navSide">
                <div class="navLogo">


                    <?php echo "<img src='".config_item('base_uri')."/assets/images/1.svg"."' alt='MLB Logo' style='height: 40px;'>"  ?>

                    <div class="leagueLogo" style="background-image: url();">
                        <?php echo config_item('base_uri')."/assets/images/1.svg" ?>
                    </div>

                </div>
            </div>
            <div class="navSide">
                <div class="navLinks">
                    <a href="<?php echo base_url().'home/index/'?>">HOME</a>
                    <a>MLB v</a>

                </div>
                <i class="fas fa-user-circle fa-2x"></i>
            </div>
        </nav>