@extends('layouts.base-layout')

@section('content')
    <ul>
        @foreach ($employees as $employee)
            <li>
                <a href="{{ route('employee-show', $employee->id) }}">{{ $employee->name }}</a> 
                - #tasks: {{ $employee->tasks()->count() }}
                <form action="{{ route('employee-delete', $employee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete employee</button>
                </form>
            </li>            
        @endforeach
    </ul>
@endsection