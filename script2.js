const modal = document.getElementById('paymentgatewayModal');
const backdrop = document.getElementById('paymentgatewayModalBackdrop');
const closeBtn = document.getElementById('payment-gateway-modal-close-btn');

closeBtn.addEventListener('click', closeModal);
backdrop.addEventListener('click', closeModal);

function openModal() {
    backdrop.classList.add('payment-gateway-modal-show-backdrop');
    modal.classList.add('payment-gateway-modal-show');

    setTimeout(() => {
        backdrop.classList.add('payment-gateway-modal-show-backdrop-permenent');
        modal.classList.add('payment-gateway-modal-show-permenent');
    }, 150);
}

function closeModal() {
    backdrop.classList.add('payment-gateway-modal-remove-backdrop');
    modal.classList.add('payment-gateway-modal-remove');

    setTimeout(() => {
        backdrop.classList.remove('payment-gateway-modal-show-backdrop');
        backdrop.classList.remove('payment-gateway-modal-show-backdrop-permenent');
        backdrop.classList.remove('payment-gateway-modal-remove-backdrop');
        modal.classList.remove('payment-gateway-modal-show');
        modal.classList.remove('payment-gateway-modal-show-permenent');
        modal.classList.remove('payment-gateway-modal-remove');
    }, 150);
}

function clearAll() {
    closeBtn.removeEventListener('click', closeModal);
    backdrop.removeEventListener('click', closeModal);
}