<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Nuevo rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="tile">
      <div class="tile-body">
        <form id="formRol" name="formRol">
          <div class="form-group">
            <label class="control-label">Nombre</label>
             <input class="form-control" id="txtnombre" name="txtnombre" type="text" placeholder="Nombre del rol" required="">
          </div>

            <div class="form-group">
              <label class="control-label">Descripcion</label>
                <textarea class="form-control" id="txtdescripcion" name="txtdescripcion" rows="2" placeholder="Descripcion" required=""> </textarea>
            </div>
              <div class="form-group">
                <label for="exampleSelect1">Estado</label>
                <select class="form-control" id="liststatus" name="liststatus" required="">
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
                </select>
            </div>
              <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a 
                class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
              </div>
        </form>
     </div>
    </div>
  </div>
</div>
</div>
</div>




