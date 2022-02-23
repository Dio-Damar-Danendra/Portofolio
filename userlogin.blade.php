@extends('design.layout')

@section('title', 'User Login - Amazing E-Book')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="row mb-10">
                  <div class="col mb-10" style="margin-top: 12pt; font-family: Arial, Helvetica, sans-serif; font-size: 20pt"><u>{{ __('Log In') }}</u></div>

                      <form method="POST, HEAD" action="{{ LaravelLocalization::localizeUrl('userlogin') }}">
                          @csrf
                          <div class="row mb-10" style="margin-right: 281pt">
                              <label for="email" class="col-md-5 col-form-label">@lang('E-mail Address: ')</label>
  
                              <div class="col mt-10">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>  
                          <br>
                          <div class="row mb-10" style="margin-right: 281pt">
                              <label for="password" class="col-md-5 col-form-label">@lang('Password: ')</label>
                              <div class="col mt-10">
                              <input id="password" type="password" style="margin-top: 1%" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">
  
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                          <br>
                          <div class="row mb-10">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary" style="background-color: " onclick="">
                                      {{ __('Login') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection