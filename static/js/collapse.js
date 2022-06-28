var coll = document.getElementsByClassName('btn_guilds');
for (let index = 0; index < coll.length; index++) {
    coll[index].addEventListener('click', function() {
        this.classList.toggle('active');
        let content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    })
}