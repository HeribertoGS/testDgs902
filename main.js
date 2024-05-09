function calcularAreaCirculo(radio) {
    const area = Math.PI * radio * radio;
    return area;
}

// Ejemplo de uso de la función
const radio = 5;
const areaDelCirculo = calcularAreaCirculo(radio);
console.log("El área del círculo con radio", radio, "es:", areaDelCirculo);
