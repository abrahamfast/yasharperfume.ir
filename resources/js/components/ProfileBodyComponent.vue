<template>
        <div class="profile-body-area">
            <div class="container" v-if="!edit">
                <div class="row">
                    <div class="col-12">
                        <div class="profile-body">
                            <div class="profile-info-table space-mb--40">
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Full Name</div>
                                    <div class="profile-info-block__value">{{ account.name }}</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">User Name</div>
                                    <div class="profile-info-block__value">{{ account.userName }}</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Phone</div>
                                    <div class="profile-info-block__value">{{ account.phoneNumber }}</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">E-mail Address</div>
                                    <div class="profile-info-block__value">{{ account.email }}</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Shipping Address</div>
                                    <div class="profile-info-block__value">{{ account.address }}
                                    </div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Total Order</div>
                                    <div class="profile-info-block__value">{{ account.phoneNumber }}</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">ویرایش پروفایل</div>
                                    <div class="profile-info-block__value">
                                        <a @click="editProfile">
                                            <img src="assets/img/icons/edit.svg" class="injectable" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-info-table">
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Help Center</div>
                                    <div class="profile-info-block__value">62256</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">To be Shiped</div>
                                    <div class="profile-info-block__value">05</div>
                                </div>
                                <div class="profile-info-block">
                                    <div class="profile-info-block__title">Review</div>
                                    <div class="profile-info-block__value">10</div>
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
