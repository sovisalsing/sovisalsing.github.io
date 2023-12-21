function displayDateTime() {
    // Get the input text
    var inputText = document.getElementById('textInput').value;

    // Get the uploaded file
    var fileInput = document.getElementById('photoInput');
    var photoFile = fileInput.files[0];

    // Get the current date and time
    var currentDateTime = new Date();
    var day = currentDateTime.getDate();
    var month = currentDateTime.getMonth() + 1; // Months are zero-based
    var year = currentDateTime.getFullYear();
    var hour = currentDateTime.getHours();
    var minute = currentDateTime.getMinutes();

    // Display the result
    var resultDiv = document.getElementById('result');

    // Create a new post div
    var postDiv = document.createElement('div');
    postDiv.className = 'post';

    postDiv.innerHTML = `
        <p>Date: ${day}/${month}/${year}</p>
        <p>Time: ${hour}:${minute}</p>
        <p>Text: ${inputText}</p>
    `;

    // Display photo if uploaded
    if (photoFile) {
        var photoURL = URL.createObjectURL(photoFile);
        var photoImg = document.createElement('img');
        photoImg.src = photoURL;
        photoImg.style.maxWidth = '100%';
        postDiv.appendChild(photoImg);
    }

    // Append the post div to the result container
    resultDiv.appendChild(postDiv);

    // Clear input fields
    document.getElementById('textInput').value = '';
    fileInput.value = '';
}