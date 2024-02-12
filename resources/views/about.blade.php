@extends('frontLayouts.index')

@section('main')<main role="main">

    <section>
        <div style="background: url(../assets/img/gb.webp)" class="page-holder bg-cover">

            <div class="container py-5">
                <br>
                <br>
                <header class="text-center text-white py-5">
                    <h1 class="display-4 font-weight-bold mb-4 text-white " style="text-shadow: 3px 4px #0707078F;">ABOUT US</h1>
                    <p class="lead mb-0">Artfric</p>
                    <p class="font-italic"> 
                        <a href="https://bootstrapious.com" class="text-white">
                            <u></u></a>


                    </p>
                    <div class="card blur blur-rounded" style="padding: 10px; text-align:start;">
                        <p class="lead mt-4 text-dark"> <strong>Welcome to Artfric!</strong> <br> We are a passionate community of art lovers and creators, dedicated to showcasing the beauty and diversity of art from Africa. Our mission is to provide a platform for artists to share their unique visions and connect with art enthusiasts globally.

                            <br>At Artfric, we curate a carefully selected collection of captivating artworks, spanning various mediums and styles. Each piece reflects the essence of creativity and craftsmanship, fostering a deeper appreciation for the artistic journey.
        
                             We take pride in supporting emerging and established artists, offering them opportunities to showcase their talents and thrive in the art world. <br><br>Through our events, exhibitions, and resources, we aim to inspire, engage, and build a vibrant community that celebrates the transformative power of art.
        
                             <br>Join us on this exciting journey of artistic exploration and discovery. Let's celebrate the magic of art together!
                        </p>
                    </div>
                    
                </header>
            </div>
        </div>
    </section>
    
</main>
@include('art_request_popup')

@endsection