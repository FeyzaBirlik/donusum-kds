<html>
<head>
<title>KDS</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 

<style>


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
</style>


</head>




<div class="container">
	<div class="row" style="    background-color: lightblue">

		<section class="content">
			<h1>YIKIM RAPORU</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						
							
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
								<label>Yıkılacak Binayı Seçin</label>
								<br><select>
								<option>Bina</option>							
								<option>35000</option>
								<option>35001</option>
								<option>35002</option>
								<option>35003</option>
								<option>35004</option>
								<option>35005</option>
								<option>35006</option>
								<option>35007</option>
								<option>35008</option>
								<option>35009</option>
								</select><br>
								
								<br><label>Bina İle İlgili Önemli Notlar:</label><br>
								<br><textarea rows="4" cols="50">Önemli notları buraya yazınız.</textarea><br>
								
								<br><label>Yıkım Tarihini Belirleyiniz:</label><br>
								<br><form>Tarih<input type="date" name="yas"></form><br>
								
								<br><label>Kullanım Durumunu Seçiniz:</label><br>
								<br><form action="">
  <input type="radio" name="dolu" value="dolu"> Dolu<br>
  <input type="radio" name="bos" value="bos"> Bos<br>
  
</form><br>

								
								
								</tbody>
							</table>
								<form method="get" action="gonder.php">
						<button type="submit">Raporu Gönder</button>
						</form>		
						</div>
					</div>
				</div>
				<div class="content-footer" style="heigth:200px; width:300px;">
					
						
					
				</div>
			</div>
		</section>
		
	</div>
</div>
</html>
