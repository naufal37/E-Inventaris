<?php
?>
@if(isset($produk))
    {!! Form::hidden('id',$produk->id) !!}
@endif

    <div class="form-group">
            {!! Form::label('nama_produk','Nama Produk',['class'=>'custom-control-label']) !!}
        @if ($errors->has('nama_produk'))
            {!! Form::text('nama_produk',null,['class'=>'form-control is-invalid']) !!}
        @else
            {!! Form::text('nama_produk',null,['class'=>'form-control']) !!}
        @endif
            @if($errors->has('nama_produk'))
            <span class="help-block">{{$errors->first('nama_produk')}}</span>
            @endif
        </div>

        <div class="form-group">

            {!! Form::label('harga_produk','Harga Produk',['class'=>'custom-control-label']) !!}
            @if ($errors->has('harga_produk'))
                {!! Form::text('harga_produk',null,['class'=>'form-control is-invalid']) !!}
            @else
                {!! Form::text('harga_produk',null,['class'=>'form-control']) !!}
            @endif

            @if ($errors->has('harga_produk'))
                <span class="help-block">{{$errors->first('harga_produk')}}</span>
            @endif
        </div>

        <div class="form-group">

            {!! Form::label('deskripsi_produk','Deskripsi Produk',['class'=>'custom-control-label']) !!}
            @if ($errors->has('deskripsi_produk'))
                {!! Form::text('deskripsi_produk',null,['class'=>'form-control is-invalid']) !!}
            @else
                {!! Form::text('deskripsi_produk',null,['class'=>'form-control']) !!}
            @endif

            @if ($errors->has('deskripsi_produk'))
                <span class="help-block">{{$errors->first('deskripsi_produk')}}</span>
            @endif
        </div>

        <div class="form-group">

            {!! Form::label('jenis_produk','Jenis Produk',['class'=>'custom-control-label']) !!}
            <div class="radio">
                <label>{!! Form::radio('jenis_produk','Hewani') !!}Hewani</label>
            </div>

            <div class="radio">
                <label>{!! Form::radio('jenis_produk','Nabati') !!}Nabati</label>
            </div>
            @if ($errors->has('jenis_produk'))
                <span class="help-block">{{$errors->first('jenis_produk')}}</span>
            @endif

        </div>

        <div class="form-group">
            @if ($errors->has('berlaku_sampai'))
                {!! Form::date('berlaku_sampai', !empty($produk) ? $produk->berlaku_sampai->format('Y-m-d'): null, ['class' => 'form-control is-invalid', 'id' => 'berlaku_sampai']) !!}
            @else
            {!! Form::date('berlaku_sampai', !empty($produk) ? $produk->berlaku_sampai->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'berlaku_sampai']) !!}
            @endif
            @if ($errors->has('berlaku_sampai'))
                <span class="help-block">{{$errors->first('berlaku_sampai')}}</span>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('bonus','Bonus',['class'=>'custom-control-label']) !!}
            @if ($errors->has('bonus'))
                {!! Form::text('bonus',null,['class'=>'form-control is-invalid']) !!}
            @else
                {!! Form::text('bonus',null,['class'=>'form-control']) !!}
            @endif

            @if ($errors->has('bonus'))
                <span class="help-block">{{$errors->first('bonus')}}</span>
            @endif
        </div>


        <div class="form-group">
            {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
        </div>