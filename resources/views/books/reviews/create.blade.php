@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2x1">Add Review for <b>{{ $book->title }}</b></h1>
    <div class="mb-4">
        <a class="link" href="{{ route('books.show', $book) }}">← Go back to the reviews list !</a>
    </div>
    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf
        <label for="review">Review</label>
        <textarea name="review" id="review" required class="input"></textarea>
        @error('review')
            <p class="error">{{ $message }}</p>
        @enderror
        <label for="rating" class="block mb-1">Rating</label>
        <select name="rating" id="rating" class="input mb-4" required>
            <option value="">Select a Rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection
