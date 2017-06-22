<!DOCTYPE html>

<html>
	<head>
        <link rel="stylesheet" type="text/css" href="bower_components/materialize/bin/materialize.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="css/admin.css" media="all">
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
                    <li class="selected">
                        <a href="#" class="waves-effect">
                            <i class="zmdi zmdi-blur"></i>
                            <span class="description">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="Todo/todo.php" class="waves-effect">
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
                            <li><a href="Orders/orderslist.php" class="selected">Orders List <span class="new badge">7</span></a></li>
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
                            <li><a href="Catalog/products.php">Products</a></li>
                            <li><a href="Catalog/categories.php">Categories</a></li>
                            <li><a href="Catalog/reviews.php">Reviews</a></li>
                            <li><a href="Catalog/sales.php">Sales</a></li>
                            <li><a href="Catalog/attributes.php">Classes & Attributes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="Members/members.php" class="waves-effect">
                            <i class="zmdi zmdi-accounts"></i>
                            <span class="description">Members</span>
                        </a>
                    </li>
                    <li>
                        <a href="Requests/requests.php" class="waves-effect">
                            <i class="zmdi zmdi-email-open"></i>
                            <span class="description">Requests</span>
                        </a>
                    </li>
                    <li>
                        <a href="Gallery/gallery.php">
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

                <!-- Begin Main Content -->
                <div class="main-content">
                    <section class="containment">
                        <!-- Begin Performance widgets -->
                        <div class="row">
                            <div class="col s12 m4">
                                <div class="card red lighten-1 performance-widget">
                                    <div class="graph-widget">
                                        <div class="right trending"> <i class="zmdi zmdi-trending-up"></i> 17% </div>
                                        <h3>Sales per day</h3>
                                        <h4><i class="zmdi zmdi-star-outline"></i> Latest 10 May, 10:00</h4>
                                        <div class="chart-container">
                                            <div class="chart-line sales">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content white">
                                        <div class="row total">
                                            <div class="col s6 center-align">
                                                <h3>$4,299</h3>
                                                <p>Total Revenue</p>
                                            </div>
                                            <div class="col s6 center-align">
                                                <h3>233</h3>
                                                <p>Today Sales</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card blue lighten-1 performance-widget">
                                    <div class="graph-widget">
                                        <div class="right trending"> <i class="zmdi zmdi-trending-up"></i> 17% </div>
                                        <h3>Customers per day</h3>
                                        <h4><i class="zmdi zmdi-star-outline"></i> Latest 10 May, 10:00</h4>
                                        <div class="chart-container">
                                            <div class="chart-line customer">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-content white">
                                        <div class="row total">
                                            <div class="col s6 center-align">
                                                <h3>2,376</h3>
                                                <p>Monthly Total</p>
                                            </div>
                                            <div class="col s6 center-align">
                                                <h3>89</h3>
                                                <p>Total Today</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card green lighten-1 performance-widget">
                                    <div class="graph-widget">
                                        <div class="right trending"> <i class="zmdi zmdi-trending-up"></i> 17% </div>
                                        <h3>Newsletter Signups</h3>
                                        <h4><i class="zmdi zmdi-star-outline"></i> Latest 10 May, 10:00</h4>
                                        <div class="chart-container">
                                            <div class="chart-line newsletter">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-content white">
                                        <div class="row total">
                                            <div class="col s6 center-align">
                                                <h3>1,576</h3>
                                                <p>Monthly Total</p>
                                            </div>
                                            <div class="col s6 center-align">
                                                <h3>34</h3>
                                                <p>Today Total</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Performance Widget -->

                        <!-- Begin New Orders and Members widgets-->
                        <div class="row">
                            <div class="col s12 m6 l8 ">
                                <div class="card">
                                    <div class="table autoflow">
                                        <div class="header-container">
                                            <div class="left">
                                                <h2>Last 5 orders</h2>
                                                <p>Overview of the last orders and orders per day.</p>
                                            </div>
                                            <a class="btn-floating waves-effect waves-light pink lighten-2 right tooltipped" data-position="top" data-tooltip="Vew All Orders"><i class="zmdi zmdi-caret-right zmdi-hc-3x"></i></a>
                                        </div>

                                        <table class="responsive-table striped">
                                            <thead>
                                                <tr class="payments-widget">
                                                    <th>Order #</th>
                                                    <th>Status</th>
                                                    <th>Customer Info</th>
                                                    <th>Order Date</th>
                                                    <th class="right-align">Amount</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>10001</td>
                                                    <td><span class="status awaiting">Awaiting Payment</span></td>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="right-align">
                                                        <div class="price">$1,999.99</div>
                                                        <span class="qty">Qty: 250</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>10001</td>
                                                    <td><span class="status declined">Declined</span></td>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="right-align">
                                                        <div class="price">$1,999.99</div>
                                                        <span class="qty">Qty: 250</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>10001</td>
                                                    <td><span class="status paid">Paid</span></td>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="right-align">
                                                        <div class="price">$1,999.99</div>
                                                        <span class="qty">Qty: 250</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>10001</td>
                                                    <td><span class="status cancelled">Cancelled</span></td>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="right-align">
                                                        <div class="price">$1,999.99</div>
                                                        <span class="qty">Qty: 250</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>10001</td>
                                                    <td><span class="status partially">Partial Payment</span></td>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="right-align">
                                                        <div class="price">$1,999.99</div>
                                                        <span class="qty">Qty: 250</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12 m6 l4 ">
                                <div class="card">
                                    <div class="table autoflow">
                                        <div class="header-container">
                                            <div class="left">
                                                <h2>Newest Members</h2>
                                                <p>A list of the newest members.</p>
                                            </div>
                                            <a class="btn-floating waves-effect waves-light pink lighten-2 right tooltipped" data-position="top" data-tooltip="View all members"><i class="zmdi zmdi-caret-right zmdi-hc-3x"></i></a>
                                        </div>

                                        <table class="responsive-table striped">
                                            <thead>
                                                <tr class="members-widget">
                                                    <th>Name</th>
                                                    <th>Last Login</th>
                                                    <th>Orders</th>
                                                    <th>Subscribed</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="center-align">3</td>
                                                    <td class="center-align"><i class="zmdi zmdi-file-text zmdi-hc-lg"></i></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="center-align">15</td>
                                                    <td class="center-align"><i class="zmdi zmdi-file-text zmdi-hc-lg subscribed"></i></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="center-align">1</td>
                                                    <td class="center-align"><i class="zmdi zmdi-file-text zmdi-hc-lg subscribed"></i></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="center-align">3</td>
                                                    <td class="center-align"><i class="zmdi zmdi-file-text zmdi-hc-lg subscribed"></i></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="profile-name"><a href="#">Shane Abshire</a></div>
                                                        <span class="user-email">abshire.shawn@gmail.com</span>
                                                    </td>
                                                    <td>12/22/2016 10:25pm</td>
                                                    <td class="center-align">27</td>
                                                    <td class="center-align"><i class="zmdi zmdi-file-text zmdi-hc-lg"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End New Orders and Members widgets -->

                        <!-- Begin TODOS widgets -->
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <div class="card">
                                    <div class="card-title widget">
                                        <h2>
                                            <i class="zmdi zmdi-camera-alt"></i> Todo's
                                        </h2>

                                        <div class="actions">
                                            <i class="zmdi zmdi-check tooltipped" data-position="top" data-tooltip="Clear Completed"></i>
                                        </div>
                                    </div>
                                    <div class="card-content">
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

                                    <div class="card-action input-field input-group">
                                        <input type="text" id="add-todo" placeholder="enter new todo" />
                                        <span class="suffix">
                                            <button class="waves-effect waves-light btn pink lighten-2">Add</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End TODOS widgets -->
                    </section>
                </div>
                <!-- End Main Content -->
            </div>
        </main>


        <script type="text/javascript" src="./js/build/commons.js"></script>
        <script type="text/javascript" src="./js/build/dashboard.bundle.js"></script>
	</body>
</html>

