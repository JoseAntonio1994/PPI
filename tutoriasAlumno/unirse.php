<div class="row">
  <div class="container-fluid">
    <div class="form-group col-md-12 col-sm-12 text-center">
      <h1>Unirse a grupos</h1>
    </div>
    <div class="col-md-12 col-sm-12">
      <form class="form-horizontal">
        <div class="form-group col-md-8 col-sm-12">
          <input type="text" class="form-control" id="buscar_grupos" placeholder="buscar">
        </div>
        <div class="form-group col-md-2 col-sm-12 text-center">
          <button type="text" class="btn btn-default">Buscar</button>
        </div>
        <div class="form-group col-md-2 col-sm-12 text-center">
          <button type="text" class="btn btn-default">Ver todos los grupos</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid col-sm-12">
  <button type="button" class="list-group-item" data-toggle="modal" data-target="#myModal">Cras justo odio</button>
  <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
</div>

<div class="row">
  <div class="container-fluid text-center">
    <div class="col-sm-12">
      <a class="btn btn-default" href="javascript:void(0)" role="button" onclick="cargarPrincipal()">Volver</a>
    </div>
  </div>
</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
            </tr>
            <tr>
              <td>Mary</td>
              <td>Moe</td>
              <td>mary@example.com</td>
            </tr>
            <tr>
              <td>July</td>
              <td>Dooley</td>
              <td>july@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Unirse</button>
      </div>
    </div>
  </div>
</div>