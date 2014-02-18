<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Travel hero</title>

        <?php
        $cssname = explode('/', $name);
        ?>
        <link href="<?php echo URL ?>public/css/<?php echo $cssname[0] ?>.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo URL ?>public/css/foundation.css" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


        <script src="<?php echo URL ?>public/js/foundation/foundation.js"></script>
        <script src="<?php echo URL ?>public/js/foundation/foundation.topbar.js"></script>
    </head>
    <body>
        This is NGO page!

        <div class="row">
            <div class="large-12 columns">
                <nav class="top-bar" data-topbar>
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="#">Quest</a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                    </ul>

                    <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">
                            <li class="active"><a href="#">Add new Quest</a></li>
                        </ul>

                        <!-- Left Nav Section -->
                        <ul class="left">
                        </ul>
                    </section>
                </nav>
            </div>
        </div>


        <div class="row">
            <div class="large-12 columns">
                <ul id="quest-list">

                </ul>
            </div>
        </div>



        <script>
            $(document).foundation();
        </script>

        <script>
            $(document).ready(function() {
                console.log("data");
                event.preventDefault();
                console.log("data");
                var $status = $("#quest-list");
                $.ajax({
                    type: "POST",
                    url: "<?php echo URL ?>quest/questListInfobyUser",
                    data: {
                        currentPage: 0,
                        pageSize: 10,
                        userId: 0,
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data.code == 1) {
                            // load successfully
                            var customerList = "";
                            customerList += "<table class=\"table\"><th>Quest</th><th>State</th>";
                            for (var i in data.info) {
                                customerList += "<tr>";
                                customerList += "<td>";
                                customerList += data.info[i].name;
                                customerList += "</td>";
                                customerList += "<td>";
                                if (data.info[i].state == 0) {
                                    // Quest inactive
                                    customerList += "Not verified";
                                } else if (data.info[i].state == 2) {
                                    // Quest completed
                                    customerList += "Completed";
                                } else {
                                    // Quest active
                                    customerList += "Activated";
                                }
                                customerList += "</td>";
                                customerList += "</tr>";
                            }
                            document.getElementById("quest-list").innerHTML = customerList;
                        } else {
                            // error
                        }
                    }
                });
            });

        </script>









    </body>
</html>