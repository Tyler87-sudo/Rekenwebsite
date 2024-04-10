const oud = document.getElementById("oud")
const nieuw = document.getElementById("nieuw")
const soort = document.getElementById("soort")
const percentage = document.getElementById("percentage")


onchange = function (e) {
    // console.log(e.target.value);
    checkInput();
}

function checkInput()
{
    if(oud.value !== '')
        oud.classList.remove("is-invalid")
        oud.classList.add("is-valid")
    if(nieuw.value !== '')
        nieuw.classList.remove("is-invalid")
        nieuw.classList.add("is-valid")
    if(soort.value !== '')
        soort.classList.remove("is-invalid")
        soort.classList.add("is-valid")
    if(percentage.value !== '')
        percentage.classList.remove("is-invalid")
        percentage.classList.add("is-valid")
    if(oud.value !== '' && nieuw.value !== '')
        document.getElementById("losop").disabled = false
}

function Solve() {
    console.log(soort.value);
    if (soort.value == 1) {

    }
    if (soort.value == 2) {

    }
    if (soort.value == 3) {

    }
}

function checkAnswer() {
    antwoord = document.getElementById("antwoord").value
}