@extends('layouts.app')
@section('content')
    {{-- Page Banner --}}
    @include('inc.page__banner')

    <div class="container">
        <div class="row justify-content-center contact-page">
            <div class="align-items-center col-lg-4 p-5 contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Centre Province Yaounde, </li>
                    <li>Cameroon</li>
                    <li>+237 678 - 894- 839</li>
                    <li>globalopportunities@support.com</li>
                </ul>
            </div>

            <div class="col-lg-8 p-3 p-md-5">
                <section class="pr-lg-5 contact-form">
                    <form method="post" action="" class="" role="form">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="names" class="form-control" id="names" value="" />
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="" />
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subject" value="">
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="body">Message</label>
                            <textarea name="body" class="form-control" id="body" rows="5"></textarea>
                        </div>
                        <button class="btn btn-warning" name="submit" type="submit">Send Message</button>
                    </form>

                </section>
            </div>
        </div>
    </div>
@endsection
