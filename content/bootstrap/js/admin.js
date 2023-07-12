  function openModal(id) {
    var modal = document.getElementById(id);
    modal.classList.remove('hidden');
  } 

  function closeModal(id) {
    var modal = document.getElementById(id);
    modal.classList.add('hidden');
  }

//Ajax thing 

$(document).ready(() => {
  // Função para preencher o select com as provincias
  const preencherProvincias = () => {
    $.ajax({
      url: '../utils/get_provinces.php', // Caminho do arquivo PHP que irá retornar as provincias
      type: 'GET',
      dataType: 'json',
      success: (data) => {
        // Limpar as opções do select
        $('#province').empty();
        
        // Adicionar a opção padrão
        $('#province').append($('<option>').val('').text('Selecione a província'));
        
        // Preencher o select com as provincias
        $.each(data, (_, province) => {
          $('#province').append($('<option>').val(province.id).text(province.name));
        });
      },
      error: () => {
        console.log('Erro na requisição AJAX');
      }
    });
  }

  // Chamar a função para preencher as provincias ao carregar a página
  preencherProvincias();
});

$(document).ready(function() {
  // Função para preencher o select com os municípios
  function preencherMunicipios(provinceId) {
    $.ajax({
      url: '../utils/get_municipalities.php', // Caminho do arquivo PHP que irá retornar os municípios
      type: 'GET',
      dataType: 'json',
      data: { provinceId: provinceId },
      success: function(data) {
        // Limpar as opções do select
        $('#municipality').empty();
        
        // Adicionar a opção padrão
        $('#municipality').append($('<option>').val('').text('Selecione o município'));
        
        // Preencher o select com os municípios
        $.each(data, function(_, municipality) {
          $('#municipality').append($('<option>').val(municipality.id).text(municipality.name));
        });
      },
      error: function() {
        console.log('Erro na requisição AJAX');
      }
    });
  }

  $('#province').on('change', function() {
    var selectedProvinceId = $(this).val();
    if (selectedProvinceId !== '') {
      preencherMunicipios(selectedProvinceId);
    } else {
      // Limpar o select de municípios se nenhuma província for selecionada
      $('#municipality').empty();
      $('#municipality').append($('<option>').val('').text('Selecione o município'));
    }
  });
});


$(document).ready(function() {
  // Função para preencher o select com as comunas
  function preencherComunas(municipalityId) {
    $.ajax({
      url: '../utils/get_communes.php', // Caminho do arquivo PHP que irá retornar os municípios
      type: 'GET',
      dataType: 'json',
      data: { municipalityId: municipalityId },
      success: function(data) {
        // Limpar as opções do select
        $('#commune').empty();
        
        // Adicionar a opção padrão
        $('#commune').append($('<option>').val('').text('Selecione a comuna'));
        
        // Preencher o select com as comunas
        $.each(data, function(_, commune) {
          $('#commune').append($('<option>').val(commune.id).text(commune.name));
        });
      },
      error: function() {
        console.log('Erro na requisição AJAX');
      }
    });
  }

  $('#municipality').on('change', function() {
    var selectedMunicipalityId = $(this).val();
    if (selectedMunicipalityId !== '') {
      preencherComunas(selectedMunicipalityId);
    } else {
      // Limpar o select de municípios se nenhuma província for selecionada
      $('#commune').empty();
      $('#commune').append($('<option>').val('').text('Selecione a comuna'));
    }
  });
});

//Pegar gestores

/*
$(document).ready(() => {
  // Função para preencher o select com as provincias
  const getManagers = () => {
    $.ajax({
      url: '../utils/get_manager.php', // Caminho do arquivo PHP que irá retornar as provincias
      type: 'GET',
      dataType: 'json',
      success: (data) => {
       console.log(data);
      },
      error: () => {
        console.log('Erro na requisição AJAX');
      }
    });
  }

  // Chamar a função para preencher as provincias ao carregar a página
  getManagers();
});*/

$(document).ready(() => {
  // Função para gerar os cards dos gestores
  const gerarCardsGestores = (gestores) => {
    var html = "";

    // Percorrer os gestores e gerar o HTML para cada um
    gestores.forEach(function(gestor) {
      html += '<div class="border border-gray-100 rounded-lg p-4 mb-4 w-full flex justify-between">';
      html += '<!-- Conteúdo do card do gestor -->';
      html += '<b>' + gestor.name + '</b>';
       html += '<h2>' + gestor.address + '</h2>';
        html += '<h2>' + gestor.phone + '</h2>';
      html += '<!-- Botão para remover o gestor -->';
      html += '<button class="text-red-500">Remover</button>';
      html += '</div>';
    });

    // Inserir o HTML gerado no elemento desejado na página
    document.getElementById("gestores").innerHTML = html;
  }

  // Função para obter os gestores via AJAX
  const getManagers = () => {
    $.ajax({
      url: '../utils/get_manager.php', // Caminho do arquivo PHP que irá retornar os gestores
      type: 'GET',
      dataType: 'json',
      success: (data) => {
        // Chamar a função para gerar os cards dos gestores
        document.getElementById('total-gestores').innerHTML = `Total: ${data.length}`;
        gerarCardsGestores(data);
      },
      error: () => {
        console.log('Erro na requisição AJAX');
      }
    });
  }

  // Chamar a função para obter os gestores ao carregar a página
  getManagers();
});


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
        // Chamar a função para gerar os cards dos gestores
        document.getElementById('total-outdoors').innerHTML = `Total: ${data.length}`;
        gerarCardsGestores(data);
      },
      error: () => {
        console.log('Erro na requisição AJAX');
      }
    });
  }

  // Chamar a função para obter os gestores ao carregar a página
  getManagers();
});







