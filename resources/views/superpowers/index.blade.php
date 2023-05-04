@extends('layouts.master')

@section('content')
<div class="row mb-4">
    <div class="">
        <a href=""></a>
    </div>
</div>

<body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>description</th>
        </tr>
    </thead>

    <tbody>
        @forelse($superpowers as $superpowers)
        <tr>
            <td>{{ $superpowers->id }}</td>
            <td>
                <a href=" {{ route('superpowers.show'), $superpower->id }}">{{ $superpower->name }}</a>
            </td>
            <td>{{ $superpowers->description }}</td>
        </tr>
        @empty
        <p> There`re no superpowers. </p>
        @endforelse 
    </tbody>
</table>
<br>
<br>

<a href="{{ route('superpowers.create') }}">Create superpower</a>
</html>

@endsection 