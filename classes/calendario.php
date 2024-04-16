<style type="text/css">

table.calendar {border-collapse: collapse; border-spacing: 0;}
table.calendar > td {padding: 0;}
.quadro_container {left: 55%; position: relative; top: 48%; transform: translate(-50%, -50%); }
.calendar-container { position: relative; width: 408px;}
.calendar-container header { border-radius: 2.2em 2.2em 0 0; background: #f3b70a; color: #fff; padding: 1.6em 2em;}
.day { font-size: 2em; font-weight: 900; line-height: 1em;}
.month {font-size: 2em; line-height: 1em; text-transform: lowercase;}
.calendar {background: #fff; border-radius: 0 0 0.2em 0.2em;
    //-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2), 0 3px 1px #fff;
    //box-shadow: 0 5px 10px rgba(0, 0, 0, .5), 0 3px 1px #fff;
    color: #555; display: inline-block; padding: 1.8em;
}
.calendar thead {color: #102d61; font-weight: 700; text-transform: uppercase;}
.calendar td {padding: .2em 1em; text-align: center;}
.calendar tbody td:hover {background: #cacaca; color: #fff;}
.current-day {color: #e66b6b; /*  COR DO DIA DE HOJE  */ background-color: #ddd; padding: 2px;}
.prev-month, .next-month { color: #cacaca;}
.ring-left, .ring-right {position: absolute; top: 55px;}
/*.ring-left { left: 10em; }
.ring-right { right: 8em; }
.ring-left:before,
.ring-left:after,
.ring-right:before,
.ring-right:after {
    background: #fff;
    border-radius: 0.2em;
    -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .3), 0 2px 5px rgba(0, 0, 0, .2);
    box-shadow: 0 2px 5px rgba(0, 0, 0, .3), 0 2px 5px rgba(0, 0, 0, .2);
    content: "";
    display: inline-block;
    margin: 8px;
    height: 32px;
    width: 8px;*/
}</style>

<script type="text/javascript" language="JavaScript">
<!--
function calendar()
{
var monthNames = new Array("Janeiro", "Fevereiro", "Março", "Abril",
"Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
var today = new Date();
var thisDay = today.getDate();
var monthDays = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

year = today.getYear();
// ano bissexto?
if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0))
monthDays[1] = 29;
// achar o numero de dias deste mes
nDays = monthDays[today.getMonth()];
firstDay = today;
firstDay.setDate(1);
startDay = firstDay.getDay();
document.writeln("<div class='quadro_container'><div class='calendar-container'>");
document.write("<header>");
//document.write("<div class='day'>" +  thisDay + "</div>");
document.write("<div class='month'>"+ thisDay + " de " + monthNames[ today.getMonth() ] + "</div>");
document.write("</header>");
document.write('<TABLE class="calendar">');
document.write("<thead>");
document.write("<TR><TH>");
document.write("Dom<TH>Seg<TH>Ter<TH>Qua<TH>Qui<TH>Sex<TH>Sab");
document.write("<TR>");
document.write("</thead>");
column = 0;
for (i=0, column=0; i<startDay; i++, column++)
document.write("<TD>");

for (i=1; i<=nDays; i++)
{
document.write("<TD>");
if (i == thisDay)
document.write("<div class='current-day'><b>" + i + "</FONT>");
else document.write(i);
column++;
if (column == 7)
{
document.write("<TR>"); // inicio de nova linha
column = 0;
}
}
document.write("</TABLE>");
document.writeln("</CENTER>");
document.write('<div class="ring-left"></div>');
document.write('<div class="ring-right"></div>');
document.write('</div></div>');
}
calendar();
//-->
</script>
</body>
</html>