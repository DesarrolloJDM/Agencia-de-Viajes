<div
    class="modal fade"
    id="modal-add-user"
    tabindex="-1"
    aria-labelledby="modal-add-user-label"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-add-user-label">
                        Nuevo Usuario
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                    
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="new-user-name" class="form-label"> 
                            Primer Nombre 
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="new-user-name"
                            placeholder="e.j. Manuel"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="new-user-lastname" class="form-label"> 
                            Apellido Paterno 
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="new-user-lastname"
                            placeholder="e.j. Hernandez"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="new-user-email" class="form-label"> 
                            Email
                        </label>
                        <input
                            type="email"
                            class="form-control"
                            id="new-user-email"
                            placeholder="usuario@correo.com"
                            required
                        />
                        <div class="form-text">
                            La invitación será enviada a este Email
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="new-user-role" class="form-label"> 
                            Rol
                        </label>
                        <select id="new-user-role" class="form-select">
                            <option selected>Admin</option>
                            <option>Usuario</option>
                        </select>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Crear Usuario
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>