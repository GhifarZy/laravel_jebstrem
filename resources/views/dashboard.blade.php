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
        <br><br>
<a href="{{url('adduser')}}" class="btn btn-info" style="border-radius: 8px;margin-left: 20px;" >Tambah User</a>
<div class="content mt-3">
    <div class="animated FadeIn">
        <br>
        <ul class="list-group">
   
            @foreach ($user as $item)
                
           
               <li class="list-group-item d-flex justify-content-between align-items-center">
               {{$item->name}}
               <a href="dashboard/{{ $item->id }}" class="badge badge-info">detail</a>
               </li>
               @endforeach
               </ul>
            </tbody>
          </table>
    </div>
</div>
@endsection