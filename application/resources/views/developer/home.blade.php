@extends('developer.dashboard')

@section('title')

    Home Developer

@stop

@section('nama')

@stop

@section('content')
            <div class="main-content-inner">
                <div class="row">
                    <!-- seo fact area start -->
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-thumb-up"></i> Likes</div>
                                            <h2>2,315</h2>
                                            <?php if(auth()->user()->type == 'admin'){?>
                                            <h1>Welcome back Admin</h1>                   
                                        <?php } ?>
                                        <?php if(auth()->user()->type == 'default'){?>
                                            <h1>Welcome back {{Auth::user()->name}}</h1>                   
                                        <?php } ?>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-share"></i> Share</div>
                                            <h2>3,984</h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Impressions</div>
                                            <canvas id="seolinechart3" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">New Users</div>
                                            <canvas id="seolinechart4" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- seo fact area end -->
                    <!-- Social Campain area start -->
                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="header-title">Social ads Campain</h4>
                                <div id="socialads" style="height: 245px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Social Campain area end -->
                    <!-- Statistics area start -->
                    <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">User Statistics</h4>
                                <div id="user-statistics"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Statistics area end -->
                    <!-- Advertising area start -->
                    <div class="col-lg-4 mt-5">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title">Advertising & Marketing</h4>
                                <canvas id="seolinechart8" height="233"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Advertising area end -->
                    <!-- sales area start -->
                    <div class="col-xl-9 col-ml-8 col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Sales</h4>
                                <div id="salesanalytic"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop