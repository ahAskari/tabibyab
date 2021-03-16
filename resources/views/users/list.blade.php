@extends('panel.main')
@section('panel')
<div class="card" dir="rtl">
    <div class="card-header text-right">
        @lang('users.list')
    </div>
    <div class="card-body">
        <table class="table table-striped text-right">
            <thead>
                <tr>
                    <th scope="col">@lang('users.name')</th>
                    <th scope="col">@lang('users.email')</th>
                    <th scope="col">@lang('users.roles')</th>
                    <th scope="col">@lang('users.operation')</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach ($user->roles as $role)
                        <span class="badge badge-secondary">{{$role->persian_name}}</span>
                        @endforeach
                    <td> <a href=""> @lang('users.edit') </a> </td>
                </tr>
                @empty
                <p>
                    @lang('users.there are not any user')
                </p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection