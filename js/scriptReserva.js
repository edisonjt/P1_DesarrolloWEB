function GuardarReserva() {
  //let titulo = document.querySelector("#titulo").value;
  let idUsuario = document.querySelector("#idUsuario").value;
  let fecha = document.querySelector("#fecha").value;
  let cantidad = document.querySelector("#cantidad").value;
  let total = document.querySelector("#total").value;
  let idPelicula = document.querySelector("#idPelicula").value;

  let res = document.querySelector("#res");

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "../../Logic/LogicaReserva.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      res.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({
    //titulo: titulo,
    idUsuario: idUsuario,
    fecha: fecha,
    cantidad: cantidad,
    total: total,
    idPelicula: idPelicula,

    operacion: "GuardarReserva",
  });

  xhr.send(data);
  window.location.href = "../../index.php";
}

function BuscarTodosReserva() {
  let datos = document.querySelector("#datos");

  let xhr = new XMLHttpRequest();
  //document.getElementById("editar").style.display = "none";
  xhr.open("POST", "../../Logic/LogicaReserva.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "BuscarTodosReserva" });
  xhr.send(data);
}

function CambiarTotal() {
  let cantidad = document.querySelector("#cantidad").value;
  let total = document.querySelector("#total");
  console.log(cantidad);
  total.value = cantidad * 5;
}
