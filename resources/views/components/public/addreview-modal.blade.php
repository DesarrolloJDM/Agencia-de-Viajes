<div
    class="modal fade mt-5"
    id="modal-add-review"
    tabindex="-1"
    aria-labelledby="add-review-label"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form
            method="POST"
            action="{{ route('addreview') }}"
          >
            @csrf
            @method('POST')
            <div class="modal-header">
              <h5 class="modal-title" id="add-review-label">Agregrar Reseña</h5>
              <button type="" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-1">
                        <label for="user-firstname" class="form-label"> 
                            Nombre
                        </label>
                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            id="user-firstname"
                            placeholder="e.j. Manuel"
                            value="{{ old('username') }}"
                            required
                        />
                    </div>
                    <div class="mb-1">
                        <label for="user-comment" class="form-label"> 
                            Comentario
                        </label>
                        <input
                            type="text"
                            name="comment"
                            class="form-control"
                            id="user-comment"
                            placeholder="Su comentario aqui..."
                            value="{{ old('comment') }}"
                            required
                        />
                    </div>
                    <div class="mb-1">
                        <label for="rate" class="form-label"> 
                            Calificación
                        </label>
                        <select id="rate" name="rate" class="form-select" value="{{ old('rate') }}">
                            <option selected value="1">1 ⭐</option>
                            <option value="2">2 ⭐</option>
                            <option value="3">3 ⭐</option>
                            <option value="4">4 ⭐</option>
                            <option value="5">5 ⭐</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
              <button 
                type="submit"
                class="btn btn-sm vs-btn style4"
                {{-- data-bs-target="#alert"
                data-bs-toggle="modal"
                data-bs-dismiss="modal" --}}
                >
                Enviar
            </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- <div class="modal fade" id="alert" aria-hidden="true" aria-labelledby="alertConfirmation" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="alertConfirmation">Confirmación</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Su reseña fue enviada para revisión, muchas gracias!.
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-sm vs-btn style4" data-bs-dismiss="modal" aria-label="Close">OK!</button>
          </div>
        </div>
      </div>
    </div> --}}
</div>

{{-- <div
    class="modal fade mt-5"
    id="modal-add-review"
    tabindex="-1"
    aria-labelledby="add-review-label"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="add-review-label">
                        Agregar Reseña
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                    
                <div class="modal-body">
                    <div class="mb-1">
                        <label for="user-firstname" class="form-label"> 
                            Nombre
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="user-firstname"
                            placeholder="e.j. Manuel"
                            required
                        />
                    </div>
                    <div class="mb-1">
                        <label for="user-comment" class="form-label"> 
                            Comentario
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="user-comment"
                            placeholder="Su comentario aqui..."
                            required
                        />
                    </div>
                    <div class="mb-1">
                        <label for="rate" class="form-label"> 
                            Calificación
                        </label>
                        <select id="rate" class="form-select">
                            <option selected>1 ⭐</option>
                            <option>2 ⭐</option>
                            <option>3 ⭐</option>
                            <option>4 ⭐</option>
                            <option>5 ⭐</option>
                        </select>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm vs-btn style4">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> --}}