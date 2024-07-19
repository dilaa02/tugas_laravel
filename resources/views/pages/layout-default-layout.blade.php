@extends('layouts.app')

@section('title', $items->title)

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Default Layout</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">View</a></div>
                    <div class="breadcrumb-item">{{ $items->title }}</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Des</h2>
                <p class="section-lead">This page is just an example for you to create your own page.</p>
                    <div class="card">
                            <div class="card-header">
                                <h4>{{ $items->title }}</h4>
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <th>Category</th>
                                        <th>:</th>
                                        <td>{{ $items->category }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <th>:</th>
                                        <td>{{ $items->price }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date Added</th>
                                        <th>:</th>
                                        <td>{{ $items->date }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <th>:</th>
                                        <td>{{ $items->description }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="card-footer bg-whitesmoke">
                                <a href="{{ url('features-post') }}" class="btn btn-primary px-3">Back</a>
                            </div>
                    </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
