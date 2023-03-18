@extends('plantilla')

@section('contenido')
  <div class="content-wrapper">
  	<section class="content-header">
  		<h1>Mi Perfil</h1>
    </section>
    
    <section class="content">
    	<div class="box">
    		<div class="box-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                <div class="row">
                    <div class="col-md-6 col-xs-12">              
                        <h2>Nombre: </h2>
                        <input type="text" name="name" value="{{auth()->user()->name}}" class="input-lg">
                        <h2>Documento: </h2>
                        <input type="text" name="documento" value="{{auth()->user()->documento}}" class="input-lg">           
                    </div>
                    <div class="col-md-6 col-xs-12">              
                        <h2>Email: </h2>
                        <input type="text" name="email" value="{{auth()->user()->email}}" class="input-lg">
                        <h2>Password: </h2>
                        <input type="text" name="passwordN" value="" class="input-lg">           
                        <input type="text" name="password" value="{{auth()->user()->password}}" class="input-lg">           

                        <h2>Foto de perfil</h2>
                        <br>
                        <input type="file" name="fotoPerfil" id="fotoPerfil">
                        <br>
                        @if(auth()->user()->foto == "")
                             <img src="{{ url('storage/defecto.png') }}" class="user-image" alt="User Image" width="150px" height="150px">
                        @else      
                             <img src="{{ url('storage/'.auth()->user()->foto) }}" class="user-image" alt="User Image">
                        @endif   
                    </div>
                  </div>
              </div> 
                 <div class="box-footer">
                    <button type="submit" class="btn btn-success btn-lg pull-right">Guardar</button>
                 </div>
                 </form> 
    		</div>    	
    </section>
 </div>
@endsection