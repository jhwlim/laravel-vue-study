<template>
    <div>
        ID : <input type="text" v-model="id"> <br>
        PWD : <input type="text" v-model="pwd"> <br>
        <button @click="submitLoginForm()">Submit</button>
    </div>
</template>

<script>
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
        }
    }
}
</script>

<style scoped>

</style>
