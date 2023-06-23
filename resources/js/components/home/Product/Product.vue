<template>
    <div class="col mb-5">
        <div class="card h-100">
            <Images :productId="id" :images="images" />

            <div class="card-body p-4">
                <div class="text-center">
                    <h5 class="fw-bolder">{{ name}}</h5>
                    <h6 class="fw-light">{{ brand.name }}</h6>

                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>

                    De
                    <span class="text-muted text-decoration-line-through">
                        {{ old_price }}
                    </span>
                    <br>
                    por {{ price }}
                </div>
            </div>
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
        'price',
        'old_price',
        'id'
    ]
}
</script>
