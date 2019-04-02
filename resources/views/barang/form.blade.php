@if(isset($barang))
    {!! Form::hidden('id', $barang->id) !!}
@endif
<div class="form-group">
    {!! Form::label('nama_barang','Nama Barang',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('nama_barang'))
        {!! Form::text('nama_barang',null,['class'=>'form-control is-invalid']) !!}
        <span class="help-block">{{$errors->first('nama_barang')}}</span>
        @else
            {!! Form::text('nama_barang',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::text('nama_barang',null,['class'=>'form-control']) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('kondisi_barang','Status Barang',['class'=>'control-label']) !!}
    <div class="radio">
        <label>{!! Form::radio('kondisi_barang','Tersedia',true) !!} Tersedia </label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('kondisi_barang','Rusak') !!} Rusak </label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('kondisi_barang','Hilang') !!} Hilang </label>
    </div>
</div>

<div class="form-group">
    {!! Form::label('suplier','Suplier',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('suplier'))
            {!! Form::text('suplier',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('suplier')}}</span>
        @else
            {!! Form::text('suplier',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::text('suplier',null,['class'=>'form-control']) !!}
    @endif
</div>

<div class="form-group">
    <label for="jumlah" class="control-label">Jumlah Barang</label>
    @if ($errors->any())
        @if($errors->has('jumlah'))
            {!! Form::number('jumlah',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('jumlah')}}</span>
        @else
            {!! Form::number('jumlah',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::number('jumlah',null,['class'=>'form-control']) !!}
    @endif
</div>

<div class="form-group">
    <label for="kodebarang" class="control-label">Kode Barang</label>
    @if($errors->has('kode_barang'))
        {!! Form::text('kode_barang',null,['class'=>'form-control is-invalid']) !!}
        <span class="help-block">{{$errors->first('kode_barang')}}</span>
    @else
        {!! Form::text('kode_barang',null,['class'=>'form-control']) !!}
    @endif
</div>

<div class="form-group">
    <label for="satuan" class="control-label">Satuan Barang</label>
    @if($errors->any())
        @if($errors->has('satuan'))
            {!! Form::select('id_satuan',$list_satuan,null,['class'=>'form-control is-invalid','id'=>'satuan','placeholder'=>'Pilih Satuan']) !!}
        @else
            {!! Form::select('id_satuan',$list_satuan,null,['class'=>'form-control is-valid','id'=>'satuan','placeholder'=>'Pilih Satuan']) !!}
        @endif
    @else
        {!! Form::select('id_satuan',$list_satuan,null,['class'=>'form-control','id'=>'satuan','placeholder'=>'Pilih Satuan']) !!}
    @endif

</div>

<div class="form-group">
        <label for="ruangan" class="control-label">Ruangan</label>
    @if($errors->any())
        @if($errors->has('id_ruangan'))
            {!! Form::select('id_ruangan',$list_ruangan,null,['class'=>'form-control is-invalid','id'=>'ruangan','placeholder'=>'Pilih Ruangan']) !!}
            <span class="help-block">{{$errors->first('kode_ruangan')}}</span>
        @else
            {!! Form::select('id_ruangan',$list_ruangan,null,['class'=>'form-control is-valid','id'=>'ruangan','placeholder'=>'Pilih Ruangan']) !!}
        @endif
    @else
        {!! Form::select('id_ruangan',$list_ruangan,null,['class'=>'form-control','id'=>'ruangan','placeholder'=>'Pilih Ruangan']) !!}
    @endif

</div>


<div class="form-group">
    <label for="jenis" class="control-label">Jenis Barang</label>
    @if ($errors->any())
        @if($errors->has('id_jenis'))
            {!! Form::select('id_jenis',$list_jenis,null,['class'=>'form-control is-invalid','id'=>'jenis_barang','placeholder'=>'Pilih Jenis Barang']) !!}
            <span class="help-block">{{$errors->first('id_jenis')}}</span>
        @else
            {!! Form::select('id_jenis',$list_jenis,null,['class'=>'form-control is-valid','id'=>'jenis_barang','placeholder'=>'Pilih Jenis Barang']) !!}
        @endif
    @else
        {!! Form::select('id_jenis',$list_jenis,null,['class'=>'form-control','id'=>'jenis_barang','placeholder'=>'Pilih Jenis Barang']) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('tanggal_masuk','Tanggal Masuk',['class'=>'control-label']) !!}
    @if ($errors->any())
        @if($errors->has('tanggal_masuk'))
            {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control is-invalid','id'=>'tanggal_masuk']) !!}
            <span class="help-block">{{$errors->first('tanggal_masuk')}}</span>
    @else
        {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control is-valid','id'=>'tanggal_masuk']) !!}
    @endif

    @else
        {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control','id'=>'tanggal_masuk']) !!}
    @endif
</div>
<div class="form-group">
    {!! Form::label('keterangan','Keterangan',['class'=>'control-label']) !!}
    {!! Form::text('keterangan',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($button,['class'=>'btn btn-primary form-control']) !!}
</div>