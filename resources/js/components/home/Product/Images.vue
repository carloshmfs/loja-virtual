<template>
    <div v-bind="{ id: 'productImages' + productId }" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button 
                v-for="(image, index) in images"
                v-bind="{
                    'data-bs-target': '#productImages' + productId,
                    'data-bs-slide-to': index,
                    'aria-label': 'Slide' + index 
                }"
                :class="{ active: index === 0 }"
                :aria-current="index === 0"
                type="button"
            >
            </button>
        </div>
        <div class="carousel-inner">
            <template v-for="(image, index) in images">
                <div class="carousel-item" :class="{ active: index === 0 }" data-bs-interval="5000">
                    <img :src="image.url" class="d-block w-100" alt="...">
                </div>
            </template> 
        </div>
        <button 
            class="carousel-control-prev" 
            type="button" 
            v-bind="{ 'data-bs-target': '#productImages' + productId }" 
            data-bs-slide="prev
        ">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button 
            class="carousel-control-next" 
            type="button" 
            v-bind="{ 'data-bs-target': '#productImages' + productId }" 
            data-bs-slide="next
        ">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>

<script>
export default {
    name: 'images',
    props: [
        'images',
        'productId'
    ]
}
</script>
