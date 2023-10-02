<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body style="display: flex;
  flex-flow: row wrap;
  justify-content: center;
  height: 100%;">

<div style="margin-top: 20%; display: flex; align-self: center;text-align: center;">
   <form name="post" action="./" method="<?= $form->method; ?>" enctype="multipart/form-data" novalidate>
    <p><a class="btn btn-danger" href="./" title="Atualizar">Atualizar</a></p>
    <div class="col2 ">
        <input class="mb-3 form-control" type="text" name="name" value="<?= $form->name; ?>" placeholder="Nome:"/>
        <input class="mb-2 form-control " type="email" name="mail" value="<?= $form->mail; ?>" placeholder="E-mail:" required/>
    </div>
    <button class="mt-2 btn btn-primary p-2 px-3" >Enviar Agora!</button>
   </form>
</div>

</body>
</html>
