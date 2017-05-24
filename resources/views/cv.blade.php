@extends('layouts.main')
@section('content')
    <div class="page-cv">
        @include('partials.header')
        <main>
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="section cv">
                            <section class="section profile">
                                <h1 class="title is-3">Profile</h1>
                                <div class="content">
                                    {!! $cv->about !!}
                                </div>
                            </section>
                            <section class="section experience">
                                <h1 class="title is-3">
                                    Recent Experience
                                </h1>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
@endsection