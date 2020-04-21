@extends('templates.adminmitra')
@section('content')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Profil Mitra</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="panel-button2">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                    </ul>
                </div>
                <div class="card-body" id="bar-parent2">
                    <form action="{{ route('profil.update', $data->id) }}" id="form_sample_2" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                        <div class="form-body">
                            <div class="form-group row  margin-top-20">
                                <label class="control-label col-md-3">Nama Mitra
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input class="form-control {{$errors->has('nama_mitra')?'is-invalid':''}}"
                                               name="nama_mitra" type="text" value="{{$data->nama_mitra}}" />
                                        @if ($errors->has('nama_mitra'))
                                            <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('nama_mitra') }}</b></p>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Alamat
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input class="form-control {{$errors->has('alamat')?'is-invalid':''}}"
                                               name="alamat" type="text" value="{{$data->alamat}}" />
                                        @if ($errors->has('alamat'))
                                            <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('alamat') }}</b></p>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">No Hp
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input class="form-control {{$errors->has('no_hp')?'is-invalid':''}}"
                                               name="no_hp" type="text" value="{{$data->no_hp}}" />
                                        @if ($errors->has('no_hp'))
                                            <span class="invalid-feedback" role="alert">
                                        <p><b>{{ $errors->first('no_hp') }}</b></p>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                <a href="{{route('profil.index')}}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    var loadfile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
