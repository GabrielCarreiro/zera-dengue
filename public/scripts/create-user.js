function populateUFs() {
    const ufSelect = document.querySelector("select[name=uf]")

    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
        .then(res => res.json())
        .then(states => {
            for (const state of states) {
                ufSelect.innerHTML += `<option value ="${state.id}">${state.nome} </option>`
            }
        })
}

populateUFs()

function getCities(event) {
    const citySelects = document.querySelector("select[name=city]")
    const stateInput = document.querySelector("input[name=state]")

    const ufValue = event.target.value

    const indexOfSelectedState = event.target.selectedIndex
    stateInput.value = event.target.options[indexOfSelectedState].text


    const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${ufValue}/municipios`
    citySelects.innerHTML = "<option value> Selecione a cidade </option>"

    fetch(url)
        .then(res => res.json())
        .then(cities => {

            for (const city of cities) {
                citySelects.innerHTML += `<option value="${city.nome}">${city.nome}</option>`
            }
        })
}

document
    .querySelector("select[name=uf]")
    .addEventListener("change", getCities)


function validandoSenha() {
    password = document.getElementById("password").value;
    var regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var input = document.getElementById("password")

    if (!regex.exec(password)) {
        input.style.color = "#f00";
    } else {
        input.style.color = "#000";
    }

}
