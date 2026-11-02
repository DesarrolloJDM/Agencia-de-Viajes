<div class="col-md-6">
    <div class="card card-secondary card-outline mb-4">
        <form method="POST" action="{{ route('change.status.review', $review->id) }}" >
            @csrf
            @method('PUT')
            <div class="card-header">
                <div class="card-title">
                    Reseña
                </div>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        id="floatingEmail"
                        value="{{ $review->username }}"
                        readonly
                    />
                    <label for="floatingEmail"> 
                        Usuario
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        id="floatingPwd"
                        value="{{ $review->rate }} Estrella(s)"
                        readonly
                    />
                    <label for="floatingPwd">
                        Calificación
                    </label>
                </div>
                <div class="form-floating">
                    <textarea
                        class="form-control"
                        id="floatingTextarea"
                        style="height: 6rem"
                        readonly
                    >
                        {{ $review->comment }}
                    </textarea>
                    <label for="floatingTextarea">
                        Comentario:
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="status" value="accepted">Aprobar</button>
                <button type="submit" class="btn btn-danger" name="status" value="rejected">Rechazar</button>
            </div>
        </form>
    </div>
</div>