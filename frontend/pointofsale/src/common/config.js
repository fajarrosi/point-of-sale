// const validemail = email =>{
//     return email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) ? true : 'Email tidak valid';
// }

// export { validemail };

export default{
    methods:{
        validemail(email){
            return email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) ? true : 'Email tidak valid';
        },
        onSubmit(action,data){
            this.$refs.form.validate()
            .then(valid=>{
                this.error = ''
                if(valid){
                    this.load = true
                    this.btndisabled = true
                    this.$store.dispatch(action,data)
                    .then(()=>{
                        this.load = false
                        this.btndisabled = false
                    })
                    .catch(error=>{
                        this.error = error.response.data.message
                        this.load = false
                        this.btndisabled = false
                    })
                }
            })
        }
    }
}