@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 col-sm-10">
            <h2>Get In Touch</h2>
            <p class="text-muted">if having trouble with this service, please,
                <a href="{{ config('laracarte.admin_suppotr_email') }}">ask fro help</a>
            </p>

            <form action="{{ route('contact_path') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group ">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" placeholder="Your name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name"
                        required="required" value="{{ old("name") }}">
                    {!! $errors->first('name', '<span class="help-block error">:message</span>') !!}
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email "
                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        required="required" value="{{ old("email") }}">
                    {!! $errors->first('email', '<span class="help-block error">:message</span>') !!}
                </div>
                <div class="form-group">
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Tipping your mail here!"
                        class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                        required="required"> {{ old("message") }} </textarea>
                    {!! $errors->first('message', '<span class="help-block error">:message</span>') !!}
                </div>
                <div class="form-group">
                    <button class="btn btn-dark btn-block" type="submit">Submit Enquiry &raquo;</button>
                </div>

            </form>
        </div>

        <div class="col-md-2 col-sm-1"></div>
    </div>
</div>
@endsection
