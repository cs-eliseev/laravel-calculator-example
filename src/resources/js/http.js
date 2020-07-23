'use strict';

import Axios from 'axios';

const axiosInstance = Axios.create({
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    }
});

axiosInstance.interceptors.response.use(
    response => {
        return response;
    },
    error => {
        let message,
            errorStatus = {
                400: 'Срок действия ключа безопасности истек. Пожалуйста перезагрузите страницу',
                401: 'Время сессии истекло',
                502: 'Ошибка сети',
                503: 'Сервис временно недоступен, попробуйте ещё раз позже',
                500: 'Упс. Что-то пошло не так',
            };

        switch (true) {
            case error.response.status === 422:
                message = error.response.data.errors;
                break;
            case error.response.status === 401:
                location.reload();
                break;
            case error.response.status === 500 && error.response.data.data != undefined:
                message = '[' + error.response.data.data.code + '] ' + error.response.data.data.message;
                break;
            case typeof errorStatus[error.response.status] != undefined:
                message = errorStatus[error.response.status];
                break;
            case error.response.data.data != undefined:
                message = '[' + error.response.data.data.code + '] ' + error.response.data.data.message;
                break;
            default:
                message = 'Неизвестная ошибка';
                break;
        }

        return Promise.reject(message);
    });

export default axiosInstance;
