<div class="modal fade" id="editModal{{$content->id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{route('admin.content.update', ['id' => $content->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h5 class="modal-title">Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Type:</label>
                            <select class="form-select" name="type" aria-label="Default select example">
                                <option value="help_center" @if($content->type === 'help_center') selected @endif>Help Center</option>
                                <option value="about_us" @if($content->type === 'about_us') selected @endif>About us</option>
                                <option value="terms" @if($content->type === 'terms') selected @endif>Terms of Use</option>
                                <option value="privacy_policy" @if($content->type === 'privacy_policy') selected @endif>Privacy and Policy Statement</option>
                                <option value="how_travelling_works" @if($content->type === 'how_travelling_works') selected @endif>How traveling works?</option>
                                <option value="contact_us" @if($content->type === 'contact_us') selected @endif>Contact us</option>
                                <option value="security"  @if($content->type === 'security') selected @endif>Security</option>
                                <option value="user_profile" @if($content->type === 'user_profile') selected @endif>Profile of the user</option>
                                <option value="social_media" @if($content->type === 'social_media') selected @endif>Social Media Accounts ( LinkedIn - Twitter )</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{$content->title}}" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" accept=".png, .jpg, .svg">
                            <input type="hidden" name="image_url" class="form-control" value="{{ $content->image }}">
                        </div>
                        <div class="form-group text-center">
                            <img class="w200" src="{{ asset("storage/$content->image") }}" alt="logo">
                        </div>
                        <div class="form-group mb-0">
                            <label>Content</label>
                            <textarea rows="4" cols="50" class="tinymce-editor" name="content" required>{{$content->content}}</textarea>
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
