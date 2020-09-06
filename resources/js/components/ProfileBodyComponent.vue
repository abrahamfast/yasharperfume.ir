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
                                    <div class="profile-info-block__value text-left">{{ account.email }}</div>
                                    <div class="profile-info-block__title text-right">ایمیل</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">{{ account.address }}</div>
                                    <div class="profile-info-block__title text-right">آدرس دریافت کننده</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__value text-left">{{ account.phoneNumber }}</div>
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
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" name="fullName" id="fullName" placeholder="Enter Full Name">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="userName">User Name</label>
                                    <input type="text" name="userName" id="userName" placeholder="Enter User Name">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="phoneNo">Phone</label>
                                    <input type="text" name="phoneNo" id="phoneNo" placeholder="Enter Phone Number">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="emailAddress">Email Address</label>
                                    <input type="text" name="emailAddress" id="emailAddress"
                                        placeholder="Enter Email Address">
                                </div>
                                <div class="edit-profile-form__single-field space-mb--30">
                                    <label for="shippingAddress">Shipping Address</label>
                                    <textarea name="shippingAddress" id="shippingAddress" cols="30" rows="5"
                                        placeholder="Enter Shipping Address"></textarea>
                                </div>
                                <button class="edit-profile-form__button" @click="update">Update</button>
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
            let account = window.localStorage.getItem('account');
            this.account = JSON.parse(account);
            if(!this.account){
                window.location = '/login'
            }
        },
        methods: {
            editProfile(){
                this.edit = true
            },
            update(){
                axios.put('/api/user', this.account).then((res)=>{
                    console.log(res);
                    this.edit = false
                })
            }

        }
    }
</script>
