<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Travel hero</title>

        <?php
        echo link_tag('assets/css/ngo.css');
        echo link_tag('assets/css/simplePagination.css');
        echo link_tag('assets/css/foundation.css');
        ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/foundation/foundation.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/foundation/foundation.topbar.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/nhpopup.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jquery.simplePagination.js" ></script>
    </head>
    <body>

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
                            <li class="active"><a href="<?php echo base_url() ?>formquest/index.php">Add new Quest</a></li>
                        </ul>

                        <!-- Left Nav Section -->
                        <ul class="left">
                            <li><a href="#"> </a></li>
                        </ul>
                    </section>
                </nav>
            </div>
        </div>
        <div>
            <br>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <ul id="quest-list">

                </ul>
            </div>
        </div>
        <table class="table no-borders">
            <tr><td>
                <div id="pages" class="pagination-centered"></div>
                </td></tr>
        </table>
        <script>
            $(document).foundation();
        </script>

        <script>
            $(document).ready(function() {
                event.preventDefault();
                // Load the quest list count:
                var pageSize = 5;
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>quest/questCountbyUser",
                    data: {
                        userId: 0,
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data.code === 1) {
                            // load successfully
                            var pages = Math.ceil(data.info / pageSize);
                            console.log(pages);
                            if (pages > 1) {
                                // Pagination with : http://flaviusmatis.github.io/simplePagination.js/
                                $("#pages").pagination({
                                    pages: pages,
                                    cssStyle: 'light-theme',
                                    onPageClick: function(pageNumber, event) {
                                        $("#quest-list").prepend('<div class="loading-indication"><img src="assets/img/loading.png" /> Loading...</div>');
                                        loadQuestList(pageNumber - 1, pageSize);
                                    }
                                });
                            }
                            loadQuestList(0, pageSize);

                        } else {
                            // error
                        }
                    }
                });
            });

            function loadQuestList(currentPage, pageSize) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>quest/questListInfobyUser",
                    data: {
                        currentPage: currentPage,
                        pageSize: pageSize,
                        userId: 0,
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data.code === 1) {
                            // load successfully
                            var customerList = "";
                            customerList += "<table class=\"table\"><th>Quest</th><th></th><th>State</th>";
                            for (var i in data.info) {
                                customerList += "<tr>";
                                customerList += "<td><a onmouseover=\"nhpup.popup($('#hidden-div" + i + "').html(), {'width': 300});\" href=\"";
                                customerList += "<?php echo base_url() ?>" + "quest/detail/" + data.info[i].id;
                                customerList += "\">";
                                customerList += data.info[i].name;
                                customerList += "</a>";
                                customerList += "<div class=\"hidden-div\" id=\"hidden-div" + i + "\" >  <table border=\"1\" width=\"300\"> <tr> <td>";
                                customerList += "<img class=\"\" src=\"" + data.info[i].image_url + "\"></img>";
                                customerList += "" + data.info[i].description + "";
                                customerList += "</td></tr></table></div>";
                                customerList += "</td>";

                                customerList += "<td><a href=\"";
                                customerList += "<?php echo base_url() ?>" + "quest/edit/" + data.info[i].id;
                                customerList += "\">Edit</a>";
                                customerList += "</td>";

                                customerList += "<td class=\"center\">";
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
            }

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
                    url: "<?php echo base_url() ?>quest/updateQuestState",
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
                            alert("Some error occurred. Refresh your page and try again!");
                            // TODO : uncheck the box because of this error.
                        }
                    }
                });
            }

        </script>


    </body>
</html>