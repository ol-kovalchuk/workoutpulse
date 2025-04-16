<template>
    <div class="workout-programs-list flex justify-center">
        <ul class="grid grid-cols-2 text-center mt-12 gap-8">
            <li class="border h-36 w-40 bg-[#82572C] text-white hover:bg-[#593C1E] rounded-2xl">
                <a href="#" class="block w-full h-full  py-14 ">Pushups</a>
            </li>
            <li class="border h-36 w-40 bg-[#9966CC] text-white hover:bg-[#7A49A6] rounded-2xl">
                <a href="#" class="block w-full h-full  py-14 ">Pullups</a>
            </li>
            <li class="border h-36 w-40 bg-[#557C99] text-white hover:bg-[#375062] rounded-2xl">
                <a href="#" class="block w-full h-full  py-14 ">Squats</a>
            </li>
            <li class="border h-36 w-40 bg-[#40826D] text-white hover:bg-[#255447] rounded-2xl">
                <a href="#" class="block w-full h-full  py-14 ">Abs training</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('List rendered');
        }
    }
</script>
