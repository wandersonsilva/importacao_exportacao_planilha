<!DOCTYPE html>
<html>
<head>
    <title>Importação de Empenhos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Importação de Empenhos
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Importar Dados</button>
                <a class="btn btn-warning" href="">Exportar Dados</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>