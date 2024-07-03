@extends('layouts.app')

@section('title', 'Ecommerce Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/flag-icon-css/css/flag-icon.min.css') }}">
@endpush

@section('main')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title">Order Statistics -
                                <div class="dropdown d-inline">
                                    <a class="font-weight-600 dropdown-toggle"
                                        data-toggle="dropdown"
                                        href="#"
                                        id="orders-month">August</a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                        <li class="dropdown-title">Select Month</li>
                                        <li><a href="#"
                                                class="dropdown-item">January</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">February</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">March</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">April</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">May</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">June</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">July</a></li>
                                        <li><a href="#"
                                                class="dropdown-item active">August</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">September</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">October</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">November</a></li>
                                        <li><a href="#"
                                                class="dropdown-item">December</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-stats-items">
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">24</div>
                                    <div class="card-stats-item-label">Pending</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">12</div>
                                    <div class="card-stats-item-label">Shipping</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">23</div>
                                    <div class="card-stats-item-label">Completed</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-icon shadow-success bg-success">
                            <i class="fas fa-archive"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Orders</h4>
                            </div>
                            <div class="card-body">
                                59
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                            <canvas id="balance-chart"
                                height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-success bg-success">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Balance</h4>
                            </div>
                            <div class="card-body">
                                $187,13
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-chart">
                            <canvas id="sales-chart"
                                height="80"></canvas>
                        </div>
                        <div class="card-icon shadow-success bg-success">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Sales</h4>
                            </div>
                            <div class="card-body">
                                4,732
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Budget vs Sales</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart"
                                height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card gradient-bottom">
                        <div class="card-header">
                            <h4>Top 5 Products</h4>
                            <div class="card-header-action dropdown">
                                <a href="#"
                                    data-toggle="dropdown"
                                    class="btn btn-warning dropdown-toggle">Month</a>
                                <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <li class="dropdown-title">Select Period</li>
                                    <li><a href="#"
                                            class="dropdown-item">Today</a></li>
                                    <li><a href="#"
                                            class="dropdown-item">Week</a></li>
                                    <li><a href="#"
                                            class="dropdown-item active">Month</a></li>
                                    <li><a href="#"
                                            class="dropdown-item">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body"
                            id="top-5-scroll">
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <img class="mr-3 rounded"
                                        width="55"
                                        src="{{ asset('img/products/product-3-50.png') }}"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                        </div>
                                        <div class="media-title">oPhone S9 Limited</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-success"
                                                    data-width="64%"></div>
                                                <div class="budget-price-label">$68,714</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-warning"
                                                    data-width="43%"></div>
                                                <div class="budget-price-label">$38,700</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded"
                                        width="55"
                                        src="{{ asset('img/products/product-4-50.png') }}"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">67 Sales</div>
                                        </div>
                                        <div class="media-title">iBook Pro 2018</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-success"
                                                    data-width="84%"></div>
                                                <div class="budget-price-label">$107,133</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-warning"
                                                    data-width="60%"></div>
                                                <div class="budget-price-label">$91,455</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded"
                                        width="55"
                                        src="{{ asset('img/products/product-1-50.png') }}"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">63 Sales</div>
                                        </div>
                                        <div class="media-title">Headphone Blitz</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-success"
                                                    data-width="34%"></div>
                                                <div class="budget-price-label">$3,717</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-warning"
                                                    data-width="28%"></div>
                                                <div class="budget-price-label">$2,835</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded"
                                        width="55"
                                        src="{{ asset('img/products/product-3-50.png') }}"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">28 Sales</div>
                                        </div>
                                        <div class="media-title">oPhone X Lite</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-success"
                                                    data-width="45%"></div>
                                                <div class="budget-price-label">$13,972</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-warning"
                                                    data-width="30%"></div>
                                                <div class="budget-price-label">$9,660</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded"
                                        width="55"
                                        src="{{ asset('img/products/product-5-50.png') }}"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">19 Sales</div>
                                        </div>
                                        <div class="media-title">Old Camera</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-success"
                                                    data-width="35%"></div>
                                                <div class="budget-price-label">$7,391</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-warning"
                                                    data-width="28%"></div>
                                                <div class="budget-price-label">$5,472</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer d-flex justify-content-center pt-2">
                            <div class="budget-price justify-content-center">
                                <div class="budget-price-square bg-success"
                                    data-width="20"></div>
                                <div class="budget-price-label">Selling Price</div>
                            </div>
                            <div class="budget-price justify-content-center">
                                <div class="budget-price-square bg-warning"
                                    data-width="20"></div>
                                <div class="budget-price-label">Budget Price</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Best Products</h4>
                        </div>
                        <div class="card-body my-3">
                            <div class="owl-carousel owl-theme"
                                id="products-carousel">
                                <div>
                                    <div class="product-item pb-3">
                                        <div class="product-image">
                                            <img alt="image"
                                                src="{{ asset('img/products/product-4-50.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">iBook Pro 2018</div>
                                            <div class="product-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="text-muted text-small">67 Sales</div>
                                            <div class="product-cta">
                                                <a href="#"
                                                    class="btn btn-success">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="product-image">
                                            <img alt="image"
                                                src="{{ asset('img/products/product-3-50.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">oPhone S9 Limited</div>
                                            <div class="product-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <div class="text-muted text-small">86 Sales</div>
                                            <div class="product-cta">
                                                <a href="#"
                                                    class="btn btn-success">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="product-image">
                                            <img alt="image"
                                                src="{{ asset('img/products/product-1-50.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">Headphone Blitz</div>
                                            <div class="product-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="text-muted text-small">63 Sales</div>
                                            <div class="product-cta">
                                                <a href="#"
                                                    class="btn btn-success">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center pt-3">
                            <div class="budget-price justify-content-center">
                                <div class="budget-price-square bg-warning" data-width="1000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.js') }}"></script>
    <script src="{{ asset('library/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index.js') }}"></script>
@endpush
