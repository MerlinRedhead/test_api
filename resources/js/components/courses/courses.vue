<template>
    <title>Курсы</title>
    <div class="conteiner">
        <h1>Курсы</h1>
        <div class="row">
            <div class="col-lg-4" v-for="course in courses">
                <div class="card mt-3">
                    <router-link :to="{name:'ShowCourse',params:{courseId:course.id}}" class="card-body">
                        <h3 class="card-title">{{course.Название}}</h3>
                    </router-link>
                </div>
            </div>
        </div>
        <div class="alert alert-danger" role="alert" v-if="errored">
            Ошибка загрузки данных
        </div>
        <div class="spinner-border m-5" role="status" v-if="loading">
            <span class="visually-hidden">Loading...</span>
        </div>

    </div>

</template>

<script>
export default {
    data(){
        return{
            courses:[],
            errored:false,
            loading:true
        }
    },
    mounted() {
        axios.get('/api/Courses')
            .then(responce=>{
                this.courses = responce.data.data
            })
            .catch(error =>{
                console.log(error)
                this.errored = true
            })
            .finally(()=>{
                this.loading = false
            })

    }
}
</script>

