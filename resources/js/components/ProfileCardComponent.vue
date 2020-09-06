<template>
    <div class="profile-card text-center">
        <div class="profile-card__image space-mb--10">
            <img width="100" v-bind:src="'/asset/' + account.avatarName" class="img-fluid" alt="">
        </div>
        <div class="profile-card__content">
            <p class="name">{{ account.name }} <span class="id">ID MD 4350</span></p>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'productId'
        ],
        data(){
            return {
                account: null
            }
        },
        created() {
            let account = window.localStorage.getItem('account');
            this.account = JSON.parse(account);
            if(!this.account){
                window.location = '/login'
            }
        },
        methods: {

        }
    }
</script>
