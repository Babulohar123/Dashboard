@extends('backend.layouts.master')

@section('content')
<div class="container py-5">
    <h2>Form Page</h2>
    <form>
        <div class="mb-3">
            <label for="exampleInput" class="form-label">Example Input</label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Enter something">
        </div>
        <button type="{{submit" class="btn btn-primary}}">Submit</button>
    </form>
</div>
@endsection
