@extends('layouts.dashboard.main')

@section('title')Transactions @stop

@section('content')
        <!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block-content">
        <table class="table table-striped table-borderless table-header-bg">
            <thead>
            <tr>
                <th class="text-center" style="width: 100px;">Ref</th>
                <th>Beneficiary Name</th>
                <th class="hidden-xs" style="width: 25%;">Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td class="text-center">{{ $transaction->id }}</td>
                <td><a href="#">{{ $transaction->beneficiary_name }}</a></td>
                <td class="hidden-xs">
                    <span class="label label-primary">{{ $transaction->status }}</span>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- END My Block -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->
@stop