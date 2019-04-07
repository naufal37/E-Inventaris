@if(\Illuminate\Support\Facades\Session::has('flash_message'))

    @if(\Illuminate\Support\Facades\Session::has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{Session::get('flash_message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(\Illuminate\Support\Facades\Session::has('hapus'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong> {{Session::get('flash_message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @else
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{Session::get('flash_message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endif
