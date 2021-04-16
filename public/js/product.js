const ProductManager = {
    data() {
        return {
            product: null,
            fillProduct: {
                'id': '',
                'title': '',
                'amount': '',
                'description': '',
                'size': [],
                'category': '',
                'brand': '',
                'model': '',
            }
        };
    },
    mounted: function() {
		this.getProduct();
	},
    methods: {
        getProduct: function() {
            axios.get(this.$refs.getProduct.value)
            .then(response => (this.product = response.data.data))
            console.log(this.product)
        },
        editProduct: function(item) {
			this.fillProduct.id   = item.id;
			this.fillProduct.title = item.title;
            this.fillProduct.amount = item.amount;
            this.fillProduct.description = item.description;
            this.fillProduct.category = item.category;
            this.fillProduct.brand = item.brand;
            this.fillProduct.model = item.model;
			$('#edit').modal('show');
		},
        updateProduct: function(id) {
			axios.put(this.$refs.getProduct.value + '/' + id, this.fillProduct).then(response => {
				$('#edit').modal('hide');
                this.getProduct();
				// toastr.success('Tarea actualizada con éxito');
			}).catch(error => {
				this.errors = 'Corrija para poder editar con éxito'
			});
		},
		deleteProduct: function(id) {
			axios.delete(this.$refs.getProduct.value + '/' + id).then(response => { //eliminamos
				this.getProduct();
			});
		},
    }
};

Vue.createApp(ProductManager).mount("#product-manager");
