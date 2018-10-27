<!DOCTYPE html>
<html>
<head>
	<title>Aula PHP - Mout's</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="aula_style.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <hr>
            <form id="formEnvia" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control"
                           name="email"
                           id="email" placeholder="Email">
                </div>
                <a href="#" class="btn btn-primary" id="btSalvar">Salvar</a>
            </form>
            <div id="resposta" style="margin-top: 20px">

            </div>
            <hr>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>




<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>
        <script src="aula.js"></script>
</body>
</html>