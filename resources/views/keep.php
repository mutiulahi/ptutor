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
                    <div class="row">
                        <form action="{{route('becometutor')}}" method="POST">
                            @csrf
                            <!-- Dashboard Box -->
                            <div class="col-ms-12">
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