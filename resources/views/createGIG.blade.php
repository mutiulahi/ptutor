<!doctype html>
<html lang="en">
<head>

    <!-- =============================================== Basic Page Needs ================================================== -->
    <title>Creation Ads | Private Tutor </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- =============================================== CSS ================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css">

</head>

<body class="gray">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- =============================================== Header Container ================================================= -->
        @extends('layout/header_out')
        <!-- ============================================ Header Container / End =============================================== -->


        <!-- Dashboard Container -->
            {{-- removed --}}
        <!-- Dashboard Sidebar / End -->


        <!--=============================================== Dashboard Content ================================================== -->
        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner">

                <!-- Dashboard Headline -->
                 {{-- updated form --}}
                @if(!empty($ads))
                    <div class="dashboard-headline">
                        <h3>Make changes to your own class ad 💎</h3>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li>Update Ads</li>
                            </ul>
                        </nav>
                    </div>
                    @foreach ($ads as $adsDetail )

                    <div class="row">
                        <form action="adsUpdate" method="POST">
                            @csrf
                            <!-- Dashboard Box -->
                            <div class="col-xl-12">
                                <div class="dashboard-box margin-top-0">

                                    <!-- Headline -->
                                    <div class="headline">
                                        <h3><i class="icon-material-outline-account-circle"></i><strong>What do you have to
                                                offer</strong></h3>
                                    </div>

                                    <input type="hidden" name="hid" value="{{$adsDetail->id}}">

                                    <div class="content with-padding padding-bottom-0">

                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>Which subject do you wish to teach? 🎓</h5>
                                                            <input type="text" class="with-border" name="subject" max="20" @error('subject') style="border: 1px solid #ed9e9e;"@enderror placeholder="e.g : Physics" value="{{$adsDetail->subject}}">
                                                            @error('subject')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>Subject related to your subject skill</h5>
                                                            <input  type="text" class="with-border" name="categories" max="20" @error('categories') style="border: 1px solid #ed9e9e;"@enderror  height="200px" placeholder="e.g : Mathematics" value="{{$adsDetail->categories}}">
                                                            @error('categories')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>Write a beautiful, unique title for your tutor ad 💎</h5>
                                                            <input type="text" class="with-border" name="title_ads" max="20" @error('title_ads') style="border: 1px solid #ed9e9e;"@enderror placeholder="e.g : I will teach you mathematics" value="{{$adsDetail->title_ads}}">
                                                            @error('title_ads')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <!-- Account Type -->
                                                        <div class="submit-field">
                                                            <h5>What type of class do you want to give?</h5>
                                                            <div class="account-type" @error('class_type') style="border: 1px solid #ed9e9e;"@enderror>

                                                                <div>
                                                                    <input type="radio" name="class_type" id="freelancer-radio" @if($adsDetail->class_type == "Individual class") checked @endif class="account-type-radio" value="Individual class"/>
                                                                    <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Individual class</label>
                                                                </div>


                                                                <div>
                                                                    <input type="radio" name="class_type" id="employer-radio" @if($adsDetail->class_type == "Group Class") checked @endif class="account-type-radio" value="Group Class"/>
                                                                    <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-group"></i> Group Class</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" name="class_type" id="Both"  class="account-type-radio " @if($adsDetail->class_type == "Individual and Group Class") checked @endif value="Individual and Group Class"/>
                                                                    <label for="Both" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Both</label>
                                                                </div>
                                                                @error('class_type')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dashboard Box -->
                            <div class="col-xl-12">
                                <div class="dashboard-box">

                                    <!-- Headline -->
                                    <div class="headline">
                                        <h3><i class="icon-material-outline-face"></i><strong>Your class Profile</strong>
                                        </h3>
                                    </div>

                                    <div class="content">
                                        <ul class="fields-ul">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Address</h5>
                                                            <input type="text" class="with-border" name="address" @error('address') style="border: 1px solid #ed9e9e;"@enderror
                                                                placeholder="Bodija Ibadan oyo state" value="{{$adsDetail->address}}">
                                                                @error('address')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                            </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Location (e.g Iwo Osun)</h5>
                                                            <select class="selectpicker with-border" name="meeting_point" @error('meeting_point') style="border: 1px solid #ed9e9e;"@enderror
                                                                data-size="7" value="{{$adsDetail->meeting_point}}">
                                                                <option value="Iwo Osun">Iwo Osun</option>
                                                                <option value="Ede Osun">Ede Osun</option>
                                                                <option value="Ibadan Oyo">Ibadan Oyo</option>
                                                                <option value="Lagos Lagos">Lagos Lagos</option>
                                                            </select>
                                                            @error('meeting_point')
                                                            <span style="color:red;">{{$message}}</span>
                                                        @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Where will your classes be held</h5>
                                                            <select class="selectpicker with-border" name="class_location" @error('class_location') style="border: 1px solid #ed9e9e;"@enderror
                                                                value="{{$adsDetail->class_location}}"
                                                                data-live-search="true">
                                                                <option value="Receive student at my home">I can receive student at my home</option>
                                                                <option value="Give student online class">I can give student online class</option>
                                                                <option value="Travel to the student home">I can travel to the student home</option>
                                                            </select>
                                                            @error('class_location')
                                                            <span style="color:red;">{{$message}}</span>
                                                        @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Which language did you want to use to teach</h5>
                                                            <select class="selectpicker with-border" name="language" @error('language') style="border: 1px solid #ed9e9e;"@enderror
                                                                value="{{$adsDetail->language}}"
                                                                data-live-search="true">
                                                                <option value="Engliah">Engliah</option>
                                                                <option value="Yoruba">Yoruba</option>
                                                                <option value="Igbo">Igbo</option>
                                                                <option value="Awusa">Awusa</option>
                                                            </select>
                                                            @error('language')
                                                            <span style="color:red;">{{$message}}</span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>What method do you intend to use for tutoring</h5>
                                                            <textarea cols="30" rows="5" name="method" @error('method') style="border: 1px solid #ed9e9e;"@enderror
                                                                class="with-border"
                                                                placeholder="E.g My teaching method is ... I base my classes on ... I approach each topic by ..." value="{{$adsDetail->method}}">{{$adsDetail->method}}</textarea>
                                                                @error('method')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                            </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>Tell us more about yourself ✍️</h5>
                                                            <textarea cols="30" rows="5" name="about_tutor" @error('about_tutor') style="border: 1px solid #ed9e9e;"@enderror
                                                                class="with-border"
                                                                placeholder="E.g I am an engineer / computer scientist/ dancer... I have been  giving private lessions since... I have a degree in..." value="{{$adsDetail->about_tutor}}">{{$adsDetail->about_tutor}}</textarea>
                                                                @error('about_tutor')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                            </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Dashboard Box -->
                            <div class="col-xl-12">
                                <div id="test1" class="dashboard-box">

                                    <!-- Headline -->
                                    <div class="headline">
                                        <h3><i class="icon-material-outline-money"></i><strong>Pricing</strong></h3>
                                    </div>

                                    <div class="content with-padding">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>rate / Week (₦)</h5>
                                                    <input type="number" name="week" class="with-border" @error('week') style="border: 1px solid #ed9e9e;"@enderror value="{{$adsDetail->week}}">
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>rate / Month (₦)</h5>
                                                    <input type="number" name="month" class="with-border" @error('month') style="border: 1px solid #ed9e9e;"@enderror value="{{$adsDetail->month}}">
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>rate / Year (₦)</h5>
                                                    <input type="number" name="year" class="with-border" @error('year') style="border: 1px solid #ed9e9e;"@enderror value="{{$adsDetail->year}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-xl-12">
                                <button type="submit" class="button ripple-effect big margin-top-30">Update</button>
                            </div>

                        </form>
                    </div>
                    @endforeach


                @else
                {{-- end updated form --}}
                    <div class="dashboard-headline">
                        <h3>Create your own class ad 💎</h3>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li>Create Ads</li>
                            </ul>
                        </nav>
                    </div>
                    {{-- Normal form --}}
                    <div class="row">
                        <form action="{{route('becometutor')}}" method="POST">
                            @csrf
                            <!-- Dashboard Box -->
                            <div class="col-xl-12">
                                <div class="dashboard-box margin-top-0">

                                    <!-- Headline -->
                                    <div class="headline">
                                        <h3><i class="icon-material-outline-account-circle"></i><strong>What do you have to offer</strong></h3>
                                    </div>

                                    <div class="content with-padding padding-bottom-0">

                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>Which subject do you wish to teach? 🎓</h5>
                                                            <input type="text" class="with-border" name="subject" max="20" value="{{old('subject')}}"  @error('subject') style="border: 1px solid #ed9e9e;"@enderror placeholder="e.g : Physics">
                                                            @error('subject')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>Subject related to your subject skill</h5>
                                                            <input  type="text" class="with-border" name="categories" max="20" value="{{old('categories')}}" @error('categories') style="border: 1px solid #ed9e9e;"@enderror  height="200px" placeholder="e.g : Mathematics">
                                                            @error('categories')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>Write a beautiful, unique title for your tutor ad 💎</h5>
                                                            <input type="text" class="with-border" name="title_ads" max="20" value="{{old('title_ads')}}" @error('title_ads') value="{{old('title_ads')}}" style="border: 1px solid #ed9e9e;"@enderror placeholder="e.g : I will teach you mathematics">
                                                            @error('title_ads')
                                                            <span style="color:red;">{{$message}}</span>
                                                        @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <!-- Account Type -->
                                                        <div class="submit-field">
                                                            <h5>What type of class do you want to give?</h5>

                                                            <div class="account-type"> 
                                                                <div>
                                                                    <input type="radio" name="class_type" id="freelancer-radio"  @if (old('class_type') == 'Individual class') checked  @else  @endif class="account-type-radio" value="Individual class"/>
                                                                    <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Individual class</label>
                                                                </div>

                                                                <div>
                                                                    <input type="radio" name="class_type" id="employer-radio" class="account-type-radio" @if (old('class_type') == 'Group Class') checked  @else  @endif  value="Group Class"/>
                                                                    <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-group"></i> Group Class</label>
                                                                </div>
                                                                <div>
                                                                    <input type="radio" name="class_type" id="Both" class="account-type-radio " @if (old('class_type') == 'Individual and Group Class') checked  @else  @endif value="Individual and Group Class"/>
                                                                    <label for="Both" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Both</label>
                                                                </div> 
                                                                
                                                            </div>
                                                            @error('class_type')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dashboard Box -->
                            <div class="col-xl-12">
                                <div class="dashboard-box">

                                    <!-- Headline -->
                                    <div class="headline">
                                        <h3><i class="icon-material-outline-face"></i><strong>Your class Profile</strong>
                                        </h3>
                                    </div>

                                    <div class="content">
                                        <ul class="fields-ul">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Address</h5>
                                                            <input type="text" class="with-border" name="address" @error('address')  style="border: 1px solid #ed9e9e;"@enderror value="{{old('address')}}" placeholder="Bodija Ibadan oyo state">
                                                            @error('address')
                                                                <span style="color:red;">{{$message}}</span>
                                                               
                                                            @enderror
                                                               
                                                               
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Location (e.g Iwo Osun)</h5>
                                                            <select class="selectpicker with-border" name="meeting_point" @error('meeting_point')  style="border: 1px solid #ed9e9e;"@enderror
                                                                data-size="7" title="Select your location"
                                                                data-live-search="true">
                                                                <option @if (old('meeting_point') == 'Iwo Osun') @else @endif value="Iwo Osun">Iwo Osun</option>
                                                                <option @if (old('meeting_point') == 'Iwo Osun') @else @endif value="Ede Osun">Ede Osun</option>
                                                                <option @if (old('meeting_point') == 'Iwo Osun') @else @endif value="Ibadan Oyo">Ibadan Oyo</option>
                                                                <option @if (old('meeting_point') == 'Iwo Osun') @else @endif value="Lagos Lagos">Lagos Lagos</option>
                                                            </select>
                                                            @error('class_type')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Where will your classes be held</h5>
                                                            <select class="selectpicker with-border" name="class_location" @error('class_location') value="{{old('class_location')}}" style="border: 1px solid #ed9e9e;"@enderror
                                                                data-size="7" title="Select location where your classes will be held"
                                                                data-live-search="true">
                                                                <option value="Receive student at my home">I can receive student at my home</option>
                                                                <option value="Give student online class">I can give student online class</option>
                                                                <option value="Travel to the student home">I can travel to the student home</option>
                                                                <option value="Both online and the student home">Both online and the student home</option>
                                                                <option value="Travel to the student home">I can travel to the student home</option>
                                                            </select>
                                                            @error('class_location')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Which language will you use to teach</h5>
                                                            <select class="selectpicker with-border" name="language" @error('language') value="{{old('language')}}" style="border: 1px solid #ed9e9e;"@enderror
                                                                data-size="7" title="Select your teaching language"
                                                                data-live-search="true">
                                                                <option value="Engliah">English</option>
                                                                <option value="Yoruba">Yoruba</option>
                                                                <option value="Igbo">Igbo</option>
                                                                <option value="Awusa">Awusa</option>
                                                            </select>
                                                            @error('language')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>What method do you intend to use for tutoring</h5>
                                                            <textarea cols="30" rows="5" name="method" @error('method') value="{{old('method')}}" style="border: 1px solid #ed9e9e;"@enderror
                                                                class="with-border"
                                                                placeholder="E.g My teaching method is ... I base my classes on ... I approach each topic by ...">{{old('method')}}</textarea>
                                                            @error('method')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                            </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="submit-field">
                                                            <h5>Tell us more about yourself ✍️</h5>
                                                            <textarea cols="30" rows="5" name="about_tutor" @error('about_tutor') value="{{old('about_tutor')}}" style="border: 1px solid #ed9e9e;"@enderror
                                                                class="with-border"
                                                                placeholder="E.g I am an engineer / computer scientist/ dancer... I have been  giving private lessions since... I have a degree in..."> {{old('about_tutor')}}</textarea>
                                                            @error('about_tutor')
                                                                <span style="color:red;">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Dashboard Box -->
                            <div class="col-xl-12">
                                <div id="test1" class="dashboard-box">

                                    <!-- Headline -->
                                    <div class="headline">
                                        <h3><i class="icon-material-outline-money"></i><strong>Pricing</strong></h3>
                                    </div>

                                    <div class="content with-padding">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>rate / Week (₦)</h5>
                                                    <input type="number" name="week" class="with-border" @error('week') value="{{old('week')}}" style="border: 1px solid #ed9e9e;"@enderror>
                                                    @error('week')
                                                        <span style="color:red;">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>rate / Month (₦)</h5>
                                                    <input type="number" name="month" class="with-border" @error('month') value="{{old('month')}}" style="border: 1px solid #ed9e9e;"@enderror>
                                                    @error('month')
                                                        <span style="color:red;">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>rate / Year (₦)</h5>
                                                    <input type="number" name="year" class="with-border" @error('year') value="{{old('year')}}" style="border: 1px solid #ed9e9e;"@enderror>
                                                    @error('year')
                                                        <span style="color:red;">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-xl-12">
                                <button type="submit" class="button ripple-effect big margin-top-30">Published class ad</button>
                            </div>

                        </form>
                    </div>
                {{-- End normal form --}}
                @endif



                <!-- Footer -->
                <div class="dashboard-footer-spacer"></div>
                <div class="small-footer margin-top-15">
                    <div class="small-footer-copyrights">
                        © 2019 <strong>Hireo</strong>. All Rights Reserved.
                    </div>
                    <ul class="footer-social-links">
                        <li>
                            <a href="#" title="Facebook" data-tippy-placement="top">
                                <i class="icon-brand-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter" data-tippy-placement="top">
                                <i class="icon-brand-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Google Plus" data-tippy-placement="top">
                                <i class="icon-brand-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="LinkedIn" data-tippy-placement="top">
                                <i class="icon-brand-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Footer / End -->

            </div>
        </div>
        <!-- Dashboard Content / End -->

    </div>
    <!-- Dashboard Container / End -->

    </div>
    <!-- Wrapper / End -->


    <!-- Scripts
