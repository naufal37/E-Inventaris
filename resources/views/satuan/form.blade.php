@if(isset($satuan))
    <input type="hidden" name="id" value="{{$satuan->id}}">
@endif
<div class="form-group">
    <label>Satuan Barang</label>
    @if($errors->any())
        @if($errors->has('satuan'))
            <input type="text" class="form-control is-invalid" name="satuan" id="satuan"
                   value="{{!empty($satuan)?$satuan->satuan:null}}" required="">
            <div class="invalid-feedback">
                {{$errors->first('satuan')}}
            </div>
        @else
            <input type="text" class="form-control is-valid" name="satuan" id="satuan"
                   value="{{!empty($satuan)?$satuan->satuan:null}}" required="">
            <div class="valid-feedback">
            </div>
        @endif
    @else
        <input type="text" class="form-control" value="{{!empty($satuan)?$satuan->satuan:null}}" required=""
               name="satuan" id="satuan">
    @endif
</div>


<div class="form-group">
    <button type="submit" class="btn btn-icon icon-left btn-success"><i class="fas fa-check"></i>{{$button}}</button>
</div>