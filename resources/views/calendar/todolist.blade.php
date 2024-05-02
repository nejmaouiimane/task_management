@extends('layouts.index')
@section('content')
    <div class="ml-[15vw] ">
        <div class="bg-white">
            <h2>This is To Do List</h2>
        </div>
        {{--  --}}
        <div class="flex flex-wrap p-6 gap-6">
            <div class="w-[19vw] h-[50vh] bg-blue-100 rounded-md">
                <h2 class="text-xl text-center p-3 border-b-4 border-white">TO DO </h2>
                <div class=" hover:bg-blue-50 rounded-md m-2 p-2 ">
                    <i class="fa-solid fa-plus"></i>
                    <a id="clickMe" type="button" class="no-underline text-black text-lg" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" href="">add a task</a>
                </div>
                <div class="h-fit relative pb-2 px-4 bg-blue-100 rounded-md">
                    @foreach ($tasks as $task)
                        <p class=" rounded-md px-6  py-2 bg-blue-50 "> {{ $task->task }}
                        <div class="absolute gap-2 right-10 ">
                            {{-- delete --}}
                            <form action="{{ route('task.delete', $task) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="fa-solid fa-trash flex "> </button>

                            </form>

                            {{-- update --}}
                            <button id="click" type="button" class="fa-solid fa-pen  text-black text-lg"
                                data-bs-toggle="mymodal" data-bs-target="#tasks{{ $task->id }}" href=""></button>
                            {{-- modal --}}

                            <div class="mymodal fade" id="#tasks{{ $task->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">ADD YOUR TASK</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="mymodal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body ">
                                            <form action="{{ route('task.update', $task) }}" method="post">
                                                @csrf
                                                @method("PUT")
                                                <div
                                                    class="w-[100%] h-[35vh] flex flex-col gap-2 p-3 bg-blue-100 rounded-md">
                                                    <input value="{{ old("task",$task->task) }}" class="py-2 px-4 rounded-md" name="task"
                                                        placeholder="insert a task" type="text">
                                                    <input value="{{ old("description",$task->description) }}" class="py-2 px-4 rounded-md" name="description"
                                                        placeholder="insert the description" type="text">
                                                    <input value="{{ old("time",$task->time) }}" class="py-2 px-4 rounded-md" name="task_timing"
                                                        placeholder="insert the timing" type="time">
                                                    <button type="submit"
                                                        class="py-2 rounded-md bg-blue-300">submit</button>
                                                </div>
                                            </form>


                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{--  --}}
                        </div>
                        </p>
                    @endforeach
                </div>


            </div>
            <div class="w-[19vw] h-[50vh] bg-blue-100 rounded-md">
                <h2 class="text-xl text-center p-3 border-b-4 border-white ">DOING</h2>
            </div>
            <div class="w-[19vw] h-[50vh] bg-blue-100 rounded-md">
                <h2 class="text-xl text-center p-3 border-b-4 border-white ">DONE</h2>
            </div>
            {{--  --}}
            {{-- <form  action="{{ route('task.store') }}" method="post" >
                @csrf
                <div class="w-[19vw] h-[50vh] flex flex-col gap-2 p-3 bg-blue-100 rounded-md">
                <input class="py-2 rounded-md" name="task" placeholder="insert a task" type="text">
                <input class="py-2 rounded-md" name="description" placeholder="insert the description" type="text">
                <input class="py-2 rounded-md" name="task_timing" placeholder="insert the timing" type="time">
                <button type="submit" class="py-2 rounded-md bg-blue-300">submit</button>
                </div>
            </form> --}}

            @include('calendar.components.modal')
            {{--  --}}
        </div>


    </div>
@endsection
