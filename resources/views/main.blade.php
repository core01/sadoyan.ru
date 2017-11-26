<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sadoyan Roman</title>
    <link rel="stylesheet" href="/assets/css/app.css?ver=2" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<section class="section">
    <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="/assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a href="?lang=en"
                               class="button is-text {{ App::getLocale() === 'en' ? 'is-active' : '' }}">EN
                            </a>
                        </p>
                        <p class="control">
                            <a href="?lang=ru"
                               class="button is-text {{ App::getLocale() === 'ru' ? 'is-active' : '' }}">RU
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="columns">
            <div class="column is-4-desktop">
                <div class="box">
                    <div class="columns">
                        <div class="column is-4 has-text-centered">
                            <img src="/assets/images/avatar.jpeg" class="avatar">
                        </div>
                        <div class="column is-8">
                            <p><b>@lang('fields.name'):</b> @lang('profile.name')</p>
                            <p><b>@lang('fields.age'):</b> 25</p>
                            <p><b>@lang('fields.location'):</b> @lang('profile.location')</p>
                        </div>
                    </div>
                    <hr>
                    <div class="buttons is-centered">
                        <a class="button" href="https://github.com/core01" target="_blank">
                <span class="icon">
                  <i class="fa fa-github"></i>
                </span>
                            <span>GitHub</span>
                        </a>
                        <a class="button is-info"  href="https://twitter.com/absoluteaffect" target="_blank">
                <span class="icon">
                  <i class="fa fa-twitter"></i>
                </span>
                            <span>Twitter</span>
                        </a>
                        <a class="button" href="https://t.me/core01">
                <span class="icon">
                  <i class="fa fa-telegram"></i>
                </span>
                            <span>Telegram</span>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content job">
                        <h2>@lang('fields.work_experience'):</h2>
                        <p><b>@lang('profile.firms.cityinfo.name'):</b>: @lang('profile.firms.cityinfo.years')</p>
                        <p><b>@lang('profile.firms.baltgaz.name'):</b> @lang('profile.firms.baltgaz.years')</p>
                        <p><b>@lang('profile.firms.compaero.name'):</b> @lang('profile.firms.compaero.years')</p>
                        <p><b>@lang('profile.firms.estp.name'):</b> @lang('profile.firms.estp.years')</p>
                        <p><b>@lang('profile.firms.freelance.name'):</b> @lang('profile.firms.freelance.years')</p>
                        <hr>
                        <div class="buttons is-centered">
                            <a class="button is-link" href="https://www.linkedin.com/in/roman-sadoyan-b0b9b1114/" target="_blank">
                                <span class="icon">
                                  <i class="fa fa-linkedin-square"></i>
                                </span>
                                <span>LinkedIn</span>
                            </a>
                            <a class="button is-danger" href="https://hh.ru/resume/76239c53ff01d952250039ed1f79524d6f6178" target="_blank">
                                <span class="icon">
                                  <i class="fa fa-briefcase"></i>
                                </span>
                                <span>hh.ru</span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="column is-8-desktop">
                <div class="box">
                    <div class="about content">
                        <h2>@lang('profile.title')</h2>
                        <p>@lang('profile.about.0')</p>
                        <p>@lang('profile.about.1')</p>
                        <p>@lang('profile.about.2')</p>
                        <p>@lang('profile.about.3') <a href="https://t.me/ExchangeRatesKzBot" target="_blank">@ExchangeRatesKzBot</a>
                        </p>
                        <div>
                            <h3>@lang('fields.skills_list'):</h3>
                            <div class="columns">
                                <div class="column">
                                    <b>@lang('fields.webdev'):</b>
                                    <ul>
                                        <li>PHP 5.6+ (Laravel, MODX, Yii2)</li>
                                        <li>MySQL/PostgreSQL/SQLite</li>
                                        <li>JavaScript (VanillaJS, Vue.js 2, jQuery)</li>
                                        <li>HTML / XML</li>
                                        <li>CSS (Bootstrap, Uikit, Bulma and others)</li>
                                        <li>Git</li>
                                        <li>Socials APIs (Twitter, Slack, Vk, etc.)</li>
                                    </ul>
                                </div>
                                <div class="column">
                                    <b>@lang('fields.devops'):</b>
                                    <ul>
                                        <li>CentOS/Ubuntu</li>
                                        <li>Docker</li>
                                        <li>Bash</li>
                                        <li>Memcached</li>
                                        <li>OpenVPN</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>