import Card from './components/Card.vue';

Nova.booting((app, store) => {
  app.component('nova-text-card', Card);
});
