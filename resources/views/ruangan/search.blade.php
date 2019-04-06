<div id = "search">
    {!! Form::open(['url'=>'ruangan/cari','method'=>'GET','id'=>'form-pencarian'])!!}

        <div class="row">
            <div class="col-md-2">
                @if(!empty($nama_lokasi))
                    {!! Form::select('lokasi',$lokasi,$nama_lokasi,['class'=>'form-control','id'=>'lokasi','placeholder'=>'-LOKASI-']) !!}
                @else
                    {!! Form::select('lokasi',$lokasi,null,['class'=>'form-control','id'=>'lokasi','placeholder'=>'-LOKASI-']) !!}
                @endif
            </div>

            <div class="col-md-8">
                <div class="input-group">
                    @if(!empty($kata_kunci))
                        {!! Form::text('kata_kunci',$kata_kunci,['class'=>'form-control','placeholder'=>'Masukkan Kata Kunci']) !!}
                    @else
                        {!! Form::text('kata_kunci',null,['class'=>'form-control','placeholder'=>'Masukkan Kata Kunci']) !!}
                    @endif

                    <span class="input-group-btn">
                        {!! Form::button('Cari',['class'=>'btn btn-default','type'=>'submit']) !!}
                    </span>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>