================================================== -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-migrate-3.1.0.min.html"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/tippy.all.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/snackbar.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });

    </script>

    <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
    <script src="js/chart.min.js"></script>
    <script>
        Chart.defaults.global.defaultFontFamily = "Nunito";
        Chart.defaults.global.defaultFontColor = '#888';
        Chart.defaults.global.defaultFontSize = '14';

        var ctx = document.getElementById('chart').getContext('2d');

        var chart = new Chart(ctx, {
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                // Information about the dataset
                datasets: [{
                    label: "Views",
                    backgroundColor: 'rgba(42,65,232,0.08)',
                    borderColor: '#2a41e8',
                    borderWidth: "3",
                    data: [196, 132, 215, 362, 210, 252],
                    pointRadius: 5,
                    pointHoverRadius: 5,
                    pointHitRadius: 10,
                    pointBackgroundColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointBorderWidth: "2",
                }]
            },

            // Configuration options
            options: {

                layout: {
                    padding: 10,
                },

                legend: {
                    display: false
                },
                title: {
                    display: false
                },

                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            borderDash: [6, 10],
                            color: "#d8d8d8",
                            lineWidth: 1,
                        },
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            display: false
                        },
                    }],
                },

                tooltips: {
                    backgroundColor: '#333',
                    titleFontSize: 13,
                    titleFontColor: '#fff',
                    bodyFontColor: '#fff',
                    bodyFontSize: 13,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    intersect: false
                }
            },


        });

    </script>


    <!-- Google Autocomplete -->
    <script>
        function initAutocomplete() {
            var options = {
                types: ['(cities)'],
                componentRestrictions: {country: "us"}
            };

            var input = document.getElementById('autocomplete-input');
            var autocomplete = new google.maps.places.Autocomplete(input, options);

            if ($('.submit-field')[0]) {
                setTimeout(function() {
                    $(".pac-container").prependTo("#autocomplete-container");
                }, 300);
            }
        }

    </script>

    <!-- Google API -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete">
    </script>

    <script>
        //ES5
        // const NaijaStates = require('naija-state-local-government');

        // ES6
        // import NaijaStates from 'naija-state-local-government';

        // console.log(NaijaStates.all());
        // console.log(NaijaStates.states());
        // console.log(NaijaStates.lgas("Oyo"))

    </script>
</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:05 GMT -->

</html>
