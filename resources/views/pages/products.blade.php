@extends('layout')
@section('main')
    <section id="blogHeader" class="bg-products-header text-light mt-2 p-2 fade-from-bt-2s" name="Blog Header">
        <div class="container text-center p-3">
            <h1>Our Products & Services</h1>
            <p class="text-start">Below is a list of some of the products and services we provide along.
                If you have any additional questions regarding these please feel free to contact sales@pattisparadoxes.net or visit our
                <a class="text-light" href="/contact">Contact</a> page for more information.</p>
        </div>
    </section>

    <section class="container-fluid p-2 fade-from-bt-2s5" name="Core Values">
        <div class="container">
            <div class="row mb-2">
                <div class="col fade-from-bt-2s5 bg-lght">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                            <h3 class="mb-1 text-primary text-center">Basic Web Design</h3>
                            <p class="card-text mb-auto">
                                Our team has several years of experience working with the latest and greatest technologies in web design.
                                We pride ourselves in our ability to help customer express their creative style and create websites that fit their online profile.
                                We love new ideas and innovation as well as tried and true businesses, so if you have a design and need someone to bring it to life online please reach out
                                and see if our team can help you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col fade-from-bt-2s5 bg-lght">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                            <h3 class="mb-1 text-primary text-center">Web Application Development</h3>
                            <p class="card-text mb-auto">
                                We love to help provide our customers with whatever applications they may need, we take on new projects as our schedule allows.
                                However, we are always happy to do an initial consultation on an application to see if our team can meet your business needs.
                                We are always looking to expand into new projects so please do not hesitate to reach out if you have any questions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
