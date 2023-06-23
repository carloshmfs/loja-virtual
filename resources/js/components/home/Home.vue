<template>
    <Header/>

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <Product
                    v-for="product in products"
                    :id="product.id"
                    :images="product.images"
                    :name="product.name"
                    :brand="product.brand"
                    :price="product.price"
                    :old_price="product.old_price"
                    />
            </div>
        </div>
    </section>
</template>

<script>
    import Header from './Header.vue';
    import Product from './Product/Product.vue';

    export default {
        components: {
            Product,
            Header
        },
        data() {
            return {
                products: null
            }
        },
        mounted() {
            axios
                .get('api/products')
                .then(response => {
                    this.products = response.data.products;
                });
        }
    }
</script>
