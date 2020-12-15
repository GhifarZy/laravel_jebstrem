@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
        <br>
<div class="content mt-3">
    <div class="animated FadeIn">
        <br>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $users->name }}</h5>
              <h6 class="card-subtitle mb-2 ">{{ $users->email}}</h6>
              <p style="font-family:'Times New Roman', Times, serif;color:black;" >Di buat pada</p>
              <h6 class="card-subtitle mb-2 ">{{ $users->created_at}}</h6>
              <a href="#" style="border-radius: 8px;" class="btn btn-info" class="card-link">edit</a>
              <a href="#" style="border-radius: 8px;" class="btn btn-danger" class="card-link">hapus</a>
              <a href="/dashboard" style="border-radius: 8px;" class="btn btn-dark" class="card-link">back</a>
            </div>
          </div>
    </div>
</div>
@endsection