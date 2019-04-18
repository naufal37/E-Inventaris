@if(isset($bind))
    {!! Form::hidden('id', $bind->id) !!}
    <div class="form-group">
        {!! Form::label('id_barang','Nama Barang: '. $bind->barang->nama_barang,['class'=>'control-label']) !!}
        {!! Form::hidden('id_barang', $bind->barang->id) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Peminjam','Nama Peminjam',['class'=>'control-label']) !!}
        {!! Form::text('peminjam',Auth::User()->name,['class'=>'form-control','readonly'=>true]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('stok_barang','Sisa Barang Tersisa: '.$bind->barang->jumlah ,['class'=>'control-label']) !!}
        {!! Form::hidden('stok', $bind->barang->jumlah) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status Pesanan',['class'=>'control-label']) !!}
        @if(!(Auth::User()->level == 'siswa'))

            <div class="radio">
                <label>{!! Form::radio('status','belum-acc',true,['readonly'=>true]) !!} Menunggu Konfirmasi </label>
            </div>

            <div class="radio">
                <label>{!! Form::radio('status','acc',false) !!} Telah Di Konfirmasi </label>
            </div>

            <div class="radio">
                <label>{!! Form::radio('status','sebagian',false) !!} Telah Dikembalikan Seberapa</label>
            </div>

            <div class="radio">
                <label>{!! Form::radio('status','kembali',false) !!} Telah Dikembalikan </label>
            </div>

            <div class="form-group">
                {!! Form::label('jumlah','Jumlah Pesanan',['class'=>'control-label']) !!}
                {!! Form::number('jumlah',$bind->jumlah,['class'=>'form-control']) !!}
            </div>
        @else
            {!! Form::text('status','belum-acc',['class'=>'form-control','readonly'=>true]) !!}
        @endif

    </div>
@elseif(isset($bind2))
    {!! Form::hidden('id', $bind2->id) !!}

<div class="form-group">
    {!! Form::label('id_barang','Nama Barang: '. $bind2->nama_barang,['class'=>'control-label']) !!}
    {!! Form::hidden('id_barang', $bind2->id) !!}
</div>

<div class="form-group">
    {!! Form::label('Peminjam','Nama Peminjam',['class'=>'control-label']) !!}
    {!! Form::text('peminjam',Auth::User()->name,['class'=>'form-control','readonly'=>true]) !!}
</div>

<div class="form-group">
    {!! Form::label('stok_barang','Sisa Barang Tersisa: '.$bind2->jumlah ,['class'=>'control-label']) !!}
    {!! Form::hidden('stok', $bind2->jumlah) !!}
</div>

<div class="form-group">
    {!! Form::label('status','Status Pesanan',['class'=>'control-label']) !!}
    @if(!(Auth::User()->level == 'siswa'))

    <div class="radio">
        <label>{!! Form::radio('status','belum-acc',true,['readonly'=>true]) !!} Menunggu Konfirmasi </label>
    </div>

    <div class="radio">
        <label>{!! Form::radio('status','acc',false) !!} Telah Di Konfirmasi </label>
    </div>

        <div class="radio">
        <label>{!! Form::radio('status','sebagian',false) !!} Telah Dikembalikan sebagian </label>
    </div>

    <div class="radio">
        <label>{!! Form::radio('status','kembali',false) !!} Telah Dikembalikan </label>
    </div>
    @else
        {!! Form::text('status','belum-acc',['class'=>'form-control','readonly'=>true]) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('jumlah','Jumlah Pesanan',['class'=>'control-label']) !!}
    {!! Form::number('jumlah',null,['class'=>'form-control']) !!}
</div>

@else
    <div class="form-group">
        {!! Form::label('jumlah','Jumlah Pesanan',['class'=>'control-label']) !!}
        {!! Form::number('jumlah',null,['class'=>'form-control']) !!}
    </div>
    {!! Form::hidden('id_barang', $bind3->barang->id) !!}
    {!! Form::hidden('id', $bind3->id) !!}

@endif

<div class="form-group">
    {!! Form::submit($button,['class'=>'btn btn-primary form-control']) !!}
</div>