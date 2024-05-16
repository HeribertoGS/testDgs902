function calcularAreaCirculo(radio) {
    const area = Math.PI * radio * radio;
    return area;
}

const radio = 5;
const areaDelCirculo = calcularAreaCirculo(radio);
console.log("El área del círculo con radio nosee que poner", radio, "es:", areaDelCirculo);
