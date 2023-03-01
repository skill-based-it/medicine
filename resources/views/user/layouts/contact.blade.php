@extends('user.layouts.index')
@section('content')


<section class="contactsection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <strong>We Connect Worldwide...</strong>
                <div class="mt-3">
                    <span>Time and again, Agappe core values and guiding principles have served as sources of strength for the company and still do today. Agappe values date back to its founding in 1995 and grew from BIRTH.</span>
                </div>
            </div>

            <div class="col-md-7">
                <center><img src="{{ asset("user") }}/image/contact-us-page-new-one-small_1606994164.webp" class="img-fluid"></center>
            </div>
        </div>
    </div>
</section>


<section class="customersection2 pt-5">
    <div class="container">
        <strong>CUSTOMER RELATIONSHIP DESK</strong>
        <div class="row">
            <div class="col-md-6">

                <div class="mt-4">
                    Talk to us<br>
                    <a href="">Tel:+41 41 780 60 10</a>
                </div>
                <div class="mt-4">
                    Write to us<br>
                    <a href="">Official : info@agappeswiss.com</a><br>
                    <a href="">Marketing : marketing@agappeswiss.com</a><br>
                    <a href="">Service : service@agappeswiss.com</a>
                </div>
                
            </div>

            <div class="col-md-6 row">
                <div class="form-group col-md-12">
                    <input type="text" name="" placeholder="Your Full Name" class="form-control">
                </div>
                <div class="form-group col-md-6 mt-4">
                    <input type="text" name="" placeholder="Email" class="form-control">
                </div>
                <div class="form-group col-md-6 mt-4">
                    <input type="text" name="" placeholder="Phone Number" class="form-control">
                </div>

                <div class="form-group col-md-12 mt-4">
                    <select class="form-control" name="">
                        <option>Select Location</option>
                    </select>
                </div>
                <div class="form-group col-md-12 mt-4">
                    <textarea rows="4" class="form-control" placeholder="Tell us about you"></textarea>
                </div>

                <div class="form-group mt-4">
                    <button class="float-end">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>









<section class="customersection3 pt-5 pb-5 mt-5">
    <div class="container">
        <center><strong>Global Access Point</strong></center>
        <br>
        <div class="row">
            <div class="col-md-6 mt-4 bg-white">
                <img src="{{ asset("user") }}/image/global-branch-image-min_1606396583.webp" class="img-fluid w-100">
            </div>

            <div class="col-md-6 mt-4 bg-white p-4">
                <label>Switzerland (Global Office)</label>
                <div class="mt-4 span">
                    AGAPPE DIAGNOSTICS SWITZERLAND GmbH<br>
                    Knonauerstrasse 54 - 6330 Cham
                    Switzerland
                    <hr>
                    Tel: +41 41 780 60 10<br>

                    Fax: +41 41 780 60 11<br>

                    Email: info@agappeswiss.com
                </div>
            </div>
        </div>
    </div>
</section>






@endsection