<template>
    <div class="conteiner">
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">Имя</label>
                <input type="text" class="form-control" id="firstName" v-model="students.Имя" >
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>


            <div class="col-12">
                <label for="email" class="form-label">Email<span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="col-12">
                <label for="address" class="form-label">Адрес</label>
                <input type="text" class="form-control" id="address" v-model="students.Адрес">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="col-md-3">
                <label for="course_name" class="form-label">Курс</label>
                <input type="text" class="form-control" id="course_name" v-model="students.Название_курса">
                <div class="invalid-feedback">
                    Zip code required.
                </div>
            </div>
            <div class="col-md-3">
                <label for="teacher" class="form-label">Учитель</label>
                <input type="text" class="form-control" id="teacher" v-model="students.Учитель">
                <div class="invalid-feedback">
                    Zip code required.
                </div>
            </div>
            <div class="col-md-3">
                <label for="Grade" class="form-label">Оценки</label>
                <input type="text" class="form-control" id="Grade" v-model="students.Оценки">
                <div class="invalid-feedback">
                    Zip code required.
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
        'studentId'
    ],
    data(){
        return{
            students:[],
            errored:false,
            loading:true
        }
    },
    methods:{
        saveName(){
            axios.post('/api/Students/'+ this.studentId,{
                _method:'PUT',
                students:this.students,
            })
                .then(responce=>{
                    console.log(responce)
                    this.students = responce.data.data
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
        axios.get('/api/Students/'+ this.studentId)
            .then(responce=>{
                console.log(responce)
                this.students = responce.data.data
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

