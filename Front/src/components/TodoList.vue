<script>
import axios from 'axios';

export default {
    name: 'TodoList',
    data() {
        return {
            todoArray: [],
        };
    },
    mounted() {

        axios.get('http://localhost/php-todo-list-json/Back/').then((res)=> {
            this.todoArray = res.data;

        })
        .catch(err => console.log(err));
        
    }
}


</script>

<template>
  <h1> La mia task personale</h1>
  <ul>
    <li v-for="(task, i) in todoArray" :key="i">
        {{ task.task }}
    </li>
  </ul>
</template>

<style scoped>
</style>
