<template>
    <div class="conteiner">
        <div class="row g-3">
            <div class = "col-sm-6">
                <label for="name" class = "form-label">Название</label>
                <input type="text" class="form-control" id="name" v-model="course.Название">
            </div>

            <div class="col-12">
                <label for="Teacher" class="form-label">Учитель</label>
                <input type="email" class="form-control" id="Teacher" v-model="course.Учитель">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="col-12">
                <label for="Students" class="form-label">Студенты</label>
                <input type="email" class="form-control" id="Students" v-model="course.Студенты">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
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
    props:[
        'courseId',

    ],
    data(){
        return{
            course:[],
            students:[],
            errored:false,
            loading:true
        }
    },
    methods:{
        saveName(){
            axios.post('/api/Courses/'+ this.courseId,{
                _method:'PUT',
                course:this.course,
            })
                .then(responce=>{
                    console.log(responce)
                    this.course = responce.data.data
                })
                .catch(error =>{
                    console.log(error)
                    this.errored = true
                })
                .finally(()=>{
                    this.loading = false
                })
        }
    },
    mounted() {
        axios.get('/api/Courses/'+ this.courseId)
            .then(responce=>{
                console.log(responce)
                this.course = responce.data.data
                this.students = responce.data.data
                console.log(responce.data.data.Студенты)
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


