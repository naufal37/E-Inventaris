@if(isset($satuan))
    {!! Form::hidden('id', $satuan->id) !!}
@endif

<div class="form-group">
    {!! Form::label('satuan','Satuan',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('satuan'))
            {!! Form::text('satuan',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('satuan')}}</span>
        @else
            {!! Form::text('satuan',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::text('satuan',null,['class'=>'form-control']) !!}
    @endif
<div class="form-group">
    {!! Form::submit($button,['class'=>'btn btn-primary form-control']) !!}
</div>
</div>