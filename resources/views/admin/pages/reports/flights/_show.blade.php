{{--<div class="card">--}}
{{--    <div class="card-header">--}}
{{--        <h4>Description</h4>--}}
{{--    </div>--}}
{{--    <div class="card-body">--}}
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col"> From - To</th>--}}
{{--                <th scope="col">Booking count</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @forelse($reports as $report)--}}
{{--                <tr>--}}
{{--                    <td><span style="width: 500px;--}}
{{--                                     white-space: nowrap;--}}
{{--                                     overflow: hidden;--}}
{{--                                     text-overflow: ellipsis;--}}
{{--                                     display: block;">{{$report->from_to}}</span></td>--}}
{{--                    <td>{{$report->count}}</td>--}}
{{--                </tr>--}}
{{--            @empty--}}
{{--                <tr>--}}
{{--                    <td colspan="5" class="text-center">Empty</td>--}}
{{--                </tr>--}}
{{--            @endforelse--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}


<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                        <div class="datatable-container">
                            <table class="table datatable datatable-table">
                                <thead>
                                <tr>
                                    <th data-sortable="true" aria-sort="ascending" class="datatable-ascending"
                                        style="width: 20%;">
                                        <a href="#" class="datatable-sorter">From - To</a>
                                    </th>
                                    <th data-sortable="true" style="width: 15%;">
                                        <a href="#" class="datatable-sorter">Booking Count</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($reports as $report)
                                    <tr>
                                        <td><span style="max-width: 400px;
                                                         white-space: nowrap;
                                                         overflow: hidden;
                                                         text-overflow: ellipsis;
                                                         display: block;">{{$report->from_to}}</span>
                                        </td>
                                        <td>{{$report->count}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Empty</td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
