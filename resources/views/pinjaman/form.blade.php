@if(isset($ruangan))
    {!! Form::hidden('id', $ruangan->id) !!}
@endif
<div class="form-group">
    {!! Form::label('nama_ruangan','Nama Ruangan',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('nama_ruangan'))
            {!! Form::text('nama_ruangan',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('nama_ruangan')}}</span>
        @else
            {!! Form::text('nama_ruangan',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::text('nama_ruangan',null,['class'=>'form-control']) !!}
    @endif


{{--    @if($errors->any())--}}
{{--        @if($errors->has('nama_ruangan'))--}}
{{--        {!! Form::text('nama_ruangan',null,['class'=>'form-control is-invalid']) !!}--}}
{{--        <span class="help-block">{{$errors->first('nama_ruangan')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::text('nama_ruangan',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::text('nama_ruangan',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
</div>

<div class="form-group">
    {!! Form::label('kode_ruangan','Kode Ruangan',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('kode_ruangan'))
            {!! Form::text('kode_ruangan',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('kode_ruangan')}}</span>
        @else
            {!! Form::text('kode_ruangan',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::text('kode_ruangan',null,['class'=>'form-control']) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('lokasi','Lokasi Ruangan',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('lokasi'))
{{--            {!! Form::text('lokasi',null,['class'=>'form-control is-invalid']) !!}--}}
            {!! Form::select('lokasi',['Kampus Depan'=>'Kampus Depan','Kampus Belakang'=>'Kampus Belakang'],null,['class'=>'form-control is-invalid','id'=>'jenis_barang','placeholder'=>'Pilih Lokasi Ruangan']) !!}
            <span class="help-block">{{$errors->first('lokasi')}}</span>
        @else
{{--            {!! Form::text('lokasi',null,['class'=>'form-control is-valid']) !!}--}}
            {!! Form::select('lokasi',['Kampus Depan'=>'Kampus Depan','Kampus Belakang'=>'Kampus Belakang'],null,['class'=>'form-control is-valid','id'=>'jenis_barang','placeholder'=>'Pilih Lokasi Ruangan']) !!}
        @endif
    @else
{{--        {!! Form::text('lokasi',null,['class'=>'form-control']) !!}--}}
        {!! Form::select('lokasi',['Kampus Depan'=>'Kampus Depan','Kampus Belakang'=>'Kampus Belakang'],null,['class'=>'form-control','id'=>'jenis_barang','placeholder'=>'Pilih Lokasi Ruangan']) !!}

    @endif
</div>

<div class="form-group">
    {!! Form::label('petugas','Petugas Ruangan',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('petugas_ruangan'))
            {!! Form::text('petugas_ruangan',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('petugas_ruangan')}}</span>
        @else
            {!! Form::text('petugas_ruangan',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::text('petugas_ruangan',null,['class'=>'form-control']) !!}
    @endif
</div>



{{--<div class="form-group">--}}
{{--    {!! Form::label('statusbarang','Status Barang',['class'=>'control-label']) !!}--}}
{{--    <div class="radio">--}}
{{--        <label>{!! Form::radio('kondisi_barang','Tersedia',true) !!} Tersedia </label>--}}
{{--    </div>--}}
{{--    <div class="radio">--}}
{{--        <label>{!! Form::radio('kondisi_barang','Rusak') !!} Rusak </label>--}}
{{--    </div>--}}
{{--    <div class="radio">--}}
{{--        <label>{!! Form::radio('kondisi_barang','Hilang') !!} Hilang </label>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    <label for="jumlah" class="control-label">Jumlah Barang</label>--}}
{{--    @if ($errors->any())--}}
{{--        @if($errors->has('jumlah'))--}}
{{--            {!! Form::number('jumlah',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('jumlah')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::number('jumlah',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::number('jumlah',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    <label for="kodebarang" class="control-label">Kode Barang</label>--}}
{{--    @if($errors->has('kode_barang'))--}}
{{--        {!! Form::text('kode_barang',null,['class'=>'form-control is-invalid']) !!}--}}
{{--        <span class="help-block">{{$errors->first('kode_barang')}}</span>--}}
{{--    @else--}}
{{--        {!! Form::text('kode_barang',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    <label for="satuanbarang" class="control-label">Satuan Barang</label>--}}
{{--    {!! Form::select('satuan', ['kg' => 'KG', 'buah' => 'Buah', 'liter' => 'Liter']); !!}--}}
{{--</div>--}}

{{--tak berisi--}}
{{--<div class="form-group">--}}
{{--    <label for="ruangan" class="control-label">Ruangan</label>--}}
{{--    {!! Form::select('barang', ['GDN' => 'Gudang 1', 'RPL' => 'Kajur RPL', 'TGB' => 'Kajur TGB']); !!}--}}
{{--</div>--}}
{{--tak berisi--}}

{{--<div class="form-group">--}}
{{--    <label for="jenis" class="control-label">Jenis Barang</label>--}}
{{--    {!! Form::select('jenis', ['proyektor' => 'Proyektor', 'laptop' => 'Laptop', 'gelas' => 'Gelas']); !!}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {!! Form::label('tanggal_masuk','Tanggal Masuk',['class'=>'control-label']) !!}--}}
{{--    @if ($errors->any())--}}
{{--        @if($errors->has('tanggal_masuk'))--}}
{{--            {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control is-invalid','id'=>'tanggal_masuk']) !!}--}}
{{--            <span class="help-block">{{$errors->first('tanggal_masuk')}}</span>--}}
{{--    @else--}}
{{--        {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control is-valid','id'=>'tanggal_masuk']) !!}--}}
{{--    @endif--}}

{{--    @else--}}
{{--        {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control','id'=>'tanggal_masuk']) !!}--}}
{{--    @endif--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('keterangan','Keterangan',['class'=>'control-label']) !!}--}}
{{--    {!! Form::text('keterangan',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}

<div class="form-group">
    {!! Form::submit($button,['class'=>'btn btn-primary form-control']) !!}
</div>