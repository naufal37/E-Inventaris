@if(isset($barang))
    <input type="hidden" value="{{$barang->id}}" name="id">
@endif

<div class="form-group">
    <label>Nama Barang</label>
    @if($errors->any())
        @if($errors->has('nama_barang'))
            <input type="text" class="form-control is-invalid" name="nama_barang" id="nama_barang"
                   value="{{!empty($barang)?$barang->nama_barang:null}}" required="">
            <div class="invalid-feedback">
                {{$errors->first('nama_barang')}}
            </div>
        @else
            <input type="text" class="form-control is-valid" name="nama_barang" id="nama_barang"
                   value="{{!empty($barang)?$barang->nama_barang:null}}" required="">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="text" class="form-control" value="{{!empty($barang)?$barang->nama_barang:null}}" required=""
               name="nama_barang" id="nama_barang">
    @endif
</div>

<div class="form-group">
    <label class="d-block">Status</label>
    <div class="form-check">
        <input class="form-check-input" value="Tersedia" type="radio" name="kondisi_barang" id="kondisi_barang" checked>
        <label class="form-check-label" for="kondisi_barang">
            Tersedia
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" value="Habis" type="radio" name="kondisi_barang" id="kondisi_barang">
        <label class="form-check-label" for="kondisi_barang">
            Habis
        </label>
    </div>
</div>


<div class="form-group">
    <label>Suplier Barang</label>
    @if($errors->any())
        @if($errors->has('suplier'))
            <input type="text" class="form-control is-invalid" name="suplier" id="suplier"
                   value="{{!empty($barang)?$barang->suplier:null}}" required="">
            <div class="invalid-feedback">
                {{$errors->first('suplier')}}
            </div>
        @else
            <input type="text" class="form-control is-valid" name="suplier" id="suplier"
                   value="{{!empty($barang)?$barang->suplier:null}}" required="">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="text" class="form-control" id="suplier" name="suplier"
               value="{{!empty($barang)?$barang->suplier:null}}" required="">
    @endif
</div>


<div class="form-group">
    <label>Jumlah Barang</label>
    @if($errors->any())
        @if($errors->has('jumlah'))
            <input type="number" class="form-control is-invalid" name="jumlah" id="jumlah"
                   value="{{!empty($barang)?$barang->jumlah:null}}" required="">
            <div class="invalid-feedback">
                {{$errors->first('jumlah')}}
            </div>
        @else
            <input type="number" class="form-control is-valid" name="jumlah" id="jumlah"
                   value="{{!empty($barang)?$barang->jumlah:null}}" required="">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="number" class="form-control" id="jumlah" name="jumlah"
               value="{{!empty($barang)?$barang->jumlah:null}}" required="">
    @endif
</div>


<div class="form-group">
    <label>Kode Barang</label>
    @if($errors->any())
        @if($errors->has('kode_barang'))
            <input type="text" class="form-control is-invalid" name="kode_barang" id="kode_barang"
                   value="{{!empty($barang)?$barang->kode_barang:null}}" required="">
            <div class="invalid-feedback">
                {{$errors->first('kode_barang')}}
            </div>
        @else
            <input type="text" class="form-control is-valid" name="kode_barang" id="kode_barang" value="{{!empty($barang)?$barang->kode_barang:null}}" required="">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="text" class="form-control" id="kode_barang" name="kode_barang"
               value="{{!empty($barang)?$barang->kode_barang:null}}" required="">
    @endif
</div>

<div class="form-group">
    <label>Satuan Barang</label>
    @if($errors->any())
        @if($errors->has('id_satuan'))
            <select name="id_satuan" id="id_satuan" class="form-control selectric is-invalid">
                @foreach($list_satuan as $satuan)
                    @if(!empty($barang))
                        <option {{$barang->id_satuan==$satuan->id ? 'selected':''}} value="{{$satuan->id}}">{{$satuan->satuan}}</option>
                    @else
                        <option value="{{$satuan->id}}">{{$satuan->satuan}}</option>
                    @endif
                @endforeach
            </select>
            <div class="invalid-feedback">
                {{$errors->first('id_satuan')}}
            </div>
        @else
            <select name="id_satuan" id="id_satuan" class="form-control selectric is-valid">
                @foreach($list_satuan as $satuan)
                    @if(!empty($barang))
                        <option {{$barang->id_satuan==$satuan->id ? 'selected':''}} value="{{$satuan->id}}">{{$satuan->satuan}}</option>
                    @else
                        <option value="{{$satuan->id}}">{{$satuan->satuan}}</option>
                    @endif
                @endforeach
            </select>
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <select name="id_satuan" id="id_satuan" class="form-control selectric">
            @foreach($list_satuan as $satuan)
                @if(!empty($barang))
                    <option {{$barang->id_satuan==$satuan->id ? 'selected':''}} value="{{$satuan->id}}">{{$satuan->satuan}}</option>
                @else
                    <option value="{{$satuan->id}}">{{$satuan->satuan}}</option>
                @endif
            @endforeach
        </select>
    @endif
