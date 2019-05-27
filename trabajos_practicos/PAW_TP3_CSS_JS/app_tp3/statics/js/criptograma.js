var
    criptograma = criptograma || {},
    document = document || {},
    console = console || {},
    window = window || {},
    criptografo = 0;

criptograma.armar = function (contenedor) {
    criptograma.contenedor = contenedor;

    function inicio() {
        if (typeof criptograma.contenedor === "string") {
            criptograma.contenedor = document.getElementById(criptograma.contenedor);
        }
        var tSection = document.createElement("section");
        tSection.classList.add("menuPrincipal");

        criptograma.generarBotonera(tSection);
        criptograma.contenedor.appendChild(tSection);      
    }
    window.addEventListener("DOMContentLoaded", inicio);
};

criptograma.empezar = function (tipo) {
    var menu = document.querySelector("section.menuPrincipal");
    var gSection = document.createElement("section");
    var mSection = document.createElement("section");
    
    if (tipo == 0){
        criptografo = 0;
    } else if (tipo == 1){
        criptografo = 1;
    } else {
        criptografo = 2;
    }    
    
    gSection.classList.add("grilla");
    mSection.classList.add("muestra");
    
    criptograma.contenedor.removeChild(menu);
    criptograma.contenedor.appendChild(gSection);
    criptograma.contenedor.appendChild(mSection);

    criptograma.asignarSimbolo(mSection);
    criptograma.grilla(gSection, criptograma.abecedario);
}


criptograma.verificar = function (event) {
    var campos = document.querySelectorAll("input.vacio"),
        letras = criptograma.abecedario,
        camposR = document.querySelectorAll("label.oculto");
    
    if (camposR.length == 0) {        
        alert("GANASTE!!!");
    } else {    
        for (var i = 0; i < letras.length; i++) {
            if (campos[i].value.toUpperCase() == letras[i].letra) {
                campos[i].setAttribute("disabled", "true");
                for (var j = 0; j < camposR.length; j++) {
                    if (camposR[j].textContent == campos[i].value.toUpperCase()) {
                        camposR[j].classList.remove("oculto");
                    }
                }
            } else {
                campos[i].value = "";
            }
        }
    }    
}

criptograma.grilla = function (contenedor, letras) {
   
    for (var i = 0; i < letras.length; i++) {
        var bloq = document.createElement("div");
        bloq.classList.add("ingresar");
        var simbolo = document.createElement("label");
        simbolo.classList.add("simbolo");
        simbolo.textContent = letras[i].simbolo;
        var campo = document.createElement("input");
        campo.classList.add("vacio");
        campo.setAttribute("type", "text");
        campo.setAttribute("maxlength", 1);
        campo.setAttribute("indice", i);
        var posicion = document.createElement("label");
        posicion.classList.add("posicionSimbolo");
        posicion.textContent = i + 1;
        bloq.appendChild(simbolo);
        bloq.appendChild(campo);
        contenedor.appendChild(bloq);
    }

    var boton = document.createElement("button");
    boton.classList.add("boton");
    boton.textContent = "Verificar Valores";
    boton.addEventListener("click", criptograma.verificar);
    contenedor.appendChild(boton);

}

criptograma.generarBotonera = function (contenedor) {
    var menu = document.createElement("div");

    menu.classList.add("menu1");
    
    crearBoton(contenedor, menu, 1);
    crearBoton(contenedor, menu, 2);
    crearBoton(contenedor, menu, 3);
    
    contenedor.appendChild(menu);

}


function crearBoton(contenedor, menu, nro){
    var boton, txt;
    
    boton = document.createElement("button");
    boton.classList.add("boton");
    boton.setAttribute("id", "boton" + nro);
    txt = document.createTextNode("Frase " + nro);
    boton.appendChild(txt);
    contenedor.appendChild(boton);
    boton.addEventListener("click", function(){criptograma.elegirCriptografo(nro)} );
    menu.appendChild(boton);    
}

criptograma.elegirCriptografo = function (nro) {
    var menu = document.querySelector("section,menuPrincipal"),
        menub = document.querySelector("div.menu1"),
        menuc = document.createElement("div"),
        boton;
    
    if (nro == 1){
        frase = "AL MAL TIEMPO BUENA CARA";        
    } else if (nro == 2) {
        frase = "NO HAY MAL QUE POR BIEN NO VENGA";
    } else if (nro == 3) {
        frase = "A CABALLO REGALADO NO SE LE MIRAN LOS DIENTES";
    }
    
    menuc.classList.add("menu2");    
    menu.removeChild(menub);
    
    
    boton = document.createElement("button");
    boton.classList.add("boton");
    boton.textContent = "Letras";
    boton.addEventListener("click", function(){criptograma.empezar("0")} );
    menuc.appendChild(boton);    
    
    boton = document.createElement("button");
    boton.classList.add("boton");
    boton.textContent = "Numeros";
    boton.addEventListener("click", function(){criptograma.empezar("1")} );
    menuc.appendChild(boton);    
    
    boton = document.createElement("button");
    boton.classList.add("boton");
    boton.textContent = "Simbolos";
    boton.addEventListener("click", function(){criptograma.empezar("2")} );
    menuc.appendChild(boton);    
    
    menu.appendChild(menuc);
}




criptograma.asignarSimbolo = function (contenedor) {
    var abc = criptograma.abecedario, i, j = 0, tipo, aux = [], bandera = false;
    
    if (criptografo == 0) {
        tipo = criptograma.letras;        
    }
    if (criptografo == 1) {
        tipo = criptograma.numeros;   
    }
    if (criptografo == 2) {
        tipo = criptograma.simbolos;        
    }
    
    tipo.sort(function () {
        return Math.random() - 0.5
    }); 

    for (i = 0; i < abc.length; i++) {
        abc[i].simbolo = tipo[i];
    }

    for (i = 0; i < frase.length; i++) {        
        while ((j < abc.length) && (!bandera)) {
            if (frase[i] == " ") {
                aux.push(" ");
                bandera = true;
            } else {
                if (frase[i] == abc[j].letra) {
                    aux.push(abc[j].simbolo);
                    bandera = true;
                }
            }
            j = j + 1;
        }
        j = 0;
        bandera = false;
    }


    for (i = 0; i < aux.length; i++) {
        var bloque = document.createElement("div");
        if (aux[i] != " ") {
            bloque.classList.add("cuadroRespuesta");
            var div = document.createElement("div");
            div.classList.add("cuadroLetra");
            var letra = document.createElement("label");
            letra.classList.add("oculto");
            letra.textContent = frase[i];
            var guion = document.createElement("label");
            guion.classList.add("guion");
            guion.textContent = "_";
            var simbolo = document.createElement("label");
            simbolo.classList.add("simboloFrase");
            simbolo.textContent = "" + aux[i];
            div.appendChild(letra);
            bloque.appendChild(div);
            bloque.appendChild(guion);
            bloque.appendChild(simbolo);
            contenedor.appendChild(bloque);
        } else {
            var bloqueEspacio = document.createElement("div");
            bloqueEspacio.classList.add("cuadroRespuesta");
            var letraEspacio = document.createElement("label");
            var guionEspacio = document.createElement("label");
            guionEspacio.textContent = " ";
            var simboloEspacio = document.createElement("label");
            bloqueEspacio.appendChild(letraEspacio);
            bloqueEspacio.appendChild(guionEspacio);
            bloqueEspacio.appendChild(simboloEspacio);
            contenedor.appendChild(bloqueEspacio);
        }
    }
}
