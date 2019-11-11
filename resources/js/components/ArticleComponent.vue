<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article Component</div>

                    <div class="card-body">
                        <div v-for="article in articles" v-bind:key="article.id">
                            <h4>{{ article.title }}</h4>
                            <p>{{ article.body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Article omponent mounted.')
        },

        data(){
            return {
                articles: [],
                article: {
                    id: '',
                    title: '',
                    body: ''
                },
                article_id: '',
                pagination: {},
                edit: false
            }
        },

        created(){
            this.fetchArticles();
        },

        methods:{
            fetchArticles(){
                fetch('api/articles')
                    .then(res => res.json())
                    .then(res => {
                        this.articles = res.data;
                        console.log(res.data);
                    })
            }
        }

    }
</script>
