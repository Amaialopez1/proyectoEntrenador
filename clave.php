<?php include 'log/header.php' ?>

<div style="margin-left:25%; padding:1px 16px;">
    <div class="container"
    style="margin-top:250px; margin-left:200px;" class= "rounded float-end">
        <form name="login">
            <div class="mb-3">
                <label for="" class="form-label">Usuario: </label>
                <input
                    type="text"
                    class="form-control"
                    name="usuario"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                    style="width:300px"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Clave: </label>
                <input
                    type="text"
                    class="form-control"
                    name="password"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                    style="width:300px"
                />
            </div>
            
            <button value="Entrar" onclick="Login()" type="button" class="sticky-sm-bottom">ENTRAR</button>
            <button class="sticky-sm-bottom">BORRAR</button>
            <br><br>

            <div class="mb-3">
                <a href="">
                    <small id="helpId" class="form-text text-muted">Olvido su contraseña </small>
                </a>
            </div>
            
        </form>
    </div>
</div>
<script> function Login(){
    var usuario= document.login.usuario.value;
    var password= document.login.password.value;
    if(usuario=="amaia" && password == "1234"){
        window.location="CLIENTE/usuario1.php";
    }

}</script>