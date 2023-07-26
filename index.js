

const professor5ano = $('.professor-5ano');
const professorMat9ano = $('.professor-9ano-matematica');
const professorPort9ano = $('.professor-9ano-portugues');


const selectTurma = $('select[name="turma"]').val();


$(document).ready(function () {
  professor5ano.hide();
  professorMat9ano.hide();
  professorPort9ano.hide();

  var animateButton = function (e) {

    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');

    e.target.classList.add('animate');

    e.target.classList.add('animate');
    setTimeout(function () {
      e.target.classList.remove('animate');
    }, 6000);
  };

  var classname = document.getElementsByClassName("botao_entrar");

  for (var i = 0; i < classname.length; i++) {
    classname[i].addEventListener('click', animateButton, false);
  }



});






$('#ano').on('change', function () {


  if ($('#ano').val() === '5ano') {
    professor5ano.show();
    professorMat9ano.hide();
    professorPort9ano.hide();
  } else {
    professor5ano.hide();
    professorMat9ano.show();
    professorPort9ano.show();
  }


});

$('.forms').submit(function (ev) {
  ev.preventDefault();

  ev.stopImmediatePropagation();
  const nome = $('#nome').val();
  const ano = $('select[name="ano"]').val();
  const turma = $('select[name="turma"]').val();
  const prof5ano = $('#professor5ano').val();
  const profMat9ano = $('#professor9ano-matematica').val();
  const profPort9ano = $('#professor9ano-portugues').val();



  $.ajax({
    url: "index.php",
    type: "POST",
    data: {
      nome: nome,
      ano: ano,
      turma: turma,
      prof5ano: prof5ano,
      profMat9ano: profMat9ano,
      profPort9ano: profPort9ano
    },
    success: function (d) {
      setTimeout(timeOut, 3500);
      function timeOut() {
        window.location.href = "login.html";
      }
      console.log(d);
    }

  });
});





