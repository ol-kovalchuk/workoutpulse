import { createRoot } from "react-dom/client";
import WorkoutProgramsList from './components/WorkoutProgramsList';

const element = document.querySelector('#workout-list');
if (element) {
    try {
        const routes = JSON.parse(element.dataset.routes);
        createRoot(element).render(<WorkoutProgramsList routes={routes} />);
    } catch (error) {
        console.error('Failed to parse routes JSON:', error);
        console.log('Raw value:', element.dataset.routes);
    }
}
