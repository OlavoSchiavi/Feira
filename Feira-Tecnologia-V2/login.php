<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="index.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <body
    style="
      background-image: url('/images/bg-amarelo.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    "
  >
    <header>
      <img src="images/mcm-logo.png" alt="logo" />
      <!-- Adicione o caminho correto para o logotipo -->
      <h1>Entrar</h1>
      <img src="images/cps-logo.png" alt="logo" />
      <!-- Adicione o caminho correto para o logotipo -->
    </header>
    <main>
      <a href="home.php" class="voltar">voltar</a>
      <div class="lg-holder">
        <div class="entrar">
          <h2>Entrar</h2>
        </div>
        <div class="lg-container">
          <form action="" class="fm-holder">
            <div>
              <h2>E-Mail</h2>
              <input type="email" required />
            </div>
            <div>
              <h2>Senha</h2>
              <input type="password" required />
            </div>
            <div class="ct-et-holder">
              <a
                href="cadastro.php"
                style="background-color: var(--purple-first-color)"
              >
                <div
                  class="dots-lg"
                  style="background-color: var(--purple-second-color)"
                ></div>
                <p style="color: white">Cadastrar</p>
              </a>
              <button
                type="submit"
                style="background-color: var(--yellow-first-color)"
                onclick="window.location.href='index.php'"
              >
                <p style="color: black">Entrar</p>
                <div
                  class="dots-lg"
                  style="background-color: var(--yellow-second-color)"
                ></div>
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
