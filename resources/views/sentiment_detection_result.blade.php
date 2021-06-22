<html>
<head>
  <title>Sentiment Detection Results</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
  />
  <style>
    .center-block {
      display: block;
      margin-right: auto;
      margin-left: auto;
    }
  </style>
</head>
<body>
  <div class="container text-center center-block">
    <h1 class="text-center">PREDICTION RESULTS</h1>
    <h4>Mensagem Enviada:</h4>
    <p>{{ $message }}</p>
    <hr />
    <h4>Sentimento Detectado:</h4>

    @if($result == "normal messsage")
    <p>A mensagem enviada tem <strong><span style="color: green;">{{ $result }}</span></strong> caracteres.</p>

    @else

    <p> A mensagem enviada tem <strong><span style="color: red;">{{ $result }}</span></strong> caracteres.</p>
    
    @endif 
    
    <br />

    <h3 class="text-center">
      <a href="/" class="btn btn-lg btn-primary" title="">Tenta Novamente</a>
    </h3>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>