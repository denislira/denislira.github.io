
<script type="text/javascript">
<!--
  var Accum = 0;
  var FlagNewNum = false;
  var PendingOp = ""; 
  //Abaixo estamos adcionando os valores de cada botão ao parametro Num
  function NumPressed(Num) {
    if (FlagNewNum) {
      document.frm_calc.txt_01.value  = Num;
      FlagNewNum = false;
      }
    else {
      if (document.frm_calc.txt_01.value == "0")
        document.frm_calc.txt_01.value = Num;
      else
        document.frm_calc.txt_01.value += Num;
      }
  }
  //Valores de exibição quando apertado o botão igual
  function Operation(Op) {
    if (document.frm_calc.txt_01.value == ""){
      alert("O Campo esta vázio digite um valor");
      document.frm_calc.txt_01.value ="0"; }
    else{
      if (FlagNewNum && PendingOp != "=");
      else  {
        FlagNewNum = true;
        if ( '+' == PendingOp )
          Accum += parseFloat(document.frm_calc.txt_01.value);
          else if ( '-' == PendingOp )
          Accum -= parseFloat(document.frm_calc.txt_01.value);
          else if ( '/' == PendingOp )
          Accum /= parseFloat(document.frm_calc.txt_01.value);
          else if ( '*' == PendingOp )
          Accum *= parseFloat(document.frm_calc.txt_01.value);
        else if ( '%' == PendingOp )
          Accum *= parseFloat(document.frm_calc.txt_01.value);
        else
          Accum = parseFloat(document.frm_calc.txt_01.value);
          document.frm_calc.txt_01.value = Accum;
          PendingOp = Op;
      }
      }
  }
  //Atribuindo o ponto( . ) aos valores numéricos
  function Ponto() {
    var curtxt_01 = document.frm_calc.txt_01.value;
    if (FlagNewNum) {
      curtxt_01 = "0.";
      FlagNewNum = false;
      }
    else {
    if (curtxt_01.indexOf(".") == -1)
      curtxt_01 += ".";
      }
    document.frm_calc.txt_01.value = curtxt_01;
  }
-->
</script>
<style type="text/css">
  #calc table.calc{ border-radius: 2.2em 2.2em 0 0; width: 200px; background-color:#fff;}
  #calc td.td_title{ padding: 10px;}
  #calc input{color:#444; background-color:#ddd; cursor:hand; padding:10px; font-size: 18px; }
  #calc input[type="button"]{width: 50px; background-color: #ddd; border:0;}
  #calc input[type="button"]:hover{background-color: #999;}
  #calc input[type="text"]{width: 100%; background-color: #fff; border:0; font-size: 40px; text-align: right;}
  #calc input[type="reset"]{width: 50px; border:0; background-color: #da563a; color:#fff;}
  #calc input.important{background-color: #444; color:#fff;}

@media only screen and (max-width: 1024px) {
    #calc table.calc{ width: 300px; background-color:#fff; }
    #calc input{color:#444; background-color:#ddd; cursor:hand; padding:6px; font-size: 18px;}
    #calc input[type="button"]{width: 100%;}
    #calc input[type="reset"]{width: 100%;}
    #calc input[type="text"]{font-size: 30px;}
}
</style>

<form name="frm_calc" id="calc" acton>
<center>
<table width="100" class="calc" cellpadding="1" cellspacing="0" id="calc">
  <tr bgcolor="">
  <td colspan="5" align="Center" class="td_title"><b>Calculadora</b></td>
  </tr>
  <tr>
  <td colspan="5" align="center"><input type="text" name="txt_01" value="0"></td>
  </tr>
  <tr>
  <td><center><input type="reset" value="AC" onclick=""></center></td>
  <td><input type="button" value="" name=""></td>
  <td><input type="button" value="" name=""></td>
  <td><input type="button" value="" name=""></td>
  <td><center><input type="button" value="=" name="btn_igual" class="important" onclick="Operation('=')" ></center></td>
  </tr>
  <tr>
  <td><center><input type="button" value="7" name="btn_7" onclick="NumPressed(7)" ></center></td>
  <td><center><input type="button" value="8" name="btn_8" onclick="NumPressed(8)" ></center></td>
  <td><center><input type="button" value="9" name="btn_9" onclick="NumPressed(9)" ></center></td>
  <td><center><input type="button" value="+" name="btn_soma" onclick="Operation('+')" ></center></td>
  <td><center><input type="button" value="-" name="btn_subt" onclick="Operation('-')" ></center></td>
  </tr>
  <tr>
  <td><center><input type="button" value="4" name="btn_4" onclick="NumPressed(4)" ></center></td>
  <td><center><input type="button" value="5" name="btn_5" onclick="NumPressed(5)" ></center></td>
  <td><center><input type="button" value="6" name="btn_6" onclick="NumPressed(6)" ></center></td>
  <td><center><input type="button" value="*" name="btn_mult" onclick="Operation('*')" ></center></td>
  <td><center><input type="button" value="/" name="btn_divi" onclick="Operation('/')" ></center></td>
  </tr>
  <tr>
  <td><center><input type="button" value="1" name="btn_1" onclick="NumPressed(1)" ></center></td>
  <td><center><input type="button" value="2" name="btn_2" onclick="NumPressed(2)" ></center></td>
  <td><center><input type="button" value="3" name="btn_3" onclick="NumPressed(3)" ></center></td>
  <td><center><input type="button" value="0" name="btn_0" onclick="NumPressed(0)" ></center></td>
  <td><center><input type="button" value="." name="btn_pont" onclick="Ponto()" ></center></td>
  </tr>
</table>
</form></center>