<template>
    <div>
        <slot></slot>
        <div>
            <button
                type="button"
                :class="[
                    'button--link button--large',
                    { isActive: page === currentPage }
                ]"
                v-for="page in pages"
                :key="page"
                @click="$emit('changePage', page)"
            >
                {{ page }}
            </button>
        </div>
    </div>
</template>

<script>
import { computed } from 'vue';

export default {
    //note this emit back to parent
    emits: ['changePage'],
    props: {
        //changed to just get the length of the list
        itemCount: {
            type: Number,
            required: true
        },
        itemsPerPage: {
            type: Number,
            default: 10
        },
        currentPage: {
            type: Number,
            required: true
        }
    },
    setup(props) {
        const pageCount = computed(() =>
            Math.ceil(props.noOfItems / props.itemsPerPage)
        );

        const pages = computed(() => {
        	return Array.from({ length: pageCount.value }, (_, i) => i + 1);
        });

        return {
            pageCount,
            pages
        };
    }
};
</script>