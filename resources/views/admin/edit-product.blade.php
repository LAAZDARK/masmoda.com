<form method="POST" enctype="multipart/form-data" v-on:submit.prevent="updateProduct(fillProduct.id)">
    <div class="modal fade" id="edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Editar</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="keep">Titulo</label>
                        <input type="text" name="product" class="form-control" v-model="fillProduct.title">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                    <label for="amount">Precio</label>
                        <input type="text" name="amount" class="form-control" v-model="fillProduct.amount">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                    <label for="model">Modelo</label>
                        <input type="text" name="model" class="form-control" v-model="fillProduct.model">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                    <label for="brand">Marca</label>
                        <input type="text" name="brand" class="form-control" v-model="fillProduct.brand">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                    <label for="brand">Talla</label>
                    <div class="bc-item">
                        <label for="s">
                            S
                            <input type="checkbox" value="1" name="size[]" id="s" v-model="fillProduct.size">
                            <span class="checkmark"></span>
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="m">
                            M
                            <input type="checkbox" value="2" name="size[]" id="m" v-model="fillProduct.size">
                            <span class="checkmark"></span>
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="l">
                            L
                            <input type="checkbox" value="3" name="size[]" id="l" v-model="fillProduct.size">
                            <span class="checkmark"></span>
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="xl">
                            XL
                            <input type="checkbox" value="4" name="size[]" id="xl" v-model="fillProduct.size">
                            <span class="checkmark"></span>
                        </label>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="w-100">
                    <label for="category">Categoria</label>
                        <select class="select-product" name="category" v-model="fillProduct.category">
                            <option value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Ambos">Ambos</option>
                        </select>
                    </div>
                    {{-- <label for="image">Imagen</label>
                        <input type="file" :value="fillProduct.image" accept="image/*" id="image" class="form-control"  required>
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span> --}}
                    <label for="description">Descripcion</label>
                        <textarea name="description" class="form-control" v-model="fillProduct.description"></textarea>
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </div>
        </div>
    </div>
</form>
