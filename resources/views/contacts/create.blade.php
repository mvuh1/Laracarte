@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10">
                <h2 >Get In Touch</h2>
                <p class="text-muted">if having trouble with this service, please,
                    <a href="mailto:nazirmvuh69@gmail.com">ask fro help</a>
                </p>

                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="titre" placeholder="Your name" value=""
                            class="form-control" id="name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" name="email" placeholder="Your email " value=""
                            class="form-control" id="email" required="required">
                    </div>
                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" cols="30" rows="10" placeholder="Tipping your mail here!"
                            class="form-control" id="message" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark btn-block">Submit Enquiry &raquo;</button>
                    </div>

                </form>
            </div>

            <div class="col-md-2 col-sm-1"></div>
        </div>
    </div>
@endsection
