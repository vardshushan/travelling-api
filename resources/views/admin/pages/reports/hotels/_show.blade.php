<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                        <form action="{{route('admin.reports.hotels')}}" method="get" enctype="multipart/form-data">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="date" class="form-control" name="start" value={{$start}}>
                                <div class="input-group-append">
                                    <span class="input-group-text bg-info b-0 text-white">TO</span>
                                </div>
                                <input type="date" class="form-control" name="end" value={{$end}}>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </form>
                        <div class="datatable-container">
                            <table class="table datatable datatable-table">
                                <thead>

                                <tr>
                                    <th data-sortable="true" aria-sort="ascending" class="datatable-ascending"
                                        style="width: 20%;">
                                        <a href="#" class="datatable-sorter">Address</a>
                                    </th>
                                    <th data-sortable="true" aria-sort="ascending" class="datatable-ascending"
                                        style="width: 20%;">
                                        <a href="#" class="datatable-sorter">Name</a>
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
                                                         display: block;">{{$report->address}}</span></td>
                                        <td><span style="max-width: 400px;
                                                         white-space: nowrap;
                                                         overflow: hidden;
                                                         text-overflow: ellipsis;
                                                         display: block;">{{$report->name}}</span></td>
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
