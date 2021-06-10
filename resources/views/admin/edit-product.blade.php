{{-- <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="updateProduct(fillProduct.id)"> --}}
    <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="addQuantity">
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
                            <label for="brand">Talla</label>
                        </div>
                        <div class="col-md-4 text-center mt-3">
                            <label for="brand">Cantidad</label>
                        </div>
                    </div>
                    <div class="bc-item">
                        <div class="row">
                            <div class="col-md-4 text-right">
                                <label for="s">
                                    Small
                                    <input type="checkbox" value="1" name="size[]" id="s" v-model="fillProduct.size">
                                    <span class="checkmark"></span>
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="quantity1" id="s" v-model="quantitys.quantity1">
                            </div>

                            <div class="col-md-4 text-right">
                                <label for="m">
                                    Medium
                                    <input type="checkbox" value="2" name="size[]" id="m" v-model="fillProduct.size">
                                    <span class="checkmark"></span>
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="quantity2" id="s" v-model="quantitys.quantity2"><br>
                            </div>
                            <div class="col-md-4 text-right">
                                <label for="l">
                                    Large
                                    <input type="checkbox" value="3" name="size[]" id="l" v-model="fillProduct.size">
                                    <span class="checkmark"></span>
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="quantity3" id="s" v-model="quantitys.quantity3"><br>
                            </div>
                            <div class="col-md-4 text-right">
                                <label for="xl">
                                    Extra Largue
                                    <input type="checkbox" value="4" name="size[]" id="xl" v-model="fillProduct.size">
                                    <span class="checkmark"></span>
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="quantity4" id="s" v-model="quantitys.quantity4"><br>
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
