function calcularIMC() {
    const peso = parseFloat(document.getElementById('peso').value);
    const estatura = parseFloat(document.getElementById('estatura').value);
    const resultadoDiv = document.getElementById('resultado');

    if(isNaN(peso) || isNaN(estatura) || peso<=0 || estatura <=0) {
        alert("Ingrese valores válidos");
        return;
    }

    const imc = (peso / (estatura * estatura)).toFixed(2);
    let categoria = '';
    letcolorClass = '';

    if (imc < 18.5) {
        categoria = 'Bajo peso';
        colorClass = 'bajo';
    } else if (imc <= 24.9) {
        categoria = 'Peso normal';
        colorClass = 'normal';
    } else if (imc <= 29.9) {
        categoria = 'Sobrepeso';
        colorClass = 'sobrepeso';
    } else if (imc <= 34.9) {
        categoria = 'Obesidad I';
        colorClass = 'obesidadI';
    } else if (imc <= 39.9) {
        categoria = 'Obesidad II';
        colorClass = 'obesidadII';
    } else {
        categoria = 'Obesidad III';
        colorClass = 'obesidadIII';
    }

    resultadoDiv.style.display = 'block';
    resultadoDiv.className = `resultado ${colorClass}`;
    resultadoDiv.innerHTML = `Tu IMC es: ${imc}<br>Categoría: ${categoria}`;
}