@extends('layouts.main')
@section('content')
    <div class="page-home">
        @include('partials.header')
        <main>
            <section class="is-hero">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <article>
                                <h1 class="title has-text-centered">I'm a freelance full stack web developer.</h1>
                                <h2 class="subtitle has-text-centered">Welcome to my website.</h2>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            section.section
            <section class="section">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <div class="section recent-updates">
                                <h1 class="title">Recent Updates</h1>
                                <ul class="columns">
                                    @for ($i = 0; $i < 3; $i++)
                                        <li class="column">
                                            <article class="recent-updates__blog_item">
                                                <header>
                                                    <h1 class="title is-4">Blog Item</h1>
                                                </header>
                                                <div class="content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam aspernatur consectetur, culpa, dignissimos dolor eius facere iste, laborum nam non numquam optio quidem recusandae rerum tempora voluptates voluptatibus.</p>
                                                </div>
                                            </article>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection