@extends('design.layout')

@section('title', 'Sign Up - Amazing E-Book')
<style>
/* Dropdown Button */
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  
  /* Dropdown button on hover & focus */
  .dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
  }
  
  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #ddd}
  
  /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
  .show {display:block;}
  </style>

@section('content')
<br>
    <form method="POST, HEAD" action="{{ LaravelLocalization::localizeURL('usersignup') }}">
      @csrf
      <div class="flex-box">
          <label for="firstname" class="col-form-label">{{__('First Name: ')}}</label>
          <input id="firstname" type="text" class="form-control col mt-10 @error('firstname') is-invalid @enderror" name="firstname" required autocomplete="firstname">
          <label for="middlename" class="col-form-label">{{__('Middle Name: ')}}</label>
          <input id="middlename" type="text" class="form-control col mt-8 @error('middlename') is-invalid @enderror" name="middlename">
              
          @error('firstname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
    </div> 
      <br>
      <div class="flex-box">
        <label for="lastname" class="col-md-5 col-form-label">{{__('Last Name: ')}}</label>
        <input id="lastname" type="text" class="form-control col mt-10 @error('lastname') is-invalid @enderror" name="lastname" required autocomplete="lastname">
        <label for="email" class="col-md-2 col-form-label">@lang('E-mail Address: ')</label>
        <input id="email" type="email" class="form-control col mt-8 @error('email') is-invalid @enderror" name="email" required autocomplete="email">
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div> 
    <br>
      <div class="row mb-10" style="margin-right: 281pt">
        <label for="gender" class="col-md-5 col-form-label">{{ __('Gender: ') }}</label>   
        <label for="male" class="col-mt-1 col-form-label">Male</label>
        <input type="radio" style="margin-bottom: 13px" id="male" name="gender" value="Male"> 
        <label for="female" style="margin-bottom: 13px" class="col-form-label">Female</label><br>
        <input type="radio" style="margin-bottom: 13px" id="female" name="gender" value="Female">
        <label for="role" class="row-md-1 col-form-label">{{ __('Role: ') }}</label>   
        <input id="role" type="checkbox" style="margin-block-end: 1%" class="col mt-10 form-control @error('role') is-invalid @enderror" name="role" required autocomplete="role">
    </div>
    <br>
    <div class="dropdown">
        <label for="gender" class="col-md-5 col-form-label">{{ __('Gender: ') }}</label>  
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary" style="background-color: rgb(255, 255, 101); color: black">
                {{__('Login')}}
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