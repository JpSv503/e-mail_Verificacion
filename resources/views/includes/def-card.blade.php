@guest
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Bienvenido</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"
        data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"
        data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      Para poder acceder Inicia seción
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      :)
    </div>
  <!-- /.card-footer-->
</div>
@else
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Bienvenido {{ Auth::user()->name }}</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"
        data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"
        data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      Bienvenido {{ Auth::user()->name }}
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      :)
    </div>
  <!-- /.card-footer-->
</div>
@endguest