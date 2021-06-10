const Admin = {
    data() {
        return {
            admins: null,
        };
    },
    mounted: function() {
        this.getAdmin();
	},
    methods: {
        getAdmin: function() {
            axios.get(this.$refs.getAdmin.value)
            .then(response => (this.admins = response.data.data))
            console.log(this.admins);
        },
        deleteAdmin: function(id) {
			axios.delete(this.$refs.getAdmin.value + '/' + id).then(response => { //eliminamos
				this.getAdmin();
			});
		},
    }
};

Vue.createApp(Admin).mount("#admin");
