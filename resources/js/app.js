/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    data() {
        return {
            projectName: "Linkerr",
            linkInput: "",
            shortLinkInput: "",
            siteLink: 'http://127.0.0.1:8000',
            siteLink2: 'https://stackoverflow.com',
            regexp: new RegExp(/^(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}$|^https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})$/gi)

        }
    },
    methods: {
        makeLinkShorter() {
            this.linkInput = this.linkInput.replace(/\s+/gi, ''); 
            if(this.linkInput.length > 4 && this.regexp.test(this.linkInput)){
                const data = new URLSearchParams();
                data.append('link', this.linkInput);
                fetch(this.siteLink + "/api/createLink", {method: 'POST', mode:'cors', body: data}).then(gotData => gotData.json())
                .then(response => {
                    this.shortLinkInput = this.siteLink2 + '/' + response?.shorted;
                }).catch(error => {
                    console.log(error);
                });
            }
        },
        copy() {
            this.$refs.clone.focus();
            document.execCommand('copy');
        }
    }
});