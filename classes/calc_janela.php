<html>
<head>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
</head>
<style type="text/css">
  div.painel,p.flip3{width: 300px; padding:5px; text-align:center; background:#565656; border:solid 1px #eee; position:fixed;
  right:10px; bottom:-15px; z-index:10; box-shadow: 3px 5px 8px rgba(0, 0, 0, .4); color:#fff;}
 div.painel{position:fixed; bottom: 29px; width: 300px; height: auto; display:none; text-align:left; z-index:1;}
 button{border:0; background-color: #fff}
</style>



<div class="painel">
<button>X</button><br>
  <?php include("calculadora.php");?>
</div>
<p class="flip3">Calculadora </p>


<script type="text/javascript">
  $(".flip3").mousedown(function () {
    $(".flip3").animate({ width: 300 }, "fast");
    $(".painel").delay(300).slideDown("fast");
});
$("button").click(function () {
    $(".painel").slideUp("fast");
    $(".flip3").delay(200).animate({ width: 100 }, "fast");
});
</script>