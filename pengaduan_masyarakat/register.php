<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register form</title>
  <link rel="shortcut icon" href="/asset/favicon.ico">
  <link rel="stylesheet" href="./css/regis.css">
</head>

<body>

  <div class="container">
    <form class="form" method="POST" action="simpan_masyarakat.php" id="Register">
      <h1 class="form_title">Register!</h1>

      <div class="form_message form_message-error"></div>

      <div class="form_input-group">
        <input type="text" class="form_input" name="nik" autofocus placeholder="Nik">
        <div class="form_input-error-message"></div>
      </div>

      <div class="form_input-group">
        <input type="text" class="form_input" name="nama" autofocus placeholder="Nama">
        <div class="form_input-error-message"></div>
      </div>

      <div class="form_input-group">
        <input type="text" class="form_input" name="username" autofocus placeholder="Username">
        <div class="form_input-error-message"></div>
      </div>

      <div class="form_input-group">
        <input type="text" class="form_input" name="kecamatan" value="Kec.Cilodong" autofocus placeholder="Kecamatan" readonly>
        <div class="form_input-error-message"></div>
      </div>

      <div class="form_input-group">
        <input type="text" class="form_input" name="telp" autofocus placeholder="Telepon">
        <div class="form_input-error-message"></div>

        <div class="form_input-group">
          <input type="password" class="form_input" name="password" autofocus placeholder="password">
          <div class="form_input-error-message"></div>
        </div>

      </div>
      <input class="form_button" type="submit" value="Daftar"></input>
      <p class="form_text">
        Sudah punya akun? Silahkan<a class="form_link" href="./" id="linkCreateAccount"> Login!</a>
      </p>
    </form>
  </div>
</body>

</html>