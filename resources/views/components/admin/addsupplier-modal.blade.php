<div
    class="modal fade"
    id="modal-add-supplier"
    tabindex="-1"
    aria-labelledby="modal-add-supplier-label"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <form
                method="POST"
                action="{{ route('admin.proveedores.store') }}"
            >
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-add-supplier-label">
                        Nuevo Proveedor
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Cerrar"
                    ></button>
                </div>
                    
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="supplier-name" class="form-label"> 
                            Nombre 
                        </label>
                        <input
                            type="text"
                            id="supplier-name"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-control @error('name', 'supplier') is-invalid @enderror"
                            placeholder="e.j. Mega Travel"
                            required
                        />
                        
                        @error('name', 'supplier')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="supplier-website" class="form-label"> 
                            Página Web 
                        </label>
                        <input
                            type="url"
                            id="supplier-website"
                            name="website"
                            value="{{ old('website') }}"
                            class="form-control @error('website', 'supplier') is-invalid @enderror"
                            placeholder="e.j. https://pagina.com"
                        />

                        @error('website', 'supplier')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="supplier-phone" class="form-label"> 
                            Teléfono
                        </label>
                        <input
                            type="tel"
                            id="supplier-phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            class="form-control @error('phone', 'supplier') is-invalid @enderror"
                            placeholder="e.j. (656) 123-4567"
                        />

                        @error('phone', 'supplier')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="supplier-email" class="form-label"> 
                            Email
                        </label>
                        <input
                            type="email"
                            id="supplier-email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control @error('email', 'supplier') is-invalid @enderror"
                            placeholder="usuario@correo.com"
                        />

                        @error('email', 'supplier')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button 
                        type="button" 
                        class="btn btn-secondary" 
                        data-bs-dismiss="modal"
                    >
                        Cancelar
                    </button>
                    <button 
                        type="submit" 
                        class="btn btn-primary"
                    >
                        Agregar Proveedor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>