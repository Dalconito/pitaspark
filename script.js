document.getElementById('whatsappIcon').addEventListener('click', function() {
    document.querySelector('.chatbox-container').style.display = 'block';
});

document.getElementById('closeChat').addEventListener('click', function() {
    document.querySelector('.chatbox-container').style.display = 'none';
});

document.getElementById('sendBtn').addEventListener('click', function() {
    var message = document.getElementById('chatInput').value;
    if (message) {
        var whatsappUrl = 'https://wa.me/+5511983506830?text=' + encodeURIComponent(message);
        window.open(whatsappUrl, '_blank');
    }
});

window.onscroll = function() {
    var scrollTopBtn = document.getElementById('scrollTopBtn');
    var styletop = document.getElementById('whatsappIcon');

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopBtn.style.display = 'block';
        styletop.style.bottom = '250px';
    } else {
        scrollTopBtn.style.display = 'none';
        styletop.style.bottom = '200px';
    }
};


document.getElementById('scrollTopBtn').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});