<?php
include('views/header.php');
include('./index.php');

?>



<body>
  <header>
    <div class="container-xl cabecalho_div">
      <div class="row cabecalho">
        <div class="col-xl-6 div-img"><a href="https://thep.com.br/" target="_blank">
            <img src="img/logo-thep.png" alt="Logo da THEP" class="img-logo"></a>
        </div>
        <div class="col-xl-6 div-img2 ">
          <a href="https://uniaodospalmares.al.gov.br/" target="_blank">
            <img src="img/uniao-dos-palmares.png" alt="Logo de Uniao dos Palmares" class="img-logo">
          </a>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-xl-6 imagens">
        <img src="img/objetos.png" alt="" id="objetos">
        <div class="mochila-classe">
          <img src="img/mochila.png" alt="" id="mochila">
        </div>
      </div>
      <div class="col-xl-6 d-flex justify-content-end ml-5">
        <form class="forms" action="index.php" method="POST">

          <h5 class="fw-normal mb-1 pb-2 titulo" style="letter-spacing: 1px;">Sistema de Avaliação da Educação Básica (Saeb)</h5>

          <div class="form-outline mb-4 ">
            <label class="form-label fonte" for="nome">Nome completo:</label>
            <input type="text" name="nome" id="nome" class="form-control form-control-sm" required />
          </div>

          <div class="form-outline mb-3 d-flex justify-content-between">
            <select name="ano" id="ano" class="form-select-sm select">
              <option value="padrao-ano" selected disabled>Escolha sua série</option>
              <option value="5ano">5 ano</option>
              <option value="9ano">9 ano</option>
            </select>

            <select name="turma" id="turma" class="form-select-sm select" required>
              <option value="padrao-turma" selected disabled>Escolha sua turma</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
              <option value="G">G</option>
            </select>
          </div>

          <div class="form-outline mb-2 professor-5ano">
            <label class="form-label fonte" for="professor5ano">Nome do seu professor:</label>
            <input type="text" id="professor5ano" class="form-control form-control-sm" name="professor5ano" />
          </div>

          <div class="form-outline mb-2 professor-9ano professor-9ano-matematica">
            <label class="form-label fonte" for="professor9ano">Nome do seu professor de matemática:</label>
            <input type="text" id="professor9ano-matematica" class="form-control form-control-sm" name="professor9ano-matematica" />
          </div>

          <div class="form-outline mb-1 professor-9ano professor-9ano-portugues">
            <label class="form-label fonte" for="portugues">Nome do seu professor de português:</label>
            <input type="text" id="professor9ano-portugues" class="form-control form-control-sm" name="professor9ano-portugues" />
          </div>


          <div class="mb-2 botao-div">
            <button class="botao_entrar success" type="submit">
              ENTRAR
            </button>
            <div class="loader">
              <div class="check">
                <span class="check-one"></span>
                <span class="check-two"></span>
              </div>
            </div>
            <div>
              <p class="small text-decoration-none texto_pequeno txt_form" href="#!">Preencha os dados corretamente para acessar o conteúdo 🤩</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="rodape small text-decoration-none">
    &copy; 2022 - 2023 <a href="https://thep.com.br/" class="txt_rodape" target="_blank">Tecnologias e Habilidades da Educação Pública</a></footer>

</body>

</html>