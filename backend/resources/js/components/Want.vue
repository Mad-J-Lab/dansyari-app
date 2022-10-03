<template>
    <div>
        <v-list-item-group class="d-flex flex-wrap">
            <!-- ブレークポイント設定 -->
            <v-col v-for="want in wants" :key="want.id" lg="3" md="4" sm="6" xs="12">
                <v-list-item class="with">
                    <v-list-item-content>
                        <v-card class="mx-auto" outlined>
                            <v-list-item three-line>
                                <v-list-item-content>
                                    <div class="text-overline mb-4">

                                    </div>
                                    <v-list-item-title class="text-h6 mb-1">
                                        {{want.name}}
                                    </v-list-item-title>
                                    <v-list-item-subtitle></v-list-item-subtitle>
                                </v-list-item-content>

                                <v-list-item-avatar tile size="80" color="grey"></v-list-item-avatar>
                            </v-list-item>
                            <v-card-actions>
                                <v-btn outlined rounded text>
                                    Button
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-list-item-content>
                </v-list-item>
            </v-col>
        </v-list-item-group>

    </div>
</template>

<script>
export default {
    props: ['category'],
    data() {
        return {
            wants: [],
            want: {},
        }
    },
    methods: {
        getWants() {
            axios.get(`api/wants`)
                .then((res) => {
                    this.wants = res.data;
                    console.log(res.data);
                });
        },
    },
    mounted() {
        this.getWants();
    }
}
</script>
