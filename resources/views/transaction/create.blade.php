@extends('layouts.dashboard.main')

@section('title')Create a New Transaction @stop

@section('content')
        <!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block block-bordered">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                </li>
            </ul>
            <h3 class="block-title">Filling in your Escrow Transaction information</h3>
        </div>
        <div class="block-content">
            <form class="form-horizontal push-10-t push-10" method="post" action="{{ route('transaction.store') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="mega-firstname">Beneficiary</label>
                                <input class="form-control input-lg" type="text" id="mega-firstname" name="beneficiary" placeholder="Enter your Beneficiary id" value="{{ old('beneficiary') }}">
                            </div>
                            <div class="col-xs-6">
                                <label for="mega-lastname">Amount</label>
                                <input class="form-control input-lg" type="text" id="mega-lastname" name="amount" placeholder="00.00" value="{{ old('amount') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-firstname">Transaction Ref</label>
                                <input class="form-control input-lg" type="text" id="mega-firstname" name="ref" placeholder="SKU, 0023354353" value="{{ old('ref') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-bio">Details</label>
                                <textarea class="form-control input-lg" id="mega-bio" name="details" rows="18" placeholder="Puchase of a car from Kalu in Abuja" value="{{ old('details') }}"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check push-5-r"></i> Send Transaction Request</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END My Block -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->
@stop