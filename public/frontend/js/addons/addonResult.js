export default function slideResult() {
    $(".result").slick({
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 410,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
}
