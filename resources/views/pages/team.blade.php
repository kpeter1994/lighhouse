

@extends('layouts.Guest')

@section('content')


    <section class="my-6 lg:my-12 p-3">
        <div class="container max-w-7xl mx-auto ">
            <h1 class="font-secondary text-2xl lg:text-4xl text-blue-500 text-center mb-6 lg:mb-12">Csapatunk</h1>

            @foreach($teams as $team)
                <x-team-member
                    :name="$team['name']"
                    :introductions="$team['introductions']"
                    :image="$team['image']"
                    :schools="$team['schools']"
                    :works="$team['works']"
                />
            @endforeach



        </div>
    </section>


@endsection
