const formEL = document.getElementById('js-form');
const elements = formEL.elements;

formEL.addEventListener("submit", function(event) {
    let isValidForm = true;

    Array.from(elements).forEach(function(element) {
        if (element.type === "text" || element.tagName.toLowerCase() === "textarea") {
                if ((element.name === 'email' && !isValidEmail(element.value)) || (element.name !== 'email' && element.name !== 'company' && isEmpty(element.value))) {
                    element.classList.add('error')
                    isValidForm = false;
                }
        }
    });

    if (!isValidForm) {
        event.preventDefault();
    }
});

Array.from(elements).forEach(function(element) {
    if (element.type === "text" || element.tagName.toLowerCase() === "textarea") {
        element.addEventListener("input", function(event) {
            if (element.name === 'email') {
                !isValidEmail(element.value) ? element.classList.add('error') : element.classList.remove('error');
            }
            if (element.name !== 'email' && element.name !== 'company' ) {
                console.log(element.name);
                isEmpty(element.value) ? element.classList.add('error') : element.classList.remove('error');
            }
        });
    }
});

function isValidEmail(string) {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(string);
}

function isEmpty(string) {    
    return string === '';
}

function closeMessage(button) {
    let messageEL = button.parentNode;
    messageEL.remove();
}
