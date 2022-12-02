function GuardarCliente() {
  let nombre = document.querySelector("#nombre").value;
  let apellido = document.querySelector("#apellido").value;
  let fechaNac = document.querySelector("#fechaNac").value;
  let telefono = document.querySelector("#telefono").value;
  let email = document.querySelector("#email").value;
  let password = document.querySelector("#password").value;
  let res = document.querySelector("#res");

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      res.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({
    nombre: nombre,
    apellido: apellido,
    fechaNac: fechaNac,
    telefono: telefono,
    email: email,
    password: password,
    operacion: "GuardarCliente",
  });

  xhr.send(data);
  location.reload();
}
function BuscarTodosClientes() {
  let datos = document.querySelector("#datos");

  let xhr = new XMLHttpRequest();
  document.getElementById("editar").style.display = "none";
  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "BuscarTodosClientes" });

  xhr.send(data);
}

function EliminarUsuario(id) {
  let res = document.querySelector("#res");

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      res.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ id: id, operacion: "EliminarUsuario" });

  xhr.send(data);
  location.reload();
}

function BuscarUsuario(idP) {
  let id = document.querySelector("#id");
  let nombre = document.querySelector("#nombre");
  let apellido = document.querySelector("#apellido");
  let fechaNac = document.querySelector("#fechaNac");
  let telefono = document.querySelector("#telefono");
  let email = document.querySelector("#email");
  let password = document.querySelector("#password");
  let xhr = new XMLHttpRequest();

  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      let result = JSON.parse(this.responseText);
      console.log(result);
      console.log(idP);
      // let result = this.responseText.split(",");
      id.value = idP;
      nombre.value = result[0].nombre;
      apellido.value = result[0].apellido;
      fechaNac.value = result[0].fecha_nac;
      telefono.value = result[0].telefono;
      email.value = result[0].email;
      password.value = "";
      document.getElementById("guardar").style.display = "none";
      document.getElementById("editar").style.display = "block";
    }
  };

  let data = JSON.stringify({ id: idP, operacion: "BuscarUsuario" });

  xhr.send(data);
}

function EditarUsuario() {
  let id = document.querySelector("#id").value;
  let nombre = document.querySelector("#nombre").value;
  let apellido = document.querySelector("#apellido").value;
  let fechaNac = document.querySelector("#fechaNac").value;
  let telefono = document.querySelector("#telefono").value;
  let email = document.querySelector("#email").value;
  let password = document.querySelector("#password").value;

  let xhr = new XMLHttpRequest();
  console.log(id);
  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      res.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({
    id: id,
    nombre: nombre,
    apellido: apellido,
    fechaNac: fechaNac,
    telefono: telefono,
    email: email,
    password: password,
    operacion: "EditarUsuario",
  });

  xhr.send(data);
  location.reload();
}