</div>


<div class="form-group">
    <label>Ruangan</label>
    @if($errors->any())
        @if($errors->has('id_ruangan'))
            <select name="id_ruangan" id="id_ruangan" class="form-control selectric is-invalid">
                @foreach($list_ruangan as $ruangan)
                    @if(!empty($barang))
                        <option {{$barang->id_ruangan==$ruangan->id?'selected':''}} value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                    @else
                        <option value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                    @endif
                @endforeach
            </select>
            <div class="invalid-feedback">
                {{$errors->first('id_ruangan')}}
            </div>
        @else
            <select name="id_ruangan" id="id_ruangan" class="form-control selectric is-valid">
                @foreach($list_ruangan as $ruangan)
                    @if(!empty($barang))
                        <option {{$barang->id_ruangan==$ruangan->id?'selected':''}} value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                    @else
                        <option value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                    @endif
                @endforeach
            </select>
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <select name="id_ruangan" id="id_ruangan" class="form-control selectric">
            @foreach($list_ruangan as $ruangan)
                @if(!empty($barang))
                    <option {{$barang->id_ruangan==$ruangan->id?'selected':''}} value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                @else
                    <option value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                @endif
            @endforeach
        </select>
    @endif
</div>

<div class="form-group">
    <label>Jenis</label>
    @if($errors->any())
        @if($errors->has('id_jenis'))
            <select name="id_jenis" id="id_jenis" class="form-control selectric is-invalid">
                @foreach($list_jenis as $jenis)
                    @if(!empty($barang))
                        <option {{$barang->id_jenis==$jenis->id?'selected':''}} value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                    @else
                        <option>" value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                    @endif
                @endforeach
            </select>
            <div class="invalid-feedback">
                {{$errors->first('id_jenis')}}
            </div>
        @else
            <select name="id_jenis" id="id_jenis" class="form-control selectric is-valid">
                @foreach($list_jenis as $jenis)
                    @if(!empty($barang))
                        <option {{$barang->id_jenis==$jenis->id?'selected':''}} value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                    @else
                        <option>" value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                    @endif
                @endforeach
            </select>
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <select name="id_jenis" id="id_jenis" class="form-control selectric">
            @foreach($list_jenis as $jenis)
                @if(!empty($barang))
                    <option {{$barang->id_jenis==$jenis->id?'selected':''}} value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                @else
                    <option value="{{$jenis->id}}">{{$jenis->jenis_barang}}</option>
                @endif
            @endforeach
        </select>
    @endif
</div>


<div class="form-group">
    <label>Tanggal Masuk </label>
    @if ($errors->any())
        @if($errors->has('tanggal_masuk'))
            <input type="text" name="tanggal_masuk" id="tanggal_masuk"
                   value="{{!empty($barang)?$barang->tanggal_masuk->format('Y-m-d'):null}}"
                   class="form-control datepicker is-invalid">
            <div class="invalid-feedback">
                {{$errors->first('tanggal_masuk')}}
            </div>
        @else
            <input type="text" name="tanggal_masuk" id="tanggal_masuk"
                   value="{{!empty($barang)?$barang->tanggal_masuk->format('Y-m-d'):null}}"
                   class="form-control datepicker is-valid">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input name="tanggal_masuk" value="{{!empty($barang)?$barang->tanggal_masuk:null}}" id="tanggal_masuk"
               type="text" class="form-control datepicker">
    @endif
</div>


<div class="form-group">
    <label>Keterangan</label>
    <textarea name="keterangan" id="keterangan"
              class="form-control">{{!empty($barang)?$barang->keterangan:null}}</textarea>
</div>

<button type="submit" class="btn btn-icon icon-left btn-success"><i class="fas fa-check"></i>{{$button}}</button>