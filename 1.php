<?php //sleep(2);?>

<br>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Download & Redirect</h1>
				<p class="lead">Ejemplo de descarga de archivos y reedireccionamineto SPA jQuery</p>
			</div>
		</div>
		<h4>Formulario Ejemplo</h4><hr>
		<form id="example_form">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Nombre</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary" id="btnSbmt">Submit</button>
		</form>
	</div>	
</div>

<script>
$(function(){
	$('#example_form').submit(function(e){
        e.preventDefault();
        $('#btnSbmt').hide();
        $.ajax({
            type:"POST",
            url: 'save.php',
            data:$('#example_form').serialize(),
            complete:function(){
                $('#example_form')[0].reset();
            },
            success: function(data){
                console.log(data);
                downloadURI('./img/mural.png', 'mural.png');
                loadSection("2.php", "#content");  
            },
            error: function(){
                console.log("error ajax");
            }
        });
    });
});
</script>
