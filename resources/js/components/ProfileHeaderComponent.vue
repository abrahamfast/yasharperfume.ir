<template>
    <div class="profile-header-area space-pt--30 space-mb--40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="profile-header">
                        <div class="profile-header__image" v-if="!editAvatar">
                            <img v-bind:src="'/asset/' + account.avatarName" class="img-fluid" alt="">
                             <a @click="editAvatarView">
                                <img src="assets/img/icons/edit.svg" class="injectable" alt="">
                            </a>
                        </div>
                        <div class="profile-header__image" v-if="editAvatar">
                            <label>آپلود آواتار
                                <input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>
                            </label>
                            <button v-on:click="submitFile()">ارسال</button>
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
                account: null,
                editAvatar: false,
                file: null
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
            editAvatarView(){
                this.editAvatar = true
            },
            handleFileUpload(){
                this.file = this.$refs.file.files[0];
            },
            submitFile(){
                let formData = new FormData();
                formData.append('file', this.file);
                axios.post( '/api/user/' + this.account.id + '/attachment/', formData, {headers: { 'Content-Type': 'multipart/form-data' }}).then( (res) =>{
                     console.log('SUCCESS!!');
                     window.localStorage.setItem('account', JSON.stringify(res.data));
                }).catch((err) => {
                    console.log('FAILURE!!');
                })
            }
        }
    }
</script>
