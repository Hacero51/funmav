@extends('dashboard')

@section('topbar')
    @include('admin.topbar')
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    EPICRISIS DE INGRESO
                </h1>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form>
                                <div id="form_validation">
                                    <div class="input-group-lg">
                                        <br>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>
                                                        <input align="right" type="date" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>Hora</th>
                                                    <th>
                                                        <input align="right" type="time"  class="form-control date" placeholder="hh/mm">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Edad</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Sexo</th>
                                                    <th>
                                                        <select class="form-control">
                                                            <option>seleccion sexo</option>
                                                            <option>Femenino</option>
                                                            <option>Masculino</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Servicio</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Linea de Pago</th>
                                                    <th>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>Efectivo</option>
                                                            <option>Consignacion Bancaria</option>
                                                            <option>Cheque</option>
                                                        </select>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th>Nombres y Apellidos</th>
                                                    <th>
                                                        <input type="text" class="form-control" name="names" required>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Documento</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 class="card-inside-title">Motivo de Consulta o Solicitud de Servicio</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Emfermedad Actual</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="2" class="form-control no-resize"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Antecedentes</h2>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Patologicos</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>Quirurjicos</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Toxico Alergicos</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Farmacologicos</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Inmunizacion</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Transfusion</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Ginecobstetricios</th>
                                                    <th>
                                                        <textarea rows="2" class="form-control no-resize"></textarea>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Menarquias</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Ciclos</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Regular</th>
                                                    <th>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>SI</option>
                                                            <option>NO</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Planificacion ETS</th>
                                                    <th>
                                                        <select class="form-control">
                                                            <option>seleccion</option>
                                                            <option>G</option>
                                                            <option>P</option>
                                                            <option>C</option>
                                                            <option>A</option>
                                                            <option>V</option>
                                                            <option>O</option>
                                                            <option>E</option>
                                                            <option>MOLA</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Patologia Embarazo Actual</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Patologia Embarazo Anterior</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>OTROS</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>FAMILIARES</th>
                                                    <th>
                                                        <input type="text" class="form-control date">
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 class="card-inside-title">EXAMEN FISICO (HALLAZGO)</h2>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <input type="text" class="form-control date" placeholder="T.A." >
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control date"  placeholder="F.C." >
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control date"  placeholder="F.R." >
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control date"  placeholder="TEMP." >
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>
                                                        <input type="text" class="form-control date"  placeholder="PESO:" >
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control date"  placeholder="GLASGLOW" >
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control date"  placeholder="TALLA." >
                                                    </th>
                                                    <th>
                                                        <input type="text" class="form-control date"  placeholder="SATO2">
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 class="card-inside-title">Conducta.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="2" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">EVOLUCION.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="2" class="form-control no-resize" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
