<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>clinica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container my-5">
        <h2>Lista de pacientes</h2>
        <a class="btn btn-primary" href="/proyectoblanco/create.php" role="button"> nuevo cliente</a>
        <br>
        <table class="table">
            <tr>
              <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>DNI</th>
                <th>CONSULTA</th>
                <th>create AT</th>
              </thead>
              <tbody>

              <?php
              include('config.php');
              session_start();

                $sql = "SELECT * FROM clients;";
                $result = $connection -> query($sql);

                while ($row = $result -> FETCH_ASSOC)) {
                  <tr>
                      <td>$row[id]</td>
                      <td>$row[name]</td>
                      <td>$row[dni]</td>
                      <td>$row[consulta]</td>
                      <td>$row[created_at]</td>
                      <td>
                      <a class="btn btn-primary btn-sm"  href="/proyectoblanco/edit.php?id=">edit</a>
                      <a  class="btn btn-primary btn-sm"  href="/proyectoblanco/delete.php?id=">edit</a>
                      </td>
                  </tr>
              ?>

              </tbody>

            </tr>
        </table>
    </div>
  </body>
</html>
