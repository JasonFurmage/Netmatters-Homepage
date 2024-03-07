const formEL = document.getElementById('js-form');
const elements = formEL.elements;

// Add event listener to form so we can detect when submit is pressed.
formEL.addEventListener("submit", function(event) {
    let isValidForm = true;

    // Loop through text and textarea elements checking if current value is valid.
    Array.from(elements).forEach(function(element) {
        if (element.type === "text" || element.tagName.toLowerCase() === "textarea") {
                if ((element.name === 'email' && !isValidEmail(element.value)) || (element.name !== 'email' && element.name !== 'company' && isEmpty(element.value))) {
                    element.classList.add('-invalid')
                    isValidForm = false;
                }
        }
    });

    // Prevent form submission if form data is not valid.
    if (!isValidForm) {
        event.preventDefault();
    }
});

// Add event listeners to text and textarea elements we can check for validity during input.
Array.from(elements).forEach(function(element) {
    if (element.type === "text" || element.tagName.toLowerCase() === "textarea") {
        element.addEventListener("input", function(event) {
            if (element.name === 'email') {
                !isValidEmail(element.value) ? element.classList.add('-invalid') : element.classList.remove('-invalid');
            }
            if (element.name !== 'email' && element.name !== 'company' ) {
                console.log(element.name);
                isEmpty(element.value) ? element.classList.add('-invalid') : element.classList.remove('-invalid');
            }
        });
    }
});

// Check if email is valid using regex.
function isValidEmail(string) {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(string);
}

// Check for empty string.
function isEmpty(string) {    
    return string === '';
}

// Remove form error or success messages when x is clicked.
function closeMessage(button) {
    let messageEL = button.parentNode;
    messageEL.remove();
}
