{{--<table class="table">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>Nomer</th>--}}
{{--        <th>Jenis Barang</th>--}}
{{--        <th>Aksi</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}

{{--    @foreach($list_jenis as $jenis)--}}
{{--        <tr>--}}
{{--            <td>{{$i++}}</td>--}}
{{--            <td>{{$jenis->jenis_barang}}</td>--}}
{{--            <td>--}}
{{--                @if(Auth::check() && Auth::User()->level=='admin')--}}

{{--                    <div class="box-button">--}}
{{--                        {{link_to('jenis/'.$jenis->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                    </div>--}}
{{--                    <div class="box-button">--}}
{{--                        {{link_to('jenis/'.$jenis->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}--}}
{{--                    </div>--}}
{{--                    <div class="box-button">--}}
{{--                        {!! Form::open(['method'=>'DELETE','action'=>['JenisController@destroy',$jenis->id]]) !!}--}}
{{--                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}--}}
{{--                        {!! Form::close() !!}--}}
{{--                    </div>--}}
{{--                @else--}}
{{--                    <div class="box-button">--}}
{{--                        {{link_to('jenis/'.$jenis->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}