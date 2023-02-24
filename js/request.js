import { CHAT_ID, TOKEN } from "./.secret/token.js";

const URL_API = `https://api.telegram.org/bot${ TOKEN }/sendMessage`;

document.getElementById('request-form').addEventListener('submit', function(e) {
    e.preventDefault();

    let message = `<b>Заявка с сайта!</b>\n`;
    message += `<b>Отправитель: </b> ${ this.name.value } ${ this.surname.value }\n`;
    message += `<b>Почта: </b> ${ this.email.value }\n`;
    message += `<b>Проект: </b> ${ this.message.value }`;

    axios.post(URL_API, {
        chat_id: CHAT_ID,
        parse_mode: 'html',
        text: message,
    });
});