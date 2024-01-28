<script>
import axios from 'axios';

export default {
    name: 'TodoList',
    data() {
        return {
            todoArray: [],
            newTask: "",
        };
    },
    methods: {
        pushTask() {
            
            const params = {
                task: this.newTask
            };
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            axios.post('http://localhost/php-todo-list-json/Back/pushTask.php', params, config)
                .then(res => {

                    this.todoArray = res.data;
    
                })
                .catch(err => console.log(err));
        }
    },
    mounted() {

        axios.get('http://localhost/php-todo-list-json/Back/getTodo.php').then((res)=> {
            this.todoArray = res.data;

        })
        .catch(err => console.log(err));
        
    }
}


</script>

<template>
  <h1> La mia task personale: {{ todoArray.length }}</h1>

  <form  @submit.prevent="pushTask">
    <input type="text" name="task" placeholder="Nuovo task.." v-model="newTask">
    <input type="submit" value="Invia">
  </form>

  <ul>
    <li v-for="(task, i) in todoArray" :key="i">
        {{ task.task }}
    </li>
  </ul>
</template>

<style scoped>
</style>
