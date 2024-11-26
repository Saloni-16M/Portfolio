@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Portfolios</h1>
    <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Create Portfolio</a>
    
    <div class="mt-4">
        @if($portfolios->isEmpty())
            <p>No portfolios available. Create one to get started!</p>
        @else
            @foreach($portfolios as $portfolio)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>{{ $portfolio->name }}</h5>
                        <p>Graduation Year: {{ $portfolio->graduation_year }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('portfolio.show', $portfolio->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
