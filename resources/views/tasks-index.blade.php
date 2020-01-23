@extends('layouts.base-layout')

@section('content')
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->name }} - employee: {{ $task->employee->name }} {{ $task->employee->last_name }}
            </li>            
        @endforeach
    </ul>
@endsection