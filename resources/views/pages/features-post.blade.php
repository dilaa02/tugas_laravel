@extends('layouts.app')

@section('title', 'Stock')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Stock</h1>
                <div class="section-header-button">
                    <a href="{{ url('features-post-create') }}"
                        class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Stock</a></div>
                    <div class="breadcrumb-item">All Stock</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">---</h2>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Stock</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th class="pt-2 text-center">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox"
                                                        data-checkboxes="mygroup"
                                                        data-checkbox-role="dad"
                                                        class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox"
                                                        data-checkboxes="mygroup"
                                                        class="custom-control-input"
                                                        id="checkbox-2">
                                                    <label for="checkbox-2"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                Laravel 5 Tutorial: Introduction
                                            </td>
                                            <td>
                                                <a href="#">Web Developer</a>,
                                                <a href="#">Tutorial</a>
                                            </td>
                                            <td>$240</td>
                                            <td>2018-01-20</td>
                                            <td>
                                                <a href="{{ url('layout-default-layou') }}" class="btn btn-primary m-1">View</a>
                                                <a href="{{ url('forms-editor') }}" class="btn btn-warning m-1">Edit</a>
                                                <a href="#" class="btn btn-danger m-1">Trash</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link"
                                                    href="#"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#"
                                                    aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
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
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
