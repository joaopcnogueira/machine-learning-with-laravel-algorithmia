<html>
<head>
  <title>Sentiment Detection</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
  .center-block {
    display: block;
    margin-right: auto;
    margin-left: auto;
  }
</style>
<body>
  <div class="container center-block">
    <h3 class="text-center">DETECÇÃO DE SENTIMENTOS EM PORTUGUÊS</h3>
    <h6 class="text-center">Powered by VADER</h6>

    <div class="text-center">
      <form action="{{ route('sentiment.predict') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="year">Escreva aqui uma mensagem:</label>
          <textarea class="form-control" id="message" name="message" cols="10" rows="7" placeholder="Escreva a mensagem aqui" required>{!!old('message')!!}</textarea>
        </div>
        @error('message')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <br />
        <button type="submit" class="btn btn-primary">Predict</button>
      </form>
    </div>
    <div>
      <h2 class="text-center">Exemplos de Mensagens</h2>
      <div class="row">
        <div class="col-md-6">
          <h4 class="text-center">Mensagens com Sentimento Positivo</h4>
          <hr />
          <ul>
            <li>
                Muito obrigado pelo atendimento, você resolveu o meu problema!
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h4 class="text-center">Mensagens com Sentimento Negativo</h4>
          <hr />
          <ul>
            <li>
                Eu vou denunciar no PROCON!
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>