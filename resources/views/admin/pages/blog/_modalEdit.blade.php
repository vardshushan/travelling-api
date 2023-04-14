<div class="modal fade" id="editModal{{$blog->id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{route('admin.blog.update', ['id' => $blog->id])}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title">Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{$blog->title}}" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" accept=".png, .jpg, .svg">
                            <input type="hidden" name="image_url" class="form-control" value="{{ $blog->image }}">
                        </div>
                        <div class="form-group text-center">
                            <img class="w200" src="{{ asset("storage/$blog->image") }}" alt="logo">
                        </div>
                        <div class="form-group mb-0">
                            <label>Description</label>
                            <textarea rows="4" cols="50" class="tinymce-editor" name="description"
                                      required>{{$blog->description}}</textarea>
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
