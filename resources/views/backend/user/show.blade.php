@extends('backend.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md 12">
            

            <div class="card-body">
                <table class="table table-striped text-center">

                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>{{__('dashboard.Name')}}</th>
                        <th>{{__('dashboard.email address')}}</th>
                        <th>{{__('dashboard.Status')}}</th>
                        <th>{{__('dashboard.Action')}}</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role_as==1?'مشرف':'مستحدم'}}</td>
                    <td>
                        <a href="{{url('dashboard_edituser')}}/{{$user->id}}" class="btn btn-primary">{{__('messages.Edit')}}</a>
                        <a href="{{url('dashboard_deleteuser')}}/{{$user->id}}" class="btn btn-danger">{{__('dashboard.Delete')}}</a>
                        <a href="{{url('dashboard_conformuser')}}/{{$user->id}}" class="btn btn-danger">{{__('dashboard.conform')}}</a>
                        <a href="{{url('dashboard_removeuser')}}/{{$user->id}}" class="btn btn-danger">{{__('dashboard.remove admin')}}</a>
                    </td>
                </tr>

                @endforeach
                </tbody>



                </table>
            </div>
        </div>
    </div>
</div>
 
@endsection
