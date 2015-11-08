@extends('layouts.dashboard.main')

@section('title')Confirm Transactions @stop

@section('content')
        <!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block-content">
        <div class="block">
            <div class="block-header">
                <ul class="block-options">
                    <li>
                        <!-- Print Page functionality is initialized in App() -> uiHelperPrint() -->
                        <button type="button" onclick="App.initHelper('print-page');"><i class="si si-printer"></i> Print</button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                    </li>
                </ul>
                <h3 class="block-title">#INV0625</h3>
            </div>
            <div class="block-content block-content-narrow">
                <!-- Invoice Info -->
                <div class="h1 text-center push-30-t push-30 hidden-print">fvjdhfvjdfhjdfvhjdfhjdfh</div>
                <hr class="hidden-print">

                <div class="">
                        <ul class="confirm-ul">
                            <li>
                                <span>defsdcdsd</span>
                                <span>defsdcdsd</span>
                            </li>
                        </ul>
                
                <div class="col-sm-6 col-lg-4" style="margin-top:20px;">
                    <button class="btn btn-minw btn-rounded btn-success" type="button">Confirm</button>
                </div>
                <div class="col-sm-6 col-lg-4" style="margin-top:20px;">
                    <button class="btn btn-minw btn-rounded btn-danger" type="button">Decline</button>
                </div>
                <br><br><br>
                </div>
                <!-- Footer -->
                <hr class="hidden-print">
                <p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>
                <!-- END Footer -->
            </div>
        </div>
    </div>

    <style type="text/css">
        
        .confirm-ul
        {
            list-style: none;
            padding: 0px;
            margin-left: -20px;
        }  
        .confirm-ul li
        {
            margin-bottom: 20px;
        }

        .confirm-ul li span
        {
            padding: 30px;                      
        }



    </style>


    <!-- END My Block -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->
@stop