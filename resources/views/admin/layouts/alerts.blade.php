@if(session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif(session('error'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-octagon me-1"></i>
        {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif($errors->any())
    <div class="alert alert-danger">
        <ul style="list-style: none">
            @foreach ($errors->all() as $error)
                <li>
                    <i class="bi bi-exclamation-octagon me-1"></i>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

