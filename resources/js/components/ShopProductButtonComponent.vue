<template>
        <div class="shop-product-button">
            <button class="cart" @click="addToCard">ADD TO CART</button>
            <button class="buy" @click="buyNow">BUY NOW</button>
        </div>
</template>

<script>
    export default {
        props: [
            'productId'
        ],
        data(){
            return {
                status: true
            }
        },
        mounted() {

        },
        methods: {
            addToCard(){
                if(this.status){
                    var items = localStorage.getItem('cartList')
                    items.push(this.productId);
                    localStorage.setItem('cartList', items);
                    window.localStorage
                    this.$root.cartList.push(this.productId)
                    this.status = false
                    return true;
                }
            this.$root.cartList.pop(this.productId)
            this.status = true
            return false;
            },
            buyNow(){
                console.log('buy now')
            }
        }
    }
</script>
