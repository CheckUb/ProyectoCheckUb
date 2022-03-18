function validar() {
  var correo = document.forms["valido"]["correo"].value;
  if (correo == "") {
    document.getElementById("respuestaCorreo").innerHTML =
      "No olvide ingresar su dirección de correo";
    return false;
  } else {
    vecCorreo = correo.split("@");
    medir = vecCorreo.length;
    if (medir == 2) {
      document.getElementById("respuestaCorreo").innerHTML = "";
      var pass = document.forms["valido"]["pass"].value;
      if (pass == "") {
        document.getElementById("respuestaPass").innerHTML =
          "No olvide ingresar su contraseña";
        return false;
      } else {
        document.getElementById("respuestaPass").innerHTML = "";
        return true;
      }
    } else {
      document.getElementById("respuestaCorreo").innerHTML =
        "Verifique que la dirección de correo esta correctamente escrita";
      return false;
    }
  }
}

function ValidarRegistro() {
  var correo = document.forms["registro"]["correo"].value;
  if (correo == "") {
    document.getElementById("resCorreo").innerHTML =
      "No olvide ingresar su dirección de correo";
    return false;
  } else {
    vecCorreo = correo.split("@");
    medir = vecCorreo.length;
    if (medir == 2) {
      document.getElementById("resCorreo").innerHTML = "";
      //verificacion de password - debe incluir al menos 1 numero y al menos 1 letra mayuscula
      var pass = document.forms["registro"]["pass"].value;
      if (pass != "") {
        var num = "0123456789";
        var abecedario = "abcdefghijklmnñopqrstuvwxyz";

        function checknumeros(texto) {
          for (x = 0; x < texto.length; x++) {
            if (num.indexOf(texto.charAt(x), 0) != -1) {
              return 1;
            }
          }
          return 0;
        }
        function checktexto(texto) {
            texto = texto.toLowerCase();
          for (x = 0; x < texto.length; x++) {
            if (abecedario.indexOf(texto.charAt(x), 0) != -1) {
              return 1;
            }
          }
          return 0;
        }
       checkpass = checknumeros(pass).toString() + checktexto(pass).toString();

        switch (checkpass) {
          case "11":
            document.getElementById("resPass").innerHTML = "";
            cpass = document.forms["registro"]["Cpass"].value;
            if (pass != cpass || cpass==""){
                document.getElementById("resCpass").innerHTML = "Las contraseñas no coinciden";
                return false;
            }else{
                document.getElementById("resCpass").innerHTML = "";
                return true;
            }
          case "01":
            document.getElementById("resPass").innerHTML =
              "Debe incluir al menos un número";
              return false;
          case "10":
            document.getElementById("resPass").innerHTML =
              "Debe incluir al menos una letra";
              return false;
          case "00":
            document.getElementById("resPass").innerHTML =
              "Debe incluir al menos 1 número y al menos 1 letra";
              return false;
        }

      }else{
          document.getElementById("resPass").innerHTML = "Debe escribir una constraseña";
          return false;
      }
    } else {
      document.getElementById("resCorreo").innerHTML =
        "Verifique que la dirección de correo esta correctamente escrita";
      return false;
    }
  }
}
