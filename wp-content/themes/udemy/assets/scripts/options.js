/**
 * Created by bobtran on 23/01/2017.
 */
jQuery(function ($) {
    var frame = wp.media({
        title: 'Select or upload logo',
        button: {
            text: 'Use this media',
        },
        multiple: false
    });

    $('#ju_uploadLogoImgBtn').click(function (e) {
        e.preventDefault();
        frame.open();
    });

    frame.on('select', function () {
        var attachment = frame.state().get('selection').first().toJSON();

        $('input[name="ju_inputLogoImg"]').val(attachment.url);
    })
});