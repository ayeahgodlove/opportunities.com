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

                @if (session()->has('success'))
                    <div class="alert alert-success mt-3">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session()->get('error') }}
                    </div>
                @endif

            </div>

            <div class="col-lg-8 p-3 p-md-5">
                <section class="pr-lg-5 contact-form">
                    <form action="{{ route('contact.store') }}" method="POST">
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="" />
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="" />
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="" />
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" value="">
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Send Message</button>
                    </form>

                </section>
            </div>
        </div>
    </div>
@endsection
