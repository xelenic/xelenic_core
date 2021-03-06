@include('frontend.user.dashboard_components.header')

<!-- Top Navbar -->
@include('frontend.user.dashboard_components.top_navbar')
@include('frontend.user.dashboard_components.search_box')

<!-- /Top Navbar -->

<!-- Vertical Nav -->
@include('frontend.user.dashboard_components.sidebar')

<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->

@include('frontend.user.dashboard_components.settings_panel')
@include('frontend.user.service_pages.APIBuilder.dialogs.select_api_type_dialog')

<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item "><a href="{{route('frontend.user.my_service.index')}}">My Service</a></li>
            <li class="breadcrumb-item"><a href="{{route('frontend.user.my_service.open_service',[$service_details->service_id,$service_details->token])}}">{{$service_details->service_name}}</a></li>
            <li class="breadcrumb-item active"><a href="{{route('frontend.user.my_service.open_service',[$service_details->service_id,$service_details->token])}}">Settings Up ({{$get_app_details->app_name}})</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->

    <div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Select API Type</h4> <br>
                                <p style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et tortor lobortis,
                                    aliquam justo eu, egestas diam. Suspendisse dolor ante, efficitur ut tincidunt sed,
                                    ullamcorper nec est. Nullam non efficitur libero. Suspendisse orci ipsum, tempus ut nibh sed,
                                    suscipit convallis nibh. Vivamus scelerisque er</p>
                                <br><br>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card"  data-toggle="modal" data-target="#plug_api">
                                    <br>
                                    <div class="" style="text-align: center">
                                        <div class="" style="background-image:url('{{url('/')}}/images/icon/plug.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                                        <h4 style="color: #888888;font-size: 20px;">Plug API</h4><br>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" data-toggle="modal" data-target="#game_service">
                                    <br>
                                    <div class="" style="text-align: center">
                                        <div class="" style="background-image:url('{{url('/')}}/images/icon/game.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                                        <h4 style="color: #888888;font-size: 20px;">Game Service</h4><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card" data-toggle="modal" data-target="#iot_service">
                                    <br>
                                    <div class="" style="text-align: center">
                                        <div class="" style="background-image:url('{{url('/')}}/images/icon/iot.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                                        <h4 style="color: #888888;font-size: 20px;">IOT Service</h4><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <br>
                                    <div class="" style="text-align: center">
                                        <div class="" style="background-image:url('{{url('/')}}/images/icon/app.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                                        <h4 style="color: #888888;font-size: 20px;">Mobile App Service</h4><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@include('frontend.user.dashboard_components.footer')