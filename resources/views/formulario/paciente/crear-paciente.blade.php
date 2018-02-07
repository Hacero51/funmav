@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 3,$menun2=6))
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="block-header">
            <h1>
                HOJA DE VIDA
            </h1>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <br>
                    <div class="body">
                        {!! Form::open(['route' => 'paciente.store', 'method' => 'POST',$ubicacion]) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div>

                                <section>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="nombres"  placeholder="Nombres">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" name="ubicacion_id" data-live-search="true" required>
                                                <option>-- Selecciona ubicacion --</option>
                                                @foreach($ubicacion as $ubicacion)
                                                    <option value="{{$ubicacion->id}}">{{$ubicacion->ciudad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="edad" placeholder="Edad">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="fecha_ingreso" placeholder="Fecha de Ingreso">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" name="tipo_documento" required>
                                                <option>-- Seleccione tipo de documento --</option>
                                                <option name="CC">CC</option>
                                                <option name="TI">TI</option>
                                                <option name="CE">CE</option>
                                                <option name="RC">RC</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="documento" placeholder="Numero Identidad">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <select class="form-control" name="eps_id"  data-live-search="true" required>
                                                <option>-- Selecciona Eps --</option>
                                                @foreach($eps as $eps)
                                                    <option value={{ $eps->id }}>{{$eps->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date"  name="procedencia" placeholder="De Donde">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" name="genero">
                                                <option>-- Seleccione Sexo --</option>
                                                <option name="Masculino">Masculino</option>
                                                <option name="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <select class="form-control" name="estado_civil">
                                                <option>-- Seleccione Estado Civil --</option>
                                                <option name="soltero(a)">Soltero(a)</option>
                                                <option name="casado(a)">Casado(a)</option>
                                                <option name="viudo(a)">Viudo(a)</option>
                                                <option name="union libre">union libre</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="hijos" placeholder="No. Hijos">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="alias" placeholder="Alias">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Estudios</h2>
                                    <div class="demo-checkbox">
                                        <input type="checkbox" id="md_checkbox_1" name="estudios" class="chk-col-yellow"/>
                                        <label for="md_checkbox_1">Primaria</label>
                                        <input type="checkbox" id="md_checkbox_2" name="estudios" class="chk-col-blue"/>
                                        <label for="md_checkbox_2">Secundaria</label>
                                        <input type="checkbox" id="md_checkbox_3" name="estudios" class="chk-col-red"/>
                                        <label for="md_checkbox_3">Universidad</label>
                                    </div>
                                </section>
                            </div>
                            <br>
                        {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection