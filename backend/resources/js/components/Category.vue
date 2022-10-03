<template>
    <v-main class="grey lighten-3">
        <v-container>
            <v-row>
                <v-col cols="2">
                    <v-sheet rounded="lg">
                        <v-list color="transparent">
                            <v-list-item v-for="category in categories" :key="category.id">
                                <v-list-item-content>
                                    <CategoryEditComponent :category="category" @getCategoriesFromChild="getCategories">
                                    </CategoryEditComponent>
                                </v-list-item-content>
                            </v-list-item>

                            <v-divider class="my-2"></v-divider>

                            <v-list-item link color="grey lighten-4">
                                <v-list-item-content>
                                    <v-list-item-title>
                                        <v-dialog v-model="dialog" persistent max-width="600px">
                                            <template v-slot:activator="{ on, attrs }">
                                                <v-btn color="gray" dark v-bind="attrs" v-on="on">
                                                    カテゴリ追加
                                                </v-btn>
                                            </template>
                                            <v-card>
                                                <form @submit.prevent="submit">
                                                    <v-card-title>
                                                        <span class="text-h5">カテゴリ追加</span>
                                                    </v-card-title>
                                                    <v-card-text>
                                                        <v-container>
                                                            <v-row>
                                                                <v-col cols="12">
                                                                    <v-text-field v-model="category.name" label="カテゴリ名"
                                                                        required>
                                                                    </v-text-field>
                                                                </v-col>
                                                            </v-row>
                                                        </v-container>
                                                    </v-card-text>
                                                    <v-card-actions>
                                                        <v-spacer></v-spacer>
                                                        <v-btn color="gray" text @click="dialog = false">
                                                            閉じる
                                                        </v-btn>
                                                        <v-btn color="gray" text @click="submit">
                                                            追加
                                                        </v-btn>
                                                    </v-card-actions>
                                                </form>
                                            </v-card>
                                        </v-dialog>
                                    </v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list>
                    </v-sheet>
                </v-col>
                <v-col>
                    <v-sheet min-height="70vh" rounded="lg">
                        <router-view></router-view>
                    </v-sheet>
                </v-col>
            </v-row>
        </v-container>
    </v-main>
</template>

<script>
import CategoryEditComponent from "./CategoryEditComponent.vue";

export default {
    components: {
        CategoryEditComponent,
    },
    data() {
        return {
            categories: [],
            category: {},
            dialog: false,
        };
    },
    methods: {
        getCategories() {
            axios.get('/api/categories')
                .then((res) => {
                    this.categories = res.data;
                });
        },
        submit() {
            axios.post('api/categories', {
                name: this.category.name,
            })
                .then((res) => {
                    console.log(res);
                    this.categories = res.data.categories;
                    this.getCategories();
                    // 表示側のみ変える（配列から除く）
                    this.category.name = "";
                    this.dialog = false;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    mounted() {
        this.getCategories();
    }
}
</script>
