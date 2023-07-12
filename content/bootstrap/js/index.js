
$(document).ready(() => {
  // Função para gerar os cards dos gestores
  const gerarCardsGestores = (outdoors) => {
    var html = "";

    // Percorrer os gestores e gerar o HTML para cada um
    outdoors.forEach(function(outdoor) {
      html += '<div class="border border-gray-100 rounded-lg p-4 mb-4 flex justify-between">';
      html += '<!-- Conteúdo do card do gestor -->';
      html += '<b>' + outdoor.type + '</b>';
      html += '<h2>' + outdoor.price + 'AOA </h2>';
      html += '<h2>' + outdoor.status + '</h2>';
      html += '<!-- Botão para remover o o outdoor -->';
      html += '<button class="text-red-500">Remover</button>';
      html += '</div>';
    });

    // Inserir o HTML gerado no elemento desejado na página
    document.getElementById("outdoors").innerHTML = html;
  }

  // Função para obter os gestores via AJAX
  const getManagers = () => {
    $.ajax({
      url: '../utils/get_outdoor.php', // Caminho do arquivo PHP que irá retornar os gestores
      type: 'GET',
      dataType: 'json',
      success: (data) => {
        alert(data);
        // Chamar a função para gerar os cards dos gestores
        gerarCardsGestores(data);
      },
      error: (status, xhr, err) => {
        console.log(err, xhr, status);
      }
    });
  }

  // Chamar a função para obter os gestores ao carregar a página
  getManagers();
});