<template>
    <div>
        <AppLayout>
    <template  #content>
        <div class="col-lg-12">

    <div class="form-group">
        <form action="{{ route("todo.store") }}" v-model="name.ttitle" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Id</label>
              <input type="Text" class="form-control" id="id" >
            </div>
           <div class="mb-4">
              <label for="" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" >
            </div>
            <label for="e" class="form-label">Age</label>
              <input type="number" class="form-control" name="age">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <div class="col-lg-12">
        <div >
            <table class="table table-dark">
                <thead>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </thead>
                <tbody>
                    <tr v-for="(task,key) in task_list">
            
                    <th scope="row">{{ $key++ }}</th>
                   <td >{{ $task->name }}</td>
                   <td>{{ $task->age }}</td>
                   <td>
                    <span v-if="name.done==0" class="badge bg-warning">
                            active
                        </span>
                
                    <span v-if="name.done==0" class="badge bg-warning">
                            inactive
                        </span>
                
                   </td>
                   <td>
                    <a href="{{ route('todo.delete',$task->id) }}" class="btn btn-danger"><i class="fa-duotone fa-trash-can"></i></a>
                    <a href="{{ route('todo.update',$task->id) }}" class="btn btn-success"><i class="fa-thin fa-person"></i></a>
                </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
    </div>
</div>
       
    </template>
</AppLayout>

    </div>
</template>

<script>
import AppLayout from '@/Layouts/App.vue'
export default{
    components:{
        AppLayout
    },
    props:{
        tasks:Array
    
    },
    setup(props) {
        const tasks=computed( ()=>usePage.propsvalue.tasks);
        return{
            tasks
        }
    },
    data(){
        return{ 
            task:{
                title:''
            },
            task_list:[],
            name:
{
    title:''
}        }
    },
    beforeMount() {
        this.task_list=this.tasks;
    },
    method:{
        async taskStore(){
         const tasks=(   await axios.post(route('student.store').this.task)).data
            this.task==asks;
        }
    }

}
</script>

<style lang="scss" scoped>

</style>