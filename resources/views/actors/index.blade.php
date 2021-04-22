@extends('layouts.main')

@section('content')
  <div class="container mx-auto px-4 py-16">

    <div class="popular-actors">
      <h2 class="uppercase tracking-wider text-orange text-pink-400 text-lg font-semibold">Popular Actors</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach($popularActors as $actor)
          <div class="actor mt-8">
              <img src="{{ $actor['profile_path'] }}" alt="profile image">

            <div class="mt-2">
              <a href="#" class="text-lg hover:text-gray-300">{{ $actor['name'] }}</a>
              <div class="text-sm truncate text-gray-400">{{ $actor['known_for'] }}</div>
            </div>
          </div>
        @endforeach
      </div>
    </div> <!-- end popular actors -->

  </div>
@endsection