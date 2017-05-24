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
                                <ul>
                                    @foreach($cv->experiences as $experience)
                                    <li>
                                        <article class="cv__experience">
                                            <header>
                                                <h1 class="title is-5">{{$experience->title}}</h1>
                                                <div class="cv__experience__dates">
                                                    <span><strong>Start Date:</strong> {{$experience->start_date}}</span>
                                                    @if($experience->end_date)<span><strong>End Date:</strong>{{$experience->end_date}}</span>@endif
                                                </div>
                                            </header>
                                            <div class="content">
                                                {!! $experience->description !!}
                                            </div>
                                        </article>
                                    </li>
                                        @endforeach
                                </ul>
                            </section>
                            <section class="section qualifications">
                                <h1 class="title is-3">Professional Qualifications</h1>
                                <ul>
                                    @foreach($cv->qualifications() as $qualification)
                                    <li>
                                        <article>
                                            <h2>{{$qualification['company']}}</h2>
                                            <p>{{$qualification['description']}}</p>
                                        </article>
                                    </li>
                                        @endforeach
                                </ul>
                            </section>
                            <section class="section publications">
                                <h1 class="title is-3"></h1>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
@endsection