<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <router-link :to="{name:'courses'}" class="navbar-brand">Курсы</router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link :to="{name:'teachers'}" class="nav-link">Учителя</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name:'student'}" class="nav-link">Студенты</router-link>
                        </li>
                        <li class="nav-item">

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="conteiner">
            <p>

            </p>
            <div>
                <router-view></router-view>
            </div>
            <h1>

            </h1>
        </div>
    </div>
</template>
<script>

export default {

}
</script>
