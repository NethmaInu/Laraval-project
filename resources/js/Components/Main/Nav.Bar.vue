<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <link class="navbar-brand" ;href="route('dashboard')">Log in</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <link class="nav-link active" aria-current="page" ;href=" route('todo') ">Students</a>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components:{
        Link
    }
}
</script>

<style scoped>

</style>