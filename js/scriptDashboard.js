function MostrarTodo() {
  BuscarTodosAdmin();
  BuscarTodosClientes();
  BuscarTodosPelicula();
  BuscarTodosReserva();
}

function BuscarTodosPelicula() {
  let datos = document.querySelector("#peliculas");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../../Logic/logicaDashboard.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "BuscarTodosPelicula" });
  xhr.send(data);
}

function BuscarTodosClientes() {
  let datos = document.querySelector("#clientes");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../../Logic/logicaDashboard.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "BuscarTodosClientes" });

  xhr.send(data);
}

function BuscarTodosAdmin() {
  let datos = document.querySelector("#admin");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../../Logic/logicaDashboard.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "BuscarTodosAdmin" });

  xhr.send(data);
}

function BuscarTodosReserva() {
  let datos = document.querySelector("#ventas");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../../Logic/logicaDashboard.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "BuscarTodosReserva" });
  xhr.send(data);
}
