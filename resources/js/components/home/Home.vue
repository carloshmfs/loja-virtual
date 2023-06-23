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
                    :images="product.images"
                    :name="product.name"
                    :price="product.price"
                    />
            </div>
        </div>
    </section>
</template>

<script>
    import Header from './home/Header.vue';
    import Product from './home/Product/Product.vue';

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
            console.log('Component mounted.');

            axios.get('api/products')
                .then(response => {
                    this.products = response.data.products;
                });
        }
    }
</script>
