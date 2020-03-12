<?php 
require 'vendor/autoload.php';
require 'function/Kumpul.php';
echo $ambil->url();
if(isset($_POST['pesan'])){
	$data = array(
		'chat_id' => '734229344',
		'text'    => $_POST['pesan'],
	);
	$ambil->pesan($data);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Telegram Bot</title>
  </head>
  <body>
    <div class="container">
    	<div class="row justify-content-center">
    		<div class="col-md-5">
    			<div class="card">
    				<div class="card-header bg-primary">Chat Room</div>
    				<div class="card-body">tes</div>
    				<div class="card-footer">
    					<form method="post">
    						<div class="form-group">
    							<div class="form-row">
    								<div class="col-md-10">
    									<textarea name="pesan" class="form-control" rows="1"></textarea>
    								</div>
    								<div class="col-md-2">
    									<button type="submit" class="btn btn-info">Send</button>
    								</div>
    							</div>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>								
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
	  <script>

	    // Enable pusher logging - don't include this in production
	    Pusher.logToConsole = true;

	    var pusher = new Pusher('421ce9b5265ffbfbde08', {
	      cluster: 'ap1',
	      forceTLS: true
	    });

	    var channel = pusher.subscribe('my-channel');
	    channel.bind('my-event', function(data) {
	      alert(JSON.stringify(data));
	    });

	    $('.tambah_cart').click(function(){
	        var id_produk      = $(this).data("id_produk");
	        var nama_produk    = $(this).data("nama_produk");
	        var harga_produk   = $(this).data("harga_produk");
	        // var harga_potongan = $(this).data("harga_potongan");
	        var jumlah         = $(this).data("jumlah");
	        $.ajax({
	            url: "home/tambah_cart",
	            method: "POST",
	            data : {
	                id_produk      : id_produk,
	                nama_produk    : nama_produk,
	                harga_produk     : harga_produk,
	                // harga_potongan : harga_potongan,
	                jumlah         : jumlah,
	            },
	            success: function(data){
	                tampil_produk();
	            }
	        })
	    });
	  </script>
  </body>
</html>