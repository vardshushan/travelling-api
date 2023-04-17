<div class="card">
    <div class="card-header">
        <h4>Partners</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Url</th>
                <th scope="col">Logo</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($partners as $partner)
                <tr>
                    <th scope="row">{{$partner->id}}</th>
                    <td><span style="max-width: 300px;
                                     white-space: nowrap;
                                     overflow: hidden;
                                     text-overflow: ellipsis;
                                     display: block;">{{$partner->name}} </span></td>
                    <td>{{$partner->email}}</td>
                    <td>{{$partner->url}}</td>
                    <td><img class="w200" src="{{ asset("storage/$partner->logo") }}" alt="logo"></td>
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editModal{{$partner->id}}">
                            Edit
                        </button>
                        <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{$partner->id}}">
                            Delete
                        </button>
                    </td>
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
