$(document).ready(function() {
    $('.file_drag_area').on('dragover', function() {
        $(this).addClass('file_drag_over');
        return false;
    })
    $('.file_drag_area').on('dragleave', function() {
        $(this).removeClass('file_drag_over');
        return false;
    })

    $('.file_drag_area').on('drop', function(e) {
        e.preventDefault();
        $(this).removeClass('file_drag_over')
        var formData = new FormData();
        var files_lists = e.OriginalEvent.dataTransfer.files;
        // console.log(files_lists);

        for (var i = 0; i < files_lists.length; i++) {
            formData.append('file[]', files_lists[i]);
        }

        // console.log(formData);
        $.ajax({
            url: 'upload.php',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $('.uploads').html(data)
            }
        })
    })



})