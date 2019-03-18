@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('master')

@section('header')
  <nav>
    <ul class="nav nav-pills pull-right">
      <li role="presentation"><a href=" {{route('home')}}">Home</a></li>
      <li role="presentation" class="active"><a href="route('about')">About</a></li>
      <li role="presentation"><a href="{{route('contact')}} ">Contact</a></li>
    </ul>
  </nav>
  <h3 class="text-muted"><a href="#">wsblog.</a></h3>
@stop

@section('sidebar-up')
  <h1>ABOUT ME</h1>
  
@stop

@section('sidebar-left')
 
  <p>Nama    : Wulansari</p>
  <p>Kelas   : IX RPL 1</p>
  <p>Alamat  : Cibogo</p>
  <p>Sekolah : SMKN 1 SUBANG</p>
  <h3>WULANSARI</h3>

<footer>
<p>&copy; 2017 www.wsblog.blogspot.co.id, Inc.</p>
</footer>
@stop 

 