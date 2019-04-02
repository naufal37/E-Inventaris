@if(isset($jenis))
    {!! Form::hidden('id', $jenis->id) !!}
@endif

<div class="form-group">
    {!! Form::label('jenis_barang','Jenis Barang',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('jenis_barang'))
            {!! Form::text('jenis_barang',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('jenis_barang')}}</span>
        @else
            {!! Form::text('jenis_barang',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::text('jenis_barang',null,['class'=>'form-control']) !!}
    @endif
<div class="form-group">
    {!! Form::submit($button,['class'=>'btn btn-primary form-control']) !!}
</div>
</div>