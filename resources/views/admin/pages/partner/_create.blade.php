<div class="section-body">
    <div class="card">
        <form action="{{route('admin.partner.create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h4>New</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Url:</label>
                    <input type="text" name="url" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="logo" class="form-control" accept=".png, .jpg, .svg" required>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

