<template>
    <div class="profile-header-area space-pt--30 space-mb--40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="profile-header">
                        <div class="profile-header__image">
                            <img src="/assets/img/profile.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="profile-header__content space-mt--10">
                            <h3 class="name space-mb--15 text-right">{{ account.name }}</h3>
                            <div class="profile-info space-mb--10">
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-right">
                                        MB 4350
                                    </div>
                                    <div class="profile-info-block__title text-right">
                                        شناسه شما
                                    </div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-right">
                                        ۳۵۰
                                    </div>
                                    <div class="profile-info-block__title text-right">
                                        امتیازات
                                    </div>
                                </div>
                            </div>
                            <div class="profile-level">
                                <div class="profile-level__title">
                                    level2
                                </div>
                                <div class="profile-level__progress progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        },
        methods: {

        }
    }
</script>
