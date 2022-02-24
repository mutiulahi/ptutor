<!doctype html>
<html lang="en">
<head>

    <!-- =============================================== Basic Page Needs ================================================== -->
    <title>Creation | Private Tutor </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- =============================================== CSS ================================================== --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css"> 
</head>

<body class="gray">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- =============================================== Header Container ================================================= -->
        {{-- @extends('layout/header_out') --}}
        @include('layout/header_out')
        <!-- ============================================ Header Container / End =============================================== -->


        <!-- Dashboard Container -->
        <div class="dashboard-container">

             <!-- Dashboard Sidebar -->
                {{-- removed --}}
            <!-- Dashboard Sidebar / End -->

            <!--=============================================== Dashboard Content ================================================== -->
            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner"> 
                    
                        <div class="dashboard-headline">
                            <h3>Create your own class ad 💎</h3>

                            <!-- Breadcrumbs -->
                            <nav id="breadcrumbs" class="dark">
                                <ul>
                                    <li><a href="{{route('/')}}">Home</a></li>
                                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li>Become Tutor</li>
                                </ul>
                            </nav>
                        </div>

                        {{-- Normal form --}}
                        <form action="{{route('becometutor')}}" method="POST" autocomplete="off">
                            <div class="row"> 
                                @csrf
                                <!-- Dashboard Box -->
                                <div class="col-xl-12">
                                    <div class="dashboard-box margin-top-0">

                                        <!-- Headline -->
                                        <div class="headline">
                                            <h3><i class="icon-material-outline-account-circle"></i> <strong>What do you have to offer</strong></h3>
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
                                                                <h5>Location</h5> 
                                                                <input type="text" class="with-border typeahead" id="location" name="location" @error('location')  style="border: 1px solid #ed9e9e;"@enderror value="{{old('location')}}" placeholder="Bodija Ibadan oyo state">
                                                                @error('location')
                                                                    <span style="color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6">
                                                            <div class="submit-field">
                                                                <h5>Where will your classes be held</h5> 
                                                                <select class="selectpicker default with-border" multiple data-selected-text-format="count" data-size="7" title="All Categories" name="class_location" value="{{old('class_location')}}" @error('class_location') style="border: 1px solid #ed9e9e;"@enderror
                                                                    data-size="7" title="Select location where your classes will be held"
                                                                    data-live-search="true">
                                                                    <option @if (old('class_location') == 'I can receive student at my home') selected @else @endif value="I can receive student at my home">I can receive student at my home</option>
                                                                    <option @if (old('class_location') == 'I can give student online class') selected @else @endif value="I can give student online class">I can give student online class</option>
                                                                    <option @if (old('class_location') == 'I can travel to the student home') selected @else @endif value="I can travel to the student home">I can travel to the student home</option>
                                                                    <option @if (old('class_location') == 'I can teach anywhere base on student decision') selected @else @endif value="I can teach anywhere base on student decision">I can teach anywhere base on student decision</option>
                                                                </select>
                                                                @error('class_location')
                                                                    <span style="color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6">
                                                            <div class="submit-field">
                                                                <h5>Which language will you use to teach</h5>
                                                                <select class="selectpicker with-border" name="language" value="{{old('language')}}" @error('language') style="border: 1px solid #ed9e9e;"@enderror
                                                                    data-size="7" title="Select your teaching language"
                                                                    data-live-search="true">
                                                                    <option @if (old('language') == 'Engliah') selected @else @endif value="Engliah">English</option>
                                                                    <option @if (old('language') == 'Yoruba') selected @else @endif value="Yoruba">Yoruba</option>
                                                                    <option @if (old('language') == 'Igbo') selected @else @endif value="Igbo">Igbo</option>
                                                                    <option @if (old('language') == 'Hausa') selected @else @endif value="Hausa">Hausa</option>
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
                                                                <h5>What method do you intend to use for tutoring </h5>
                                                                <textarea cols="30" rows="5" name="method" id="word" oninput="countWord()" value="{{old('method')}}" @error('method') style="border: 1px solid #ed9e9e;"@enderror
                                                                    class="with-border"
                                                                    placeholder="E.g My teaching method is ... I base my classes on ... I approach each topic by ...">{{old('method')}}</textarea>
                                                                @error('method')
                                                                    <span style="color:red;">{{$message}}</span>
                                                                @enderror 
                                                                <code>minimum of 40 words maximum of 100 words </code> 
                                                                <p>Word Count: <span id="show">0</span></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12">
                                                            <div class="submit-field">
                                                                <h5>Tell us more about yourself ✍️</h5>
                                                                <textarea cols="30" rows="5" minlength="200" name="about_tutor" value="{{old('about_tutor')}}" @error('about_tutor')  style="border: 1px solid #ed9e9e;"@enderror
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
                                                        <input type="number" name="week" class="with-border" value="{{old('week')}}" @error('week') style="border: 1px solid #ed9e9e;"@enderror>
                                                        @error('week')
                                                            <span style="color:red;">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="submit-field">
                                                        <h5>rate / Month (₦)</h5>
                                                        <input type="number" name="month" class="with-border" value="{{old('month')}}" @error('month') style="border: 1px solid #ed9e9e;"@enderror>
                                                        @error('month')
                                                            <span style="color:red;">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-xl-4">
                                                    <div class="submit-field">
                                                        <h5>rate / Year (₦)</h5>
                                                        <input type="number" name="year" class="with-border" value="{{old('year')}}" @error('year') style="border: 1px solid #ed9e9e;"@enderror>
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
                                    <button type="submit" class="button ripple-effect big margin-top-30">   Published class ad</button>
                                </div> 
                            </div>
                        </form>
                    {{-- End normal form --}}
                



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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
    {{-- <script src="js/jquery-3.4.1.min.js"></script> --}}
    {{-- <script src="js/jquery-migrate-3.1.0.min.html"></script> --}}
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

    <script>
        var path = "{{ route('autocomplete')  }}";
        $('input.typeahead').typeahead({
            source:  function (query, process) {
            return $.get(path, { term: query }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
    

    <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
    <script src="js/chart.min.js"></script> 
    <script src="js/wordcount.js"></script>
</body> 
</html>
