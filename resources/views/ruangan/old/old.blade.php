{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>Nomer</th>--}}
{{--                <th>Nama Ruangan</th>--}}
{{--                <th>Kode Ruangan</th>--}}
{{--                <th>Lokasi Ruangan</th>--}}
{{--                <th>Petugas</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php $i=1;?>--}}
{{--            @foreach($list_ruangan as $ruangan)--}}
{{--                <tr>--}}
{{--                <td>{{$i++}}</td>--}}
{{--                <td>{{$ruangan->nama_ruangan}}</td>--}}
{{--                <td>{{$ruangan->kode_ruangan}}</td>--}}
{{--                <td>{{$ruangan->lokasi}}</td>--}}
{{--                <td>{{$ruangan->petugas_ruangan}}</td>--}}

{{--                <td>--}}
{{--                    @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--                    <div class="box-button">--}}
{{--                        {{link_to('ruangan/'.$ruangan->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                    </div>--}}
{{--                        <div class="box-button">--}}
{{--                        {{link_to('ruangan/'.$ruangan->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}--}}
{{--                    </div>--}}
{{--                    <div class="box-button">--}}
{{--                        {!! Form::open(['method'=>'DELETE','action'=>['RuanganController@destroy',$ruangan->id]]) !!}--}}
{{--                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}--}}
{{--                        {!! Form::close() !!}--}}
{{--                    </div>--}}
{{--                    @else--}}
{{--                        <div class="box-button">--}}
{{--                            {{link_to('ruangan/'.$ruangan->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @else--}}
{{--        <p> Tidak Ada Barang</p>--}}
{{--    @endif--}}
{{--    <div class="table-bottom">--}}
{{--        <div class="pull-left">--}}
{{--            <strong> Jumlah Ruangan : {{$jumlah_ruangan}}</strong>--}}
{{--        </div>--}}
{{--        <div class="paging">--}}
{{--            {{$list_ruangan->links()}}--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--        <div class="bottom-nav">--}}
{{--            <div>--}}
{{--                <a href="{{url('ruangan/create')}}" class="btn btn-primary">Tambah</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    {!! Form::open(['url'=>'ruangan/cari','method'=>'GET','id'=>'form-pencarian'])!!}--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-2">--}}
{{--            @if(!empty($tempat))--}}
{{--                {!! Form::select('lokasi',$nama_lokasi,$tempat,['class'=>'form-control','id'=>'lokasi','placeholder'=>'-LOKASI-']) !!}--}}
{{--            @else--}}
{{--                {!! Form::select('lokasi',$nama_lokasi,null,['class'=>'form-control','id'=>'lokasi','placeholder'=>'-LOKASI-']) !!}--}}
{{--            @endif--}}
{{--        </div>--}}

{{--        <div class="col-md-8">--}}
{{--            <div class="input-group">--}}
{{--                @if(!empty($kata_kunci))--}}
{{--                    {!! Form::text('kata_kunci',$kata_kunci,['class'=>'form-control','placeholder'=>'Masukkan Kata Kunci']) !!}--}}
{{--                @else--}}
{{--                    {!! Form::text('kata_kunci',null,['class'=>'form-control','placeholder'=>'Masukkan Kata Kunci']) !!}--}}
{{--                @endif--}}

{{--                <span class="input-group-btn">--}}
{{--                        {!! Form::button('Cari',['class'=>'btn btn-default','type'=>'submit']) !!}--}}
{{--                    </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    {!! Form::close() !!}--}}



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
{{--</div>--}}{{--<div class="form-group">--}}
{{--    {!! Form::label('nama_ruangan','Nama Ruangan',['class'=>'control-label']) !!}--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('nama_ruangan'))--}}
{{--            {!! Form::text('nama_ruangan',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('nama_ruangan')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::text('nama_ruangan',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::text('nama_ruangan',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {!! Form::label('kode_ruangan','Kode Ruangan',['class'=>'control-label']) !!}--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('kode_ruangan'))--}}
{{--            {!! Form::text('kode_ruangan',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('kode_ruangan')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::text('kode_ruangan',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::text('kode_ruangan',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {!! Form::label('lokasi','Lokasi Ruangan',['class'=>'control-label']) !!}--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('lokasi'))--}}

{{--            {!! Form::select('lokasi',['Kampus Depan'=>'Kampus Depan','Kampus Belakang'=>'Kampus Belakang'],null,['class'=>'form-control is-invalid','id'=>'jenis_barang','placeholder'=>'Pilih Lokasi Ruangan']) !!}--}}
{{--            <span class="help-block">{{$errors->first('lokasi')}}</span>--}}
{{--        @else--}}

{{--            {!! Form::select('lokasi',['Kampus Depan'=>'Kampus Depan','Kampus Belakang'=>'Kampus Belakang'],null,['class'=>'form-control is-valid','id'=>'jenis_barang','placeholder'=>'Pilih Lokasi Ruangan']) !!}--}}
{{--        @endif--}}
{{--    @else--}}

{{--        {!! Form::select('lokasi',['Kampus Depan'=>'Kampus Depan','Kampus Belakang'=>'Kampus Belakang'],null,['class'=>'form-control','id'=>'jenis_barang','placeholder'=>'Pilih Lokasi Ruangan']) !!}--}}

{{--    @endif--}}
{{--</div>--}}


{{--<div class="form-group">--}}
{{--    {!! Form::label('petugas','Petugas Ruangan',['class'=>'control-label']) !!}--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('petugas_ruangan'))--}}
{{--            {!! Form::text('petugas_ruangan',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('petugas_ruangan')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::text('petugas_ruangan',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::text('petugas_ruangan',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
{{--</div>--}}