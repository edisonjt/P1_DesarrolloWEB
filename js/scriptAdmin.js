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

function GuardarAdmin() {
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
    operacion: "GuardarAdmin",
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

function BuscarTodosAdmin() {
  let datos = document.querySelector("#datos");

  let xhr = new XMLHttpRequest();
  document.getElementById("editar").style.display = "none";
  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "BuscarTodosAdmin" });

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

function GuardarPelicula() {
  let nombre = document.querySelector("#nombre").value;
  let genero = document.querySelector("#genero").value;
  let estreno = document.querySelector("#estreno").value;
  let duracion = document.querySelector("#duracion").value;
  let clasificacion = document.querySelector("#clasificacion").value;
  let sinopsis = document.querySelector("#sinopsis").value;
  let idioma = document.querySelector("#idioma").value;
  let tipo = document.querySelector("#tipo").value;
  let imagen = document.querySelector("#imagen").value;
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
    genero: genero,
    estreno: estreno,
    duracion: duracion,
    clasificacion: clasificacion,
    sinopsis: sinopsis,
    idioma: idioma,
    tipo: tipo,
    imagen: imagen,
    operacion: "GuardarPelicula",
  });

  xhr.send(data);
  location.reload();
}
function BuscarTodosPelicula() {
  let datos = document.querySelector("#datos");

  let xhr = new XMLHttpRequest();
  document.getElementById("editar").style.display = "none";
  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      datos.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ operacion: "BuscarTodosPelicula" });
  xhr.send(data);
}
function EliminarPelicula(id) {
  let res = document.querySelector("#res");

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      res.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({ id: id, operacion: "EliminarPelicula" });

  xhr.send(data);
  location.reload();
}

function BuscarPelicula(idP) {
  let id = document.querySelector("#id");
  let nombre = document.querySelector("#nombre");
  let genero = document.querySelector("#genero");
  let estreno = document.querySelector("#estreno");
  let duracion = document.querySelector("#duracion");
  let clasificacion = document.querySelector("#clasificacion");
  let sinopsis = document.querySelector("#sinopsis");
  let idioma = document.querySelector("#idioma");
  let tipo = document.querySelector("#tipo");
  let imagen = document.querySelector("#imagen");
  let res = document.querySelector("#res");
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
      genero.value = result[0].genero;
      estreno.value = result[0].fecha_estreno;
      duracion.value = result[0].duracion;
      clasificacion.value = result[0].clasificacion;
      sinopsis.value = result[0].sinopsis;
      idioma.value = result[0].idiomas;
      tipo.value = result[0].tipo;
      imagen.value = result[0].imagen;
      document.getElementById("guardar").style.display = "none";
      document.getElementById("editar").style.display = "block";
    }
  };

  let data = JSON.stringify({ id: idP, operacion: "BuscarPelicula" });

  xhr.send(data);
}

function EditarPelicula() {
  let id = document.querySelector("#id").value;
  let nombre = document.querySelector("#nombre").value;
  let genero = document.querySelector("#genero").value;
  let estreno = document.querySelector("#estreno").value;
  let duracion = document.querySelector("#duracion").value;
  let clasificacion = document.querySelector("#clasificacion").value;
  let sinopsis = document.querySelector("#sinopsis").value;
  let idioma = document.querySelector("#idioma").value;
  let tipo = document.querySelector("#tipo").value;
  let imagen = document.querySelector("#imagen").value;
  let res = document.querySelector("#res");

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "../../Logic/logicaAdmin.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      res.innerHTML = this.responseText;
    }
  };

  let data = JSON.stringify({
    id: id,
    nombre: nombre,
    genero: genero,
    estreno: estreno,
    duracion: duracion,
    clasificacion: clasificacion,
    sinopsis: sinopsis,
    idioma: idioma,
    tipo: tipo,
    imagen: imagen,
    operacion: "EditarPelicula",
  });

  xhr.send(data);
  location.reload();
}

function GuardarClienteIndex() {
  let nombre = document.querySelector("#nombre").value;
  let apellido = document.querySelector("#apellido").value;
  let fechaNac = document.querySelector("#fechaNac").value;
  let telefono = document.querySelector("#telefono").value;
  let email = document.querySelector("#email").value;
  let password = document.querySelector("#password").value;
  let res = document.querySelector("#res");

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "./Logic/logicaAdmin.php", true);

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
  window.alert("Usuario creado correctamente");
  window.location.href = "index.php";
}
