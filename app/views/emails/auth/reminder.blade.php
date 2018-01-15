<!DOCTYPE html>
<html>
<head>
    <title>ContactMe</title>
&lt;!-- Latest compiled and minified CSS --&gt; &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"&gt;
</head>
<body>

<div class=”container”>

&lt;h1&gt;ContactMe&lt;/h1&gt; &lt;hr /&gt; &lt;form action="/enviar" method="POST"&gt; &lt;input type="hidden" name="_token" value="{{ csrf_token() }}"&gt; &lt;div class="form-group"&gt; &lt;label for="nome"&gt;Nome&lt;/label&gt; &lt;input type="text" id="nome" name="nome" class="form-control" placeholder="Nome"&gt; &lt;/div&gt; &lt;div class="form-group"&gt; &lt;label for="email"&gt;E-Mail&lt;/label&gt; &lt;input type="text" id="email" name="email" class="form-control" placeholder="E-Mail"&gt; &lt;/div&gt; &lt;div class="form-group"&gt; &lt;textarea id="mensagem" name="mensagem" class="form-control" placeholder="Digite sua mensagem"&gt;&lt;/textarea&gt; &lt;/div&gt; &lt;button type="submit" class="btn btn-default"&gt;Enviar&lt;/button&gt; &lt;/form&gt;
</div>

</body>
</html>