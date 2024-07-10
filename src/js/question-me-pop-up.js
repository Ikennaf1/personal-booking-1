var showQuestionMePopUp = false;
var questionPopUp = document.querySelector('#question_pop_up');

if (showQuestionMePopUp == true) {
    questionPopUp.classList.remove("hidden");
} else {
    questionPopUp.classList.add("hidden");
}

var handleQuestionMePopUp = () => {
    showQuestionMePopUp = !showQuestionMePopUp;
    if (showQuestionMePopUp == true) {
        questionPopUp.classList.remove("hidden");
    } else {
        questionPopUp.classList.add("hidden");
    }
}

var questionSubmit = document.querySelector('#question_submit');
questionSubmit.onclick = () => {
    questionSubmit.value = "✔";
};
