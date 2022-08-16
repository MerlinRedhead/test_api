import { createApp } from 'vue'
import App from './components/App'
import courses from "./components/courses/courses";
import teachers from "./components/teacher/teachers";
import student from "./components/students/student"
import ShowStudent from "./components/students/ShowStudent"
import ShowTeacher from "./components/teacher/ShowTeacher"
import ShowCourse from "./components/courses/ShowCourse"

import { createWebHistory, createRouter } from "vue-router";

const app = createApp({})

const routes = [
    {
        path: "/",
        name: "courses",
        component: courses,
    },
    {
        path: "/teachers",
        name: "teachers",
        component: teachers,
    },
    {
        path: "/student",
        name: "student",
        component: student,
    },
    {
        path: "/student/:studentId",
        name: "ShowStudent",
        component: ShowStudent,
        props:true
    },
    {
        path: "/Teachers/:teacherId",
        name: "ShowTeacher",
        component: ShowTeacher,
        props:true
    },
    {
        path: "/Courses/:courseId",
        name: "ShowCourse",
        component: ShowCourse,
        props:true
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});



app.component('App', App)

app.mount('#app')

export default router;
