<div id = "search">
    {!! Form::open(['url'=>'report','method'=>'GET','id'=>'form-pencarian'])!!}
    <div class="row">
        <div class="col-md-8">
            <div class="input-group">
                    {!! Form::text('kata_kunci',null,['class'=>'form-control','placeholder'=>'Masukkan Kata Kunci']) !!}
                <span class="input-group-btn">
                    {!! Form::button('Cari dan report',['class'=>'btn btn-default','type'=>'submit']) !!}
                </span>

            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>