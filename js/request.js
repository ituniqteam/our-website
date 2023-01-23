const TOKEN = "5683799434:AAEx-VK5IQ8rylrk7Jjzu6Jle-oDzxG1vjE";
const CHAT_ID = "-1001730419309";
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