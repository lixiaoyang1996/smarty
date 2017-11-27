function changeStat(obj,id) {
    $.ajax({
        type: 'POST',
        url: 'bookList.php?controller=book&method=changeStat',
        data: {'id': id},
        success: function (response) {
            if (response == 0) {
                $(obj).removeClass('btn-success btn-warning').addClass('btn-warning').text('禁用');
            } else if (response == 1) {
                $(obj).removeClass('btn-success btn-warning').addClass('btn-success').text('激活');
            }
        }
    });
}