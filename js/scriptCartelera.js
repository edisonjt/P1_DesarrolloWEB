function BuscarTodosCartelera() {
  let datos = document.querySelector("#datos");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "./Logic/LogicaCartelera.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "MostrarCartelera" });
  xhr.send(data);
}

function BuscarTodosRanking() {
  let datos = document.querySelector("#datos");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../../Logic/LogicaCartelera.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "MostrarRanking" });
  xhr.send(data);
}
