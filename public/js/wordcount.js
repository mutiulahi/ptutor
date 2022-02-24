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

function countWord() {

    // Get the input text value
    var words = document
        .getElementById("word").value;

    // Initialize the word counter
    var count = 0;

    // Split the words on each
    // space character
    var split = words.split(' ');

    // Loop through the words and
    // increase the counter when
    // each split word is not empty
    for (var i = 0; i < split.length; i++) {
        if (split[i] != "") {
            count += 1;
        }
    }

    // Display it as output
    document.getElementById("show")
        .innerHTML = count;
}