var ocultar = false;

function muestra_texto(){
    if(!ocultar){
        document.getElementById("texto").innerHTML = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam libero et aliquam porro obcaecati deserunt, totam at maiores dicta temporibus neque odit quia est labore, voluptatibus, ex nemo nisi. Quisquam?"
        ocultar =true;
        document.getElementById("Mostrar").innerHTML = "Mostrar menos"
    }else{
        document.getElementById("texto").innerHTML = ""
        ocultar =false;
        document.getElementById("Mostrar").innerHTML = "Mostrar mas"
    }
}

function lanzar_dado(){
    var numero = Math.floor(Math.random() *6) +1;
    document.getElementById("imagen_dado").innerHTML = "<img src='img/dado"+numero + ".jpeg' width='100px'>";
}