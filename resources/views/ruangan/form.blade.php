@if(isset($ruangan))
    <input type="hidden" value="{{$ruangan->id}}" name="id">
@endif

<div class="form-group">
    <label>Nama Ruangan</label>
    @if($errors->any())
        @if($errors->has('nama_ruangan'))
            <input type="text" class="form-control is-invalid" name="nama_ruangan" id="nama_ruangan" value="{{!empty($ruangan)?$ruangan->nama_ruangan:null}}" required="">
            <div class="invalid-feedback">
                {{$errors->first('nama_ruangan')}}
            </div>
        @else
            <input type="text" class="form-control is-valid" name="nama_ruangan" id="nama_ruangan"
                   value="{{!empty($ruangan)?$ruangan->nama_ruangan:null}}">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="text" class="form-control" value="{{!empty($ruangan)?$ruangan->nama_ruangan:null}}"
               name="nama_ruangan" id="nama_ruangan">
    @endif
</div>

<div class="form-group">
    <label>Kode Ruangan</label>
    @if($errors->any())
        @if($errors->has('kode_ruangan'))
            <input type="text" class="form-control is-invalid" name="kode_ruangan" id="kode_ruangan" value="{{!empty($ruangan)?$ruangan->kode_ruangan:null}}">
            <div class="invalid-feedback">
                {{$errors->first('kode_ruangan')}}
            </div>
        @else
            <input type="text" class="form-control is-valid" name="kode_ruangan" id="kode_ruangan"
                   value="{{!empty($ruangan)?$ruangan->kode_ruangan:null}}">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="text" class="form-control" value="{{!empty($ruangan)?$ruangan->kode_ruangan:null}}"
               name="kode_ruangan" id="kode_ruangan">
    @endif
</div>

<div class="form-group">
    <label>Lokasi</label>
    @if($errors->any())
        @if($errors->has('lokasi'))
            <select name="lokasi" id="lokasi" class="form-control selectric is-invalid">
                    @if(!empty($ruangan))
                        <option {{$ruangan->lokasi=="Kampus Belakang" ? 'selected':''}} value="Kampus Belakang">Kampus Belakang</option>
                        <option {{$ruangan->lokasi=="Kampus Depan" ? 'selected':''}} value="Kampus Depan">Kampus Depan</option>
                    @else
                        <option value="Kampus Depan">Kampus Depan</option>
                        <option value="Kampus Belakang">Kampus Belakang</option>
                    @endif
            </select>
            <div class="invalid-feedback">
                {{$errors->first('lokasi')}}
            </div>
        @else
            <select name="lokasi" id="lokasi" class="form-control selectric is-valid">
                @if(!empty($ruangan))
                    <option {{$ruangan->lokasi=="Kampus Belakang" ? 'selected':''}} value="Kampus Belakang">Kampus Belakang</option>
                    <option {{$ruangan->lokasi=="Kampus Depan" ? 'selected':''}} value="Kampus Depan">Kampus Depan</option>
                @else
                    <option value="Kampus Depan">Kampus Depan</option>
                    <option value="Kampus Belakang">Kampus Belakang</option>
                @endif
            </select>
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <select name="lokasi" id="lokasi" class="form-control selectric">
            @if(!empty($ruangan))
                <option {{$ruangan->lokasi=="Kampus Belakang" ? 'selected':''}} value="Kampus Belakang">Kampus Belakang</option>
                <option {{$ruangan->lokasi=="Kampus Depan" ? 'selected':''}} value="Kampus Depan">Kampus Depan</option>
            @else
                <option value="Kampus Depan">Kampus Depan</option>
                <option value="Kampus Belakang">Kampus Belakang</option>
            @endif
        </select>
    @endif
</div>

<div class="form-group">
    <label>Petugas Ruangan</label>
    @if($errors->any())
        @if($errors->has('petugas_ruangan'))
            <input type="text" class="form-control is-invalid" name="petugas_ruangan" id="petugas_ruangan" value="{{!empty($ruangan)?$ruangan->petugas_ruangan:null}}">
            <div class="invalid-feedback">
                {{$errors->first('petugas_ruangan')}}
            </div>
        @else
            <input type="text" class="form-control is-valid" name="petugas_ruangan" id="petugas_ruangan"
                   value="{{!empty($ruangan)?$ruangan->petugas_ruangan:null}}">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="text" class="form-control" value="{{!empty($ruangan)?$ruangan->petugas_ruangan:null}}"
               name="petugas_ruangan" id="petugas_ruangan">
    @endif
</div>


<div class="form-group">
    <button type="submit" class="btn btn-icon icon-left btn-success"><i class="fas fa-check"></i>{{$button}}</button>
</div>