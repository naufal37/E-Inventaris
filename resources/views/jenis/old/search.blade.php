<div id = "search">
    {!! Form::open(['url'=>'barang/cari','method'=>'GET','id'=>'form-pencarian'])!!}

        <div class="row">
            <div class="col-md-2">
                @if(!empty($id_ruangan))
                    {!! Form::select('id_ruangan',$list_ruangan,$id_ruangan,['class'=>'form-control','id'=>'id_ruangan','placeholder'=>'-RUANGAN-']) !!}
                @else
                    {!! Form::select('id_ruangan',$list_ruangan,null,['class'=>'form-control','id'=>'id_ruangan','placeholder'=>'-RUANGAN-']) !!}
                @endif
            </div>

            <div class="col-md-2">
                @if(!empty($id_jenis))
                    {!! Form::select('id_jenis',$list_jenis,$id_jenis,['class'=>'form-control','id'=>'id_jenis','placeholder'=>'-JENIS-']) !!}
                @else
                    {!! Form::select('id_jenis',$list_jenis,null,['class'=>'form-control','id'=>'id_jenis','placeholder'=>'-JENIS-']) !!}
                @endif
            </div>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                @if(!empty($kata_kunci))
                    {!! Form::text('kata_kunci',$kata_kunci,['class'=>'form-control','placeholder'=>'Masukkan Barang']) !!}
                @else
                    {!! Form::text('kata_kunci',null,['class'=>'form-control','placeholder'=>'Masukkan Barang']) !!}
                @endif

                <span class="input-group-btn">
                    {!! Form::button('Cari',['class'=>'btn btn-default','type'=>'submit']) !!}
                </span>

            </div>
        </div>
    {!! Form::close() !!}
</div>