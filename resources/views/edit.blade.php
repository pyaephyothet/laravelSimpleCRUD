@extends('head')

@section('content')
    <div class="wrapper">
        <div class="my-3">
            <a href="{{ route('update', $edit['id']) }}" class="text-decoration-none text-black">
                <i class="bi bi-arrow-left-circle">back</i>
            </a>
            <form action="{{ route('updatePost') }}" method="post">
                @csrf
                <textarea class="form-control mt-3" name="updateTask" id="" cols="20" rows="8" required>{{ $edit['task'] }}</textarea>
                <input type="hidden" name="updateID" value="{{ $edit['id'] }}" class="">
                <input type="submit" value="Update" class="update-btn btn bg-grey text-dark border-secondary mt-3">
            </form>
        </div>
    </div>
@endsection
