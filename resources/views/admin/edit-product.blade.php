{{-- <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="updateProduct(fillProduct.id)"> --}}
    <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="updateProduct">
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
                    <div class="row">
                        <div class="col-md-4 text-center mt-3">
                            <label for="brand">Cantidad por tallas</label>
                        </div>
                    </div>
                    <div class="bc-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="small">Small
                                    <input type="number" name="small_size" v-model="fillProduct.small_size"  placeholder="cantidad">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="medium">Medium
                                    <input type="number" name="medium_size" v-model="fillProduct.medium_size" placeholder="cantidad">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="large">Large</label>
                                    <input type="number" name="large_size" v-model="fillProduct.large_size" placeholder="cantidad">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="extra_large">Extra Large</label>
                                <input type="number" name="extra_large_size" v-model="fillProduct.extra_large_size" placeholder="cantidad">
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                    <label for="category">Categoria</label>
                        <select class="select-product" name="category" v-model="fillProduct.category">
                            <option value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Ambos">Ambos</option>
                        </select>
                    </div>
                    <div class="w-100">
                    <label for="category">Tipo</label>
                        <select class="select-product" name="type" v-model="fillProduct.type">
                            <option value="Playera">Playera</option>
                            <option value="Blusa">Blusa</option>
                            <option value="Pantalon" selected>Pantalon</option>
                            <option value="Vestido">Vestido</option>
                            <option value="Sudadera">Sudadera</option>
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
