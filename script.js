(function () {
    var scrollY = function () {
        var supportPageOffset = window.pageXOffset !== undefined;
        var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
        return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
    }
    console.log(scrollY())
    var element = document.querySelector('.menu')
    var top = element.getBoundingClientRect().top + scrollY()
    var onScroll = function () {
        if (scrollY() > top) {
            element.classList.add('fixed')
            /*
            ou element.style.position = "fixed"
            element.style.top = "0px"
            */
        }
        else {
            element.classList.remove('fixed')
        }
    }
    window.addEventListener('scroll', onScroll)
})()