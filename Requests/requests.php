<!DOCTYPE html>

<html>
	<head>
        <link rel="stylesheet" type="text/css" href="../bower_components/materialize/bin/materialize.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="../css/select2/select2.css" media="all">
        <link rel="stylesheet" type="text/css" href="../bower_components/datatables/media/css/jquery.dataTables.css" media="all">
        <link rel="stylesheet" type="text/css" href="../css/admin.css" media="all">
        <title>SCWDesigns - Requests</title>
	</head>

	<body>
        <main>
            <aside class="left-side">
                <div class="brand-logo">
                    <div class="logo">
                        <p>SCW<span class="text-pink"> Designs</span></p>
                    </div>
                </div>

                <div class="user-logged-in">
                    <div class="content">
                        <div class="user-name">Stephanie Retherford</div>
                        <div class="user-email">abshire.shawn@gmail.com</div>
                        <div class="user-actions">
                            <a href="#">settings</a>
                            <a href="#">logout</a>
                        </div>
                    </div>
                </div>

                <ul class="menu">
                    <li>
                        <a href="../index.php" class="waves-effect">
                            <i class="zmdi zmdi-blur"></i>
                            <span class="description">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Todo/todo.php" class="waves-effect">
                            <i class="zmdi zmdi-camera-alt"></i>
                            <span class="description">TODO</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect collapsible-menu">
                            <i class="zmdi zmdi-truck"></i>
                            <span class="description">Orders</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="../Orders/orderslist.php" class="selected">Orders List <span class="new badge">7</span></a></li>
                            <li><a href="#">Statistics</a></li>
                            <li><a href="#">Payment Transactions</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect collapsible-menu">
                            <i class="zmdi zmdi-label"></i>
                            <span class="description">Catalog</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="../Catalog/products.php">Products</a></li>
                            <li><a href="../Catalog/categories.php">Categories</a></li>
                            <li><a href="../Catalog/reviews.php">Reviews</a></li>
                            <li><a href="../Catalog/sales.php">Sales</a></li>
                            <li><a href="../Catalog/attributes.php">Classes & Attributes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../Members/members.php" class="waves-effect">
                            <i class="zmdi zmdi-accounts"></i>
                            <span class="description">Members</span>
                        </a>
                    </li>
                    <li class="selected">
                        <a href="#" class="waves-effect">
                            <i class="zmdi zmdi-email-open"></i>
                            <span class="description">Requests</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Gallery/gallery.php">
                            <i class="zmdi zmdi-collection-folder-image"></i>
                            <span class="description">Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect collapsible-menu">
                            <i class="zmdi zmdi-blogger"></i>
                            <span class="description">Blog</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="#">Articles</a></li>
                            <li><a href="#">About Me</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>

            <aside class="right-side">
                <div class="header">
                    <h1>Recent Events</h1>
                    <div class="actions">
                        <button class="btn btn-flat btn-floating waves-effect waves-dark"><i class="zmdi zmdi-refresh zmdi-hc-2x tooltipped" data-position="bottom" data-tooltip="Refresh"></i></button>
                        <button class="btn btn-flat btn-floating waves-effect waves-dark close-menu"><i class="zmdi zmdi-close zmdi-hc-2x tooltipped" data-position="bottom" data-tooltip="Close"></i></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge blue-circle">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-header">E-mail Confirmation</diiv>
                                    <div class="timeline-body">
                                        <p>This is the body of the timeline item.</p>
                                        <small><i class="zmdi zmdi-timer"></i> 10 hours ago</small>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge red-circle">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-header">E-mail Confirmation</diiv>
                                    <div class="timeline-body">
                                        <p>This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.</p>
                                        <small><i class="zmdi zmdi-timer"></i> 10 hours ago</small>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge green-circle">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-header">E-mail Confirmation</diiv>
                                    <div class="timeline-body">
                                        <p>This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.</p>
                                        <small><i class="zmdi zmdi-timer"></i> 10 hours ago</small>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge pink-circle">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-header">E-mail Confirmation</diiv>
                                    <div class="timeline-body">
                                        <p>This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.</p>
                                        <small><i class="zmdi zmdi-timer"></i> 10 hours ago</small>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge orange-circle">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-header">E-mail Confirmation</diiv>
                                    <div class="timeline-body">
                                        <p>This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.</p>
                                        <small><i class="zmdi zmdi-timer"></i> 10 hours ago</small>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge yellow-circle">
                                    <i class="zmdi zmdi-circle-o"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-header">E-mail Confirmation</diiv>
                                    <div class="timeline-body">
                                        <p>This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.This is the body of the timeline item.</p>
                                        <small><i class="zmdi zmdi-timer"></i> 10 hours ago</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>

            <div class="main-container">
                <nav class="navbar">
                    <div class="nav-container">
                        <div class="navbar-left">
                            <div class="navbar-toggle">
                                <button class="btn btn-flat"><i class="zmdi zmdi-menu"></i></button>
                            </div>
                            <div class="breadcrumb-container">
                                <a href="#!" class="breadcrumb">SCW Designs</a>
                                <a href="#!" class="breadcrumb">Requests</a>
                            </div>
                        </div>
                        <ul class="search">
                            <li class="view-search"><i class="zmdi zmdi-search tooltipped" data-position="bottom" data-tooltip="Search"></i></li>
                            <li class="search-input"><input type="text" id="search" class="search" placeholder="Search..." /></li>
                            <li class="view-settings"><i class="zmdi zmdi-settings tooltipped" data-position="bottom" data-tooltip="Settings"></i></li>
                            <li class="view-logs"><i class="zmdi zmdi-more-vert tooltipped" data-position="bottom" data-tooltip="Logs"></i></li>
                        </ul>
                    </div>
                </nav>

                <!-- Begin Main Content -->
                <div class="main-content">
                    <section class="containment">
                        <div class="page-header">
                            <div class="header">
                                <h1><i class="zmdi zmdi-email-open"></i> Custom Requests</h1>
                                <p>Here you are able to manage all your custom requests made by members.</p>
                            </div>

                            <div class="actions">
                                <a href="#!" class="btn btn-floating waves-effect wave-light pink lighten-2 tooltipped" data-position="top" data-tooltip="New Request"><i class="zmdi zmdi-plus"></i></a>
                            </div>
                        </div>
                    </section>

                    <!-- Start Table Content -->
                    <div class="content-table table">
                        <table id="requests-list" class="requests-list no-labels striped">
                            <thead>
                                <tr class="requests-list">
                                    <th><input type="checkbox" id="select-all" class="filled-in" checked="checked" /><label for="select-all">&nbsp;</label></th>
                                    <th>Full Name</th>
                                    <th>Requested Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th class="right-align">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><input type="checkbox" id="1" class="select-row filled-in" /><label for="1">&nbsp;</label></td>
                                    <td>
                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                    </td>
                                    <td>Saturday, April 16, 2016</td>
                                    <td>Saturday, April 30, 2016</td>
                                    <td><span class="success">Completed</span></td>
                                    <td class="right-align">
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-delete"></i></button>
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-more"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="1" class="select-row filled-in" /><label for="1">&nbsp;</label></td>
                                    <td>
                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                    </td>
                                    <td>Saturday, April 16, 2016</td>
                                    <td>Saturday, April 30, 2016</td>
                                    <td><span class="success">Completed</span></td>
                                    <td class="right-align">
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-delete"></i></button>
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-more"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="1" class="select-row filled-in" /><label for="1">&nbsp;</label></td>
                                    <td>
                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                    </td>
                                    <td>Saturday, April 16, 2016</td>
                                    <td>Saturday, April 30, 2016</td>
                                    <td><span class="success">Completed</span></td>
                                    <td class="right-align">
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-delete"></i></button>
                                        <button class="btn btn-flat btn-floating"><i class="zmdi zmdi-more"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table Content -->
                </div>
                <!-- End Main Content -->
            </div>
        </main>

        <script type="text/javascript" src="../bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="../bower_components/materialize/bin/materialize.js"></script>
        <script type="text/javascript" src="../bower_components/select2/dist/js/select2.min.js"></script>
        <script type="text/javascript" src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            // Side bars
            $('.view-logs').on('click', function(e) {
                $('aside.right-side').addClass("visible");
            });

            $('.close-menu').on('click', function(e) {
                $('aside.right-side').removeClass("visible");
            });

            $('.navbar-toggle').on('click', function(e) {
                $('aside.left-side').addClass("visible");

                $("body").on('mouseup', function (e) {
                    var container = $("aside.left-side");

                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.removeClass("visible");
                        $("body").unbind("mouseup");
                    }
                });
            });

            // Navigation Dropdown Menu
            $('.collapsible-menu').on('click', function() {
                $(this).toggleClass("active");
                $(this).parent().find('.collapse').slideToggle('250');
            });

            // View Search Bar Event
            $('.view-search').on('click', function() {
                if ($(this).hasClass("opened")) {
                    $(this).removeClass("opened");
                    $('#search').animate({ width: "0" }, { duration: 350, complete: function() { $(this).hide(); } });
                } else {
                    $(this).addClass("opened");
                    $('#search').animate({ width: "275px" }, 350 ).focus();
                }
            });

            // Select 2
            $('.select2').select2();

            // DataTables
            var customRequests = $('#requests-list').DataTable({
                "order": [[ 2, "desc" ]],
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ 0, 5 ] }
                ],
                "dom":  '<"table-header" <"header" l > <"filter-table" f > > t <"table-footer" i <"pagination" p > ><"clear">'
            });
        </script>
	</body>
</html>

