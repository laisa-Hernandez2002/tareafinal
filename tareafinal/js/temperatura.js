function convertTemperature() {
    const value = parseFloat(document.getElementById("temperature").value);
    const unit = document.getElementById("unit").value;

    let celsius, farenheit, kelvin, rankine;

    switch (unit) {
        case 'C':
            celsius = value;
            farenheit = (value * 9/5) + 32;
            kelvin = value + 273.15;
            rankine = (value + 273.15) * 9/5;
            break;       
        case 'F':
            celsius = (value-32) * 5/9;
            farenheit = value;
            kelvin = (value + 459.67) * 5/9;
            rankine = value + 459.67;
            break;
        case 'K':
            celsius = value - 273.15;
            farenheit = (value * 9/5) - 459-67;
            kelvin = value;
            rankine = value * 9/5;
            break;

        case 'R':
            celsius = (value - 491.67) * 5/9;
            farenheit = value - 459.67;
            kelvin = value * 5/9;
            rankine = value;
            break;
        default: 
            alert("Seleciona una unidad válida");
            return;
    }

    //mostrar resultados
    document.getElementById("resultC").textContent = "Celsius (°C): " + celsius.toFixed(2);
    document.getElementById("resultF").textContent = "Farenheit (°F): " + farenheit.toFixed(2);
    document.getElementById("resultK").textContent = "Kelvin (K): " + kelvin.toFixed(2);
    document.getElementById("resultR").textContent = "Rankine (R): " + rankine.toFixed(2);

}