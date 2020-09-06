<template>
        <div>
            <div class="auth-page-header space-mb--50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="auth-page-header__title text-right">خوش آمدید</h3>
                            <p class="auth-page-header__text text-right">ورود به پنل کاربری</p>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="auth-page-body">
            <div class="container">
                <div class="row">
                    <div class="col-12" v-if="!state">
                        <!-- Auth form -->
                        <div class="auth-form">
                            <form v-on:submit.prevent="">
                                <div class="auth-form__single-field space-mb--30 text-right">
                                    <label for="phone">شماره همراه</label>
                                    <input class="text-right"  type="text" required name="phone" id="phone" v-model="user.phone"
                                        placeholder="شماره همراه خود را وارد کنید">
                                </div>
                                <div class="auth-form__single-field space-mb--40">
                                    <p class="text-right auth-form__info-text"><a href="/register">پنل کاربری جدید</a> آیا اشتراک ندارید؟ </p>
                                </div>
                                <button class="auth-form__button" @click="sendOtp">ورود به پنل</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12" v-if="state">
                        <!-- Auth form -->
                        <div class="auth-form">
                            <form v-on:submit.prevent="">
                                <div class="auth-form__single-field space-mb--30 text-center">
                                    <label for="name" style="direction:rtl" >کد به شماره همراه شما ارسال شده است</label>
                                    <input class="text-right" type="text" required v-model="code" id="name" placeholder="کد را وارد">
                                </div>
                                <button class="auth-form__button" @click="register">ورود</button>
                            </form>
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
                user: {
                    phone: '',
                    code: ''
                },
                state: false,
                code: null,
                codeRefresh: null,
                codeHasError: false
            }
        },
        created() {
            let data = window.localStorage.getItem('account');
            let account = JSON.parse(data);
            if(account){
                window.location = '/profile'
            }
        },
        methods: {
            sendOtp(){
            axios.post('/api/auth/send', this.user)
                .then((res)=>{
                    this.state = true
                    this.codeRefresh = res.data.code
                    this.account
                }).catch((err)=>{

                });
            },
            register(){
                if (this.code == this.codeRefresh) {
                    axios.post('api/user', this.user)
                        .then((res)=>{
                            this.state = true
                            window.localStorage.setItem('account', JSON.stringify(res.data));
                            window.location = '/profile'
                        }).catch((err)=>{
                        });
                }
            }
        }
    }
</script>
