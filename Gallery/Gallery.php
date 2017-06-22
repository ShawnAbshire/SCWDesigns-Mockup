<!DOCTYPE html>

<html>
	<head>
        <link rel="stylesheet" type="text/css" href="../bower_components/materialize/bin/materialize.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="../css/admin.css" media="all">
        <title>SCWDesigns - Gallery</title>
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
                    <li>
                        <a href="../Requests/requests.php" class="waves-effect">
                            <i class="zmdi zmdi-email-open"></i>
                            <span class="description">Requests</span>
                        </a>
                    </li>
                    <li class="selected">
                        <a href="#!">
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
                        <div class="page-header">
                            <div class="header">
                                <h1><i class="zmdi zmdi-collection-folder-image"></i> Gallery</h1>
                                <p>Here you are able to manage all your images via galleries.</p>
                            </div>
                        </div>
                    </section>

                    <div class="row gallery-container">
                        <div class="col s12 m3 gallery-albums">
                            <a class="waves-effect waves-light btn pink lighten-2 create-album">Create Album</a>

                            <ul class="album-list">
                                <li class="selected"><i class="zmdi zmdi-folder-outline"></i> General</li>
                                <li><i class="zmdi zmdi-folder"></i> Office</li>
                                <li><i class="zmdi zmdi-folder"></i> Dresses</li>
                                <li><i class="zmdi zmdi-folder"></i> Misc</li>
                            </ul>
                        </div>

                        <div class="col s12 m9 gallery-view">
                            <div class="gallery-images">
                                <div class="album-header card">
                                    <div class="album-title">General </div>
                                    <div class="album-actions">
                                        <ul>
                                            <li><input type="checkbox" id="select-all" class="filled-in" /><label for="select-all">Select all</label></li>
                                            <li><a class="add-images" href="#!"><i class="zmdi zmdi-upload"></i> Add Images</a></li>
                                            <li><a href="#!"><i class="zmdi zmdi-arrows"></i> Re-order</a></li>
                                            <li><a href="#!"><i class="zmdi zmdi-aspect-ratio"></i> Edit</a></li>
                                            <li><a href="#!"><i class="zmdi zmdi-delete"></i> Trash</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="gallery-upload card">
                                    <div class="card">
                                        <div class="table">
                                            <div class="header-container">
                                                <div class="dropzone-custom">
                                                    <div class="dz-message">Drag files here or click</div>
                                                </div>
                                            </div>

                                            <table class="upload-table striped">
                                                <thead>
                                                    <tr class="upload-table-head">
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Upload Progress</th>
                                                        <th>Size</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="album-images row">
                                    <div class="col s12 m4 l4">
                                        <div class="card">
                                            <div class="card-image">
                                                <input id="1" type="checkbox" class="select-image filled-in" />
                                                <label for="1">&nbsp</label>
                                                <img src="../images/Gallery/album-img-1.png">
                                                <span class="card-title">Blue Dress</span>
                                            </div>
                                            <div class="card-content gallery-info">
                                                <div class="info">
                                                    <span class="filename">album-img-7.png</span>
                                                    <span class="upload-date">August 1, 2016</span>
                                                </div>

                                                <div class="image-actions">
                                                    <a class='dropdown-button' href='#' data-activates='dropdown1'><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul id='dropdown1' class='dropdown-content'>
                                                        <li><a href="#!"><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                                        <li><a href="#!"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12 m4 l4">
                                        <div class="card">
                                            <div class="card-image">
                                                <input id="2" type="checkbox" class="select-image filled-in" />
                                                <label for="2">&nbsp</label>
                                                <img src="../images/Gallery/album-img-2.png">
                                                <span class="card-title">Turtle Dress</span>
                                            </div>
                                            <div class="card-content gallery-info">
                                                <div class="info">
                                                    <span class="filename">album-img-7.png</span>
                                                    <span class="upload-date">August 1, 2016</span>
                                                </div>

                                                <div class="image-actions">
                                                    <a class='dropdown-button' href='#' data-activates='dropdown2'><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul id='dropdown2' class='dropdown-content'>
                                                        <li><a href="#!"><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                                        <li><a href="#!"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12 m4 l4">
                                        <div class="card">
                                            <div class="card-image">
                                                <input id="3" type="checkbox" class="select-image filled-in" />
                                                <label for="3">&nbsp</label>
                                                <img src="../images/Gallery/album-img-3.png">
                                                <span class="card-title">Pink Dress</span>
                                            </div>
                                            <div class="card-content gallery-info">
                                                <div class="info">
                                                    <span class="filename">album-img-7.png</span>
                                                    <span class="upload-date">August 1, 2016</span>
                                                </div>

                                                <div class="image-actions">
                                                    <a class='dropdown-button' href='#' data-activates='dropdown3'><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul id='dropdown3' class='dropdown-content'>
                                                        <li><a href="#!"><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                                        <li><a href="#!"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12 m4 l4">
                                        <div class="card">
                                            <div class="card-image">
                                                <input id="4" type="checkbox" class="select-image filled-in" />
                                                <label for="4">&nbsp</label>
                                                <img src="../images/Gallery/album-img-4.png">
                                                <span class="card-title">Another Dress</span>
                                            </div>
                                            <div class="card-content gallery-info">
                                                <div class="info">
                                                    <span class="filename">album-img-7.png</span>
                                                    <span class="upload-date">August 1, 2016</span>
                                                </div>

                                                <div class="image-actions">
                                                    <a class='dropdown-button' href='#' data-activates='dropdown4'><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul id='dropdown4' class='dropdown-content'>
                                                        <li><a href="#!"><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                                        <li><a href="#!"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12 m4 l4">
                                        <div class="card">
                                            <div class="card-image">
                                                <input id="5" type="checkbox" class="select-image filled-in" />
                                                <label for="5">&nbsp</label>
                                                <img src="../images/Gallery/album-img-5.png">
                                                <span class="card-title">Another Dress</span>
                                            </div>
                                            <div class="card-content gallery-info">
                                                <div class="info">
                                                    <span class="filename">album-img-7.png</span>
                                                    <span class="upload-date">August 1, 2016</span>
                                                </div>

                                                <div class="image-actions">
                                                    <a class='dropdown-button' href='#' data-activates='dropdown5'><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul id='dropdown5' class='dropdown-content'>
                                                        <li><a href="#!"><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                                        <li><a href="#!"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12 m4 l4">
                                        <div class="card">
                                            <div class="card-image">
                                                <input id="6" type="checkbox" class="select-image filled-in" />
                                                <label for="6">&nbsp</label>
                                                <img src="../images/Gallery/album-img-6.png">
                                                <span class="card-title">Another Dress</span>
                                            </div>
                                            <div class="card-content gallery-info">
                                                <div class="info">
                                                    <span class="filename">album-img-7.png</span>
                                                    <span class="upload-date">August 1, 2016</span>
                                                </div>

                                                <div class="image-actions">
                                                    <a class='dropdown-button' href='#' data-activates='dropdown6'><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul id='dropdown6' class='dropdown-content'>
                                                        <li><a href="#!"><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                                        <li><a href="#!"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col s12 m4 l4">
                                        <div class="card">
                                            <div class="card-image">
                                                <input id="7" type="checkbox" class="select-image filled-in" />
                                                <label for="7">&nbsp</label>
                                                <img src="../images/Gallery/album-img-7.png">
                                                <span class="card-title">Another Dress</span>
                                            </div>
                                            <div class="card-content gallery-info">
                                                <div class="info">
                                                    <span class="filename">album-img-7.png</span>
                                                    <span class="upload-date">August 1, 2016</span>
                                                </div>

                                                <div class="image-actions">
                                                    <a class='dropdown-button' href='#' data-activates='dropdown7'><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul id='dropdown7' class='dropdown-content'>
                                                        <li><a href="#!"><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                                        <li><a href="#!"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Main Content -->
            </div>
        </main>

        <script type="text/javascript" src="../bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="../bower_components/materialize/bin/materialize.js"></script>
        <script type="text/javascript" src="../bower_components/dropzone/dist/min/dropzone.min.js"></script>
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
        </script>
        <script type="text/javascript">
            var uploadCount = 1;
            var dropzoneTableBody = $('.upload-table').find('tbody');
            var DropZone = $(".dropzone-custom").dropzone({
                url: "/",
                addRemoveLinks: false,
                addedfile: function(file) {
                    if (uploadCount == 1) { dropzoneTableBody.html(''); }
                    var size = parseInt(file.size / 2014, 10);
                    size = size < 1024 ? (size + " KB") : (parseInt(size / 1024 / 10) + " MB");
                    var data = $('<tr>\
                                    <td>' + (uploadCount++) + '</td>\
                                    <td>' + file.name + '</td>\
                                    <td>\
                                        <div class="progress progress-warning progress-striped active">\
                                           <div class="bar" style="width: 0%"></div>\
                                        </div>\
                                    </td>\
                                    <td>' + size + '</td>\
                                    <td><span class="uploading">Uploaded...</span></td>\
                                </tr>');

                    dropzoneTableBody.append(data);
                    file.entry = data;
                    file.progress = data.find('.bar');
                },
                uploadprogress: function(file, progress, bytesSent) {
                    file.progress.width(progress + '%');
                },
                success: function(file) {
                    file.entry.find('td:last').html('<span class="success">Uploaded</span>');
                    file.progress.parent().removeClass('progress-warning').addClass('progress-success');
                },
                error: function(file) {
                    file.entry.find('td:last').html('<span class="error">Error</span>');
                    file.progress.parent().removeClass('progress-warning').addClass('progress-danger');
                }
            });
        </script>
        <script type="text/javascript">
            var galleryUploadElement = $('.gallery-upload');
            $('.add-images').on('click', function(e) {
                e.preventDefault();

                if ($(this).hasClass("upload")) {
                    $(this).removeClass("upload").html("<i class=\"zmdi zmdi-upload\"></i> Add Images");
                    galleryUploadElement.slideUp('350');
                } else {
                    $(this).addClass("upload").html("<i class=\"zmdi zmdi-upload\"></i> Hide Upload");
                    uploadCount = 1;
                    galleryUploadElement.find('tbody').html("");
                    galleryUploadElement.slideDown('350');
                }
            });
        </script>
	</body>
</html>
