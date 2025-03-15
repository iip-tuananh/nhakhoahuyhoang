const height = () => {
    let heightVideo = $(".video")[0].offsetHeight;
    let classIntroduceItem = $(".introduce__item");
    classIntroduceItem.css("max-height", heightVideo);
};
const resizeHeight = () => {
    $(window).resize(function () {
        height();
    });
};
const slideVideo = () => {
    $(".video__slide").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".album__slide",
    });
    $(".album__slide").slick({
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".video__slide",
        dots: false,
        focusOnSelect: true,
    });
};

const createIYoutube = () => {
    $(".video").on("click", function () {
        let id = $(this).attr("data-id");

        if (id) {
            $(".if__youtube").toggleClass("active");
            let tagSrc = `https://www.youtube.com/embed/${id}?autoplay=1`;
            $(".if__youtube").html(`
            <iframe
                src="${tagSrc}"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer;
                autoplay;
                clipboard-write;
                encrypted-media;
                gyroscope;
                picture-in-picture"
                allowfullscreen>
                </iframe>
            `);
        }
    });
    $(".album__box").on("click", function () {
        $(".if__youtube").removeClass("active");
    });
};

export { resizeHeight, height, slideVideo, createIYoutube };
