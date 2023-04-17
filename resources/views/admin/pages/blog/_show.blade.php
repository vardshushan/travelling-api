<div class="card">
    <div class="card-header">
        <h4>Blogs</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($blogs as $blog)
                <tr>
                    <th scope="row">{{$blog->id}}</th>
                    <td><span style="width: 500px;
                                     white-space: nowrap;
                                     overflow: hidden;
                                     text-overflow: ellipsis;
                                     display: block;">{{$blog->title}} </span></td>
                    <td><img class="w200" src="{{ asset("storage/$blog->image") }}" alt="logo"></td>
                    <td>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$blog->id}}">
                            Edit
                        </button>
                        <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{$blog->id}}">
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
