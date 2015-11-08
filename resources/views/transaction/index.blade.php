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
                <th class="text-center" style="width: 50px;">#</th>
                <th>Name</th>
                <th class="hidden-xs" style="width: 15%;">Access</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>Jack Greene</td>
                <td class="hidden-xs">
                    <span class="label label-primary">Personal</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td>Tiffany Kim</td>
                <td class="hidden-xs">
                    <span class="label label-success">VIP</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td>Julia Cole</td>
                <td class="hidden-xs">
                    <span class="label label-primary">Personal</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td>Donald Barnes</td>
                <td class="hidden-xs">
                    <span class="label label-warning">Trial</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td>Denise Watson</td>
                <td class="hidden-xs">
                    <span class="label label-info">Business</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td>George Stone</td>
                <td class="hidden-xs">
                    <span class="label label-warning">Trial</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">7</td>
                <td>Linda Moore</td>
                <td class="hidden-xs">
                    <span class="label label-danger">Disabled</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">8</td>
                <td>Ethan Howard</td>
                <td class="hidden-xs">
                    <span class="label label-success">VIP</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="text-center">9</td>
                <td>Bruce Edwards</td>
                <td class="hidden-xs">
                    <span class="label label-warning">Trial</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- END My Block -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->
@stop