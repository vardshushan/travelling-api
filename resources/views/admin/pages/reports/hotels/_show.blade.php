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
