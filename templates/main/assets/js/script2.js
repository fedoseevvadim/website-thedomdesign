var el = document.getElementById('slproject-wrap-image'),
     start = 1 + parseInt(Math.random() * 5, 12),
     k = start;
setInterval(function() {
     if(++k >= start + 3) k = start;
     el.style.backgroundImage = "url('images/slider/slide-0" + k + "p.jpg')"
}, 14000);