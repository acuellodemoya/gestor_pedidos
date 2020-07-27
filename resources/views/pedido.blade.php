@extends('layouts/base')

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Pedido: </h3>
        </div>
    </div>
    <br>
    <br>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
     @endif
    <form action="comment_submit" method="POST">
        @csrf 
                <div class="form-group">
                    <label for="id_vendedor">Digite la Identificacion del vendedor*:</label>
                    <input type="text" class="form-control" id="id_vendedor" name="id_vendedor" placeholder="ID" value="{{ old('id_vendedor') }}">
                    <label for="numeracion_factura_venta">Numeracion de la factura de venta*: </label>
                    <input type="text" class="form-control" id="numeracion_factura_venta" name="numeracion_factura_venta" placeholder="Numeracion de la factura de venta" value="{{ old('numeracion_factura_venta') }}">
                    <label for="nombre_empresa_vende">Nombre de la empresa que vende*:</label>
                    <input type="text" class="form-control" id="nombre_empresa_vende" name="nombre_empresa_vende" placeholder="Nombre de la empresa que vende" value="{{ old('nombre_empresa_vende') }}">
                    <label for="nit_empresa_vende">NIT de la empresa que vende:</label>
                    <input type="number" class="form-control" id="nit_empresa_vende" name="nit_empresa_vende" placeholder="NIT de la empresa que vende" value="{{ old('nit_empresa_vende') }}">
                    <label for="nombre_comprador">Nombre del comprador:</label>
                    <input type="text" class="form-control" id="nombre_comprador" name="nombre_comprador" placeholder="Nombre del comprador" value="{{ old('nombre_comprador') }}">
                    <label for="apellido_comprador">Apellido del comprador:</label>
                    <input type="text" class="form-control" id="apellido_comprador" name="apellido_comprador" placeholder="Apellido del comprador" value="{{ old('apellido_comprador') }}">
                    <label for="id_comprador">ID o NIT del comprador:</label>
                    <input type="text" class="form-control" id="id_comprador" name="id_comprador" placeholder="ID o NIT del comprador" value="{{ old('id_comprador') }}">
                    <label for="fecha_expedicion">Fecha de expedicion:</label>
                    <input type="date" class="form-control" id="fecha_expedicion" name="fecha_expedicion" placeholder="Fecha de expedicion" value="{{ old('fecha_expedicion') }}">
                    <label for="descripcion_articulos">Descripcion de los articulos vendidos:</label>
                    <input type="text" class="form-control" id="descripcion_articulos" name="descripcion_articulos" placeholder="Descripcion de los articulos vendidos" value="{{ old('descripcion_articulos') }}">
                </div>
         <button type="submit" class="btn btn-success">Enviar</button>
    </form>
    <div class="row">
        <div class="col">
            <a href="/" class="btn btn-secondary">Volver</a>
        </div>
    </div>
    </div>