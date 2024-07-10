var showBookMePopUp = false;
var bookPopUp = document.querySelector('#book_pop_up');

if (showBookMePopUp == true) {
    bookPopUp.classList.remove("hidden");
} else {
    bookPopUp.classList.add("hidden");
}

var handleBookMePopUp = () => {
    showBookMePopUp = !showBookMePopUp;
    if (showBookMePopUp == true) {
        bookPopUp.classList.remove("hidden");
    } else {
        bookPopUp.classList.add("hidden");
    }
}

var bookSubmit = document.querySelector('#book_submit');
bookSubmit.onclick = () => {
    bookSubmit.value = "✔";
};
