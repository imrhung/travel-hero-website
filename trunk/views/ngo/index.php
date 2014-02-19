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
                            <li class="active"><a href="<?php echo URL ?>formquest/index.php">Add new Quest</a></li>
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


            // TODO : Pagination: tut: http://www.sanwebe.com/2013/03/ajax-pagination-with-jquery-php
        </script>

        <script>
            // TODO : Consider using popup : http://www.nicolashoening.de/?twocents&nr=8
            $(document).ready(function() {
                event.preventDefault();
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
                        if (data.code === 1) {
                            // load successfully
                            var customerList = "";
                            customerList += "<table class=\"table\"><th>Quest</th><th>State</th>";
                            for (var i in data.info) {
                                customerList += "<tr>";
                                customerList += "<td><a href=\"";
                                customerList += "<?php echo URL ?>" + "quest/detail/" + data.info[i].id;
                                customerList += "\">";
                                customerList += data.info[i].name;
                                customerList += "</a><iframe class=\"box\" src=\""
                                customerList += "<?php echo URL ?>" + "quest/detail/" + data.info[i].id + "\" width = \"500px\" height = \"500px\"></iframe></td>";

                                customerList += "<td><a href=\"";
                                customerList += "<?php echo URL ?>" + "quest/edit/" + data.info[i].id;
                                customerList += "\">Edit</a>";
                                customerList += "</td>";

                                customerList += "<td>";
                                customerList += "<form name=\"active\">";
                                if (data.info[i].state == 0) {
                                    customerList += "<INPUT TYPE=\"checkbox\" NAME=\"tick\" onClick=\"return activate(" + data.info[i].id + ", checked)\">";
                                    // ["+data.info[i].id+"]
                                } else {
                                    customerList += "<INPUT TYPE=\"checkbox\" NAME=\"tick\" onClick=\"return activate(" + data.info[i].id + ", checked)\" checked=\"true\">";
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

            function activate(questId, checked) {
                if (checked) {
                    if (confirm("Are you sure you want to activate this Quest?")) {
                        // User confirm to activate the quest.
                        activateQuest(questId, 1);
                    } else {
                        // TODO : uncheck the box if user cancel
                    }
                } else {
                    if (confirm("Are you sure you want to deactivate this Quest?")) {
                        // User confirm to activate the quest.
                        activateQuest(questId, 0);
                    } else {
                        // TODO : uncheck the box if user cancel
                    }
                }
            }

            function activateQuest(questId, state) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo URL ?>quest/updateQuestState",
                    data: {
                        questId: questId,
                        state: state,
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data.code === 1) {
                            // load successfully
                        } else {
                            // error
                            alert("Some error occured. Refresh your page and try again!");
                            // TODO : uncheck the box because of this error.
                        }
                    }
                });
            }

        </script>


    </body>
</html>