$(document).ready(function () {
    $('.user-item').hover(function () {
        $(this).css('background-color', 'red')
    }, function () {
        $(this).css('background-color', 'white')
    });

    $('#search-user').keyup(function () {
        let input = $(this).val();
        let origin = location.origin;

        //xu ly ajax -> ajax cua jquery

        $.ajax({
            url: origin + '/admin/users/search',
            method: 'GET',
            data: {
                keyword: input
            },
            success: function (res) {
                //su dung jquery de xu ly va cap nhat
                let html = '';
                for (let i = 0; i < res.length; i++) {
                    html += '<tr>';
                    html += '<td>';
                    html += i + 1;
                    html += '</td>';
                    html += '<td>';
                    html += res[i].name;
                    html += '</td>';
                    html += '<td>';
                    html += res[i].email;
                    html += '</td>';
                    html += '<td>';
                    html += '';
                    html += '</td>';
                    html += '</tr>';
                }
                $('#users-list').html(html)
            },
            error: function (error) {

            }
        })
    })
})
