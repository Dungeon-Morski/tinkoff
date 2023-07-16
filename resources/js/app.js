import './bootstrap';
import $ from 'jquery'

let passwordFields = document.querySelectorAll('.password_eye');

passwordFields.forEach(function (element) {
    element.addEventListener("click", function (event) {

        let input = event.target.closest(".password").children[0];

        if (input.getAttribute('type') === 'password') {
            input.setAttribute("type", "text")
            event.target.closest(".password_eye").children[0].classList.add('hidden')
            event.target.closest(".password_eye").children[1].classList.remove('hidden')

        } else {
            input.setAttribute("type", "password")
            event.target.closest(".password_eye").children[0].classList.remove('hidden')
            event.target.closest(".password_eye").children[1].classList.add('hidden')
        }
    })
});

//loader
window.addEventListener('load', function () {

    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-56980351-1', 'auto');
    ga('send', 'pageview');

    $('#loading').fadeOut('slow');

});





