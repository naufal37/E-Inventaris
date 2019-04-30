


{{--<div class="barang">--}}
{{--    <h2> Daftar Barang </h2>--}}
{{--    @include('barang.search')--}}
{{--    @include('barang.report')--}}
{{--    @include('_partial.flash_message')--}}
{{--    @if ($jumlah_barang!=0)--}}
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>Nama Barang</th>--}}
{{--                <th>Kondisi Barang</th>--}}
{{--                <th>Pilihan</th>--}}
{{--            </tr>--}}
{{--            <?php $i=1;?>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($list_barang as $barang)--}}
{{--                <tr>--}}
{{--                    <td>{{$i++}}</td>--}}
{{--                    <td>{{$barang->nama_barang}}</td>--}}
{{--                    @if($barang->jumlah<1)--}}
{{--                        <td>Tidak Tersedia</td>--}}
{{--                    @else--}}
{{--                        <td>{{$barang->kondisi_barang}}</td>--}}
{{--                    @endif--}}
{{--                    @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--                        <td>--}}
{{--                            <div class="box-button">--}}
{{--                                {{link_to('pinjaman/create/'.$barang->id,'Pinjam',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                            </div>--}}

{{--                            <div class="box-button">--}}
{{--                                {{link_to('barang/'.$barang->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                            </div>--}}

{{--                            <div class="box-button">--}}
{{--                                {{link_to('barang/'.$barang->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}--}}
{{--                            </div>--}}
{{--                            <div class="box-button">--}}
{{--                                {!! Form::open(['method'=>'DELETE','action'=>['BarangController@destroy',$barang->id]]) !!}--}}
{{--                                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}--}}
{{--                                {!! Form::close() !!}--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    @elseif(Auth::check() && Auth::User()->level=='siswa')--}}
{{--                        <td>--}}
{{--                            <div class="box-button">--}}
{{--                                {{link_to('pinjaman/create/'.$barang->id,'Pinjam',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                            </div>--}}
{{--                            <div class="box-button">--}}
{{--                                {{link_to('barang/'.$barang->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    @else--}}
{{--                        <div class="box-button">--}}
{{--                            {{link_to('barang/'.$barang->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @else--}}
{{--        <p> Tidak Ada Barang</p>--}}
{{--    @endif--}}
{{--    <div class="table-bottom">--}}
{{--        <div class="pull-left">--}}
{{--            <strong> Jumlah Barang : {{$jumlah_barang}} </strong>--}}
{{--            <br/>--}}
{{--            <strong> Jumlah Ruangan : {{$jumlah_ruangan}} </strong>--}}
{{--        </div>--}}
{{--        <div class="paging">--}}
{{--            {{$list_barang->links()}}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--        <div class="bottom-nav">--}}
{{--            <div>--}}
{{--                {{link_to('barang/create','Tambah Barang',['class'=>'btn btn-success btn-sm'])}}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--</div>--}}

{{--        {!! Form::open(['url'=>'barang']) !!}--}}
{{--        {!! Form::close() !!}--}}
{{--        {!! Form::model($barang,['method'=>'PATCH','action'=>['BarangController@update',$barang->id],]) !!}--}}

{{--        {!! Form::close() !!}--}}



{{--Old--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('nama_barang','Nama Barang',['class'=>'control-label']) !!}--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('nama_barang'))--}}
{{--            {!! Form::text('nama_barang',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('nama_barang')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::text('nama_barang',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::text('nama_barang',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {!! Form::label('kondisi_barang','Status Barang',['class'=>'control-label']) !!}--}}
{{--    <div class="radio">--}}
{{--        <label>{!! Form::radio('kondisi_barang','Tersedia',true) !!} Tersedia </label>--}}
{{--    </div>--}}
{{--    <div class="radio">--}}
{{--        <label>{!! Form::radio('kondisi_barang','Habis',false) !!} Habis </label>--}}
{{--    </div>--}}

{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {!! Form::label('suplier','Suplier',['class'=>'control-label']) !!}--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('suplier'))--}}
{{--            {!! Form::text('suplier',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('suplier')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::text('suplier',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::text('suplier',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
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
{{--    @if($errors->any())--}}
{{--        @if($errors->has('kode_barang'))--}}
{{--            {!! Form::text('kode_barang',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('kode_barang')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::text('kode_barang',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::text('kode_barang',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    <label for="satuan" class="control-label">Satuan Barang</label>--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('id_satuan'))--}}
{{--            {!! Form::select('id_satuan',$list_satuan,null,['class'=>'selectric form-control is-invalid','id'=>'satuan','placeholder'=>'Pilih Satuan']) !!}--}}
{{--            <span class="help-block">{{$errors->first('id_satuan')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::select('id_satuan',$list_satuan,null,['class'=>'selectric form-control is-valid','id'=>'satuan','placeholder'=>'Pilih Satuan']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::select('id_satuan',$list_satuan,null,['class'=>'selectric form-control','id'=>'satuan','placeholder'=>'Pilih Satuan']) !!}--}}
{{--    @endif--}}

{{--</div>--}}

{{--<div class="form-group">--}}
{{--    <label for="ruangan" class="control-label">Ruangan</label>--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('id_ruangan'))--}}
{{--            {!! Form::select('id_ruangan',$list_ruangan,null,['class'=>'form-control is-invalid','id'=>'ruangan','placeholder'=>'Pilih Ruangan']) !!}--}}
{{--            <span class="help-block">{{$errors->first('kode_ruangan')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::select('id_ruangan',$list_ruangan,null,['class'=>'form-control is-valid','id'=>'ruangan','placeholder'=>'Pilih Ruangan']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::select('id_ruangan',$list_ruangan,null,['class'=>'form-control','id'=>'ruangan','placeholder'=>'Pilih Ruangan']) !!}--}}
{{--    @endif--}}

{{--</div>--}}

{{--<div class="form-group">--}}
{{--    <label for="jenis" class="control-label">Jenis Barang</label>--}}
{{--    @if ($errors->any())--}}
{{--        @if($errors->has('id_jenis'))--}}
{{--            {!! Form::select('id_jenis',$list_jenis,null,['class'=>'form-control selectric is-invalid','id'=>'jenis_barang','placeholder'=>'Pilih Jenis Barang']) !!}--}}
{{--            <span class="help-block">{{$errors->first('id_jenis')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::select('id_jenis',$list_jenis,null,['class'=>'form-control selectric is-valid','id'=>'jenis_barang','placeholder'=>'Pilih Jenis Barang']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::select('id_jenis',$list_jenis,null,['class'=>'form-control selectric','id'=>'jenis_barang','placeholder'=>'Pilih Jenis Barang']) !!}--}}
{{--    @endif--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {!! Form::label('tanggal_masuk','Tanggal Masuk',['class'=>'control-label']) !!}--}}
{{--    @if ($errors->any())--}}
{{--        @if($errors->has('tanggal_masuk'))--}}
{{--            {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control datepicker is-invalid','id'=>'tanggal_masuk']) !!}--}}
{{--            <span class="help-block">{{$errors->first('tanggal_masuk')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control datepicker is-valid','id'=>'tanggal_masuk']) !!}--}}
{{--        @endif--}}

{{--    @else--}}
{{--        {!! Form::date('tanggal_masuk',!empty($barang) ? $barang->tanggal_masuk->format('Y-m-d'): null,['class'=>'form-control datepicker','id'=>'tanggal_masuk']) !!}--}}
{{--    @endif--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {!! Form::label('keterangan','Keterangan',['class'=>'control-label']) !!}--}}
{{--    {!! Form::textarea('keterangan',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    {!! Form::submit($button,['class'=>'btn btn-primary form-control']) !!}--}}

{{--</div>--}}
{{--Old END--}}


{{--    <div class="row">--}}
{{--        <div class="col-md-2">--}}
{{--            @if(!empty($id_ruangan))--}}
{{--                {!! Form::select('id_ruangan',$list_ruangan,$id_ruangan,['class'=>'form-control','id'=>'id_ruangan','placeholder'=>'-RUANGAN-']) !!}--}}
{{--            @else--}}
{{--                {!! Form::select('id_ruangan',$list_ruangan,null,['class'=>'form-control','id'=>'id_ruangan','placeholder'=>'-RUANGAN-']) !!}--}}
{{--            @endif--}}
{{--        </div>--}}

{{--<div class="col-md-2">--}}
{{--    @if(!empty($id_jenis))--}}
{{--        {!! Form::select('id_jenis',$list_jenis,$id_jenis,['class'=>'form-control','id'=>'id_jenis','placeholder'=>'-JENIS-']) !!}--}}
{{--    @else--}}
{{--        {!! Form::select('id_jenis',$list_jenis,null,['class'=>'form-control','id'=>'id_jenis','placeholder'=>'-JENIS-']) !!}--}}
{{--    @endif--}}
{{--</div>--}}