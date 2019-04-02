<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="{{url('/')}}">E-Inventaris</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                @if (!empty($halaman) && $halaman=='barang')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('barang')}}"> Barang <span class="sr-only"></span></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('barang')}}"> Barang <span class="sr-only"></span></a>
                    </li>
                @endif

                @if (!empty($halaman) && $halaman=='ruangan')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('ruangan')}}">Ruangan</a>
                    </li>
                @else
                    <li class="nav-item">
                         <a class="nav-link" href="{{url('ruangan')}}">Ruangan</a>
                    </li>
                @endif

                @if (!empty($halaman) && $halaman=='jenis')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('jenis')}}">Jenis</a>
                    </li>
                @else
                    <li class="nav-item">
                         <a class="nav-link" href="{{url('jenis')}}">Jenis</a>
                    </li>
                @endif

                @if (!empty($halaman) && $halaman=='satuan')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('satuan')}}">Satuan</a>
                    </li>
                @else
                    <li class="nav-item">
                         <a class="nav-link" href="{{url('satuan')}}">Satuan</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>