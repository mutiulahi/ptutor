// var count = document.getElementById('count');
// var input = document.getElementById('input');
// input.addEventListener('keyup', function(e) {
//     // wordCounter(e.target.value);
//     function wordCounter(text) {
//         var text = input.value;
//         var wordCount = 0;
//         for (var i = 0; i <= text.length; i++) {
//           if (text.charAt(i) == ' ') {
//             wordCount++;
//           }
//         }
//         count.innerText = wordCount;
//       }

// });
document.getElementById('about_youerror').style.display = 'none';
document.getElementById('methoderror').style.display = 'none';
document.getElementById('title_error').style.display = 'none';

function methodcountWord() {

    // Get the input text value
    var methods = document
        .getElementById("method").value;

    // Initialize the word counter
    var count = 0;

    // Split the method on each
    // space character
    var split = methods.split(' ');

    // Loop through the method and
    // increase the counter when
    // each split word is not empty
    for (var i = 0; i < split.length; i++) {
        if (split[i] != "") {
            count += 1;
        }
    }

    // Display it as output
    document.getElementById("show_method")
        .innerHTML = count;

    document.getElementById('methoderror').style.display = 'none';

    if (count < 40 || count > 100) {
        document.getElementById("show_method")
            .style.color = "red";
        document.getElementById("method_over")
            .style.color = "red";
        document.getElementById('published').disabled = true;
        document.getElementById('published').style.backgroundColor = 'gray';
        document.getElementById('methoderror').style.display = 'block';
    } else {
        document.getElementById("show_method")
            .style.color = "green";
        document.getElementById("method_over")
            .style.color = "green";
        document.getElementById('published').disabled = false;
        document.getElementById('published').style.backgroundColor = 'green';
        document.getElementById('methoderror').style.display = 'none';


    }

}

function about_youcountWord() {

    // Get the input text value
    var about_yous = document
        .getElementById("about_you").value;

    // Initialize the word counterabout_youcountWord
    var count = 0;

    // Split the about_you on each
    // space character
    var split = about_yous.split(' ');

    // Loop through the about_you and
    // increase the counter when
    // each split word is not empty
    for (var i = 0; i < split.length; i++) {
        if (split[i] != "") {
            count += 1;
        }
    }

    // Display it as output
    document.getElementById("show_about_you")
        .innerHTML = count;
    document.getElementById('about_youerror').style.display = 'none';

    if (count < 40 || count > 100) {
        document.getElementById("show_about_you")
            .style.color = "red";
        document.getElementById("about_you_over")
            .style.color = "red";
        document.getElementById('published').disabled = true;
        document.getElementById('published').style.backgroundColor = 'gray';
        document.getElementById('about_youerror').style.display = 'block';
    } else {
        document.getElementById("show_about_you")
            .style.color = "green";
        document.getElementById("about_you_over")
            .style.color = "green";
        document.getElementById('published').disabled = false;
        document.getElementById('published').style.backgroundColor = 'green';


    }

}

function title_word() {

    // Get the input text value
    var title = document.getElementById("title_ads").value;

    // Initialize the word counter
    var count = 0;

    // Split the method on each
    // space character
    var split = title.split(' ');

    // Loop through the method and
    // increase the counter when
    // each split word is not empty
    for (var i = 0; i < split.length; i++) {
        if (split[i] != "") {
            count += 1;
        }
    }

    if (count < 5 || count > 15) { 
        document.getElementById('published').disabled = true;
        document.getElementById('published').style.backgroundColor = 'gray';
        document.getElementById('title_error').style.display = 'block';
    } else {
        document.getElementById('published').disabled = false;
        document.getElementById('published').style.backgroundColor = 'green';
        document.getElementById('title_error').style.display = 'none';


    }

}