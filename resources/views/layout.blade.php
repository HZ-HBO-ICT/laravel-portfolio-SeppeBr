<!DOCTYPE html>
<html>

<head>
    <style>

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/test.css">
</head>

<header>
    <div class="sidenav">
        <a href="https://www.w3schools.com/">W3 Schools</a>
        <a href="https://portal.hz.nl/">HZ portal</a>
        <a href="https://learn.hz.nl/my/">HZ learn</a>
    </div>
    <div style="margin-left:13%">
        <section>
            <ul>
                <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ Request::path() === 'profile' ? 'active' : '' }}"><a href="/profile">Profiel</a></li>
                <li class="{{ Request::path() === 'blog' ? 'active' : '' }}"><a href="/blog">Blog</a></li>
                <li class="{{ Request::path() === 'faq' ? 'active' : '' }}"><a href="/faq">FAQ</a></li>
                <li class="{{ Request::path() === 'motivatie' ? 'active' : '' }}"><a href="/motivatie">Motivatie</a>
                </li>
                <li class="{{ Request::path() === 'surprise' ? 'active' : '' }}"><a href="/surprise">MySurprise</a></li>
                <li style="float:right" class="{{ Request::path() === 'tabel' ? 'active' : '' }}"><a
                        href="/tabel">Tabel</a></li>
            </ul>
        </section>
    </div>
</header>

<body style="margin-left: 15%">
@yield('content')
</body>

</html>
