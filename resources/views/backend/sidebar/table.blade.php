@extends('backend.layouts.master')

@section('content')
<div class="container py-5">
    <h2>Table Page</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>John Doe</td></tr>
            <tr><td>2</td><td>Jane Smith</td></tr>
        </tbody>
    </table>
</div>
@endsection
