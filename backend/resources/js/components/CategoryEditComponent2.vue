<template>
    <v-main class="grey lighten-3">
        <v-container>
            <v-row>
                <v-col cols="2">
                    <v-sheet rounded="lg">
                        <v-list color="transparent">
                            <v-list-item v-for="category in categories" :key="category.id">
                                <v-list-item-content>
                                    <v-list-item-title>
                                        {{ category.name }}
                                    </v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>

                            <v-divider class="my-2"></v-divider>

                            <v-list-item link color="grey lighten-4">
                                <v-list-item-content>
                                    <v-list-item-title>
                                        Refresh
                                    </v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list>
                    </v-sheet>
                </v-col>

                <v-col>
                    <v-sheet min-height="70vh" rounded="lg">
                        <router-view @catchCategory="displayCategory"></router-view>
                    </v-sheet>
                </v-col>
            </v-row>
        </v-container>
    </v-main>

</template>

<script>
export default {
    data() {
        return {
            categories: [],
            category: {},
        };
    },
    methods: {
        getCategories() {
            axios.get('/api/categories')
                .then((res) => {
                    this.categories = res.data;
                });
        },
        displayCategory(category) {
            const index = category.id - 1;
            //ユーザーが複数人だと機能しない
            //findIndex
            this.$set(this.categories, index, category);
        }
    },
    mounted() {
        this.getCategories();
    },
}
</script>
