<form method="POST" action="/precios" class='d-flex  flex-column  align-items-center'>
    @csrf
    <div class='d-flex flex-column justify-content-around align-items-center'>
        <div class='d-flex justify-content-between align-items-center row'>
            <div class="mb-3  col">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name='titulo' id="titulo" class="form-control w-100" required>
            </div>
            <div class="mb-3 col">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" name='precio' id="precio" class="form-control w-50" required>
            </div>
        </div>

        <div class='d-flex justify-content-around align-items-center row'>
            <div class="mb-3 col">
                <label for="dominio" class="form-label">Dominio - 0 NO / 1 SI</label>
                <input type="number" name='dominio' id="dominio" class="form-control w-50" required>
            </div>
            <div class="mb-3 col">
                <label for="hosting" class="form-label">Hosting - 0 NO / 1 SI</label>
                <input type="number" name='hosting' id="hosting" class="form-control w-50" required>
            </div>
        </div>
        <div class='d-flex justify-content-between align-items-center row'>
            <div class="mb-3  col">
                <label for="libre" class="form-label">Campo libre</label>
                <input type="text" name='libre' id="libre" class="form-control w-100" required>
            </div>
            <div class="mb-3  col">
                <label for="almacenamiento" class="form-label">Almacenamiento</label>
                <input type="text" name='almacenamiento' id="almacenamiento" class="form-control w-100" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" name='telefono' id="telefono" class="form-control w-100" required>
        </div>
    </div>

    <div class=>
        <button type="submit" class='btn btn-outline btn-success'>Crear</button>
        <a href="/precios" class='btn btn-outline btn-warning ms-1'>Cancelar</a>
    </div>
</form>
