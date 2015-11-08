@extends('layouts.dashboard.main')

@section('title')DashBoard @stop

@section('content')

        <!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                </li>
            </ul>
            <h3 class="block-title">My Wellet</h3>
        </div>
        
        <div class="block-content">
            <div class="content bg-white border-b">
                <div class="row items-push text-uppercase">

                    <div class="col-xs-6 col-sm-4 col-lg-2">
                        <a class="block block-link-hover2 text-center" href="/transaction/create">
                            <div class="block-content block-content-full bg-modern">
                                <i class="si si-note fa-4x text-white"></i>
                                <div class="font-w600 text-white-op push-15-t">New Transaction</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-3">
                        <div class="font-w700 text-gray-darker animated fadeIn">Total Balance</div>
                        <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
                        <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">300</a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="font-w700 text-gray-darker animated fadeIn">Credit Balance</div>
                        <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
                        <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">100</a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="font-w700 text-gray-darker animated fadeIn">Debit Balance</div>
                        <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
                        <a id ="money" class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">rgjhdfjh</a>
                    </div>
                
                </div>
            </div>
        </div>


    </div>
    <!-- END My Block -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->

@stop