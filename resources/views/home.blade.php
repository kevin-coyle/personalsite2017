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
            <section class="section what-i-use">
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <h2 class="title is-3">
                                I currently use:
                            </h2>
                            <ul>
                                <li>
                                    <article class="i-use__icon">
                                        <img src="/images/laravel-l-slant.png" alt="Laravel Logo">
                                        <h2 class="title">Laravel</h2>
                                    </article>
                                    </li>
                                <li>
                                    <article>
                                        <img src="/images/nodejs-icon.svg" alt="NodeJS">
                                        <h2 class="title">NodeJS</h2>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <img src="/images/drupal_logo.png" alt="Drupal Logo">
                                        <h2 class="title">Drupal 7 & 8</h2>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <img src="/images/docker.svg" alt="Docker Logo">
                                        <h2 class="title">Docker</h2>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section recent-updates">
                <div class="container">
                    <div class="columns">
                        <div class="column">
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
            </section>
        </main>
    </div>
@endsection