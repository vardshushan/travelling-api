<div class="section-body">
    <div class="card">
        <form action="{{route('admin.blog.create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h4>New</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" accept=".png, .jpg, .svg" required>
                </div>
                <div class="form-group mb-0">
                    <label>Description</label>
                    <textarea class="tinymce-editor" name="description"></textarea>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

