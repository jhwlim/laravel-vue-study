<template>
    <div>
        ID : <input type="text" v-model="id"> <br>
        PWD : <input type="text" v-model="pwd"> <br>
        <button @click="submitLoginForm()">Submit</button>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "LoginView",
    data: function() {
        return {
            id: '',
            pwd: '',
        };
    },
    methods: {
        submitLoginForm() {
            console.log(this.id, this.pwd);
            axios.defaults.withCredentials = true;
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/api/login', {
                    name: this.id,
                    password: this.pwd,
                });
            });
        }
    }
}
</script>

<style scoped>

</style>
