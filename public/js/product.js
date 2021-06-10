const ProductManager = {
    data() {
        return {
            product: null,
            quantitys: {
                'quantity1': '5',
                'quantity2': '7',
                'quantity3': '6',
                'quantity4': '9',
            },
            fillProduct: {
                'id': '',
                'title': '',
                'amount': '',
                'description': '',
                'size': [],
                'category': '',
                'brand': '',
                'model': '',
                'type': '',
                'quantity': []
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
            this.fillProduct.type = item.type;
			$('#edit').modal('show');
		},
        updateProduct: function() {
			axios.put(this.$refs.getProduct.value + '/' + this.fillProduct.id, this.fillProduct).then(response => {
				$('#edit').modal('hide');
                this.getProduct();
                this.handleClear();
			}).catch(error => {
				this.errors = 'Corrija para poder editar con éxito'
			});
		},
		deleteProduct: function(id) {
			axios.delete(this.$refs.getProduct.value + '/' + id).then(response => { //eliminamos
				this.getProduct();
			});
		},
        addQuantity() {
            this.fillProduct.quantity.push(
                this.quantitys.quantity1,
                this.quantitys.quantity2,
                this.quantitys.quantity3,
                this.quantitys.quantity4
            )
            this.updateProduct()
        },
        handleClear() {
            this.fillProduct.id = '',
            this.fillProduct.title = '',
            this.fillProduct.amount = '',
            this.fillProduct.description = '',
            this.fillProduct.category = '',
            this.fillProduct.brand = '',
            this.fillProduct.model = '',
            this.fillProduct.type = '',
            this.fillProduct.quantity = ''
        }
    }
};

Vue.createApp(ProductManager).mount("#product-manager");
