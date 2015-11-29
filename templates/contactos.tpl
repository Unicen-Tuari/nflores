<form class="form-horizontal" action="index.php?action=mail" method="POST" id="form-contactos">
  <div class="form-group">
    <label for="nickname" class="col-sm-3">Nickname</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nickname" placeholder="Nick" name="nickname">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3" for="e-mail">E-Mail</label>
    <div class="col-sm-5">
      <input class="form-control" type="email"  id="e-mail" placeholder="E-mail" name="e-mail" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3" for="informacion">Texto</label>
    <textarea class="form-control" rows="8" placeholder="Informacion" id="informacion" name="informacion"></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-default cargarcategoria">Send</button>
</form>