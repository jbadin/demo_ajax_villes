//Je pourrais directement appeler city mais pour plus de clareté je l'ai renommé
let citySelect = document.getElementById('city');
let zipcodeInput = document.getElementById('zipcode');

function selectCitiesListByZipcode() {
    if (zipcodeInput.value.length >= 3) {
        citySelect.innerHTML = '';
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                let citiesList = JSON.parse(this.responseText);
                for (cityDetails of citiesList) {
                    let attr = document.createAttribute('zipcode');
                    attr.value = cityDetails.zipcode;
                    let newOption = document.createElement('option');
                    newOption.value = cityDetails.id;
                    newOption.innerText = cityDetails.zipcode + ' - ' + cityDetails.name;
                    newOption.setAttributeNode(attr);
                    citySelect.appendChild(newOption);
                }
            }
        };
        xmlhttp.open("GET", "controllers/indexController.php?zipcode=" + zipcodeInput.value, true);
        xmlhttp.send();
    }
}

citySelect.onchange = () => {
    zipcodeInput.value = citySelect.options[citySelect.selectedIndex].getAttribute('zipcode');
}

zipcodeInput.onkeyup = selectCitiesListByZipcode;
zipcodeInput.oninput = selectCitiesListByZipcode;