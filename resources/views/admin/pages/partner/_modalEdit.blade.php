<div class="modal fade" id="editModal{{$partner->id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{route('admin.partner.update', ['id' => $partner->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title">Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" value="{{$partner->name}}" required>
                        </div>
                        <div class="form-group">
                            <label>Url:</label>
                            <input type="text" name="url" class="form-control" value="{{$partner->url}}" required>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" name="email" class="form-control" value="{{$partner->email}}" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="logo" class="form-control" accept=".png, .jpg, .svg">
                            <input type="hidden" name="image_url" class="form-control" value="{{ $partner->logo }}">
                        </div>
                        <div class="form-group text-center">
                            <img class="w200" src="{{ asset("storage/$partner->logo") }}" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
