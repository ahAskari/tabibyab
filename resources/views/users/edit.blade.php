@extends('panel.main')
@section('panel')
<form method="post" action="{{route('users.update', $user->id)}}" class="text-right">
    @csrf

    <div class="form-group ">
        <span> @lang('users.add role to user') </span>
        <hr>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        @lang('users.success')
    </div>
    @endif
    <div class="form-group">
        
        @forelse ($roles as $role)
        <div class="custom-control custom-checkbox custom-control-inline ml-5 mr-0">
            <input type="checkbox" name='roles[]' {{$user->roles->contains($role) ? 'checked' : ''}}
                id="{{'role' . $role->id}}" value="{{$role->name}}" class="custom-control-input">
            <label class="custom-control-label" for="{{'role' . $role->id}}">{{$role->persian_name}}</label>
        </div>
        @empty
        <p>
            @lang('users.there are not any role')
        </p>
        @endforelse
    </div>
    <div class="form-group mt-5">
        <span> @lang('users.add permission to user') </span>
        <hr>
    </div>
    <div class="form-group">
        @forelse ($permissions as $permission)
        <div class="custom-control custom-checkbox custom-control-inline ml-5 mr-0">
            <input type="checkbox" name='permissions[]' {{$user->permissions->contains($permission) ? 'checked' : ''}}
                value="{{$permission->name}}" class="custom-control-input" id="{{'permission' . $permission->id}}">
            <label class="custom-control-label"
                for="{{'permission' . $permission->id}}">{{$permission->persian_name}}</label>


        </div>
        @empty
        <p>
            @lang('users.there are not any role')
        </p>
        @endforelse
    </div>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">نام</th>
                    <th scope="col">ایمیل</th>
                </tr>
            </thead>
            <tr>
                <td><input type="text" name="name" id="name" class="form-control" value="{{$user->name}}"></td>
                <td><input type="text" name="email"id="email" class="form-control" value="{{$user->email}}"></td>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </tr>
        </table>

    <div class="form-group mt-5">
        <button class="btn btn-primary"> @lang('users.update') </button>
    </div>
</form>
@endsection