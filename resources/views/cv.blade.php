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
                                                    <span><strong>Start Date:</strong> {{$experience->start_date->format('M Y')}}</span>
                                                    @if($experience->end_date)<span><strong>End Date:</strong>{{$experience->end_date->format('M Y')}}</span>@endif
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
                                            <h2 class="title is-5">{{$qualification['company']}}</h2>
                                            <p>{{$qualification['description']}}</p>
                                        </article>
                                    </li>
                                        @endforeach
                                </ul>
                            </section>
                            <section class="section publications">
                                <h1 class="title is-3">Publications</h1>
                                <ul>
                                    @foreach($cv->publications as $publication)
                                    <li>
                                        {{$publication}}
                                    </li>
                                        @endforeach
                                </ul>
                            </section>
                            <section class="section education">
                                <h1 class="title is-3">
                                    Education
                                </h1>
                                <ul>
                                    @foreach($cv->education as $educationItem)
                                    <li>
                                        <article>
                                            <h1 class="title is-5">{{$educationItem['institution']}}</h1>
                                            <ul>
                                                @foreach($educationItem['courses'] as $course)
                                                    <li>
                                                        {{$course}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </article>
                                    </li>
                                        @endforeach
                                </ul>
                            </section>
                            <section class="section skills">
                                <h1 class="title is-3">Skills</h1>
                                <ul>
                                    @foreach($cv->skills as $skill)
                                        <li>
                                            <p>{{$skill}}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
@endsection