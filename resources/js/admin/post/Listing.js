import AppListing from '../app-components/Listing/AppListing';

Vue.component('post-listing', {
    mixins: [AppListing],
    data() {
        return {
            showCategoryFilter: false,
            categoryMultiSelect: {},
            filters: {
                categories: []
            }
        }
    },

    watch: {
        showCategoryFilter: (newVal, oldVal) => {
            this.showCategoryFilter = [];
        },
        categoryMultiSelect: (newVal, oldVal) => {
            this.filters.categories = newVal.map(obj => obj['key']);
            this.filter('categories', this.filters.categories);
        }
    }
});