<div class="section-body">
    <div class="card">
        <form action="{{route('admin.content.create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h4>New</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Type:</label>
                    <select class="form-select" name="type" aria-label="Default select example">
                        <option value="help_center" selected>Help Center</option>
                        <option value="about_us">About us</option>
                        <option value="terms">Terms of Use</option>
                        <option value="privacy_policy">Privacy and Policy Statement</option>
                        <option value="how_travelling_works">How traveling works?</option>
                        <option value="contact_us">Contact us</option>
                        <option value="security">Security</option>
                        <option value="user_profile">Profile of the user</option>
                        <option value="social_media">Social Media Accounts ( LinkedIn - Twitter )</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-control" accept=".png, .jpg, .svg" required>
                </div>
                <div class="form-group mb-0">
                    <label>Content:</label>
                    <textarea class="tinymce-editor" name="content"></textarea>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

