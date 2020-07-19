import axios from 'axios';

const client = axios.create({
    baseURL: '/api/v1/',
});

export default {
    getCategory() {
        return client.get('category');
    },
    getSampah(page) {
        return client.get(`sampah?page=${page}`);
    },
    getSampahByID(id) {
        return client.get(`sampah/edit/${id}`);
    },
    storeSampah(data) {
        return client.post('sampah', data);
    },
    updateSampah(id, data) {
        return client.put(`sampah/update/${id}`, data);
    },
    deleteSampah(id) {
        return client.delete(`sampah/destroy/${id}`);
    }
};