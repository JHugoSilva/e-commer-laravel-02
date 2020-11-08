@extends('layouts.master')

@section('title','Tela de Login')
    
@section('content')
   <div class="container custom-login">
       <div class="row">
           <div class="col-sm-4 offset-4 mt-5">
               <form action="login" method="POST">
                   <div class="form-group">
                       @csrf
                       <label for="email">Email</label>
                       <input type="email" name="email" class="form-control">
                   </div>
                   <div class="form-group">
                    <label for="pass">Senha</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
               </form>
           </div>
       </div>
   </div>
@endsection