export default function addonLibrary() {
    $(".library__one").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: ".album__slider",
    });
    $(".album__slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: ".library__one",
        dots: false,
        arrows: false,
        focusOnSelect: true,
        vertical: true,
        responsive: [
            {
                breakpoint: 765,
                settings: {
                    vertical: false,
                },
            },
        ],
    });
}
