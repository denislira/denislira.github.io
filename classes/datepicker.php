
<!-- <script type="text/javascript" src="js/jquery-1.6.4.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script> -->
<!-- <link rel="stylesheet" href="js/jquery-ui-1.8.16.custom.css" type="text/css" media="all" /> -->

 <link rel="stylesheet" href="../js/jquery-ui.css" />
  <script src="../js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
  $.datepicker.setDefaults({dateFormat: 'dd/mm/yy',
dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho','Julho','Agosto','Setembro', 'Outubro','Novembro','Dezembro'],
monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set', 'Out','Nov','Dez'],
nextText: 'Próximo',
prevText: 'Anterior'
});
  </script>