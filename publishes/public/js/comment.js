let uploadFile = (file, callback) => {
    return callback('https://www.gstatic.cn/gsx/express_apple-touch-icon.png');
};

let embedImage = (url, uuid) => {
    console.log(url, uuid);
    $dom = $('<img/>');
    $dom.css({
        width: '40px',
        height: 'auto',
        marginRight: '5px',
    });
    $dom.attr('src', url);
    $('.' + uuid + ' .file-list').append($dom);
    $('.' + uuid).removeClass('hide');
};

(function () {
    $('.panel-comment').on('click', '.comment-reply-link', function () {
        let comment = $('.comment-reply.comment-' + $(this).attr('data-comment-id'));

        comment.toggleClass('hide');
        comment.find('textarea').focus();
        return false;
    });
    if (location.hash.substr(1, 8) == 'comment-') {
        $(location.hash).addClass('bg-warning');
    }

    $('.panel-comment').on('change', '.form-comment-create input[type="file"]', function (event) {
        let files = event.currentTarget.files;
        $(files).each((i, file) => {
            uploadFile(file, (url) => {
                embedImage(url, $(this).attr('data-class'))
            });
        });
    });
    $('.panel-comment').on('paste', '.form-comment-create textarea', function (event) {
        let files = event.originalEvent.clipboardData.files;
        $(files).each((i, file) => {
            uploadFile(file, (url) => {
                embedImage(url, $(this).attr('data-class'))
            });
        });
    });
})()