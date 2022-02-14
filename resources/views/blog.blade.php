@extends('layout')

@section('content')
 <img src="img/blog.png" width="60%">

    <article class="all-browsers">
        <h1>Article vs Section</h1>
        <article class="browser">
            <h3>Smashing Magazine</h3>
            <p>Smashing Magazine is van mening dat je beter article kan gebruiken dan section. <BR> <a
                    href="https://www.smashingmagazine.com/2020/01/html5-article-section/">SmashingMagazine</a> </p>
        </article>
        <article class="browser">
            <h3>Stackoverflow</h3>
            <p>Stackoverflow is een forum waar een discussie plaats heeft gevonden over het gebruik van article en section
                en
                of je nou article in section moet gebruiken of andersom.<BR> <a
                    href="https://stackoverflow.com/questions/7549561/section-vs-article-html5">Stackoverflow</a></p>
        </article>
        <article class="browser">
            <h3>W3 Schools</h3>
            <p>W3 Schools legt uit dat een article een eigen document is en dat section een deel van een document is.<BR> <a
                    href="https://www.w3schools.com/html/html5_semantic_elements.asp">W3Schools</a></p>
        </article>
    </article>
@endsection
