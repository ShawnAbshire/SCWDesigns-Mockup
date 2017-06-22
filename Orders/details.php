<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../bower_components/materialize/bin/materialize.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="../css/select2/select2.css" media="all">
        <link rel="stylesheet" type="text/css" href="../css/admin.css" media="all">
        <link rel="stylesheet" type="text/css" href="../css/invoice.css" media="print">
        <title>SCWDesigns - Order Details</title>
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
                    <li class="selected">
                        <a href="#" class="waves-effect collapsible-menu">
                            <i class="zmdi zmdi-truck"></i>
                            <span class="description">Orders</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="#" class="selected">Orders List <span class="new badge">7</span></a></li>
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
                                <a href="#!" class="breadcrumb">Order Details</a>
                                <a href="#!" class="breadcrumb">#10001</a>
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
                                <h1><i class="zmdi zmdi-inbox"></i> Order Details</h1>
                                <p>Here you can modify a specific orders details, including adding and removing products from the order and printing the invoice</p>
                            </div>
                        </div>
                    </section>

                    <div class="row containment no-col-padding">
                        <div class="col s12">
                            <ul class="box-tabs">
                                <li><a href="#details">Order Details</a></li>
                                <li class="active card"><a href="#invoice">Invoice</a></li>
                            </ul>
                        </div>

                        <!-- Begin Tab Content -->
                        <div class="col s12 tab-content-container">
                            <!-- Begin Details Tab -->
                            <div id="details" class="col s12 card tab-content order-details">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="col s12 order-header">
                                                <div class="order-number">Order #10001 <i class="zmdi zmdi-menu toggle-notes"></i></div>
                                                <div class="order-date">Placed on December 22, 2015 6:54 pm by Shawn Abshire (abshire.shawn@gmail.com)</div>
                                            </div>
                                        </div>

                                        <div class="row order-notes">
                                            <div class="col s12 card yellow">
                                                <div class="card-content">
                                                    <textarea id="order-notes" class="materialize-textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s6 m4 order-info">
                                                <div class="order-part payment">
                                                    <ul>
                                                        <li>
                                                            <div class="label"><i class="zmdi zmdi-card"></i> Payment Method</div>
                                                            <div class="payment-type">Paypal</div>
                                                        </li>
                                                        <li class="billing-container">
                                                            <div class="label">Billing Address</div>
                                                            <ul>
                                                                <li>Shawn Abshire</li>
                                                                <li>555 Gotham Lane</li>
                                                                <li>Gotham, Alabama 34567</li>
                                                                <li>United States</li>
                                                                <li>P: (334) 555-5555</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col s6 m4 order-info">
                                                <div class="order-part shipping">
                                                    <ul>
                                                        <li>
                                                            <div class="label"><i class="zmdi zmdi-card"></i> Shipping Method</div>
                                                            <div class="payment-type">Local Shipping</div>
                                                        </li>
                                                        <li class="billing-container">
                                                            <div class="label">Shipping Address</div>
                                                            <ul>
                                                                <li>Same as billing</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col s12 m4 order-info">
                                                <div class="order-actions">
                                                    <div class="actions-container">
                                                        <div class="row">
                                                            <div class="col s12 label">Shipping Status:</div>
                                                            <div class="col s12 value">
                                                                <select class="select2">
                                                                    <option>New</option>
                                                                    <option>Processing</option>
                                                                    <option>Shipped</option>
                                                                    <option>Delivered</option>
                                                                    <option>Will Not Deliver</option>
                                                                    <option>Returned</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col s12 label">Payment Status:</div>
                                                            <div class="col s12 value">
                                                                <select class="select2">
                                                                    <option>Awaiting Payment</option>
                                                                    <option>Partially Paid</option>
                                                                    <option>Paid</option>
                                                                    <option>Declined</option>
                                                                    <option>Cancelled</option>
                                                                    <option>Refunded</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tracking-numbers">
                                                        <input type="text" value="1Z9999999999999999" />
                                                        <button class="btn pink lighten-2 waves-effect waves-light">Add Tracking Number</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s12 order-header">
                                                <div class="order-number">Order Items</div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s12 order-items table">
                                                <table id="order-items" class="striped bordered">
                                                    <thead>
                                                        <tr class="order-items">
                                                            <th>Item</th>
                                                            <th>Price</th>
                                                            <th>Qty</th>
                                                            <th>Total</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#!">Product 1</a></td>
                                                            <td>$19.99</td>
                                                            <td>23</td>
                                                            <td>$459.77</td>
                                                            <td><i class="zmdi zmdi-delete zmdi-hc-lg"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="#!">Product 2</a></td>
                                                            <td>$19.99</td>
                                                            <td>23</td>
                                                            <td>$459.77</td>
                                                            <td><i class="zmdi zmdi-delete zmdi-hc-lg"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="#!">Product 3</a></td>
                                                            <td>$19.99</td>
                                                            <td>23</td>
                                                            <td>$459.77</td>
                                                            <td><i class="zmdi zmdi-delete zmdi-hc-lg"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="#!">Product 4</a></td>
                                                            <td>$19.99</td>
                                                            <td>23</td>
                                                            <td>$459.77</td>
                                                            <td><i class="zmdi zmdi-delete zmdi-hc-lg"></i></td>
                                                        </tr>

                                                        <tr>
                                                            <td><a href="#!">Product 5 (deleted)</a></td>
                                                            <td>$19.99</td>
                                                            <td>23</td>
                                                            <td>$459.77</td>
                                                            <td><i class="zmdi zmdi-delete zmdi-hc-lg"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s12 m9">
                                                <button class="btn pink lighten-2 waves-effect waves-light">Add Item</button>
                                            </div>

                                            <div class="col s12 m3 order-summary">
                                                <div class="row no-bottom-margin">
                                                    <div class="col s6">Subtotal:</div>
                                                    <div class="col s6 right-align">$285.95</div>
                                                </div>
                                                <div class="row no-bottom-margin">
                                                    <div class="col s6">Shipping:</div>
                                                    <div class="col s6 right-align">$6.74</div>
                                                </div>
                                                <div class="row no-bottom-margin">
                                                    <div class="col s6">Discount:</div>
                                                    <div class="col s6 right-align">$28.60</div>
                                                </div>
                                                <div class="row grand-total">
                                                    <div class="col s6">Grand Total:</div>
                                                    <div class="col s6 right-align">$264.09</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Details Tab -->

                            <!-- Begin Invoice Tab -->
                            <div id="invoice" class="col s12 card tab-content active">
                                <div class="row">
                                    <div class="col s12"><button class="btn pink lighten-2 waves-effect waves-light" onclick="javascript:window.print()">Print Invoice</button></div>
                                </div>

                                <div class="invoice-container">
                                    <div class="row">
                                        <div class="col s6 invoice-header">
                                            <ul>
                                                <li class="company-name">SCWDesigns Boutique</li>
                                                <li>123 Gotham Lane</li>
                                                <li>Enterprise, Alabama 36330</li>
                                                <li>United State</li>
                                                <li>Phone: (334) 555-5555</li>
                                                <li>Fax: (334) 555-5555</li>
                                            </ul>
                                        </div>

                                        <div class="col s6 right-align">
                                            <img src="../images/logo.png" />
                                        </div>
                                    </div>

                                    <div class="row invoice-details">
                                        <h2>Invoice #10001</h2>
                                        <div class="row">
                                            <div class="col s6">December 22, 2015 - 6:45pm</div>
                                            <div class="col s6 right-align">Grand Total: $1,999.99</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">
                                            <div class="invoice-items">Order Items</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12 table">
                                            <table id="invoice-items" class="striped bordered">
                                                <thead>
                                                    <tr class="order-items">
                                                        <th>Item</th>
                                                        <th>Price</th>
                                                        <th>Qty</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td><a href="#!">Product 1</a></td>
                                                        <td>$19.99</td>
                                                        <td>23</td>
                                                        <td>$459.77</td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="#!">Product 2</a></td>
                                                        <td>$19.99</td>
                                                        <td>23</td>
                                                        <td>$459.77</td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="#!">Product 3</a></td>
                                                        <td>$19.99</td>
                                                        <td>23</td>
                                                        <td>$459.77</td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="#!">Product 4</a></td>
                                                        <td>$19.99</td>
                                                        <td>23</td>
                                                        <td>$459.77</td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="#!">Product 5 (deleted)</a></td>
                                                        <td>$19.99</td>
                                                        <td>23</td>
                                                        <td>$459.77</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s6 offset-s6 m5 offset-m7 invoice-summary">
                                            <div class="row no-bottom-margin">
                                                <div class="col s6">Subtotal:</div>
                                                <div class="col s6 right-align">$285.95</div>
                                            </div>
                                            <div class="row no-bottom-margin">
                                                <div class="col s6">Shipping:</div>
                                                <div class="col s6 right-align">$6.74</div>
                                            </div>
                                            <div class="row no-bottom-margin">
                                                <div class="col s6">Discount:</div>
                                                <div class="col s6 right-align">$28.60</div>
                                            </div>
                                            <div class="row grand-total">
                                                <div class="col s6">Grand Total:</div>
                                                <div class="col s6 right-align">$264.09</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s6 left-align">
                                            <div class="actions-container">
                                                <h4>Shipping Address</h4>
                                                <ul>
                                                    <li>Shawn Abshire</li>
                                                    <li>123 Gotham Lane</li>
                                                    <li>Enterpise, Alabama 36304</li>
                                                    <li>United States</li>
                                                    <li>Phone: (334) 555-5555</li>
                                                </ul>

                                                <h4>Shipping Method</h4>
                                                <div class="method">FexEx Europse First Internaltion Priority</div>
                                            </div>
                                        </div>

                                        <div class="col s6">
                                            <div class="actions-container">
                                                <h4>Billing Address</h4>
                                                <ul>
                                                    <li>Shawn Abshire</li>
                                                    <li>123 Gotham Lane</li>
                                                    <li>Enterpise, Alabama 36304</li>
                                                    <li>United States</li>
                                                    <li>Phone: (334) 555-5555</li>
                                                </ul>

                                                <h4>Payment Method</h4>
                                                <div class="method">Paypal</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12 center-align footer">Thank you for your business.  Please come back soon!</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Invoice Tab -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
                <!-- End Main Content -->
            </div>

            <div class="footer-actions">
                <button class="btn btn-large btn-floating pink lighten-2 waves-effect waves-light tooltipped" data-position="top" data-tooltip="Save Changes"><i class="zmdi zmdi-floppy"></i></button>
            </div>
        </main>

        <script type="text/javascript" src="../bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="../bower_components/materialize/bin/materialize.js"></script>
        <script type="text/javascript" src="../js/tabs.js"></script>
        <script type="text/javascript" src="../bower_components/select2/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            // Test Functionality
            $('#select-all').on('click', function() {
                $('.footer-actions').toggleClass('active');
            });

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
            $('.select2').select2({ width: '100%' });
        </script>
        <script type="text/javascript">
            $('.toggle-notes').on('click', function() {
                $('.order-notes').slideToggle("slow");
            });
        </script>
    </body>
</html>