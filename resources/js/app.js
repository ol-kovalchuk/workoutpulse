import './bootstrap';
import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import WorkoutProgramsListComponent from './components/WorkoutProgramsListComponent.vue';

const app = createApp({});

app.component('workout-programs', WorkoutProgramsListComponent);
app.mount('#workout-list');




