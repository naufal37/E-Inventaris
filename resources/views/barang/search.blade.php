<div id="search">
    <form method="GET" action="{{url('barang/cari')}}" id="form-pencarian">
        <select name="id_ruangan" id="id_ruangan" class="form-control selectric">
            @if(!empty($id_ruangan))
                <option value="">-PILIH RUANGAN-</option>
                @foreach($list_ruangan as $ruangan)
                    @if($id_ruangan==$ruangan->id)
                        <option selected value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                    @else
                        <option value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                    @endif
                @endforeach
            @else
                <option selected value="">-PILIH RUANGAN-</option>
                @foreach($list_ruangan as $ruangan)
                    <option value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                @endforeach
            @endif
        </select>

        <select name="id_jenis" id="id_jenis" class="form-control selectric">
            @if(!empty($id_jenis))
                <option value="">-PILIH JENIS-</option>
                @foreach($list_jenis as $jenis)
                    @if($id_jenis==$jenis->id)
                        <option selected value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                    @else
                        <option value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                    @endif
                @endforeach
            @else
                <option selected value="">-PILIH JENIS-</option>
                @foreach($list_jenis as $jenis)
                    <option value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                @endforeach
            @endif
        </select>

        <div class="col-md-8">
            <div class="input-group">
                @if(!empty($kata_kunci))
                    <input type="text" class="form-control" name="kata_kunci" id="kata_kunci" value="{{$kata_kunci}}">
                @else
                    <input type="text" class="form-control" name="kata_kunci" placeholder="Kata Kunci" id="kata_kunci">
                @endif
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </form>
</div>
