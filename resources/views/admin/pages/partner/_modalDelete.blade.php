<div class="modal fade" id="deleteModal{{$partner->id}}" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <form action="{{route('admin.partner.delete', ['id' => $partner->id])}}" method="post">
                @csrf
                @method('delete')
                <div class="modal-header">
                    <h5 class="modal-title">Really ???</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, no. Close</button>
                    <button type="submit" class="btn btn-danger">Yes! Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
