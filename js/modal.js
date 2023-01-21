const contactModal = document.querySelector(".contact-us-modal-wrapper");
const openModalBtn1 = document.querySelector("#open-modal1");
const openModalBtn2 = document.querySelector("#open-modal2");
const sendFormBtn = document.querySelector('.send-form')
const requestHasBeenSent = document.querySelector('.request-has-been-sent');

openModalBtn1.addEventListener('click', () => {
    contactModal.style.display = "block"
})

openModalBtn2.addEventListener('click', () => {
    contactModal.style.display = "block"
})

window.onclick = (e) => {
    if (e.target == contactModal){
        contactModal.style.display = "none";
    }
}

sendFormBtn.addEventListener('click', () => {
    requestHasBeenSent.style.transform = "translateX(0)"
    setTimeout(() => requestHasBeenSent.style.transform = "translateX(200%)", 1500)
})