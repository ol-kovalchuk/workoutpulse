import React, { useState } from "react";
import { createRoot } from "react-dom/client";

const PushupsProgram = () => {
    const [level, setLevel] = useState(null);
    const [reps, setReps] = useState('');
    const [submittedReps, setSubmittedReps] = useState(null);

    const handleLevelSelect = (selectedLevel) => {
        setLevel(selectedLevel);
        setReps('');
        setSubmittedReps(null);
    }

    const handleRepsChange = (e) => {
        setReps(e.target.value);
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        setSubmittedReps(reps);
    }

    return (
        <>
            <h2 className="text-xl">Select a pushups level:</h2>
            <section>
                <h3 className="my-8">
                    <a href="#" onClick={() => handleLevelSelect('Beginner')}
                        className="border px-5 py-1 rounded-md bg-[#94A3C0] text-white hover:bg-[#60697C]">Beginner</a>
                </h3>
                <h3 className="my-8">
                    <a href="#" onClick={() => handleLevelSelect('Intermediate')}
                        className="border px-5 py-1 rounded-md bg-[#5F9EA0] text-white hover:bg-[#507A7E]">Intermediate</a>
                </h3>
                <h3 className="my-8">
                    <a href="#" onClick={() => handleLevelSelect('Advanced')}
                        className="border px-5 py-1 rounded-md bg-[#505081] text-white hover:bg-[#272757]">Advanced</a>
                    </h3>
            </section>

            {level && (
                <section>
                    <h3 className="text-xl">{level} pushups program</h3>
                    <p>
                        {level === 'Beginner' && 'Do 10 pushups.'}
                        {level === 'Intermediate' && 'Do 20 pushups.'}
                        {level === 'Advanced' && 'Do 30 pushups.'}
                    </p>

                    <form onSubmit={handleSubmit}>
                        <label className="grid grid-cols-2 border-1 border-[#4682A1] my-6 p-2 rounded-xl mr-[70%]">
                            Enter Reps Done:
                            <input
                                type="number"
                                value={reps}
                                onChange={handleRepsChange}
                                min="0"
                                required
                                class="border-1 border-[#366899] bg-[#F2F2F2] col-span-1"
                            />
                        </label>
                        {submittedReps !== null && (<p><i>You did {submittedReps} pushups!</i></p>)}
                        <button type="submit" className="mt-2 px-6 py-2 rounded-md bg-[#68BA7F] text-white
                            border-[#2E6F40] hover:bg-[#2E6F40]">Submit</button>
                    </form>


                        <div>

                        </div>

                </section>

            )}
        </>
    );
}

export default PushupsProgram;

const pushupsEl = document.querySelector('#pushups');
if (pushupsEl) {
    createRoot(pushupsEl).render(
    <React.StrictMode>
        <PushupsProgram />
    </React.StrictMode>
    );
}
