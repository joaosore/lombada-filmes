export function logo(el)
  {
      var a = document.getElementById("logo-svg");
      var svgDoc = a.contentDocument;
      var svg = $(svgDoc).find('svg');
      var Redes_de_protecao = $(svgDoc).find('#Redes_de_proteção');
      var A_unica_com_fita_de_autenticidade = $(svgDoc).find('#a_única_com_fita_de_autenticidade');
      if(el == 0)
      {
          $(svg).removeAttr('viewBox');
          $(svg).each(function()
          {
              $(this)[0].setAttribute('viewBox', '0 0 370 162')
          });
          $(Redes_de_protecao).show();
          $(A_unica_com_fita_de_autenticidade).show();
      }
      else
      {
          $(svg).removeAttr('viewBox');
          $(svg).each(function()
          {
              $(this)[0].setAttribute('viewBox', '0 0 370 135')
          });
          $(Redes_de_protecao).hide();
          $(A_unica_com_fita_de_autenticidade).hide();
      }
  }