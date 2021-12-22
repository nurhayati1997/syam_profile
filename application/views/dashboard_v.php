    <!-- PAGE CONTAINER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="root" class="root mn--max hd--expanded">
        <!-- CONTENTS -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section id="content" class="content">
            <div class="content__header content__boxed overlapping">
                <div class="content__wrap pt-3 pb-4">
                    <div class="d-md-flex align-items-center">
                        <div class="me-auto">
                            <!-- Page title and information -->
                            <div class="text-start">
                                <h1 class="page-title mb-2">Dashboard</h1>
                                <h3 class="h5">Welcome back to the Dashboard.</h3>
                                <p class="">Scroll down to see quick links and overviews of your Server, To do list<br> Order status or get some Help using Nifty.</p>
                            </div>
                            <!-- END : Page title and information -->

                        </div>
                        <div class="flex-grow-1 d-flex flex-column justify-content-end align-items-md-end gap-3">

                            <!-- Stat widget -->
                            <div class="mt-4 mt-md-0">

                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 text-white text-opacity-25">
                                        <i class="d-flex align-items-center justify-content-center demo-pli-male-female display-5"></i>
                                    </div>
                                    <div class="flex-grow-1 text-end ms-3">
                                        <h5 class="h1 fw-light mb-0">314,675</h5>
                                        <p class="text-white text-opacity-50 mb-0">Visit Today</p>
                                    </div>
                                </div>

                                <div class="progress progress-md mb-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="text-white text-end text-opacity-75 mb-0"><strong>35%</strong> Higher than yesterday </p>

                            </div>
                            <!-- END : Stat widget -->

                        </div>
                    </div>
                </div>

            </div>

            <div class="content__boxed">
                <div class="content__wrap">
                    <div class="row">
                        <div class="col-xl-7 mb-4 mb-xl-0">

                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center border-0">
                                    <div class="me-auto">
                                        <h5 class="m-0">Network</h5>
                                    </div>
                                    <div class="toolbar-end">
                                        <button type="button" class="btn btn-icon btn-sm">
                                            <i class="demo-psi-repeat-2 fs-5"></i>
                                        </button>
                                        <div class="dropdown">
                                            <button class="btn btn-icon btn-sm bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="demo-pli-dot-horizontal fs-4"></i>
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="demo-pli-pen-5 text-muted me-2"></i> Edit Date
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="demo-pli-refresh text-muted me-2"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="demo-pli-file-csv text-muted me-2"></i> Save as CSV
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="demo-pli-calendar-4 text-muted me-2"></i> View Details
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <!-- Area Chart -->
                                    <canvas id="_dm-areaChart"></canvas>
                                    <!-- END : Area Chart -->

                                    <div class="row mt-5">
                                        <div class="col-md-8">

                                            <!-- CPU Temperature -->
                                            <h5 class="mb-3">CPU Temperature</h5>
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="h5 display-6 fw-normal">
                                                        43.7 <span class="fw-bold fs-5 align-top">°C</span>
                                                    </div>
                                                </div>
                                                <div class="col-7 text-sm">
                                                    <ul class="list-group list-group-borderless">
                                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                                            <span class="ms-2 me-auto">
                                                                Min Values
                                                            </span>
                                                            <span class="d-block badge bg-success">27°</span>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                                            <span class="ms-2 me-auto">
                                                                Max Values
                                                            </span>
                                                            <span class="d-block badge bg-danger">89°</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- END : CPU Temperature -->

                                            <!-- Today Tips -->
                                            <div class="mt-4">
                                                <h5>Today Tips</h5>
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                            </div>
                                            <!-- END : Today Tips -->

                                        </div>
                                        <div class="col-md-4">

                                            <!-- Bandwidth usage and progress bars -->
                                            <h5 class="mb-3">Bandwidth Usage</h5>
                                            <div class="h2 fw-normal">
                                                754.9<span class="ms-2 fs-6 align-top">Mbps</span>
                                            </div>

                                            <div class="mt-4 mb-2 d-flex justify-content-between">
                                                <span class="">Income</span>
                                                <span class="">70%</span>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <div class="mt-4 mb-2 d-flex justify-content-between">
                                                <span class="">Outcome</span>
                                                <span class="">10%</span>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!-- END : Bandwidth usage and progress bars -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="row">
                                <div class="col-sm-6">

                                    <!-- Tile - HDD Usage -->
                                    <div class="card bg-success text-white p-3 mb-4">
                                        <h5 class="mb-3"><i class="demo-psi-data-storage text-white text-opacity-75 fs-3 me-2"></i> HDD Usage</h5>
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item p-0 text-white d-flex justify-content-between align-items-start">
                                                <div class="me-auto">Free Space</div>
                                                <span class="fw-bold">132Gb</span>
                                            </li>
                                            <li class="list-group-item p-0 text-white d-flex justify-content-between align-items-start">
                                                <div class="me-auto">Used space</div>
                                                <span class="fw-bold">1,45Gb</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END : Tile - HDD Usage -->

                                </div>
                                <div class="col-sm-6">

                                    <!-- Tile - Earnings -->
                                    <div class="card bg-info p-3 text-white mb-4">
                                        <h5 class="mb-3"><i class="demo-psi-coin text-white text-opacity-75 fs-2 me-2"></i> Earning</h5>
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item p-0 text-white d-flex justify-content-between align-items-start">
                                                <div class="me-auto">Today</div>
                                                <span class="fw-bold">$764</span>
                                            </li>
                                            <li class="list-group-item p-0 text-white d-flex justify-content-between align-items-start">
                                                <div class="me-auto">Last 7 Day</div>
                                                <span class="fw-bold">$1,332</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END : Tile - Earnings -->

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <!-- Tile - Sales -->
                                    <div class="card bg-purple p-3 text-white mb-4">
                                        <h5 class="mb-3"><i class="demo-psi-basket-coins text-white text-opacity-75 fs-2 me-2"></i> Sales</h5>
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item p-0 text-white d-flex justify-content-between align-items-start">
                                                <div class="me-auto">Today</div>
                                                <span class="fw-bold">$764</span>
                                            </li>
                                            <li class="list-group-item p-0 text-white d-flex justify-content-between align-items-start">
                                                <div class="me-auto">Last 7 Day</div>
                                                <span class="fw-bold">$1,332</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END : Tile - Sales -->

                                </div>
                                <div class="col-sm-6">

                                    <!-- Tile - Task Progress -->
                                    <div class="card bg-warning p-3 text-white mb-4">
                                        <h5 class="mb-3"><i class="demo-psi-basket-coins text-white text-opacity-75 fs-2 me-2"></i> Task Progress</h5>
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item p-0 text-white d-flex justify-content-between align-items-start">
                                                <div class="me-auto">Completed</div>
                                                <span class="fw-bold">34</span>
                                            </li>
                                            <li class="list-group-item p-0 text-white d-flex justify-content-between align-items-start">
                                                <div class="me-auto">Total</div>
                                                <span class="fw-bold">79</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END : Tile - Task Progress -->

                                </div>
                            </div>

                            <!-- Simple state widget -->
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 p-3">
                                            <div class="h3 display-3">95</div>
                                            <span class="h6">New Friends</span>
                                        </div>
                                        <div class="flex-grow-1 text-center ms-3">
                                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                            <button class="btn btn-sm btn-danger">View Details</button>

                                            <!-- Social media statistics -->
                                            <div class="mt-4 pt-3 d-flex justify-content-around border-top">
                                                <div class="text-center">
                                                    <h4 class="mb-1">1,345</h4>
                                                    <small class="text-muted">Following</small>
                                                </div>
                                                <div class="text-center">
                                                    <h4 class="mb-1">23k</h4>
                                                    <small class="text-muted">Followers</small>
                                                </div>
                                                <div class="text-center">
                                                    <h4 class="mb-1">278</h4>
                                                    <small class="text-muted">Posts</small>
                                                </div>
                                            </div>
                                            <!-- END : Social media statistics -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END : Simple state widget -->

                            <!-- Quote widget -->
                            <div class="card bg-secondary text-white p-4">
                                <figure class="d-flex flex-column align-items-center justify-content-center m-0">
                                    <blockquote class="blockquote w-100">
                                        <p class="quote text-center">Getting up early all the time, You've got to get enough sleep</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mt-2 text-white">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- END : Quote widget -->

                        </div>
                    </div>

                </div>
            </div>
            <div class="content__boxed bg-light bg-opacity-50 border-top border-bottom">
                <div class="content__wrap">

                    <div class="row gx-5 gy-5 gy-md-0">
                        <div class="col-md-4">

                            <!-- TODO List -->
                            <h4 class="mb-3">To-do list</h4>
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList1" class="form-check-input" type="checkbox" checked>
                                        <label for="_dm-todoList1" class="form-check-label">
                                            Find an idea <span class="badge bg-danger">Important</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList2" class="form-check-input" type="checkbox">
                                        <label for="_dm-todoList2" class="form-check-label">
                                            Do some work
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList3" class="form-check-input" type="checkbox">
                                        <label for="_dm-todoList3" class="form-check-label">
                                            Read the book
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList4" class="form-check-input" type="checkbox">
                                        <label for="_dm-todoList4" class="form-check-label">
                                            Upgrade server <span class="badge bg-warning">Warning</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="form-check">
                                        <input id="_dm-todoList4" class="form-check-input" type="checkbox">
                                        <label for="_dm-todoList4" class="form-check-label">
                                            Redesign my logo <span class="badge bg-info">2 Mins</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div class="input-group mt-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Add new list" aria-label="Add new list" aria-describedby="button-addon">
                                <button id="button-addon" class="btn btn-sm btn-secondary hstack gap-2" type="button">
                                    <i class="demo-psi-add text-white-50 fs-4"></i> Add New
                                </button>
                            </div>
                            <!-- END : TODO List -->

                        </div>
                        <div class="col-md-4">

                            <!-- Service options -->
                            <h4 class="mb-3">Services</h4>
                            <div class="list-group list-group-borderless">
                                <div class="list-group-item px-0 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-check-label h6 mb-0" for="_dm-dbPersonalStatus">Show my personal status</label>
                                        <div class="form-check form-switch">
                                            <input id="_dm-dbPersonalStatus" class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </div>
                                    <small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                </div>

                                <div class="list-group-item px-0 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-check-label h6 mb-0" for="_dm-dbOfflineContact">Show offline contact</label>
                                        <div class="form-check form-switch">
                                            <input id="_dm-dbOfflineContact" class="form-check-input" type="checkbox">
                                        </div>
                                    </div>
                                    <small>Aenean commodo ligula eget dolor. Aenean massa.</small>
                                </div>

                                <div class="list-group-item px-0 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-check-label h6 mb-0" for="_dm-dbMuteNotifications">Mute notifications</label>
                                        <div class="form-check form-switch">
                                            <input id="_dm-dbMuteNotifications" class="form-check-input" type="checkbox">
                                        </div>
                                    </div>
                                    <small>Aenean commodo ligula eget dolor. Aenean massa.</small>
                                </div>

                                <div class="list-group-item px-0 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-check-label h6 mb-0" for="_dm-dbInvisibleMode">Invisible Mode</label>
                                        <div class="form-check form-switch">
                                            <input id="_dm-dbInvisibleMode" class="form-check-input" type="checkbox" checked>
                                        </div>
                                    </div>
                                    <small>Nascetur ridiculus mus.</small>
                                </div>
                            </div>
                            <!-- END : Service options -->

                        </div>
                        <div class="col-md-4">

                            <!-- User quote  -->
                            <h4 class="mb-3">New Quote</h4>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-md rounded-3 rounded-lg" src="assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <a href="#" class="d-block h5 text-decoration-none mb-0">Kathryn Obrien</a>
                                    <small class="text-muted">Project manager</small>
                                </div>
                            </div>

                            <figure class="d-flex flex-column align-items-center justify-content-center pt-4 mt-3">
                                <blockquote class="blockquote mb-0">
                                    <p class="quote text-primary">Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                                </blockquote>
                            </figure>

                            <div class="pt-3">
                                <a href="#" class="btn btn-icon bg-transparent btn-underlined text-muted">
                                    <i class="demo-psi-facebook fs-4"></i>
                                </a>
                                <a href="#" class="btn btn-icon bg-transparent btn-underlined text-muted">
                                    <i class="demo-psi-twitter fs-4"></i>
                                </a>
                                <a href="#" class="btn btn-icon bg-transparent btn-underlined text-muted">
                                    <i class="demo-psi-google-plus fs-4"></i>
                                </a>
                                <a href="#" class="btn btn-icon bg-transparent btn-underlined text-muted">
                                    <i class="demo-psi-instagram fs-4"></i>
                                </a>
                            </div>
                            <!-- END : User quote  -->

                        </div>
                    </div>

                </div>
            </div>
            <div class="content__boxed">
                <div class="content__wrap">

                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-4">Order Status</h5>
                            <div class="row">

                                <!-- Left toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center mb-4">
                                    <button class="btn btn-primary hstack gap-2 align-self-center">
                                        <i class="demo-psi-add fs-5"></i>
                                        <span class="vr"></span>
                                        Add New
                                    </button>
                                    <button class="btn btn-icon btn-outline-light">
                                        <i class="demo-pli-printer fs-5"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light"><i class="demo-pli-exclamation fs-5"></i></button>
                                        <button class="btn btn-icon btn-outline-light"><i class="demo-pli-recycling fs-5"></i></button>
                                    </div>
                                </div>
                                <!-- END : Left toolbar -->

                                <!-- Right Toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search..." class="form-control" autocomplete="off">
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light"><i class="demo-pli-download-from-cloud fs-5"></i></button>
                                        <div class="btn-group dropdown">
                                            <button class="btn btn-icon btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END : Right Toolbar -->

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>User</th>
                                            <th>Order date</th>
                                            <th>Amount</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Tracking Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53431</a></td>
                                            <td>Steve N. Horton</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 22, 2021</span></td>
                                            <td>$45.00</td>
                                            <td class="text-center fs-5">
                                                <div class="d-block badge bg-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53432</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 24, 2021</span></td>
                                            <td>$245.30</td>
                                            <td class="text-center fs-5">
                                                <div class="d-block badge bg-info">Shipped</div>
                                            </td>
                                            <td class="text-center">CGX0089734531</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53433</a></td>
                                            <td>Lucy Doe</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 24, 2021</span></td>
                                            <td>$38.00</td>
                                            <td class="text-center fs-5">
                                                <div class="d-block badge bg-info">Shipped</div>
                                            </td>
                                            <td class="text-center">CGX0089934571</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53434</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 15, 2021</span></td>
                                            <td>$77.99</td>
                                            <td class="text-center fs-5">
                                                <div class="d-block badge bg-info">Shipped</div>
                                            </td>
                                            <td class="text-center">CGX0089734574</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link"> Order #53435</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 12, 2021</span></td>
                                            <td>$18.00</td>
                                            <td class="text-center fs-5">
                                                <div class="d-block badge bg-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link">Order #53437</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 17, 2021</span></td>
                                            <td>$658.00</td>
                                            <td class="text-center fs-5">
                                                <div class="d-block badge bg-danger">Refunded</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="btn-link">Order #536584</a></td>
                                            <td>Scott S. Calabrese</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 19, 2021</span></td>
                                            <td>$45.58</td>
                                            <td class="text-center fs-5">
                                                <div class="d-block badge bg-warning">Unpaid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <nav class="text-align-center mt-5" aria-label="Table navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>
            <!-- FOOTER -->
            <footer class="content__boxed mt-auto">
                <div class="content__wrap py-3 py-md-1 border-top d-flex flex-column flex-md-row align-items-md-center">
                    <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2021 <a href="#" class="ms-1 btn-link fw-bold">My Company</a></div>
                    <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto me-5" style="row-gap: 0 !important;">
                        <a class="nav-link px-0" href="#">Policy Privacy</a>
                        <a class="nav-link px-0" href="#">Terms and conditions</a>
                        <a class="nav-link px-0" href="#">Contact Us</a>
                    </nav>
                </div>
            </footer>
            <!-- END - FOOTER -->

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->

        <!-- HEADER -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    </div>