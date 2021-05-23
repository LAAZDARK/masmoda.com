const User = {
    data() {
        return {
            users: null,
        };
    },
    mounted: function() {
        this.getUserCustomer();
	},
    methods: {
        getUserCustomer: function() {
            axios.get(this.$refs.getUser.value)
            .then(response => (this.users = response.data.data))
            console.log(this.users);
        },
        deleteUser: function(id) {
			axios.delete(this.$refs.getUser.value + '/' + id).then(response => { //eliminamos
				this.getUserCustomer();
			});
		},
    }
};

Vue.createApp(User).mount("#user");
