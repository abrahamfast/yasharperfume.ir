<template>
        <div class="profile-body-area">
            <div class="container" v-if="!edit">
                <div class="row">
                    <div class="col-12">
                        <div class="profile-body">
                            <div class="profile-info-table space-mb--40">
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">{{ account.name }}</div>
                                    <div class="profile-info-block__title text-right">نام شما</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">{{ account.phoneNumber }}</div>
                                    <div class="profile-info-block__title text-right">شماره همراه</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">{{ account.emailAddress }}</div>
                                    <div class="profile-info-block__title text-right">ایمیل</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">{{ account.shippingAddressCity }}</div>
                                    <div class="profile-info-block__title text-right">شهر سکونت</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">{{ account.shippingAddressStreet }}</div>
                                    <div class="profile-info-block__title text-right">آدرس دریافت کننده</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">0</div>
                                    <div class="profile-info-block__title text-right">تعداد خرید</div>
                                </div>
                                <div class="profile-info-block">
                                     <div class="profile-info-block__value text-left">
                                        <a @click="editProfile">
                                            <img src="assets/img/icons/edit.svg" class="injectable" alt="">
                                        </a>
                                    </div>
                                    <div class="profile-info-block__title text-right">ویرایش پروفایل</div>
                                </div>
                            </div>
                            <div class="profile-info-table">
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">09032324184</div>
                                    <div class="profile-info-block__title text-right">مرکز پشتیبانی</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" v-if="edit">
                <div class="row">
                    <div class="col-12">
                        <!-- edit profile form -->
                        <div class="edit-profile-form">
                            <form v-on:submit.prevent="">
                                <div class="edit-profile-form__single-field space-mb--30 text-right">
                                    <label for="fullName">نام شما</label>
                                    <input class="text-right" type="text" required v-model="account.name" id="fullName" placeholder="نام شما">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30 text-right">
                                    <label for="phoneNo">شماره همراه</label>
                                    <input class="text-right" type="text" required v-model="account.phoneNumber" id="phoneNo" placeholder="شماره همراه">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30 text-right">
                                    <label for="emailAddress">ایمیل</label>
                                    <input class="text-right" type="text" v-model="account.emailAddress" id="emailAddress"
                                        placeholder="آدرس ایمیا شما">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30 text-right">
                                    <label for="shippingAddressCity">شهر</label>
                                    <input class="text-right" type="text" v-model="account.shippingAddressCity" id="shippingAddressCity"
                                        placeholder="آدرس ایمیا شما">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30 text-right">
                                    <label for="shippingAddress">آدرس </label>
                                    <input class="text-right" v-model="account.shippingAddressStreet" id="shippingAddress"
                                        placeholder="آدرس دریافت کننده کالا">
                                </div>
                                <button class="edit-profile-form__button" @click="update">بروز رسانی</button>
                            </form>
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
                account: null,
                edit: false
            }
        },
        created() {
            let data = window.localStorage.getItem('account');
            let account = JSON.parse(data);
            this.account = account
            if(!account){
                window.location = '/login'
                return;
            }

        },
        mounted(){
            axios.get('/api/user/'+this.account.id).then((res) => {
                window.localStorage.setItem('account', JSON.stringify(res.data));
                this.account = res.data
            });
        },
        methods: {
            editProfile(){
                this.edit = true
            },
            update(){
                axios.put('/api/user', this.account).then((res)=>{
                    window.localStorage.setItem('account', JSON.stringify(this.account));
                    this.edit = false
                })
            }

        }
    }
</script>
