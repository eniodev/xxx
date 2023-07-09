
$(document).ready(() => {
  // Função para preencher o select com os países
  const preencherPaises = () => {
    $.ajax({
      url: '../utils/get_countries.php', // Caminho do arquivo PHP que irá retornar os países
      type: 'GET',
      dataType: 'json',
      success: (data) => {
        // Limpar as opções do select
        $('#country').empty();
        
        // Adicionar a opção padrão
        $('#country').append($('<option>').val('').text('Selecione o país'));
        
        // Preencher o select com os países
        $.each(data, (_, country) => {
          $('#country').append($('<option>').val(country.id).text(country.name));
        });
      },
      error: () => {
        console.log('Erro na requisição AJAX');
      }
    });
  }

  // Chamar a função para preencher os países ao carregar a página
  preencherPaises();
});


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



