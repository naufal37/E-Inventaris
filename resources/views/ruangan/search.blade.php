<div id="search">
    <form method="GET" action="{{url('ruangan/cari')}}" id="form-pencarian">
        <select name="lokasi" id="lokasi" class="form-control selectric">
            @if(!empty($lokasi))
                <option value="">-PILIH LOKASI-</option>
                @foreach($nama_lokasi as $tempat)
                    @if($lokasi==$tempat->lokasi)
                        <option selected value="{{$tempat->lokasi}}">{{$tempat->lokasi}}</option>
                    @else
                        <option value="{{$tempat->lokasi}}">{{$tempat->lokasi}}</option>
                    @endif
                @endforeach
            @else
                <option selected value="">-PILIH LOKASI-</option>
                @foreach($nama_lokasi as $tempat)
                    <option value="{{$tempat->lokasi}}">{{$tempat->lokasi}}</option>
                @endforeach
            @endif
        </select>
        <div class="col-md-8">
            <div class="input-group">
                @if(!empty($kata_kunci))
                    <input type="text" class="form-control" name="kata_kunci" id="kata_kunci" value="{{$kata_kunci}}">
                @else
                    <input type="text" class="form-control" name="kata_kunci" placeholder="Kata Kunci" id="kata_kunci">
                @endif
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </form>


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
</div>