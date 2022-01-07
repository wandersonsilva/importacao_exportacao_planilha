<!DOCTYPE html>
<html>
<head>
    <title>Importação Empenhos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Importação Empenhos
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Importar Dados</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Exportar Dados</a>
            </form>

            <div class="container" style="padding-top:20px;">
                
                @if (isset($msg))
                    <div class="alert alert-success" role="alert">
                        {{ $msg ?? '' }}
                    </div>
                @endif
                                    
                
                 <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>                        
                            <th class="texto-caixa-alta">Numero</th>
                            <th class="texto-caixa-alta">Ano Empenho</th>
                            <th class="texto-caixa-alta">Nome da Unidade</th>                            
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>                        					
						
                    </thead>
                    <tbody>                    
                        
                    </tbody>
                </table>    
      
                <br>
                
        </div>
        </div>
    </div>
</div>
</body>
</html>