<template>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product images-->
            <Images :images="images" />
        </div>
    </div>
</template>

<script>
import Images from './Images.vue';

export default {
    name: "Product",
    components: {
        Images
    },
    props: [
        'name',
        'images',
        'brand',
        'price'
    ],
    mounted() {
        console.log('Product mounted');
    }
}
</script>
