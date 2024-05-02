<!-- Button trigger modal -->
<button id="clickMe" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD YOUR TASK</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form  action="{{ route('task.store') }}" method="post" >
                    @csrf
                    <div class="w-[100%] h-[35vh] flex flex-col gap-2 p-3 bg-blue-100 rounded-md">
                    <input class="py-2 px-4 rounded-md" name="task" placeholder="insert a task" type="text">
                    <input class="py-2 px-4 rounded-md" name="description" placeholder="insert the description" type="text">
                    <input class="py-2 px-4 rounded-md" name="task_timing" placeholder="insert the timing" type="time">
                    <button type="submit" class="py-2 rounded-md bg-blue-300">submit</button>
                    </div>
                </form>
    

            </div>

        </div>
    </div>
</div>
