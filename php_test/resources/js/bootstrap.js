import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const token = document.head.querySelector('meta[name="csrf-token"]').content;

// Set the CSRF token as a common header in Axios
axios.defaults.headers.common['X-CSRF-TOKEN'] = token;
