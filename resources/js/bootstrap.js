import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Configure CSRF token
const token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
    console.log('CSRF token configured:', token.content);
} else {
    console.error('CSRF token not found in page head');
}

// Also set up interceptors for better error handling
window.axios.interceptors.response.use(
    response => response,
    error => {
        if (error.response?.status === 419) {
            console.error('CSRF token mismatch - please refresh the page');
        }
        return Promise.reject(error);
    }
);
