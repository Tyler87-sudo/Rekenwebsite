let oud = document.getElementById("oud")
let nieuw = document.getElementById("nieuw")
const soort = document.getElementById("soort")
const percentage = document.getElementById("percentage")


onchange = function (e) {
    // console.log(e.target.value);
    checkInput();
}

function checkInput()
{
    console.log(soort.value);
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
    if(oud.value !== '' && nieuw.value !== '' && soort.value !== "0")
        document.getElementById("losop").disabled = false
    else if (oud.value !== "" && percentage.value !== "" && soort.value !== "0") {
        document.getElementById("losop").disabled = false
    } else if (nieuw.value !== "" && percentage.value !== "" && soort.value !== "0") {
        document.getElementById("losop").disabled = false
    }
}

function Solve() {
    console.log(nieuw.value) 
    if (nieuw.value !== "") {
        nieuw.value = nieuw.value.replace(",", ".");
    } 
    if (oud.value !== "") {
        oud.value = oud.value.replace(",", ".")
    }
    let keerfactor = document.getElementById("keerfactor")
    let deelfactor = document.getElementById("deelfactor")
    console.log(soort.value);
    keerfactor.value = nieuw.value / oud.value;
    if (percentage.value === "") {
        percentage.value = keerfactor.value * 100;
    } else if (percentage !== "") {
        if (soort.value === "1") {
            if (oud.value === "") {
                let oudnum = Number(nieuw.value / percentage.value * 100);
                oud.value = parseFloat(oudnum).toFixed(2);
            } else {
                let nieuwnum = Number(oud.value * percentage.value / 100);
                nieuw.value = parseFloat(nieuwnum).toFixed(2);
            }
        } else if (soort.value === "2") {
            if (oud.value === "") {
                let oudnum = Number(nieuw.value / (percentage.value / 100 + 1));
                oud.value = parseFloat(oudnum).toFixed(2);
            } else {
                let nieuwnum = Number(oud.value * (percentage.value / 100 + 1));
                nieuw.value = parseFloat(nieuwnum).toFixed(2)
            }
        } else if (soort.value === "3") {
            if (oud.value === "") {
                let oudnum = Number(nieuw.value / (100 - percentage.value) * 100);
                oud.value = parseFloat(oudnum).toFixed(2);
            } else {
                let nieuwnum = Number(oud.value * (1 - percentage.value / 100));
                nieuw.value = parseFloat(nieuwnum).toFixed(2);
            }
        }
    }
    keerfactor.value = parseFloat(nieuw.value / oud.value).toFixed(2);
}

function clearValues() {
    keerfactor.value = "";
    oud.value = "";
    nieuw.value = "";
    percentage.value = "";
    document.getElementById("losop").disabled = true;

}
