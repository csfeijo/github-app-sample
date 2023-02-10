<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GitHub APP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col">
        <h1>GitHub App Sample Integration POC</h1>
        <p>POC assumindo que VOCE ainda não tem a APP instalada, caso contrário alguns efeitos colaterais no popup irão ocorrer...</p>
        <button id="btn-github" type="button" class="btn btn-secondary"><i class="bi bi-github"></i> Connect with GitHub</button>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col">
        <div class="alert alert-primary d-none" id="message">
          Autorizado!
        </div>
      </div>
    </div>

    <div class="row mt-3 d-none" id="list-repo-container">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Repositórios do Usuário vinculados a esta APP:
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              
            </div>
          </div>
        </div>
    </div>

  </div>
  <script src="js/popup.js?no-cache=<?php echo time();?>"></script>
</body>
</html>