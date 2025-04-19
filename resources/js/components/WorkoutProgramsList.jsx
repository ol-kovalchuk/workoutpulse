const WorkoutProgramsList = ({routes}) => {
    return (
        <div className="flex justify-center">
            <ul class="grid grid-cols-2 text-center mt-12 gap-8">
                <li className="border h-36 w-40 bg-[#82572C] text-white hover:bg-[#593C1E] rounded-2xl">
                    <a href={routes.pushups} className="block w-full h-full py-14 ">Push-ups</a>
                </li>
                <li className="border h-36 w-40 bg-[#9966CC] text-white hover:bg-[#7A49A6] rounded-2xl">
                    <a href={routes.pullups} className="block w-full h-full py-14 ">Pull-ups</a>
                </li>
                <li className="border h-36 w-40 bg-[#557C99] text-white hover:bg-[#375062] rounded-2xl">
                    <a href={routes.squats} className="block w-full h-full py-14 ">Squats</a>
                </li>
                <li className="border h-36 w-40 bg-[#40826D] text-white hover:bg-[#255447] rounded-2xl">
                    <a href={routes.abs} className="block w-full h-full py-14 ">Abs</a>
                </li>
            </ul>
        </div>
    );

}

export default WorkoutProgramsList;


