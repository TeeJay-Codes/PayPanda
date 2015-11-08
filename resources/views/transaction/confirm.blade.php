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
                <div class="h1 text-center push-30-t push-30 hidden-print">Payment Request from {{ $transaction->initiator_name }}</div>
                <hr class="hidden-print">

                <div class="">
                Payment From: {{ $transaction->initiator_name }}
                        <br>
                Amount: {{ $transaction->amount }}
                        <br>
                Details: {{ $transaction->details }}
                        <br>
                Reference: {{ $transaction->ref }}
                        <br>
                Status: {{ $transaction->status }}
                        <br>
                <div class="col-sm-6 col-lg-4">
                    <button class="btn btn-minw btn-rounded btn-success" type="button">Confirm</button>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <button class="btn btn-minw btn-rounded btn-danger" type="button">Decline</button>
                </div>
                </div>

                <!-- Footer -->
                <hr class="hidden-print">
                <p class="text-muted text-center"><small>Thank you very much for doing business with us. We look forward to working with you again!</small></p>
                <!-- END Footer -->
            </div>
        </div>
    </div>
    <!-- END My Block -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->
@stop