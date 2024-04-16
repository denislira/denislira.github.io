<style type="text/css">
	.elegant-calencar {
  max-width: 700px;
  text-align: center;
  position: relative;
  margin: 0 auto;
  overflow: hidden;
  border-radius: 5px;
  -webkit-box-shadow: 0px 19px 27px -20px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0px 19px 27px -20px rgba(0, 0, 0, 0.16);
  box-shadow: 0px 19px 27px -20px rgba(0, 0, 0, 0.16); }

.wrap-header {
  position: relative;
  width: 35%;
  z-index: 0; }
  .wrap-header:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    background: #000;
    opacity: .5;
    z-index: -1; }
  @media (max-width: 767.98px) {
    .wrap-header {
      width: 100%;
      padding: 20px 0; } }

#header {
  width: 100%;
  position: relative; }
  #header .pre-button, #header .next-button {
    cursor: pointer;
    width: 1em;
    height: 1em;
    line-height: 1em;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 18px; }
    #header .pre-button i, #header .next-button i {
      color: #fff; }

.pre-button {
  left: 5px; }

.next-button {
  right: 5px; }

.button-wrap {
  position: relative;
  padding: 10px 0; }
  .button-wrap .pre-button, .button-wrap .next-button {
    cursor: pointer;
    width: 1em;
    height: 1em;
    line-height: 1em;
    border-radius: 50%;
    position: absolute;
    top: 0;
    font-size: 18px; }
    .button-wrap .pre-button i, .button-wrap .next-button i {
      color: #cccccc; }
  .button-wrap .pre-button {
    left: 20px; }
  .button-wrap .next-button {
    right: 20px; }

.head-day {
  font-size: 9em;
  line-height: 1;
  color: #fff; }

.head-month {
  font-size: 2em;
  line-height: 1;
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 300; }

.calendar-wrap {
  width: 65%;
  background: #fff;
  padding: 30px 20px 20px 20px; }
  @media (max-width: 767.98px) {
    .calendar-wrap {
      width: 100%; } }

#calendar {
  width: 100%; }

#calendar tr {
  height: 2.5em; }

#calendario  thead tr {
  color: #000;
  font-weight: 700; }

#calendario tbody tr {
  color: #000; }

#calendario tbody td {
  width: 14%;
  border-radius: 50%;
  cursor: pointer;
  -webkit-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  position: relative;
  z-index: 0; }
 #calendario tbody td:after {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    width: 44px;
    height: 44px;
    margin: 0 auto;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    border-radius: 50%;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    z-index: -1; }
    @media (prefers-reduced-motion: reduce) {
      tbody td:after {
        -webkit-transition: none;
        -o-transition: none;
        transition: none; } }

#calendario tbody td:hover, .selected {
  color: #fff;
  border: none; }
  tbody td:hover:after, .selected:after {
    background: #2a3246; }

#calendario tbody td:active {
  -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7); }

#today {
  color: #fff; }
  #today:after {
    background: #e13a9d; }

#disabled {
  cursor: default;
  background: #fff; }

#disabled:hover {
  background: #fff;
  color: #c9c9c9; }
  #disabled:hover:after {
    background: transparent; }

#reset {
  display: block;
  position: absolute;
  right: 0.5em;
  top: 0.5em;
  z-index: 999;
  color: rgba(255, 255, 255, 0.7);
  cursor: pointer;
  padding: 0 0.5em;
  border: 1px solid rgba(255, 255, 255, 0.4);
  border-radius: 4px;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  text-transform: uppercase;
  font-size: 11px; }

#reset:hover {
  color: #fff;
  border-color: #fff; }

#reset:active {
  -webkit-transform: scale(0.8);
  -ms-transform: scale(0.8);
  transform: scale(0.8); }
#calendario .img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }
</style>
 <div id="calendario">
					<div class="elegant-calencar d-md-flex">
						<div class="wrap-header d-flex align-items-center img" style="background-image: url(classes/calendario/images/bg.jpg);">
				      <p id="reset">Hoje</p>
			        <div id="header" class="p-0">
								<!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
		            <div class="head-info">
		            	<div class="head-month"></div>
		                <div class="head-day"></div>
		            </div>
		            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
			        </div>
			      </div>
			      <div class="calendar-wrap">
			      	<div class="w-100 button-wrap">
				      	<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
				      	<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
			      	</div>
			        <table id="calendar">
		            <thead>
		                <tr>
	                    <th>Dom</th>
	                    <th>Seg</th>
	                    <th>Ter</th>
	                    <th>Quar</th>
	                    <th>Qui</th>
	                    <th>Sex</th>
	                    <th>Sab</th>
		                </tr>
		            </thead>
		            <tbody>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
		            </tbody>
			        </table>
			      </div>
			    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
	<!-- <script src="classes/calendario/js/jquery.min.js"></script> -->
  <!-- <script src="classes/calendario/js/popper.js"></script> -->
  <!-- <script src="classes/calendario/js/bootstrap.min.js"></script> -->
  <script src="classes/calendario/js/main.js"></script>


