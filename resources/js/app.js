import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { i18nVue } from 'laravel-vue-i18n'

const app = document.querySelector("#app");

const a = app.dataset.page; 
createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(i18nVue, {
          lang: JSON.parse(a).props.locale,    
          resolve: async lang => {
              const langs = import.meta.glob('../../lang/*.json');
              return await langs[`../../lang/${lang}.json`]();
          },
    
      })
      .use(plugin)
      .mount(el)
  },
})


