<!DOCTYPE html>

<html>
	<head>
        <link rel="stylesheet" type="text/css" href="../bower_components/materialize/bin/materialize.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="../css/admin.css" media="all">
        <title>SCWDesigns - Admin</title>
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
                    <li class="selected">
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
                    <li>
                        <a href="../Requests/requests.php" class="waves-effect">
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
                                <a href="#!" class="breadcrumb">Dashboard</a>
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

                <div class="main-content">
                    <section class="containment">
                        <div class="page-header">
                            <div class="header">
                                <h1><i class="zmdi zmdi-camera-alt"></i> Todo</h1>
                                <p>Manage your todo's from the dashboard or here with additional filters.</p>
                            </div>
                        </div>

                        <div class="col s12 card-panel input-field input-group">
                            <input type="text" id="add-todo" placeholder="enter new todo" />
                            <span class="suffix">
                                <button class="waves-effect waves-light btn pink lighten-2">Add</button>
                            </span>
                        </div>
                        <div class="col s12 padding tb15">
                            <button class="btn waves-effect waves-dark filter selected">All</button>
                            <button class="btn waves-effect waves-dark filter">Active</button>
                            <button class="btn waves-effect waves-dark filter">Completed</button>
                        </div>
                        <div class="col s12 card-panel">
                            <ul class="todo-list">
                                <li>
                                    <input type="checkbox" id="todo-1" class="filled-in" />
                                    <label for="todo-1">Grow my mailing list.</label>
                                    <button type="button" class="btn btn-floating btn-flat"><i class="zmdi zmdi-close"></i></button>
                                </li>
                                <li>
                                    <input type="checkbox" id="todo-2" class="filled-in" />
                                    <label for="todo-2">Grow my mailing list.</label>
                                    <button type="button" class="btn btn-floating btn-flat"><i class="zmdi zmdi-close"></i></button>
                                </li>
                                <li>
                                    <input type="checkbox" id="todo-3" class="filled-in" checked="checked" />
                                    <label for="todo-3">Grow my mailing list.</label>
                                    <button type="button" class="btn btn-floating btn-flat"><i class="zmdi zmdi-close"></i></button>
                                </li>
                            </ul>
                        </div>

                        <div class="col s6"><a class="waves-effect waves-light btn pink lighten-2">Clear Completed Todo's</a></div>
                    </section>
                </div>

            </div>
        </main>

        <script type="text/javascript" src="../bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="../bower_components/materialize/bin/materialize.js"></script>
        <script type="text/javascript" src="test.js"></script>
	</body>
</html>

