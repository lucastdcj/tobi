<div class="content">
  <div class="main">
    <h1>Esqueceu a senha?</h1>

    <!-- request password reset form box -->
    <form method="post" action="<?php echo URL; ?>login/requestpasswordreset_action" name="password_reset_form">
        <label for="password_reset_input_username">
            Digite seu usuário e mandaremos um e-mail com as instruções:
        </label>
        <input id="password_reset_input_username" class="password_reset_input" type="text" name="user_name" required />
        <input type="submit"  name="request_password_reset" value="Obter nova senha" />
    </form>
  </div>
</div>
