@extends('layouts.master')

@section('content')

<!-- =====TOP BIKER ===== -->
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h5><i class="fa fa-trophy"></i> Top Biker</h5>
        </div>

        <div class="card-body">
            <!-- Top 1-3 -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="top-user text-center">
                        🥇 <strong>Nguyễn Văn A</strong><br>120 rides
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-user text-center">
                        🥈 <strong>Trần Thị B</strong><br>110 rides
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-user text-center">
                        🥉 <strong>Lê Văn C</strong><br>100 rides
                    </div>
                </div>
            </div>

            <!-- Top còn lại -->
            <div class="row">
                <div class="col-12">                    
                    <div  class="card shadow-sm">
                        <div class="card-header">
                            <h5>List Bikers</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>User 01 - 10 rides</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== LET'S BIKEGO ===== -->
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5><i class="fa fa-bicycle"></i> Let's BikeGo</h5>
        </div>

        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="stat-box">
                        <i class="fa fa-bicycle"></i>
                        <h3>100</h3>
                        <p>Xe đang cho thuê</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="stat-box">
                        <i class="fa fa-map"></i>
                        <h3>25</h3>
                        <p>Trạm hoạt động</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =====TOP STATIONS ===== -->
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-warning">
            <h5><i class="fa fa-map-marker-alt"></i> Top Stations</h5>
        </div>

        <div class="card-body">
            <div class="container mt-3">
                <div class="banner">
                    <button class="nav-btn nav-left" onclick="moveSlide(-1)">❮</button>
                    <button class="nav-btn nav-right" onclick="moveSlide(1)">❯</button>

                    <div class="slider" id="slider">
                        <!-- Đã thêm hàm asset() cho các ảnh tĩnh -->
                        <div class="slide"><img src="{{ asset('images/station_1.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('images/station_2.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('images/station_3.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('images/station_4.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('images/station_5.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('images/station_6.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('images/station_7.jpg') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection