const Auth = {
    data() {
        return {
            email : null,
            password : null
        };
    },
    mounted: function() {

	},
    methods: {
        login () {
            axios.post(this.$refs.postLogin.value, {
                email: this.email,
                password: this.password
            }).then(response => {
                // console.log(response.data)
                const data = response.data
                localStorage.setItem('token', data)
                resolve(resp)
                window.location = 'http://127.0.0.1:8000/api/'
            }).catch(error => {
                console.log("Error login")
                console.log(error)
            })
            this.dialog = false
        }
    }
}

Vue.createApp(Auth).mount("#auth")
