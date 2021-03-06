<!-- app/views/opts/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ExperTrees</title>

    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/sb-admin.css" rel="stylesheet">
    <link href="../../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="../../../public">ExperTrees</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../../clons">Klon/Varietas</a></li>
            <li class="active"><a href="../../opts">OPT</a></li>
            <li><a href="../../fertils">Pemupukan</a></li>
            <li><a href="../../irigations">Irigasi</a></li>
            <li><a href="../../modules">Modul ES</a></li>
        </ul>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Klon/Varietas
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../../../public">Beranda</a>
                        </li>
                        <li>
                            <a href="../../opts">OPT</a>
                        </li>
                        <li class="active">
                            Ubah OPT
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6">
	            {{ HTML::ul($errors->all()) }}

				{{ Form::model($opt, array('action' => array('OptController@update', $opt->id), 'method' => 'PUT')) }}

					<div class="form-group">
						{{ Form::label('name', 'Nama') }}
						{{ Form::text('name', null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('cause', 'Penyebab') }}
						{{ Form::text('cause', null, array('class' => 'form-control')) }}
					</div>

					{{ Form::submit('Simpan', array('class' => 'btn btn-primary')) }}

				{{ Form::close() }}
			</div>
        </div>        
    </div>
</body>
</html>