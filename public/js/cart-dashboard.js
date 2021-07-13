// var numeral = require("numeral");

//   Vue.filter("formatNumber", function (value) {
//     return numeral(value).format("0,0"); // displaying other groupings/separators is possible, look at the docs
//   });
const CartDashboard = {
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
            .then(response => {
                this.cart = response.data.data
            });


        },
        getCountProduct: function() {
            axios.get(this.$refs.countProduct.value)
            .then(response => (this.count = response))
            console.log(this.count);
        },
        getSumProduct: function() {
            axios.get(this.$refs.sumProduct.value)
            .then(response => (this.total = response.data.data))
            console.log(this.total);
        },
        formatNumber: function(value) {
            return new Intl.NumberFormat('es-MX', { style: 'currency', currency: 'MXN' }).format(value);
        },
        deleteProduct: function(id) {
            // console.log(id);
			axios.delete(this.$refs.getCard.value + '/' + id).then(response => { //eliminamos
				this.getShopping();
			});
		},
    }
};

Vue.createApp(CartDashboard).mount("#cart-dashboard");
