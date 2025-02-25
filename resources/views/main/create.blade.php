@extends("_layouts.main_layout")

@section("title")
About BCR
@endsection

@section("content")
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- this route take u to /main/patients -->
         <a class="navbar-brand" href="/doctor">الرئيسية</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about"> الاحصائيات </a></li>
            <li><a href="/main/TestData"> شخص نفسك</a></li>
            <li><a href="/main/about"> حول </a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">المزيد <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/main/index">Log Out<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/casual/img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Sign Up Doctor Account</span>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br> <br>

    <section>
        
          <!-- BEGIN FORM-->

  <form action="/doctor/create" method="post" class="form-horizontal">
    {{csrf_field()}}
      <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-push-1">
              <div class="form-body">

                  <div class="form-group">
                      <input type="text" class="form-control" value="{{old('first_name')}}"
                      name="first_name" id="first_name" placeholder="first_name">
                  </div>

                  <div class="form-group">
                      <input type="text" class="form-control" value="{{old('last_name')}}"
                       name="last_name" id="last_name" placeholder="last_name">
                  </div>

                  <div class="form-group">
                      <div class="input-group">
                          <span class="input-group-addon">
                              <i class="fa fa-envelope"></i>
                          </span>
                          <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email"
                          placeholder="Email Address"> </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                          <input type="password" class="form-control" value="{{old('Password')}}" name="password" id="password"
                          placeholder="Password">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                          <input type="password" class="form-control" name="Confirm Password" id="Confirm Password"
                          placeholder="Confirm Password">
                      </div>

                  </div>
                  <div class="form-group">
                      <select required class="form-control" name="country_id" id="country_id" placeholder="country_id">
                        <option value=""> Select Country </option>
                        @foreach($countries as $c)
                            <option  {{$c->id==old('country_id')?"selected":""}} value="{{$c->id}}">{{$c->country_name}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" value="{{old('phone_number')}}"
                       name="phone_number" id="phone_number" placeholder="phone_number">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" value="{{old('Doctor_ID')}}"
                      name="Doctor_ID" id="Doctor_ID" placeholder="Doctor_ID">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" value="{{old('job_id')}}"
                       name="job_id" id="job_id" placeholder="job_id">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" value="{{old('hospital_name')}}"
                       name="hospital_name" id="hospital_name"  placeholder="hospital_name">
                  </div>
        <div class="form-group form-md-checkboxes">
                          <div class="col-md-9">
                              <div class="md-checkbox-inline">
                                  <div class="md-checkbox">
                                      <input type="checkbox" id="checkbox1_5" name="checkboxes2[]" value="3" class="md-check">
                                      <label for="checkbox1_5">
                                          <span></span>
                                          <span class="check"></span>
                                          <span class="box"></span>  I agree with terms and conditions </label>
                                  </div>
                              </div>
                          </div>
                      </div>

        <div class="container">
             <div class="row">
                <div class="col-md-2 col-md- push-8">
                  <div class="form-actions">
                     <button ?"selected":"" type="submit" class="btn green">Sign Up</button>
                  <a href="/create">  <button  type="button" class="btn default">Cancel</button> </a>
                </div>
            </div>
         </div>
      </div>

      <div class="col-md-8 col-md-push-6">
        <a href="/">Already have an account? sign in
        </a>
      </div>
</form>
</section>
<br><br>


@endsection
