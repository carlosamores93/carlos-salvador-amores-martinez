<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Article Component</div>

                    <form @submit.prevent="addArticle()" class="mb-3 mt-10">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter title" v-model="article.title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Enter text" v-model="article.body"></textarea>
                        </div>
                        <button type="submit" class="btn btn-light btn-block">Save article</button>
                    </form>

                    <nav aria-label="Page navigation example" >
                      <ul class="pagination">
                        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" @click="fetchArticles(pagination.prev_page_url)">Previous</a></li>



                        <li class="page-item disabled"><a class="page-link text-dark">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>



                        <li class="page-item" v-for="i in pagination.last_page"><a class="page-link" @click="fetchArticles(pagination.path+'?page='+i)">{{ i }}</a></li>



                        <li class="page-item disabled"><a class="page-link text-dark">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>


                        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" @click="fetchArticles(pagination.next_page_url)">Next</a></li>
                      </ul>
                    </nav>


                    <div class="card-body">
                        <div v-for="article in articles" v-bind:key="article.id">
                            <h4>{{ article.title }}</h4>
                            <p>{{ article.body }}</p>
                            <button @click="editArticle(article)" class="btn btn-info mb-2">Edit article</button>
                            <button @click="deleteArticle(article.id)" class="btn btn-danger">Remove article</button>
                            <!-- <button @click="deleteArticle(article)"" class="btn btn-danger">Remove article</button> -->
                            <hr>
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
            fetchArticles(page_url){
                let vm = this;
                page_url = page_url || 'api/articles'
                fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                        this.articles = res.data;
                        console.log(res.data);
                        vm.makePagination(res.meta, res.links);
                    })
                    .catch(err => console.log(err));
            },
            makePagination(meta, links){
                let paginador = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev,
                    path: meta.path
                }
                this.pagination = paginador;
            },
            //deleteArticle(article){
            deleteArticle(id){
                if (confirm('Are you sure??')) {
                    //fetch(`api/article/${article}`, {
                    fetch(`api/article/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert('Article removed');
                        this.fetchArticles();
                    })
                    .catch(err => console.log(err));
                }
            },
            addArticle(){
                if (this.edit === false) {
                    fetch('api/article', {
                        method: 'post',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.article.title = '';
                        this.article.body = '';
                        alert('Article add');
                        this.fetchArticles();
                    })
                    .catch(err => console.log(err));
                }else{
                    fetch('api/article', {
                        method: 'put',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.article.title = '';
                        this.article.body = '';
                        alert('Article updated');
                        this.fetchArticles();
                    })
                    .catch(err => console.log(err));   
                }
            },
            editArticle(articulo){
                this.edit = true;
                this.article.id = articulo.id;
                this.article.article_id = articulo.id;
                this.article.title = articulo.title;
                this.article.body = articulo.body;
            }
        }

    }
</script>
