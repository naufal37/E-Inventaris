@if(isset($jenis))
    <input type="hidden" value="{{$jenis->id}}" name="id">
@endif


<div class="form-group">
    <label>Jenis Barang</label>
    @if($errors->any())
        @if($errors->has('jenis_barang'))
            <input type="text" class="form-control is-invalid" name="jenis_barang" id="jenis_barang"
                   value="{{!empty($jenis)?$jenis->jenis:null}}" required>
            <div class="invalid-feedback">
                {{$errors->first('jenis_barang')}}
            </div>
        @else
            <input type="text" class="form-control is-valid" name="jenis_barang" id="jenis_barang"
                   value="{{!empty($jenis)?$jenis->jenis_barang:null}}" required>
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="text" class="form-control" value="{{!empty($jenis)?$jenis->jenis_barang:null}}" required name="jenis_barang" id="jenis_barang">
    @endif
</div>

<button type="submit" class="btn btn-icon icon-left btn-success"><i class="fas fa-check"></i>{{$button}}</button>