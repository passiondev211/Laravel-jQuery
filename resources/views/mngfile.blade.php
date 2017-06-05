<!DOCTYPE html>

<html>

<head>

    <meta content="text/html; charset=utf-8" />
    <title>Dashboard | BlueWhale Admin</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/dashboard/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/dashboard/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/dashboard/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/dashboard/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->

    <script src="js/lib/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/lib/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/lib/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/lib/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/lib/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/lib/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/lib/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script src="js/lib/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/lib/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />

    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="js/lib/jqPlot/jquery.jqplot.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/lib/jqPlot/plugins/jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/lib/jqPlot/plugins/jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/lib/jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/lib/jqPlot/plugins/jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/lib/jqPlot/plugins/jqplot.pointLabels.min.js"></script>
    <!-- END: load jqplot -->

    <script type="text/javascript" src="js/lib/table/table.js"></script>
    <script src="js/lib/setup.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
            setSidebarHeight();
        });
    </script>
    <script type="text/javascript">

       $(window).load(function () {
           $('#demo-side-bar').removeAttr('style');
       });

    </script>

    <!--Dynamically creates ads markup-->

    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                    <span style="font-size:26px;color:#fff;font-weight:bold;">KANOOP ADMIN</span>
                </div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" />
                    </div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Mykal</li>
                            <li><a href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                        <br/>
                        <span class="small grey">Last Login: 3 hours ago</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="/dashboard"><span>User Manage</span></a> </li>
                <li class="ic-form-style"><a href="/mngfile"><span>File Manage</span></a>
                    <!--<ul>
                        <li><a href="form-controls.html" >Forms</a> </li>
                        <li><a href="buttons.html">Buttons</a> </li>
                        <li><a href="form-controls.html">Full Page Example</a> </li>
                        <li><a href="table.html">Page with Sidebar Example</a> </li>
                    </ul>-->
                </li>
                <li class="ic-charts"><a href="charts.html"><span>Setting</span></a></li>
                <li class="ic-grid-tables"><a href="table.html"><span>Project</span></a></li>
                <li class="ic-gallery dd"><a href="javascript:"><span>Security</span></a>
                </li>
                <!--<li class="ic-notifications"><a href="notifications.html"><span>Notifications</span></a></li>-->
            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <div class="box round first grid">
                <h2>
                    File Management</h2>
                <div class="block">                  
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>Type</th>
                            <th>Size</th>
                            <th>Author</th>
                            <th>Etc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>a4utsx.mp4</td>
                            <td>video</td>
                            <td>30MB</td>
                            <td class="center">ali kal</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>awe.jpg</td>
                            <td>image</td>
                            <td>0.8MB</td>
                            <td class="center">raul</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>a4utsx.mp4</td>
                            <td>video</td>
                            <td>30MB</td>
                            <td class="center">ali kal</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>awe.jpg</td>
                            <td>image</td>
                            <td>0.8MB</td>
                            <td class="center">raul</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>a4utsx.mp4</td>
                            <td>video</td>
                            <td>30MB</td>
                            <td class="center">ali kal</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>awe.jpg</td>
                            <td>image</td>
                            <td>0.8MB</td>
                            <td class="center">raul</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>a4utsx.mp4</td>
                            <td>video</td>
                            <td>30MB</td>
                            <td class="center">ali kal</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>awe.jpg</td>
                            <td>image</td>
                            <td>0.8MB</td>
                            <td class="center">raul</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>a4utsx.mp4</td>
                            <td>video</td>
                            <td>30MB</td>
                            <td class="center">ali kal</td>
                            <td class="center"></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>awe.jpg</td>
                            <td>image</td>
                            <td>0.8MB</td>
                            <td class="center">raul</td>
                            <td class="center"></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>&nbsp;</p>
    </div>
    <div id="demo-side-bar">
    </div>
</div>

    <!--wrapper end-->

  <!--Dynamically creates analytics markup-->



</body>

</html>

