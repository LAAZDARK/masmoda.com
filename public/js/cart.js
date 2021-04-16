const CartD = {
    data() {
        return {
            cart: null,
            count: null,
            total: null
        };
    },
    mounted: function() {
		this.getShopping();
        this.getCountProduct();
        this.getSumProduct();
	},
    methods: {
        getShopping: function() {
            axios.get(this.$refs.getCard.value)
            .then(response => (this.cart = response))

            // console.log(this.cart);
        },
        getCountProduct: function() {
            axios.get(this.$refs.countProduct.value)
            .then(response => (this.count = response.data.data))
            console.log(this.count);
        },
        getSumProduct: function() {
            axios.get(this.$refs.sumProduct.value)
            .then(response => (this.total = response.data.data))
            console.log(this.total);
        }
    }
};

Vue.createApp(CartD).mount("#cart");
