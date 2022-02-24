<!doctype html>
<html lang="en">
<head>

    <!-- =============================================== Basic Page Needs ================================================== -->
    <title>Creation | Private Tutor </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- =============================================== CSS ================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors/blue.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .autocomplete {
    /*the container must be positioned relative:*/
    position: relative;
    display: inline-block;
    }
    .autocomplete-items {
    position: absolute;
    border: 1px solid #d4d4d4;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    /*position the autocomplete items to be the same width as the container:*/
    top: 100%;
    left: 0;
    right: 0;
    }
    .autocomplete-items div {
    padding: 10px;
    cursor: pointer;
    background-color: #fff; 
    }
    .autocomplete-items div:hover {
    /*when hovering an item:*/
    background-color: #e9e9e9;
    }
    .autocomplete-active {
    /*when navigating through the items using the arrow keys:*/
    background-color: DodgerBlue !important;
    color: #ffffff;
    }
</style>
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
                                                                <div class="autocomplete">
                                                                    <input id="myInput" type="text" value="" name="location" placeholder="Select your location" @error('location')  style="border: 1px solid #ed9e9e;"@enderror>
                                                                  </div>
                                                                {{-- <input type="text" class="with-border" name="location" @error('location')  style="border: 1px solid #ed9e9e;"@enderror value="{{old('location')}}" placeholder="Bodija Ibadan oyo state"> --}}
                                                                @error('location')
                                                                    <span style="color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6">
                                                            <div class="submit-field">
                                                                <h5>Where will your classes be held</h5>
                                                                <select class="selectpicker with-border" name="class_location" value="{{old('class_location')}}" @error('class_location') style="border: 1px solid #ed9e9e;"@enderror
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
                                                                <h5>What method do you intend to use for tutoring</h5>
                                                                <textarea cols="30" rows="5" name="method" minlength="200" value="{{old('method')}}" @error('method') style="border: 1px solid #ed9e9e;"@enderror
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
    <!-- Dependencies -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script> --}}
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
   <script>
       var path = "{{route('autocomplete')}}";

       $('input.typeahead').typeahead({
           source: function(terms,process){
               return $.get(path,{terms:terms},function(data){
                   return process(data);
               })
           }
       })
   </script>
   <script> 
            // var countries = [
            //     @foreach ($state_lga as $item)
            //         "{{$item->location}}",
            //     @endforeach        
            // ];
            function autocomplete(inp, arr) {
                /*the autocomplete function takes two arguments,
                the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
            x[i].parentNode.removeChild(x[i]);
            }
        }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
        }
    </script>
    <script>
        autocomplete(document.getElementById("myInput"), countries);
    </script>
</body> 
</html>







<script>

    // var path = "{{ url('location') }}";
    
    // $('#location').typeahead({
    
    //     source: function(query, process){
    
    //         return $.get(path, {query:query}, function(data){
    
    //             return process(data);
    
    //         });
    
    //     }
    
    // });

    // <script>
        $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  var path = "{{ route('autocomplete') }}";
  $('#location').typeahead({
      source:  function (query, process) {
      return $.post(path, { term: query }, function (data) {
              return process(data);
          });
      }
  });
</script>