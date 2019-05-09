
{{--<tr>--}}
{{--    <td>{{$i++}}</td>--}}
{{--    <td>{{$satuan->satuan}}</td>--}}
{{--    <td>--}}
{{--        <div class="box-button">--}}
{{--            {{link_to('satuan/'.$satuan->id,'Detail',['class'=>'btn btn-success btn-sm'])}}--}}
{{--        </div>--}}
{{--        @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--            <div class="box-button">--}}
{{--                {{link_to('satuan/'.$satuan->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm'])}}--}}
{{--            </div>--}}
{{--            <div class="box-button">--}}
{{--                {!! Form::open(['method'=>'DELETE','action'=>['SatuanController@destroy',$satuan->id]]) !!}--}}
{{--                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}--}}
{{--                {!! Form::close() !!}--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </td>--}}
{{--</tr>--}}
{{--@endforeach--}}
{{--</tbody>--}}
{{--</table>--}}
{{--@else--}}
{{--    <p> Tidak Ada Satuan</p>--}}
{{--@endif--}}
{{--<div class="table-bottom">--}}
{{--    <div class="pull-left">--}}
{{--        <strong> Jumlah Satuan : {{$jumlah_satuan}}</strong>--}}
{{--    </div>--}}
{{--    <div class="paging">--}}
{{--        {{$list_satuan->links()}}--}}
{{--    </div>--}}
{{--</div>--}}
{{--@if(Auth::check() && Auth::User()->level=='admin')--}}
{{--    <div class="bottom-nav">--}}
{{--        <div>--}}
{{--            <a href="satuan/create" class="btn btn-primary">Tambah<Produk></Produk></a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endif--}}

{{--    </div>--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('satuan','Satuan',['class'=>'control-label']) !!}--}}
{{--    @if($errors->any())--}}
{{--        @if($errors->has('satuan'))--}}
{{--            {!! Form::text('satuan',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('satuan')}}</span>--}}
{{--        @else--}}
{{--            {!! Form::text('satuan',null,['class'=>'form-control is-valid']) !!}--}}
{{--        @endif--}}
{{--    @else--}}
{{--        {!! Form::text('satuan',null,['class'=>'form-control']) !!}--}}
{{--    @endif--}}

{{--</div>--}}