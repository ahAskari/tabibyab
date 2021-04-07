@extends('panel.main')
@section('panel')
<div class="card" dir="rtl">
    @if(session('success'))
    <div class="alert alert-success ml-auto">
        @lang('users.success')
    </div>
    @endif
    <div class="card-header text-right">
        @lang('users.list')
    </div>
    <div class="card-body text-right">
        <table class="table table-striped text-right">
            <thead>
                <tr>
                    <th scope="col">@lang('users.name')</th>
                    <th scope="col">@lang('users.email')</th>
                    <th scope="col">@lang('users.roles')</th>
                    <th scope="col">@lang('users.operation')</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach ($user->roles as $role)
                        <span class="badge badge-primary">{{$role->persian_name}}</span>
                        @endforeach
                    <td> <a href="{{route('users.edit',$user->id)}}"> @lang('users.edit') </a> </td>
                    <td>
                        <form action="{{ route('users.delete',$user->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
                @empty
                <p>
                    @lang('users.there are not any user')
                </p>
                @endforelse
            </tbody>
        </table>
        <a href="{{route('create_user')}}" class="btn btn-sm btn-primary">افزودن کاربر</a>
    </div>
</div>
@endsection