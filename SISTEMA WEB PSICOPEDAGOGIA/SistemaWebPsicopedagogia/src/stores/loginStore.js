import { defineStore } from 'pinia';
import axios from 'axios';
import Cookies from 'js-cookie';
import {RutaApi} from '@/assets/apiConfig.js'

export const useLoginStore = defineStore({
    id: 'login',
    state: () => ({
        authToken: null,
        id: null,
        nombre: null,
    }),
    actions: {
        async loginUser(credentials) {
            console.log(credentials);
            const response = await axios.post(`${RutaApi}auth/login`, credentials,{
                headers: {
                    'Content-Type': 'application/json',
                },
            });
            console.log(response);
            if (response.data.code === '200') {
                this.authToken = response.data.response.authToken;
                this.id = response.data.response.id;
                this.nombre = response.data.response.nombre;
                const expirationDate = new Date();
                expirationDate.setTime(expirationDate.getTime() + 4 * 60 * 60 * 1000); // 4 horas en milisegundos
                Cookies.set('authToken', this.authToken, { expires: expirationDate });
                Cookies.set('id', this.id, { expires: expirationDate });
                Cookies.set('nombre', this.nombre, { expires: expirationDate });

                console.log(Cookies.get('authToken'));

            }
            return response.data;
        },
        logoutUser() {
            this.authToken = null;
            this.id = null;
            this.nombre = null;
            Cookies.remove('authToken');
            Cookies.remove('refreshToken');
            Cookies.remove('id_user');
            Cookies.remove('name');
        },

    }
});
