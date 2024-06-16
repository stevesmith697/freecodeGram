<template>
    <div class="container">
        <button type="button" class="btn btn-primary" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
export default {
    props:['userId','follows'],

    data: function(){
        return {
            status: this.follows
        }
    },

    methods:{
       followUser(){
        axios.post('/follow/' + this.userId)
        .then(res=>{
            this.status = !this.status;
            console.log(res.data);
        })
        .catch(errors=>{
            if(errors.response.status == 401){
                window.location = "/login";
            }
        })
       }
    },

    computed: {
        buttonText(){
            return this.status ? 'Unfollow' : 'Follow';
        }
    }
};
</script>
