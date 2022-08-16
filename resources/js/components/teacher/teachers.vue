<template>
    <title>Учитель</title>
    <div class="conteiner">
        <h1>Учителя</h1>
        <div class="row">
            <div class="col-lg-4" v-for="teacher in teachers">
                <div class="card mt-3">
                    <router-link :to="{name:'ShowTeacher',params:{teacherId:teacher.id}}" class="card-body">
                        <h3 class="card-title">{{teacher.Имя}}</h3>
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
            teachers:[],
            errored:false,
            loading:true
        }
    },
    mounted() {
        axios.get('/api/Teacher')
            .then(responce=>{
                this.teachers = responce.data.data
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



