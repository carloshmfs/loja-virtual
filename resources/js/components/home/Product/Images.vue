<template>
    <div class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
        <div v-for="image in images"
             class="carousel-indicators"
        >
            <button type="button" data-bs-target="" data-bs-slide-to="" aria-current="true" aria-label="Slide "></button>
        </div>
        <div class="carousel-inner">
            <template v-for="image in images">
                <div class="carousel-item" data-bs-interval="5000">
                    <img :src="image.url" class="d-block w-100" alt="...">
                </div>
            </template>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>

<script>
export default {
    name: 'images',
    props: [
        'images'
    ]
}
</script>
