var i, j;

function inicializaMatriz() {
    "use strict";
    var tabla = [];
    for (i = 0; i < 8; i = i + 1) {
        tabla[i] = [0, 0, 0, 0, 0, 0, 0, 0];
    }
    return tabla;
}
var minas = inicializaMatriz();

var Juego = Juego || {}, window = window || {}, document = document || {};
Juego.armarJuego = function (contenedor) {
    "use strict";
    Juego.contenedor = contenedor;
    window.addEventListener("DOMContentLoaded", function () {
        if (typeof Juego.contenedor == "string") {
            Juego.contenedor = document.getElementById(Juego.contenedor);
        }
        var tSection = document.createElement("section");
        tSection.classList.add("tablero");
        Juego.contenedor.appendChild(tSection);
        Juego.crearTablero(tSection);
        Juego.generarBombas(minas);
        Juego.bombasAlrededor(minas);
    });
};

function abrirAlrededor(xi, xj, contenedor) {
    "use strict";
    if (xi == 0 && xj == 0) {
        abrirCeros(xi, xj, xi + 1, xj + 1, xi, xj, contenedor);
    } else if (xi == 0 && (xj > 0 && xj < 7)) {
        abrirCeros(xi, xj - 1, xi + 1, xj + 1, xi, xj, contenedor);
    } else if (xi == 0 && xj == 7) {
        abrirCeros(xi, xj - 1, xi + 1, xj, xi, xj, contenedor);
    } else if (xj == 7 && (xi > 0 && xi < 7)) {
        abrirCeros(xi - 1, xj - 1, xi + 1, xj, xi, xj, contenedor);
    } else if (xi == 7 && xj == 7) {
        abrirCeros(xi - 1, xj - 1, xi, xj, xi, xj, contenedor);
    } else if (xi == 7 && (xj > 0 && xj < 7)) {
        abrirCeros(xi - 1, xj - 1, xi, xj + 1, xi, xj, contenedor);
    } else if (xi == 7 && xj == 0) {
        abrirCeros(xi - 1, xj, xi, xj + 1, xi, xj, contenedor);
    } else if (xj == 0 && (xi > 0 && xi < 7)) {
        abrirCeros(xi - 1, xj, xi + 1, xj + 1, xi, xj, contenedor);
    } else {
        abrirCeros(xi - 1, xj - 1, xi + 1, xj + 1, xi, xj, contenedor);
    }
}

function abrirCeros(vari, varj, fini, finj, cori, corj, contenedor) {
    "use strict";
    for (i = vari; i <= fini; i = i + 1) {
        for (j = varj; j <= finj; j = j + 1) {
            var myid = i + "" + j, objDiv =  document.getElementById(myid);
            if (objDiv.textContent == "") {
                if (contenedor[i][j] == 0) {
                    if (i == cori && j == corj) {
                        objDiv.textContent = "";
                        objDiv.style.backgroundColor = "gray";
                    } else {
                        if (objDiv.style.backgroundColor !== "gray") {
                            abrirAlrededor(i, j, contenedor);
                        }
                    }
                } else {
                    if (contenedor[i][j] !== "*") {
                        document.getElementById(myid).innerHTML = "<p style='margin-top:15px;'>" + contenedor[i][j] + "</p>";
                        objDiv.style.backgroundColor = "gray";
                    }
                }
            }
        }
    }
}


var divObj = divObj || {}, alert = alert || {};
function mostrarNumero() {
    "use strict";
    var auxstr = this.id.split(""), myid = auxstr[0] + auxstr[1];
    divObj = document.getElementById(myid);

    if (minas[parseInt(auxstr[0], 10)][parseInt(auxstr[1], 10)] == 0) {
        divObj.style.backgroundColor = "gray";
        abrirAlrededor(parseInt(auxstr[0], 10), parseInt(auxstr[1], 10), minas);
    } else {
        if (minas[parseInt(auxstr[0], 10)][parseInt(auxstr[1], 10)] !== "*") {
            document.getElementById(myid).innerHTML = "<p style='margin-top:15px;'>" + minas[parseInt(auxstr[0], 10)][parseInt(auxstr[1], 10)] + "</p>";
            divObj.style.backgroundColor = "gray";
        } else {
            divObj.style.backgroundImage = "url(statics/images/bomba.jpg)";
            abrirTablero(minas);
            alert("Perdiste!");
        }
    }
}

Juego.crearTablero = function (contenedor) {
    "use strict";
    for (i = 0; i < 8; i = i + 1) {
        for (j = 0; j < 8; j = j + 1) {
            var div = document.createElement("div");
            div.id = i + "" + j;
            div.addEventListener("click", mostrarNumero, true);
            contenedor.appendChild(div);
        }
    }
};

Juego.generarBombas = function (contenedor) {
    "use strict";
    var fil = 0, col = 0;

    fil = Math.floor((Math.random() * 7) + 0);
    col = Math.floor((Math.random() * 7) + 0);

    for (i = 0; i < 8; i = i + 1) {
        while (contenedor[fil][col] == "*") {
            fil = Math.floor((Math.random() * 7) + 0);
            col = Math.floor((Math.random() * 7) + 0);
        }
        contenedor[fil][col] = "*";
    }
};

Juego.bombasAlrededor = function (contenedor) {
    "use strict";
    for (var i = 0; i < 8; i = i + 1) {
        for (var j = 0; j < 8; j = j + 1) {
            if (contenedor[i][j] == "*") {
                if (i == 0 && j == 0) {
                    colocaNumeroBombas(i, j, i + 1, j + 1, contenedor);
                } else if (i == 0 && (j > 0 && j < 7)) {
                    colocaNumeroBombas(i, j - 1, i + 1, j + 1, contenedor);
                } else if (i == 0 && j == 7) {
                    colocaNumeroBombas(i, j - 1, i + 1, j, contenedor);
                } else if (j == 7 && (i > 0 && i < 7)) {
                    colocaNumeroBombas(i - 1, j - 1, i + 1, j, contenedor);
                } else if (i == 7 && j == 7) {
                    colocaNumeroBombas(i - 1, j - 1, i, j, contenedor);
                } else if (i == 7 && (j > 0 && j < 7)) {
                    colocaNumeroBombas(i - 1, j - 1, i, j + 1, contenedor);
                } else if (i == 7 && j == 0) {
                    colocaNumeroBombas(i - 1, j, i, j + 1, contenedor);
                } else if (j == 0 && (i > 0 && i < 7)) {
                    colocaNumeroBombas(i - 1, j, i + 1, j + 1, contenedor);
                } else {
                    colocaNumeroBombas(i - 1, j - 1, i + 1, j + 1, contenedor);
                }
            }
        }
    }
};

function colocaNumeroBombas(vari, varj, fini, finj, contenedor) {
    "use strict";
    for (i = vari; i <= fini; i = i + 1) {
        for (j = varj; j <= finj; j = j + 1) {
            if (contenedor[i][j] !== "*") {
                contenedor[i][j] = (parseInt(contenedor[i][j]) + 1);
            }
        }
    }
}


function abrirTablero(contenedor) {
    "use strict";
    for (i = 0; i < 8; i = i + 1) {
        for (j = 0; j < 8; j = j + 1) {
            var myid = i + "" + j, objDiv =  document.getElementById(myid);
            if (contenedor[i][j] == "*") {
                objDiv.style.backgroundImage = "url(statics/images/bomba.jpg)";
            }
        }
    }
}

