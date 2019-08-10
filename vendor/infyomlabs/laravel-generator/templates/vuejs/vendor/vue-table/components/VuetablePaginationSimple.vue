<template>
    <nav>
        <ul class="pager">
            <li class="@{{isOnFirstPage ? disabledClass : ''}}">
                <a class="btn" @click="loadPage('prev')"><i class="fa fa-chevron-left"></i></a>
            </li>
            <li class="@{{isOnLastPage ? disabledClass : ''}}">
                <a class="btn" @click="loadPage('next')"><i class="fa fa-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
</template>

<script>
import PaginationMixin from './VuetablePaginationMixin.vue'
export default {
    mixins: [PaginationMixin],
    methods: {
        loadPage: function(page) {
            this.$dispatch('vuetable-pagination:change-page', page)
        },
    },
}
</script>