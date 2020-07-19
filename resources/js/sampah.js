import axios from 'axios';

const client = axios.create({
    baseURL: '/api/v1/',
});

export default {
    getCategory() {
        return client.get('category');
    },
    getSampah() {
        return client.get('sampah');
    },
    storeSampah(data) {
        return client.post('sampah', data);
    },
    deleteSampah(id) {
        return client.delete(`sampah/destroy/${id}`);
    }
};