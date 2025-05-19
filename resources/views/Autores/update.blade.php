<!-- Modal -->
<div class="modal fade" id="modalEditarAutor{{ $autor->codigo_autor }}" tabindex="-1" aria-labelledby="modalEditarAutorLabel{{ $autor->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('autores.update', $autor->codigo_autor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarAutorLabel{{ $autor->id }}">Editar Autor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="codigo_autor{{ $autor->id }}" class="form-label">Código Autor</label>
            <input type="text" class="form-control" id="codigo_autor{{ $autor->codigo_autor}}" name="codigo_autor" value="{{ $autor->codigo_autor }}" required>
          </div>
          <div class="mb-3">
            <label for="nombre_autor{{ $autor->id }}" class="form-label">Nombre Autor</label>
            <input type="text" class="form-control" id="nombre_autor{{ $autor->codigo_autor }}" name="nombre_autor" value="{{ $autor->nombre_autor }}" required>
          </div>
          <div class="mb-3">
            <label for="nacionalidad{{ $autor->id }}" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad{{ $autor->codigo_autor }}" name="nacionalidad" value="{{ $autor->nacionalidad }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>