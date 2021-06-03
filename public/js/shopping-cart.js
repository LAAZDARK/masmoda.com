const ShoppingCartD = {
    data() {
        return {
            cart: null,
            form: {
                'product_id': '',
                'size_id': '',
                'amount': '',
            },
        };
    },
    mounted: function() {
		this.getShopping();
	},
    methods: {
        addCart: function() {
            this.form.product_id = this.$refs.product_id.value;
            this.form.size_id = this.$refs.product_size.value;
            this.form.amount = this.$refs.amount.value;
            this.addProduct();
        },
        addProduct: function() {
            console.log(this.form);
			axios.post(this.$refs.storeCard.value, this.form).then(response => {
                console.log('Se agrego correctamente');
                location.reload();

			}).catch(error => {
				this.errors = 'Corrija para poder crear con éxito'
			});
            this.getShopping();
		},
        getShopping: function() {
            axios.get(this.$refs.getCard.value)
            .then(response => (this.cart = response))
            // console.log(this.cart);
        }
    }
}


Vue.createApp(ShoppingCartD).mount("#shopping-cart")
