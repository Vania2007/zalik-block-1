<?php
ob_start();
include "header.php";
include "action.php";
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = test_input($_POST['login']);
    $password = test_input($_POST['pass']);

    if (check_authorize($login, $password)) {
        if (check_admin($login, $password)) {
            header("Location: hello.php?login=" . urlencode($login));
            ob_end_clean();
            exit();
        } else {
            header("Location: index.php?login=" . urlencode($login));
            ob_end_clean();
            exit();
        }
    } else {
        $error_message = "Логін чи пароль вказані неправильно";
    }
}
?>
<div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Вхід</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-6 offset-md-3">
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif;?>
        <form method="post" onsubmit="return validateLogin(this);">
            <div class="form-group">
                <label class="text-black" for="login">Логін</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="form-group">
                <label class="text-black" for="pass">Пароль</label>
                <input type="password" class="form-control" id="password" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Увійти</button>
        </form>
    </div>
   </div>
<?php include "footer.php";?>