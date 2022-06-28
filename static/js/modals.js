const modalLinks = document.querySelectorAll('.modal-link');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;

const timeout = 800;

if (modalLinks.length > 0){
    for (let index = 0; index < modalLinks.length; index++){
        const modalLink = modalLinks[index];
        modalLink.addEventListener("click", function (e){
            const modalName = modalLink.getAttribute('href').replace('#', '');
            const curentModal = document.getElementsById(modalName);
            modalOpen(currentModal);
            e.preventDefault();
        } )
    }
}

const modalCloseIcon = document.querySelectorAll('.close-modal');
if (modalCloseIcon.length > 0) {
    for(let index=0; index < modalCloseIcon.length; index++) {
        const el = modalCloseIcon[index];
        el.addEventListener('click', function(e) {
            modalClose(el.slosest('.modal'));
            e.preventDefault();
        });
    }
}

function modalOpen(curentModal) {
    if (curentModal && unlock) {
        const modalActive = document.querySelector('.modal.open');
        if (modalActive) {
            modalClose(modalActive, false);
        } else {
            bodyLock();
        }
        curentModal.classList.add('open');
        currentModal.addEventListener("click", function (e) {
            if (!e.target.closest('.modal_content')){
                modalClose(e.target.closest('.modal'));
            }
        });
    }
}

function modalClose(modalActive, doUnlock = true) {
    if (unlock) {
        modalActive.classList.remove('open');
        if (doUnlock) {
            bodyUnlock();
        }
    }
}

function bodyLock() {
    const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px'; 

    if (lockPadding.length > 0) {
        for (let index = 0; index < lockPadding.length; index++) {
            const el = lockPadding[index];
            el.style.paddingRight = lockPaddingValue;
        }
    }
    body.style.paddingRight = lockPaddingValue;
    body.classList.add('lock');

    unlock = false;
    setTimeout(function() {
        unlock = true;
    }, timeout);
}

function bodyUnLock() {
    const lockPaddingValue = window.innerWidth - document.querySelector('.all').offsetWidth + 'px'; 

    setTimeout(function() {
        for (let index = 0; index < lockPadding.length; index++) {
            const el = lockPadding[index];
            el.style.paddingRight = '0px';
        }
        body.style.paddingRight = 0;
        body.classList.revome('lock');
    }, timeout);

    unlock = false;
    setTimeout(function() {
        unlock = true;
    }, timeout);
}
