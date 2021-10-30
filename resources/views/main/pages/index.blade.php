@extends('main.render')

@section('title', 'Home')

@section('content')
    <header class="bg-dark" id="half-img">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 mb-2 text-white">A Bootstrap 5 template for modern businesses</h1>
                        <p class="lead fw-normal mb-4 text-white-50">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container py-3 mt-3">
        <hr>
        <h1> <span style="color: teal"># </span>Nossos Parceiros</h1>
        <hr>

        <div class="row px-3 py-3">
            <div class="col col-12 col-lg-3 mb-3">
                <div class="card">
                    <img src="https://images.pexels.com/photos/269077/pexels-photo-269077.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-secondary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-lg-3 mb-3">
                <div class="card" >
                    <img src="https://images.pexels.com/photos/269077/pexels-photo-269077.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-secondary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-lg-3 mb-3">
                <div class="card">
                    <img src="https://images.pexels.com/photos/269077/pexels-photo-269077.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-secondary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-lg-3 mb-3">
                <div class="card">
                    <img src="https://images.pexels.com/photos/269077/pexels-photo-269077.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-secondary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-3 mt-3">
        <hr>
        <h1><span style="color: teal"># </span>Sobre Nós</h1>
        <hr>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum urna vitae nibh tristique, ac faucibus felis egestas. Sed ultrices turpis vel nisi semper pellentesque. Vestibulum elementum augue eros, eu placerat lacus accumsan ut. Ut sed velit vitae lectus sodales maximus. Nulla sed egestas leo. Aliquam at urna neque. Cras pulvinar et massa et auctor. Etiam pellentesque consectetur blandit. Quisque vulputate sed lectus sed mattis. Aliquam in ante semper, rutrum ipsum vel, efficitur eros.</p>

        <p>Maecenas vel mollis odio. Donec imperdiet fermentum dignissim. In ac aliquam magna, quis aliquet quam. Quisque sed porttitor sem, in porttitor urna. Phasellus et ligula sapien. Maecenas tincidunt nisl ac risus interdum, quis facilisis enim pretium. Ut pellentesque egestas erat vitae tempus. Donec sed euismod mi.</p>
    </section>
@endsection


