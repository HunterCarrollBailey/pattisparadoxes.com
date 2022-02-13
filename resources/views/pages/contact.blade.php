@extends('layout')
@section('main')
    <section id="blogHeader" class="bg-blog-header text-light mt-2 p-2 fade-from-bt-2s" name="Blog Header">
        <div class="container text-center p-3">
            <h1>Contact Us</h1>
            <p class="text-start">Submit the form below with your inquiry and we will get back to you shortly.</p>
        </div>
    </section>

    <section class="container-fluid text-dark mt-2 p-2">
        <div class="container col-8 align-self-center">
            {{--        Hubspot Contact Form    --}}
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
            <script>
                hbspt.forms.create({
                    region: "na1",
                    portalId: "20975247",
                    formId: "b7d3a14b-bc93-42f8-a777-2ff6924baed1"
                });
            </script>
        </div>
    </section>
@endsection
