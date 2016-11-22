@extends('base')
@section('title')Sadoyan Roman
@endsection
@section('content')
    <section class="hero is-fullheight is-cover-image">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <div id="main">
                            <span class="avatar">
                                <img src="{{asset('assets/images/avatar.jpeg')}}" alt="">
                            </span>
                            <div class="content">
                                <h1>Sadoyan Roman</h1>
                                <p>More <b>Backend</b> than <i>Frontend</i> Developer</p>
                                <div class="columns icon-links">
                                    <div class="column is-4">
                                        <a class="icon is-large"
                                           target="_blank"
                                           href="https://github.com/core01"
                                           title="GitHub">
                                            <i class="fa fa-github"></i>
                                        </a>
                                    </div>
                                    <div class="column is-4">
                                        <a class="icon is-large"
                                           target="_blank"
                                           href="https://twitter.com/absoluteaffect"
                                           title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="column is-4">
                                        <a class="icon is-large"
                                           target="_blank"
                                           href="https://telegram.me/core01"
                                           title="Telegram">
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection