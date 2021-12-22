import Dashboard from './Components/Dashboard';

Statamic.booting(() => {
    Statamic.$components.register('statamic-autoreply-dashboard', Dashboard);
});
