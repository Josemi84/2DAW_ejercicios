var num = prompt("Introduce el número");
var divisores = 0;

for (i = 2; i < num; i++) {
    if (num % i == 0) {
        divisores += 1;
    }
}

if (divisores == 0) {
    alert("El número " + num + " es primo");
} else {
    alert("El número " + num + " NO es primo");
}
