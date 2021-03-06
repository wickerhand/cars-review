<div class="login card-authentication">
    <h1>Login</h1>
    <form class="login_form form" method="post" autocomplete="off">
        <label for="email" class="login_form--label">E-mail</label>
        <div class="form_input">
            <input class="form_input--input" type="text" id="email" name="email">
        </div>
        <label for="password" class="login_form--label">Senha</label>
        <div class="form_input">
            <input type="password" id="password" name="password">
        </div>
        <button type="submit" class="btn-primary">Enviar</button>
    </form>
    <p>Ainda não possui uma conta? <a class="register-link" href="{{url('/registrar')}}">Cadastre-se!</a></p>
</div>