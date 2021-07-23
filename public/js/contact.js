const Contact = {
    data() {
        return {
            form: {
                name: '',
                email: '',
                message: ''
            },
            send: ''
        };
    },
    methods: {
        async store () {
            await axios.post(this.$refs.storeContact.value, this.form)
            .then(response => {
                // console.log(response.data)
                this.send = response.data
                console.log(this.send);
                this.form.name = '',
                this.form.email = '',
                this.form.message = ''
            }).catch(error => {
                console.log("Error login")
                console.log(error)
            })
            this.dialog = false
        }
    }
}

Vue.createApp(Contact).mount("#contact")
